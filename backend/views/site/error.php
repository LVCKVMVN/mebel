<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

//$this->title = $name;
?>
<section class="content">

    <div class="error-page">
        <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i></h2>

        <div class="error-content">
            <h2>Модуль в разработке</h2>

            <h4>Ты с первого раза не понимаешь? МОДУЛЬ В РАЗРАБОТКЕ</h4>
            <p>
                Извините модуль находится в разработке. Приносим свои искренние извенения. Спасибо за понимане.
                пшел вон <a href='<?= Yii::$app->homeUrl ?>'>return to dashboard</a>.
            </p>

        </div>
    </div>

</section>
