<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admins */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admins-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_fathname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
