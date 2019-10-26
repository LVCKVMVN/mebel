<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\DostavkaSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Виды доставок';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dostavka-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать вид', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'type',
            'price_dost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
