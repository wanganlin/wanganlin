<?php

namespace app\modules\auth\controllers;

use yii\web\Response;

class DefaultController extends BaseController
{
    /**
     * @return array
     */
    public function actions(): array
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * @return Response
     */
    public function actionIndex(): Response
    {
        return $this->redirect('auth/login');
    }
}
