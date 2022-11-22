<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\houselocation */

$this->title = 'Create Houselocation';
$this->params['breadcrumbs'][] = ['label' => 'Houselocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="houselocation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
