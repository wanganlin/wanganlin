<?php

namespace app\controllers;

use yii\web\Request;
use yii\web\Response;
use app\requests\ContactForm;

class IndexController extends BaseController
{
    /**
     * @return array
     */
    public function actions(): array
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex(): string
    {
        return $this->render('index');
    }

    /**
     * @param Request $request
     * @return Response|string
     */
    public function actionContact(Request $request): Response|string
    {
        $model = new ContactForm();
        if ($model->load($request->post()) && $model->contact($this->params['adminEmail'])) {
            $this->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

}
