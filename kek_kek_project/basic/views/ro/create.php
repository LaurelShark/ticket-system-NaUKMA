<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RoomsOccupations */

$this->title = 'Create Rooms Occupations';
$this->params['breadcrumbs'][] = ['label' => 'Rooms Occupations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rooms-occupations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
