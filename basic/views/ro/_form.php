<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>

    <?= $form->field($model, 'occupation_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
