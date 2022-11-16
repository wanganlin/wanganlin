<?php

namespace app\modules\auth\controllers;

use yii\web\Controller;
use yii\web\Response;

class DefaultController extends Controller
{
    /**
     * @return Response
     */
    public function actionIndex(): Response
    {
        return $this->redirect('auth/login');
    }
}
