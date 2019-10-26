<?php

use kartik\export\ExportMenu;
use yii\helpers\Html;
use kartik\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ClientSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список клиентов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php

    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],
        'id',
        'surname',
        'name',
        'patronymic',
        'phone_number',
        'address',
        /*[
            'attribute'=>'author_id',
            'label'=>'Author',
            'vAlign'=>'middle',
            'width'=>'190px',
            'value'=>function ($model, $key, $index, $widget) {
                return Html::a($model->author->name, '#', []);
            },
            'format'=>'raw'
        ],*/
        ['class' => 'kartik\grid\ActionColumn'],
    ];
    ?>


    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
        <?= ExportMenu::widget([
        'dataProvider' => $dataProvider,
        'columns' => $gridColumns,
        'dropdownOptions' => [
        'label' => 'Export',
        'class' => 'btn btn-secondary'
        ]
        ]);?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $gridColumns,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'surname',
            'name',
            'patronymic',
            //'fullName',
            'phone_number',
            //'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
        'showPageSummary' => false,
    ]); ?>
</div>
