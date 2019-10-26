<?php

use backend\models\PostModel;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-model-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $posts = PostModel::find()->all(); ?>
    <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'datebirth')->widget(DatePicker::class, [
        'language' => 'ru',
         'pluginOptions' => [
            'format' => 'yyyy/mm/dd',
        ]])?>


    <?= $form->field($model, 'post')->dropDownList(ArrayHelper::map($posts, 'id', 'name_post'),
        [
            'prompt' => 'Выбор должности',
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
