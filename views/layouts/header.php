<!DOCTYPE html>
<html lang="">
<head>
    <title>Car Repair</title>
    <meta charset="utf-8 general-ci">
    <link rel="stylesheet" href="/template/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/template/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/template/css/grid.css" type="text/css" media="screen">
    <script src="/template/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="/template/js/cufon-yui.js" type="text/javascript"></script>
    <script src="/template/js/cufon-replace.js" type="text/javascript"></script>
    <script src="/template/js/Vegur_500.font.js" type="text/javascript"></script>
    <script src="/template/js/FF-cash.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/template/js/html5.js"></script>
    <link rel="stylesheet" href="/template/css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page4">
<div class="main-bg">
    <div class="bg">
        <!--==============================header=================================-->
        <header>
            <div class="main">
                <div class="wrapper">
                    <h1><a href="/">Car Repair</a></h1>
                    <div class="fright">
                        <div class="indent">
                            <div class="col-sm-8">
                                <div class="shop-menu pull-right">
                                    <ul class="nav navbar-nav">
                                        <?php if (User::isGuest()): ?>
                                            <li><a href="/user/login/">Вход</a></li>
                                            <li><a href="/user/register/">Регистрация</a></li>
                                        <?php else: ?>
                                            <li><a href="/cabinet/">Аккаунт</a></li>
                                            <li><a href="/user/logout/"> Выход</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/news/">News</a></li>
                        <li><a href="/repair/">Repair</a></li>
                        <li><a href="/price/">Price List</a></li>
                        <li><a href="/about/">About Us</a></li>
                        <li><a href="/comments/list/">Comments</a></li>
                    </ul>
                </nav>
            </div>
        </header>