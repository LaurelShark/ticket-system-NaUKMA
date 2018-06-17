<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'u_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_e-mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_role')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'u_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
