<aside class="main-sidebar">

    <section class="sidebar">

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню Админки', 'options' => ['class' => 'header']],
                   /* ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],*/
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    //['label' => 'Заказы', 'url' => ['/zakaz']],
                    ['label' => 'Клиенты', 'url' => ['/client']],
                    ['label' => 'Должности', 'url' => ['/post']],
                    //['label' => 'Товары', 'url' => ['/tovary']],
                    //['label' => 'Доставка', 'url' => ['/dostavka']],
                    ['label' => 'Работники', 'url' => ['/employee']],
                    //['label' => 'Пользователи', 'url' => ['/user']],

                ],
            ]
        ) ?>

    </section>

</aside>
