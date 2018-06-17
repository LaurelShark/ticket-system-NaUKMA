<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'u_id') ?>

    <?= $form->field($model, 'u_name') ?>

    <?= $form->field($model, 'u_surname') ?>

    <?= $form->field($model, 'u_e-mail') ?>

    <?= $form->field($model, 'u_position') ?>

    <?php // echo $form->field($model, 'u_role') ?>

    <?php // echo $form->field($model, 'u_password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
