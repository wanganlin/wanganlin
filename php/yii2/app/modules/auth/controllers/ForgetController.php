<?php

namespace app\modules\auth\controllers;

use yii\web\Request;
use yii\web\Response;

class ForgetController extends BaseController
{
    /**
     * @param Request $request
     * @return Response|string
     */
    public function actionIndex(Request $request): Response|string
    {
        if ($request->isPost) {
            return $this->success('发送成功');
        }

        return $this->render('index');
    }
}
