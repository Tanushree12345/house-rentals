<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Map $model */

$this->title = 'Update Map: ' . $model->map_id;
$this->params['breadcrumbs'][] = ['label' => 'Maps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->map_id, 'url' => ['view', 'map_id' => $model->map_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="map-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
