<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ROSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ro_id',
            'room_id',
            'occupation_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
