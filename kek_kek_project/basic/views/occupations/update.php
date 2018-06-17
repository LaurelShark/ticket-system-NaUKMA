<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Occupations */

$this->title = 'Update Occupations: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Occupations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->o_id, 'url' => ['view', 'id' => $model->o_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="occupations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
