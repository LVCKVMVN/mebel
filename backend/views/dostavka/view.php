<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\DostavkaModel */

$this->title = $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Dostavka Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dostavka-model-view">

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Уверен?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'type',
            'price_dost',
        ],
    ]) ?>

</div>
