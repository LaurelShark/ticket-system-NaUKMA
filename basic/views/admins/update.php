<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Admins */

$this->title = 'Update Admins: ' . $model->a_id;
$this->params['breadcrumbs'][] = ['label' => 'Admins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->a_id, 'url' => ['view', 'id' => $model->a_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="admins-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
