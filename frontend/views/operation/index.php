<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\model\houselocation;

/* @var $this yii\web\View */
/* @var $searchModel app\models\location */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Houselocations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="houselocation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Houselocation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'model' => $model,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'location_id',
            'locality',
            'city',
            'state',
            'pin',
         
        ],
    ]); ?>


</div>

