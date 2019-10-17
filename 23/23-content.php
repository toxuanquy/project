<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
    <div class="container">
        <div class="shop-loop">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                    <a href="#" data-toggle="collapse" data-target="#demo" class="open-filter navbar-right">Filters</a>
                </ol>
                
            </nav>
            <div class="filter-button">
                <div id="demo" class="collapse drop-collape">
                    <div class="row filter-inner">
                        <div class="col-md-3">
                            <h5 class="widget-title">SORT BY</h5>
                            <div class="line-botom"></div>
                            <ul>
                                <li><a href="#">Default</a></li>
                                <li><a href="#">Popularity</a></li>
                                <li><a href="#">Newnews</a></li>
                                <li><a href="#">Average rating</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="widget-title">PRICE FILTER</h5>
                            <div class="line-botom"></div>
                            <ul>
                                <li><a href="#">ALL</a></li>
                                <li><a href="#">$0.00 - $200.0</a></li>
                                <li><a href="#">$150.0 - $250.0</a></li>
                                <li><a href="#">$300.0 - $400.0</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="widget-title">FILTER BY COLOR</h5>
                            <div class="line-botom"></div>
                            <ul>
                                <li><a href="#"><span class="filter-black"></span>Black</a></li>
                                <li><a href="#"><span class="filter-browm"></span>Browm</a></li>
                                <li><a href="#"><span class="filter-yellow"></span>Yellow</a></li>
                                <li><a href="#"><span class="filter-red"></span>Red</a></li>
                                <li><a href="#"><span class="filter-green"></span>Green</a></li>
                                <li><a href="#"><span class="filter-blue"></span>Blue</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h5 class="widget-title">SORT BY</h5>
                            <div class="line-botom"></div>
                            <ul>
                                <li><a href="">L <span class="count">(16)</span></a></li>
                                <li><a href="">M <span class="count">(12)</span></a></li>
                                <li><a href="">S <span class="count">(5)</span></a></li>
                                <li><a href="">XL <span class="count">(2)</span></a></li> 
                            </ul>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

</div>