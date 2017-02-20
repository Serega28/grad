<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car Repair</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/template/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/template/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/template/css/grid.css" type="text/css" media="screen">
    <script src="/template/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="/template/js/cufon-yui.js" type="text/javascript"></script>
    <script src="/template/js/cufon-replace.js" type="text/javascript"></script>
    <script src="/template/js/Vegur_500.font.js" type="text/javascript"></script>
    <script src="/template/js/FF-cash.js" type="text/javascript"></script>
    <script src="/template/js/tms-0.3.js" type="text/javascript"></script>
    <script src="/template/js/tms_presets.js" type="text/javascript"></script>
    <script src="/template/js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="/template/js/jquery.equalheights.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/template/js/html5.js"></script>
    <link rel="stylesheet" href="/template/css/ie.css" type="text/css" media="screen">
    <![endif]-->
</head>
<body id="page1">
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
                <div class="slider-wrapper">
                    <div class="slider">
                        <ul class="items">
                            <li> <img src="/template/images/slider-img1.jpg" alt="" /> </li>
                            <li> <img src="/template/images/slider-img2.jpg" alt="" /> </li>
                            <li> <img src="/template/images/slider-img3.jpg" alt="" /> </li>
                        </ul>
                    </div>
                    <a class="prev" href="#">prev</a> <a class="next" href="#">next</a> </div>
            </div>
        </header>
<!--==============================content================================-->
<section id="content">
    <div class="main">
        <div class="container_12">

            <?php require ROOT.'/views/layouts/wrapper.php'; ?>

            <div class="container-bot">
                <div class="container-top">
                    <div class="container">
                        <div class="wrapper">
                            <article class="grid_8">
                                <div class="indent-left">
                                    <h2>Welcome!</h2>
                                    <p class="prev-indent-bot"><strong>Car Repair</strong> is one of free website templates created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid. </p>
                                    <p class="border-bot">This Car Repair Template goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplatesMonster.com. The basic package (without PSD source) is available for anyone without registration.</p>
                                </div>
                                <div class="wrapper">
                                    <div class="grid_4 alpha">
                                        <div class="indent-left">
                                            <div class="maxheight indent-bot">
                                                <h3>About Us</h3>
                                                <p class="prev-indent-bot"><a class="link-1" href="#">Lorem ipsum dolor amet</a> conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                                <a class="link-1" href="#">Dolor amet conse ctetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat ut enim ad.
                                            </div>
                                                <a class="button" href="/about/">Read More</a>
                                        </div>
                                    </div>
                                    <div class="grid_4 omega">
                                        <div class="indent-left2">
                                            <div class="maxheight indent-bot">
                                                <h3 class="p0">Our Services</h3>
                                                <ul class="list-1">
                                                    <li>Complete Computer Diagnostics</li>
                                                    <li>Complete Safety Analysis</li>
                                                    <li>Drivability Problems</li>
                                                    <li>Oil Changes</li>
                                                    <li>Emission Repair Facility</li>
                                                    <li>Air Conditioning Service</li>
                                                    <li>Electrical Systems</li>
                                                    <li>Fleet Maintenance</li>
                                                </ul>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                            </article>
                            <article class="grid_4">
                                <div class="indent-left2 indent-top">
                                    <div class="box p4">
                                        <div class="padding">
                                            <div class="wrapper">
                                                <figure class="img-indent"><img src="/template/images/page1-img4.png" alt=""></figure>
                                                <div class="extra-wrap">
                                                    <h3 class="p0">Our Hours:</h3>
                                                </div>
                                            </div>
                                            <p class="p1"><strong>24 Hour Emergency Towing</strong></p>
                                            <p class="color-1 p0">Monday - Friday: 7:30 am - 6:00</p>
                                            <p class="color-1 p1">Saturday: 7:30 am - Noon</p>
                                            Night Drop Available </div>
                                    </div>
                                    <figure class="indent-bot">
                                        <iframe width="260" height="202" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
                                    </figure>
                                    <div class="indent-left">
                                        <dl class="main-address">
                                            <dt>Demolink.org 8901 Marmora Road,<br>
                                                Glasgow, D04 89GR.</dt>
                                            <dd><span>Telephone:</span> +1 959 552 5963;</dd>
                                            <dd><span>FAX:</span> +1 959 552 5963</dd>
                                            <dd><span>E-mail:</span><a href="#">mail@demolink.org</a></dd>
                                        </dl>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="main"> <span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</span> Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
</footer>
</div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
    $(window).load(function () {
        $('.slider')._TMS({
            duration: 1000,
            easing: 'easeOutQuint',
            preset: 'simpleFade',
            slideshow: 7000,
            banners: false,
            pauseOnHover: true,
            pagination: false,
            pagNums: false,
            nextBu: '.next',
            prevBu: '.prev'
        });
    });
</script>
</body>
</html>