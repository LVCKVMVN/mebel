<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PostModel */

$this->title = 'Создать';
$this->params['breadcrumbs'][] = ['label' => 'Post Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
