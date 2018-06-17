<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Occupations */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="occupations-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'o_date')->textInput() ?>

    <?= $form->field($model, 'o_starttime')->textInput() ?>

    <?= $form->field($model, 'o_endtime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
