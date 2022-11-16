<?php

namespace app\modules\auth\controllers;

use yii\web\Controller;

class ForgetController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}
