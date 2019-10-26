<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\DostavkaModel */

$this->title = 'Update Dostavka Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Dostavka Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dostavka-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
