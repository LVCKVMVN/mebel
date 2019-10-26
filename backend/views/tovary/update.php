<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TovaryModel */

$this->title = 'Update Tovary Model: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tovary Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tovary-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
