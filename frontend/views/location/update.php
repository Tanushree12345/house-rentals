<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\houselocation */

$this->title = 'Update Houselocation: ' . $model->location_id;
$this->params['breadcrumbs'][] = ['label' => 'Houselocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->location_id, 'url' => ['view', 'location_id' => $model->location_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="houselocation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
