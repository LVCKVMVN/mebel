<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PostModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_post')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'salary')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
