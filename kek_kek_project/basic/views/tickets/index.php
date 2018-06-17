<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TicketsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tickets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tickets-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        
        <? if(get_class($_SESSION['user'])=="app\models\Users"): ?>
           <!-- <?echo get_class($_SESSION['user']);?> -->
            <?= Html::a('Create Tickets', ['create'], ['class' => 'btn btn-success']) ?>
        <? endif ?>
    </p>

<?         $adminColumn = [
             'label' => 'sdaf',
             'format' => 'raw',
             'value' => function ($model) {
                 if ($model->status!='approved' && $model->status!='rejected'){
                    $urlRemove = Url::to(['/tickets/remove', 'id' => $model->t_id]);
                    $urlOk = Url::to(['/tickets/ok', 'id' => $model->t_id]);
                    
                    return '<a href="' . $urlRemove . '" class="glyphicon glyphicon-remove"></a>' .
                            '<a href="' . $urlOk . '" class="glyphicon glyphicon-ok"></a>';
                 }else{
                    return '';
                 };
       }];

       $allColumns = [
            ['class' => 'yii\grid\SerialColumn'],

            //'t_id',
            'room_id',
            'user_id',
            'date',
            'start_time',
            'end_time',
           // 'considered_by',
            'status',

            ['class' => 'yii\grid\ActionColumn'],

        ];
if(get_class($_SESSION['user'])=="app\models\Admins"){
    array_push($allColumns, $adminColumn);

}



     ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $allColumns,
    ]); ?>
</div>
