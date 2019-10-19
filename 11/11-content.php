<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-11">
    <div class="modals">
        <!-- Button to Open the Modal -->
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Open modal</a>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <div class="col-md-6 item-left">
                            <img src="./images/slide-15-s.png" alt="" class="img-responsive">
                        </div>
                        <div class="col-md-6">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Giày thể thao</h4>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <h4 class="price">$800.2</h4>
                                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut architecto dolores
                                    commodi eum.</span><br><br>
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus">
                                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty"
                                        class="input-text qty text" size="4" pattern="" inputmode="">
                                    <input type="button" value="+" class="plus">
                                </div>
                                <div class="addCart">
                                    <button type="submit" name="add to cart" class="btn-cart">ADD TO CART</button>
                                </div>
                                <div class="category">
                                    <h5>Category:<span>Boots</span></h5>
                                </div>
                                <div class="share">
                                    <h5>Share:<a href="#"><i class="fa fa-facebook-f"></i></a><a href="#"><i class="fa fa-envelope"></i></a></h5> 
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>