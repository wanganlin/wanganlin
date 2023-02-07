<?php

namespace app\controllers;

use app\support\JsonResponse;
use Yii;
use yii\web\Controller;
use yii\web\Session;
use yii\web\User;

abstract class BaseController extends Controller
{
    use JsonResponse;

    /**
     * @var array
     */
    protected array $params;

    /**
     * @var Session
     */
    protected Session $session;

    /**
     * @var User
     */
    protected User $user;

    /**
     * @return void
     */
    public function init(): void
    {
        parent::init();

        $this->params = Yii::$app->params;
        $this->session = Yii::$app->getSession();
        $this->user = Yii::$app->getUser();
    }
}
