<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="banner">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="text">
                        <h2>This is custom styles</h2>
                        <h1>Men Styles</h1>
                        <a href="#" class="btn-more">READ MORE</a>
                        <a href="#" class="btn-cart">ADD TO CART</a>
                    </div>
                    <img src="./images/slide-7-s.png" alt="">
                </div>
                <div class="swiper-slide">
                    <div class="text">
                        <h2>This is custom styles</h2>
                        <h1>Men Styles</h1>
                        <a href="#" class="btn-more">READ MORE</a>
                        <a href="#" class="btn-cart">ADD TO CART</a>
                    </div>
                    <img src="./images/slide-10-s.png" alt="">
                </div>
                <div class="swiper-slide">
                    <div class="text">
                        <h2>This is custom styles</h2>
                        <h1>Men Styles</h1>
                        <a href="#" class="btn-more">READ MORE</a>
                        <a href="#" class="btn-cart">ADD TO CART</a>
                    </div>
                    <img src="./images/slide-15-s.png" alt="">
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>