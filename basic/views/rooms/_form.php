<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rooms */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rooms-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_naming')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'room_capacity')->textInput() ?>

    <?= $form->field($model, 'room_features')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
