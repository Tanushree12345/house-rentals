<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\housedetails $model */

$this->title = 'Create Housedetails';
$this->params['breadcrumbs'][] = ['label' => 'Housedetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="housedetails-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
