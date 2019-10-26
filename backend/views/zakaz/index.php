<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\ClientModel;
use backend\models\ZakazModel;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ZakazSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$model = ClientModel::find()->all();

$this->title = 'Список Заказов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakaz-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать заказ', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'zakazchik_id',
            [
                'attribute' => 'zakazchik_id',
                'format' => 'raw',
                'value' => $model->ClientModel->surname,
            ],
            'dizainer_id',
            'tovar_id',
            'dost_id',
            //'predoplata',
            //'polnya_stoimost',
            //'data_dost',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
