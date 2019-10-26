<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\EmployeeModel */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Employee Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-model-create">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
