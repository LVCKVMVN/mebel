<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserModel */

$this->title = 'Добавление нового пользователя';
$this->params['breadcrumbs'][] = ['label' => 'User Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-model-create">

    <!--<h1><?/*= Html::encode($this->title) */?></h1>-->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
