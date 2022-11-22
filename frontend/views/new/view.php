<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Map $model */

$this->title = $model->map_id;
$this->params['breadcrumbs'][] = ['label' => 'Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="map-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'map_id' => $model->map_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'map_id' => $model->map_id], [
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
            'map_id',
            'House_id',
            'id',
        ],
    ]) ?>

</div>
