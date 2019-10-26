<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\UserModel */

$this->title = 'Обновить информацию:';
$this->params['breadcrumbs'][] = ['label' => 'User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-model-update">

    <?= $this->render('/site/error', [
        'model' => $model,
    ]) ?>

</div>
