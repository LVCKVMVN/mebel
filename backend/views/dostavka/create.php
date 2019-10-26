<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\DostavkaModel */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Dostavka Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dostavka-model-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
