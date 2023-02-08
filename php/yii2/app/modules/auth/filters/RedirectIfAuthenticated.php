<?php

namespace app\modules\auth\filters;

use app\modules\auth\Module;
use Yii;
use yii\base\ActionFilter;
use yii\web\Response;

class RedirectIfAuthenticated extends ActionFilter
{
    public function beforeAction($action): Response|bool
    {
        $response = Yii::$app->getResponse();
        $user = Yii::$app->getUser();

        if (!$user->getIsGuest()) {
            return $response->redirect(Module::RedirectTo);
        }

        return parent::beforeAction($action);
    }
}
