<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use backend\models\DostavkaModel;
use backend\models\TovaryModel;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\widgets\MaskedInput;

$this->title = 'Оформление заказа';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Заказывай, че ломаешься
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
            <?php $tov = TovaryModel::find()->all(); ?>
            <?php $dos = DostavkaModel::find()->all(); ?>
                <?= $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'patronymic')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone_number')->widget(MaskedInput::className(),['mask' => '8(999)999-99-99']) ?>

                <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

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

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
