<?php

use app\models\housedetails;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Details $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Housedetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housedetails-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Housedetails', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'House_id',
            'house_type',
            'available',
            'location_id',
            'price',
            //'purpose',
            //'access',
            //'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, housedetails $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'House_id' => $model->House_id]);
                 }
            ],
        ],
    ]); ?>


</div>
