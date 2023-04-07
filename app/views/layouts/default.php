<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php \vendor\core\base\View::getMeta();?>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>

</head>
<body>
<?=$content?>
<div class="wrapper">
    <header class="header">
        <div class="header__container">
            <a href="/" class="header__logo">
                <img src="images/png/post.png" alt="">
            </a>
            <div class="header__menu menu">
                <div class="menu__icon"><span></span></div>
                <nav class="menu__body">
                    <ul class="menu__list">
                        <li class="menu__item"><a class="menu__link">Частникам</a>
                            <ul class="menu__sub-list">
                                <li>
                                    <a href="" class="menu__sub-link">Послать посылку</a>
                                    <a href="" class="menu__sub-link">Почтовые офисы вокруг Вас</a>
                                    <a href="" class="menu__sub-link">Отследить посылку</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__item"><a class="menu__link">Предприятиям</a>
                            <ul class="menu__sub-list">
                                <li>
                                    <a href="" class="menu__sub-link">Регистрация новых магазинов</a>
                                    <a href="" class="menu__sub-link">Вход для магазинов</a>
                                    <a href="" class="menu__sub-link">Регистрация новых Постовых офисов</a>
                                    <a href="" class="menu__sub-link">Вход для Постовых офисов</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__item"><a class="menu__link">Компания</a>
                            <ul class="menu__sub-list">
                                <li>
                                    <a href="" class="menu__sub-link">О нас</a>
                                    <a href="" class="menu__sub-link">Блог</a>
                                    <a href="" class="menu__sub-link">Карьера</a>
                                    <a href="" class="menu__sub-link">Для партнёров</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="menu__list-auth">
                        <a href="/user/login" class="menu__link-auth">Вход</a>
                        <a href="/parcels/add" class="menu__link-auth">Послать посылку</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <?=$content?>
    </main>

    <footer class="footer">Футер</footer>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
<?php
foreach ($scripts as $script){
    echo $script;
}
?>
</body>
</html>
