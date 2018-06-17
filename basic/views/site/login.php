<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>
<form id="login-form" class="form-horizontal" action="/superKekProject/basic/web/index.php?r=login%2Findex" method="post">
<input type="hidden" name="_csrf" value="cXEgP5zjba4QlOiS-wR4YoWt-ZMGUT5XiVuWFcULHWwwIHgSy6AB2ETljPWacx0wvZjI8DETTmfOBKV5kEZ0Mw==">
        <div class="form-group field-loginform-username required has-success">
<label class="col-lg-1 control-label" for="loginform-username">Username</label>
<div class="col-lg-3"><input type="text" id="loginform-username" class="form-control" name="email" autofocus="" aria-required="true" aria-invalid="false"></div>
<div class="col-lg-8"><p class="help-block help-block-error "></p></div>
</div>
        <div class="form-group field-loginform-password required">
<label class="col-lg-1 control-label" for="loginform-password">Password</label>
<div class="col-lg-3"><input type="password" id="loginform-password" class="form-control" name="password" value="" aria-required="true"></div>
<div class="col-lg-8"><p class="help-block help-block-error "></p></div>
</div>
        <div class="form-group field-loginform-rememberme">
<div class="col-lg-offset-1 col-lg-3"><input type="hidden" name="LoginForm[rememberMe]" value="0"><input type="checkbox" id="loginform-rememberme" name="LoginForm[rememberMe]" value="1" checked=""> <label for="loginform-rememberme">Remember Me</label></div>
<div class="col-lg-8"><p class="help-block help-block-error "></p></div>
</div>
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <button type="submit" class="btn btn-primary" name="login-button">Login</button>            </div>
        </div>

    </form>


    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
