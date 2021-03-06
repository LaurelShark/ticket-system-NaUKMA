<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RO */

$this->title = $model->ro_id;
$this->params['breadcrumbs'][] = ['label' => 'Ros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ro_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ro_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ro_id',
            'room_id',
            'occupation_id',
        ],
    ]) ?>

</div>
