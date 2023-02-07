<?php

/** @var app\modules\auth\requests\LoginForm $model */
/** @var yii\web\View $this */
/** @var yii\widgets\ActiveForm $form */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = '管理登录';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => false,
    'fieldConfig' => [
        'template' => "{input}\n{error}",
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
    'options' => [
        'class' => 'layui-form',
    ]
]); ?>
<div class="layui-form-item">
    <img class="logo" src="<?= Url::to('/static/admin/images/logo.png') ?>"/>
    <div class="title">CMS Admin</div>
    <div class="desc">企业内容管理系统</div>
</div>
<div class="layui-form-item">
    <?= $form->field($model, 'username')->textInput(['placeholder' => '请输入登录用户名', 'class' => 'layui-input', 'autofocus' => true]) ?>
</div>
<div class="layui-form-item">
    <?= $form->field($model, 'password')->passwordInput(['placeholder' => '请输入登录用户密码', 'class' => 'layui-input']) ?>
</div>
<div class="layui-form-item">
    <?= $form->field($model, 'captcha')->textInput(['placeholder' => '请输入图片验证码', 'class' => 'code layui-input layui-input-inline']) ?>
    <img src="<?= Url::to(['default/captcha']) ?>" class="codeImage"/>
</div>
<div class="layui-form-item">
    <?= Html::submitButton('登 入', ['class' => 'pear-btn pear-btn-success login', 'name' => 'login-button']) ?>
</div>
<?php ActiveForm::end(); ?>
