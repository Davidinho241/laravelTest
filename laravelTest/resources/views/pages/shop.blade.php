<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bridge | Africa</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&amp;display=swap" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('ogani/css/style.css')}}" type="text/css"/>
</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="{{url('/')}}"><img src="{{asset('glint/images/logo.png')}}" alt="" style="max-width: 30%;"></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$150.00</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{asset('ogani/img/xlanguage.png.pagespeed.ic.x-r7SQqGJF.jpg')}}" alt="">
            <div>English</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">French</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="{{route('products')}}"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="#">Shop</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="https://www.facebook.com/bridgeafricacom"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/bridgeafricacom"><i class="fa fa-twitter"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> contact@lavaltest.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->
<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> contact@lavaltest.com</li>
                            <li>Free Shipping for all Order of $99</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            <a href="https://www.facebook.com/bridgeafricacom"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/bridgeafricacom"><i class="fa fa-twitter"></i></a>
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{asset('ogani/img/xlanguage.png.pagespeed.ic.x-r7SQqGJF.jpg')}}" alt="">
                            <div>English</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">French</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            <a href="{{route('products')}}"><i class="fa fa-user"></i> Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{url('/')}}"><img src="{{asset('glint/images/logo.png')}}" alt="" style="max-width: 30%;"></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="active"><a href="#">Shop</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__cart__price">item: <span>$150.00</span></div>
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="row">
                    @forelse($products as $product)
                        @include('components.product',['product'=>$product])
                        @empty
                        Oops no product found !!!
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{url('/')}}"><img src="{{asset('glint/images/logo.png')}}" alt="" style="max-width: 30%;"></a>
                    </div>
                    <ul>
                        <li>Address: Yaounde, Cameroon</li>
                        <li>Phone: +237 655 77 88 99</li>
                        <li>Email: contact@laraveltest.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">

                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>Get E-mail updates about our latest shop and special offers.</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your mail">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="https://www.facebook.com/bridgeafricacom"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/bridgeafricacom"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://dksoft237.com" target="_blank">David KALLA</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    <div class="footer__copyright__payment"><img src="{{asset('ogani/img/xpayment-item.png.pagespeed.ic.IsCge16PaL.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->
<!-- Js Plugins -->
<script src="{{asset('ogani/js/jquery-3.3.1.min.js.pagespeed.jm.r0B4QCxeCQ.js')}}"></script>
<script src="{{asset('ogani/js/app.js')}}"></script>
<script>eval(mod_pagespeed_ND6iIrfFHB);</script>
<script>eval(mod_pagespeed_2CR7bSFHcL);</script>
<script src="{{asset('ogani/js/jquery-ui.min.js.pagespeed.jm.kliCpEL7OZ.js')}}"></script>
<script src="{{asset('ogani/js/jquery.slicknav.js.pagespeed.jm.SeaZtwZMai.js')}}"></script>
<script src="{{asset('ogani/js/mixitup.min.js.pagespeed.jm.NgMFDHThj4.js')}}"></script>
<script src="{{asset('ogani/js/owl.carousel.min.js.pagespeed.jm.iD9BtIsBTL.js')}}"></script>
<script src="{{asset('ogani/js/main.js.pagespeed.jm.hSRyuRIwND.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','UA-23581568-13');</script>
</body>
</html>
