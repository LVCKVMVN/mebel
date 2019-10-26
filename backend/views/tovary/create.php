<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TovaryModel */

$this->title = 'Create Tovary Model';
$this->params['breadcrumbs'][] = ['label' => 'Tovary Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tovary-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
