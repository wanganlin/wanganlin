<?php

namespace app\modules\user\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}
