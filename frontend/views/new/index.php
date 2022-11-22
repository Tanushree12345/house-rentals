<?php

use app\models\Map;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Maps $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Maps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="map-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Map', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'map_id',
            'House_id',
            'id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Map $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'map_id' => $model->map_id]);
                 }
            ],
        ],
    ]); ?>


</div>
