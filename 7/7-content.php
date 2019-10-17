<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
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