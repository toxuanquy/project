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
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <span class="nav-link" href="#">OUR PHONE NUMBER: +09 (00)8978343</span>
                        </li>
                    </ul>
                    <br />
                    <ul class="navbar-nav mr-sm-2">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fa fa-user"></i> My Account</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">our location</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--menu-->
    <nav class="navbar navbar-expand-sm navbar-light bg-light ">
        <div class="container menu">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">SHOP</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Product</a>
                            <a class="dropdown-item" href="#">Shop Style</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PAGE</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">FEATURE</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Contact us</a>

                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <a href="#" class="brand"><img src="./images/logo-basel.svg" alt="" class="img-responsive img-logo"></a> 
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 top-right">
                    <li class="nav-items">
                        <a href="#" class="nav-link">Login / Register</a>
                    </li>
                    <form action="" class="form-search">
                        <input type="search" class="search" placeholder="Search..." ,>
                        <i class="fa fa-search search-button"></i>
                    </form>
                    <!-- <li class="item-search">
                        <a href=""><i class="fa fa-search search-button"></i></a>
                    </li> -->
                    <li class="item-cart">
                        <a href=""><i class="fa fa-shopping-cart cart-button"></i></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
</div>