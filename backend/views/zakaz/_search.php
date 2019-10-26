<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ZakazSearchModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'zakazchik_id') ?>

    <?= $form->field($model, 'dizainer_id') ?>

    <?= $form->field($model, 'tovar_id') ?>

    <?= $form->field($model, 'dost_id') ?>

    <?php // echo $form->field($model, 'predoplata') ?>

    <?php // echo $form->field($model, 'polnya_stoimost') ?>

    <?php // echo $form->field($model, 'data_dost') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
