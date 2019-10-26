<?php

use backend\models\ClientModel;
use backend\models\DostavkaModel;
use backend\models\EmployeeModel;
use backend\models\TovaryModel;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ZakazModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakaz-model-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $diz = EmployeeModel::find()->all(); ?>
    <?php $tov = TovaryModel::find()->all(); ?>
    <?php $dos = DostavkaModel::find()->all(); ?>
    <?= $form->field($model, 'zakazchik_id')->textInput()?>

    <?= $form->field($model, 'dizainer_id')->dropDownList(ArrayHelper::map($diz, 'id', 'surname','name'),
        [
            'prompt' => 'Выбор сотрудника',
        ]
    ) ?>

    <?= $form->field($model, 'tovar_id')->dropDownList(ArrayHelper::map($tov, 'id', 'name'),
        [
            'prompt' => 'Выбор товара',
        ]
    ) ?>

    <?= $form->field($model, 'dost_id')->dropDownList(ArrayHelper::map($dos, 'id', 'type'),
        [
            'prompt' => 'Выбор доставки',
        ]
    ) ?>

    <?= $form->field($model, 'predoplata')->textInput() ?>

    <?= $form->field($model, 'polnya_stoimost')->textInput() ?>

    <?= $form->field($model, 'data_dost')->widget(DatePicker::class, [
        'language' => 'ru',
        'pluginOptions' => [
            'format' => 'yyyy/mm/dd',
        ]])?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
