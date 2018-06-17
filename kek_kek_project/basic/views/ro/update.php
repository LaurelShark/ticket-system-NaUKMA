<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RoomsOccupations */

$this->title = 'Update Rooms Occupations: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Rooms Occupations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ro_id, 'url' => ['view', 'id' => $model->ro_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rooms-occupations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
