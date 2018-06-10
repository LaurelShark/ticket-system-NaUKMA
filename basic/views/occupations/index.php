<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\OccupationsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Occupations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="occupations-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Occupations', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'o_id',
            'o_date',
            'o_starttime',
            'o_endtime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
