<?php

namespace app\modules\auth\controllers;

use yii\web\Request;
use yii\web\Response;

class RegisterController extends BaseController
{
    /**
     * @param Request $request
     * @return string|Response
     */
    public function actionIndex(Request $request): Response|string
    {
        if ($request->isPost) {
            return $this->success('注册成功');
        }

        return $this->render('index');
    }
}
