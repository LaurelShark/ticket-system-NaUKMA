<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tickets */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tickets-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->textInput() ?>
    <?  if($model->isNewRecord): ?>
        <? $user = $_SESSION['user'] ?>
        <?= $form->field($model, 'user_id')->hiddenInput(['value'=> $user->u_id])->label(false)?>

    <? else : ?>
        <?= $form->field($model, 'user_id')->hiddenInput(['value'=> $model->user_id])->label(false)?>

    <? endif ?>

           

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'start_time')->textInput() ?>

    <?= $form->field($model, 'end_time')->textInput() ?>

    <?= $form->field($model, 'considered_by')->hiddenInput(['value'=> 1])->label(false) ?>

    
<?  if($model->isNewRecord): ?>
        <?= $form->field($model, 'status')->hiddenInput(['value'=> 'processing...'])->label(false)?>

    <? else : ?>
        <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <? endif ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
