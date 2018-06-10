<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OccupationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="occupations-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'o_id') ?>

    <?= $form->field($model, 'o_date') ?>

    <?= $form->field($model, 'o_starttime') ?>

    <?= $form->field($model, 'o_endtime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
