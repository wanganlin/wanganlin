<?php

namespace app\modules\console\filters;

use Yii;
use yii\base\ActionFilter;
use yii\web\Response;

class Authenticate extends ActionFilter
{
    public function beforeAction($action): Response|bool
    {
        $request = Yii::$app->getRequest();
        $response = Yii::$app->getResponse();
        $user = Yii::$app->getUser();

        if ($user->getIsGuest()) {
            $currentUrl = urlencode($request->getAbsoluteUrl());
            return $response->redirect('auth/login?callback=' . $currentUrl);
        }

        // 权限校验 todo

        return parent::beforeAction($action);
    }
}
