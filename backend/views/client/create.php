<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClientModel */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Client Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="client-model-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
