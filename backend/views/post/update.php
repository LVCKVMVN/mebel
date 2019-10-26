<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PostModel */

$this->title = 'Редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Post Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="post-model-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
