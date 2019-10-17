<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <!--top header-->

    <div class="top-header">
        <div class="container-fluid">
            <div class="row header">
                <div class="col-md-6">
                    <ul class="item-left">
                        <li class="nav-item">
                            <span href="#">OUR PHONE NUMBER: +09 (00)8978343</span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="item-right">
                        <li class="item">
                            <a href="#"><i class="fa fa-user"></i> My Account</a>
                        </li>
                        <li class="item">
                            <a href="#">Cart</a>
                        </li>
                        <li class="item">
                            <a href="#">our location</a>
                        </li>
                        <li class="item">
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--menu-->
    <div class="menu">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">SHOP</a></li>
                    <li><a href="#">BLOG</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">FAQS</a></li>
                            <li><a href="#">About me</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FEATURE</b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav ">
                    <a href="#" class="brand"><img src="./images/logo-bg.png" alt=""
                            class="img-logo"></a>
                </ul>
                <ul class="nav navbar-nav navbar-right top-right">
                    <li><a href="#" class="nav-link">Login / Register</a></li>
                    <li>
                        <form action="" class="form-search">
                            <input type="search" class="search" placeholder="Search..." ,>
                            <i class="fa fa-search search-button"></i>
                        </form>
                    </li>
                    <li class="item-cart">
                        <a href="#" id="opennav"><i class="fa fa-shopping-cart cart-button"></i></i></a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

       

    </div>
    <!--cart-->
    <div id="mySidenav" class="sidenav">
        <div class="nav-heading">
            <h3 class="nav-title">Shopping cart</h3>
            <!-- <a href="#" class="closebtn">CLOSE<span>&times;</span></a> -->
            <a href="#" class="closebtn">CLOSE</a>
            <div class="btn-close-bar">
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
        <!-- item -->
        <div class="product-custom">
            <ul>
                <li>
                    <a href="#">
                        <img src="images/1.jpg">
                        <span class="product-title">Ymolestie Condim</span>
                    </a>
                    <span class="price">£749.00</span>
                </li>
                <li>
                    <a href="#">
                        <img src="images/2.jpg">
                        <span class="product-title">Ynisi Condimentum</span>
                    </a>
                    <span class="price">£579.00</span>
                </li>

            </ul>
        </div>
        <div class="sum-cart">
            <div class="total">
                <h4><b>SUBTOTAL:</b></h4>
                <span>
                    <h4><b>£1,737.00</b></h4>
                </span>
            </div>
            <button class="btn-custom">VIEW CART</button>
            <button class="btn-custom">CHECKOUT</button>
        </div>
    </div>
    <div class="close-side"></div>
</div>
<!--banner-->
<div class="type-2">
    <div class="banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="text">
                        <h2 class="fadeInRight">This is custom styles</h2>
                        <h1 class="fadeInLeft">Men Styles</h1>
                        <div class="fadeInUp ">
                            <a href="#" class="btn-more">READ MORE</a>
                            <a href="#" class="btn-cart">ADD TO CART</a>
                        </div>

                    </div>
                    <img src="./images/slide-7-s.png" alt="" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <div class="text">
                        <h2 class="fadeInRight">This is custom styles</h2>
                        <h1 class="fadeInLeft">Men Styles</h1>
                        <div class="fadeInUp ">
                            <a href="#" class="btn-more">READ MORE</a>
                            <a href="#" class="btn-cart">ADD TO CART</a>
                        </div>
                    </div>
                    <img src="./images/slide-10-s.png" alt="" class="img-responsive">
                </div>
                <div class="swiper-slide">
                    <div class="text">
                        <h2>This is custom styles</h2>
                        <h1>Men Styles</h1>
                        <div class="fadeInUp ">
                            <a href="#" class="btn-more">READ MORE</a>
                            <a href="#" class="btn-cart">ADD TO CART</a>
                        </div>
                    </div>
                    <img src="./images/slide-15-s.png" alt="" class="img-responsive">
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>
<!---->
<div class="type-7">
    <div class="wp-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1>Get Discount</h1>
                </div>
                <div class="col-md-8">
                    <form action="">
                        <div class="form-filed">
                            <p class="input-icon">
                                <i class="fa fa-envelope icon"></i>
                                <input type="email" name="EMAIL" placeholder="Your email address" required=""
                                    class="input-field">
                            </p>
                            <p>
                                <input type="submit" value="Sign up" class="button-sb">
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>