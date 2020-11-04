<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
    <!--- basic page needs
        ================================================== -->
    <meta charset="utf-8">
    <title>LaravelTest</title>
    <meta name="description" content="">
    <meta name="author" content="David KALLA">
    <!-- mobile specific metas
        ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="{{asset('glint/css/base.css')}}"/>
    <!-- script
        ================================================== -->
    <script src="{{asset('glint/js/modernizr.js')}}"></script>
    <script>eval(mod_pagespeed_ustQdyNA22);</script>
    <script>eval(mod_pagespeed_CRiDk_PmFZ);</script>
    <!-- favicons
        ================================================== -->
    <link rel="shortcut icon" href="{{asset('glint/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('glint/favicon.ico')}}" type="image/x-icon">
</head>
<body id="top">
<!-- header
    ================================================== -->
<header class="s-header">
    <div class="header-logo">
        <a class="site-logo" href="{{url('/')}}">
            <img src="{{asset('glint/images/logo.png')}}" alt="Homepage">
        </a>
    </div>
    <nav class="header-nav">
        <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>
        <div class="header-nav__content">
            <h3>Navigation</h3>
            <ul class="header-nav__list">
                <li class="current"><a href="{{url('/admin')}}" title="home">Admin</a></li>
                <li><a href="{{route('products')}}" title="about">Products</a></li>
            </ul>
            <p>
                We are a technology based company that operates www.bridgeafrica.com. This is a platform that lets users create websites in less than 3 minutes, search and find one another through a directory, and enables business and professionals to thrive online. We have an innovative sms application that allows people to create websites and interact with the online platform offline through sms. It is currently operational in Cameroon through the MTN network on a short code 8759.
            </p>
            <ul class="header-nav__social">
                <li>
                    <a href="https://www.facebook.com/bridgeafricacom"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                    <a href="https://twitter.com/bridgeafricacom"><i class="fa fa-twitter"></i></a>
                </li>
            </ul>
        </div> <!-- end header-nav__content -->
    </nav> <!-- end header-nav -->
    <a class="header-menu-toggle" href="#0">
        <span class="header-menu-text">Menu</span>
        <span class="header-menu-icon"></span>
    </a>
</header> <!-- end s-header -->
<!-- home
    ================================================== -->
<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="{{asset('glint/images/hero-bg.jpg')}}" data-natural-width=3000 data-natural-height=2000 data-position-y=center>
    <div class="overlay"></div>
    <div class="shadow-overlay"></div>
    <div class="home-content">
        <div class="row home-content__main">
            <h3>Welcome to Bridge Africa Ventures</h3>
            <h1>
                Bridge Africa Ventures is a company that<br>
                helps businesses create digital identities.
            </h1>
            <div class="home-content__buttons">
                <a href="{{route('products')}}" class="btn btn--stroke">
                    View all products
                </a>
                <a href="{{url('/admin')}}" class="btn btn--stroke">
                    Login as an admin
                </a>
            </div>
        </div>
        <div class="home-content__line"></div>
    </div> <!-- end home-content -->
    <ul class="home-social">
        <li>
            <a href="https://www.facebook.com/bridgeafricacom"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
        </li>
        <li>
            <a href="https://twitter.com/bridgeafricacom"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
        </li>
    </ul>
    <!-- end home-social -->
</section>
<div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title="Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div> <!-- end photoSwipe background -->
<!-- preloader
    ================================================== -->
<div id="preloader">
    <div id="loader">
        <div class="line-scale-pulse-out">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Java Script
    ================================================== -->
<script src="{{asset('glint/js/jquery-3.2.1.min.js.pagespeed.jm.Y8jX7FH_5H.js')}}"></script>
<script src="{{asset('glint/js/plugins.js.pagespeed.jm.6YGJTrc0oh.js')}}"></script>
<script src="{{asset('glint/js/main.js.pagespeed.jm.Ou7BrmkSgJ.js')}}"></script>
</body>
</html>
