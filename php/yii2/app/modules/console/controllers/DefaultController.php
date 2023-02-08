<?php

namespace app\modules\console\controllers;

use Yii;
use yii\web\Request;
use yii\web\Response;

class DefaultController extends BaseController
{
    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    /**
     * @return Response
     */
    public function actionMenu(): Response
    {
        return $this->asJson([]);
    }

    /**
     * @return Response
     */
    public function actionMessage(): Response
    {
        return $this->asJson([]);
    }

    /**
     * @param Request $request
     * @return string
     */
    public function actionDashboard(Request $request)
    {
        return $this->render('dashboard');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function actionLogout(Request $request): Response
    {
        if ($request->isPost) {
            Yii::$app->user->logout();

            return $this->goHome();
        }

        return $this->goBack();
    }
}
