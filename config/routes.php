<?php
 return array(

     //пользователь
     'user/login' => 'user/login',//actionLogin in UserController
     'user/logout' => 'user/logout',//actionLogout in UserController
     'user/register' => 'user/register',//actionRegister in UserController
     'user/edit' => 'cabinet/edit',//actionEdit in CabinetController
     'cabinet/edit' => 'cabinet/edit',//actionEdit in CabinetController
     'cabinet' => 'cabinet/index',//actionIndex in CabinetController
     //управление новостями
     'admin/news/create' => 'adminNews/create',
     'admin/news/update/([0-9]+)' => 'adminNews/update/$1',
     'admin/news/delete/([0-9]+)' => 'adminNews/delete/$1',
     'admin/news' => 'adminNews/index',
     //управление комментариями
     'admin/comments/update/([0-9]+)' => 'adminComments/update/$1',
     'admin/comments' => 'adminComments/index',
     //управление прайсами
     'admin/price/create' => 'adminPrice/create',
     'admin/price/update/([0-9]+)' => 'adminPrice/update/$1',
     'admin/price/delete/([0-9]+)'=> 'adminPrice/delete/$1',
     'admin/price' => 'adminPrice/index',
     //админпанель
     'admin' => 'admin/index',//actionIndex in AdminController
     // О магазине
     'about' => 'site/about',
     'repair' => 'site/repair',
     //прайс
     'price' => 'price/list',//actionList in PriceController
     //комментарии
     'comments/list' => 'comments/list',
     'comments/create' => 'comments/create',
     //новости
     'news/([0-9]+)' => 'news/view/$1',//actionView in NewsController
     'news' => 'news/list', //actionList in NewsController
     //главная страница
     'index.php' => 'site/index', // actionIndex в SiteController
     '' => 'site/index',//actionIndex in SiteController
 );