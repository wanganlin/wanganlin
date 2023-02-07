<?php

namespace app\modules\auth;

class Module extends \yii\base\Module
{
    /**
     * @var string
     */
    public $controllerNamespace = 'app\modules\auth\controllers';

    /**
     * @var string
     */
    public const RedirectTo = '/console';

    /**
     * @return void
     */
    public function init(): void
    {
        parent::init();

        // custom initialization code goes here
    }
}
