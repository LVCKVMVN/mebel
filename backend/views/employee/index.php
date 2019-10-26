<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EmployeeSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список Сотрудников';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'surname',
            'name',
            //'patronymic',
            //'datebirth',
            [
            'attribute' => 'post',
            'format' => 'raw',
            'value' => 'post.nameOfPost'
            ],
            //'post',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
