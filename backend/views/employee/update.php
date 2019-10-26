<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeModel */

$this->title = 'Редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Employee Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employee-model-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
