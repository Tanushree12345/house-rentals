<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\housedetails $model */

$this->title = 'Update Housedetails: ' . $model->House_id;
$this->params['breadcrumbs'][] = ['label' => 'Housedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->House_id, 'url' => ['view', 'House_id' => $model->House_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="housedetails-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
