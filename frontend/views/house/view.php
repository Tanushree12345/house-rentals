<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\housedetails $model */

$this->title = $model->House_id;
$this->params['breadcrumbs'][] = ['label' => 'Housedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="housedetails-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'House_id' => $model->House_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'House_id' => $model->House_id], [
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
            'House_id',
            'house_type',
            'available',
            'location_id',
            'price',
            'purpose',
            'access',
            'status',
        ],
    ]) ?>

</div>
