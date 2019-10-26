<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ZakazModel */

$this->title = 'Create Zakaz Model';
$this->params['breadcrumbs'][] = ['label' => 'Zakaz Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
