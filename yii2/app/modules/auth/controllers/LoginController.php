<?php

namespace app\modules\auth\controllers;

use app\modules\auth\requests\LoginForm;
use app\modules\auth\services\LoginService;
use app\modules\auth\services\input\LoginInput;
use Exception;
use yii\web\Request;
use yii\web\Response;

class LoginController extends BaseController
{
    /**
     * @param Request $request
     * @return Response|string
     */
    public function actionIndex(Request $request): Response|string
    {
        $loginForm = new LoginForm();

        if ($request->isPost && $loginForm->load($request->post())) {
            if (!$loginForm->validate()) {
                foreach ($loginForm->getFirstErrors() as $error) {
                    return $this->fail(40001, $error);
                }
            }

            try {
                $loginInput = new LoginInput();
                $loginInput->setUsername($loginForm->username);
                $loginInput->setPassword($loginForm->password);
                $loginInput->setRememberMe($loginForm->rememberMe);

                $loginService = new LoginService();
                if ($loginService->login($loginInput)) {
                    return $this->success('登录成功');
                } else {
                    return $this->fail(40001, '登录失败');
                }
            } catch (Exception $exception) {
                return $this->fail($exception->getCode(), $exception->getMessage());
            }
        }

        $loginForm->password = '';
        return $this->render('index', [
            'model' => $loginForm,
            'callback' => urldecode($request->get('callback', '/admin'))
        ]);
    }
}
