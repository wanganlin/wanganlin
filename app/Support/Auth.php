<?php

namespace App\Support;

use App\Models\AuthRule;
use App\Models\User;

/**
 * 权限认证类
 * 功能特性：
 * 1，是对规则进行认证，不是对节点进行认证。用户可以把节点当作规则名称实现对节点进行认证。
 * $auth=new Auth(); $auth->check('规则名称','用户id')
 * 2，可以同时对多条规则进行认证，并设置多条规则的关系（or或者and）
 * $auth=new Auth(); $auth->check('规则1,规则2','用户id','and')
 * 第三个参数为and时表示，用户需要同时具有规则1和规则2的权限。 当第三个参数为or时，表示用户值需要具备其中一个条件即可。默认为or
 * 3，一个用户可以属于多个用户组(auth_group_access表 定义了用户所属用户组)。我们需要设置每个用户组拥有哪些规则(auth_group 定义了用户组权限)
 * 4，支持规则表达式。
 * 在auth_rule 表中定义一条规则时，如果type为1， condition字段就可以定义规则表达式。 如定义{score}>5 and {score}<100 表示用户的分数在5-100之间时这条规则才会通过。
 * Class Auth
 * @package App\Support
 */
class Auth
{
    /**
     * 认证开关
     * @var bool
     */
    protected bool $auth_on = true;

    /**
     * 认证方式，1为实时认证；2为登录认证。
     * @var int
     */
    protected int $auth_type = 1;

    /**
     * 检查权限
     * @param array|string $name 需要验证的规则列表,支持逗号分隔的权限规则或索引数组
     * @param int $uid 认证用户的id
     * @param int $type 认证方式
     * @param string $mode 执行check的模式
     * @param string $relation 如果为 'or' 表示满足任一条规则即通过验证;如果为 'and'则表示需满足所有规则才能通过验证
     * @return bool 通过验证返回true;失败返回false
     */
    public function check(array|string $name, int $uid, int $type = 1, string $mode = 'url', string $relation = 'or'): bool
    {
        if (!$this->auth_on) {
            return true;
        }

        $authList = $this->getAuthList($uid, $type); //获取用户需要验证的所有有效规则列表
        if (is_string($name)) {
            $name = strtolower($name);
            if (str_contains($name, ',')) {
                $name = explode(',', $name);
            } else {
                $name = [$name];
            }
        }

        $currentRequest = '';
        if ('url' == $mode) {
            $currentRequest = unserialize(strtolower(serialize(request()->path())));
        }

        $list = []; //保存验证通过的规则名
        foreach ($authList as $auth) {
            $query = preg_replace('/^.+\?/U', '', $auth);
            if ('url' == $mode && $query != $auth) {
                parse_str($query, $param); //解析规则中的param
                $intersect = array_intersect_assoc($currentRequest, $param);
                $auth = preg_replace('/\?.*$/U', '', $auth);
                if (in_array($auth, $name) && $intersect == $param) {
                    //如果节点相符且url参数满足
                    $list[] = $auth;
                }
            } elseif (in_array($auth, $name)) {
                $list[] = $auth;
            }
        }

        if ('or' == $relation and !empty($list)) {
            return true;
        }

        $diff = array_diff($name, $list);
        if ('and' == $relation and empty($diff)) {
            return true;
        }

        return false;
    }

    /**
     * 获得权限列表
     * @param $uid
     * @param $type
     * @return array
     */
    protected function getAuthList($uid, $type): array
    {
        static $_authList = []; //保存用户验证通过的权限列表

        $t = implode(',', (array)$type);
        if (isset($_authList[$uid . $t])) {
            return $_authList[$uid . $t];
        }

        if (2 == $this->auth_type && session()->has('AUTH_LIST_' . $uid . $t)) {
            return session('AUTH_LIST_' . $uid . $t);
        }

        //读取用户所属用户组
        $groups = $this->getGroups($uid);

        $ids = []; //保存用户所属用户组设置的所有权限规则id
        foreach ($groups as $g) {
            $ids = array_merge($ids, explode(',', trim($g['rules'], ',')));
        }

        $ids = array_unique($ids);
        if (empty($ids)) {
            $_authList[$uid . $t] = [];
            return [];
        }

        //读取用户组所有权限规则
        $rules = AuthRule::select('condition', 'name')
            ->where('id', 'in', $ids)
            ->where('type', $type)
            ->where('status', 1)
            ->get();

        //循环规则，判断结果。
        $authList = []; //
        foreach ($rules->toArray() as $rule) {
            if (!empty($rule['condition'])) {
                //根据condition进行验证
                $user = $this->getUserInfo($uid); //获取用户信息,一维数组
                $command = preg_replace('/\{(\w*?)\}/', '$user[\'\\1\']', $rule['condition']);

                @(eval('$condition=(' . $command . ')'));
                /** @var $condition */
                if ($condition) {
                    $authList[] = strtolower($rule['name']);
                }
            } else {
                //只要存在就记录
                $authList[] = strtolower($rule['name']);
            }
        }

        $_authList[$uid . $t] = $authList;

        if (2 == $this->auth_type) {
            //规则列表结果保存到session
            session()->put('AUTH_LIST_' . $uid . $t, $authList);
        }

        return array_unique($authList);
    }

    /**
     * 根据用户id获取用户组,返回值为数组
     * @param int $uid 用户 id
     * @return array 用户所属的用户组 array(
     * array('uid'=>'用户id','group_id'=>'用户组id','title'=>'用户组名称','rules'=>'用户组拥有的规则id,多个,号隔开'),
     * ...)
     */
    public function getGroups(int $uid): array
    {
        static $groups = [];

        if (!isset($groups[$uid])) {
            $user = User::find($uid);

            if (empty($user)) {
                $groups[$uid] = [];
            } else {
                $group = $user->roles()->where('status', 1)->get();
                $groups[$uid] = collect($group)->toArray();
            }
        }

        return $groups[$uid];
    }

    /**
     * 获得用户资料
     * @param int $uid
     * @return array
     */
    protected function getUserInfo(int $uid): array
    {
        static $userInfo = [];

        if (!isset($userinfo[$uid])) {
            $user = User::find($uid);
            $userInfo[$uid] = collect($user)->toArray();
        }

        return $userInfo[$uid];
    }
}
