<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1835">
    <div class="container">
    <!-- Product Image List -->
        <div class="row">
            <!-- Product -->
            <div class="col-md-4">
                <div class="col-inner text-center box-shadow-hover">
                    <!-- Image product -->
                    <div class="img">
                        <img src="images/videos.png" alt="">
                    </div>
                    <!-- Information product -->
                    <h3>Online How-to Video Guides</h3>
                    <p>We have made many How-to videos for Flatsome, so it’s easy to get started.</p>
                    <!-- Button tutorial -->
                    <a href="#" class="button">
                        <span>How to Videos</span>
                        <i class="fa fa-play" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <!-- End Product -->

            <!-- Product -->
            <div class="col-md-4">
                <div class="col-inner text-center box-shadow-hover">
                    <!-- Image product -->
                    <div class="img">
                        <img src="images/documentation.png" alt="">
                    </div>
                    <!-- Information product -->
                    <h3>Online How-to Video Guides</h3>
                    <p>We have made many How-to videos for Flatsome, so it’s easy to get started.</p>
                    <!-- Button tutorial -->
                    <a href="#" class="button">
                        <span>Documentation</span>
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <!-- End Product -->

            <!-- Product -->
            <div class="col-md-4">
                <div class="col-inner text-center box-shadow-hover">
                    <!-- Image product -->
                    <div class="img">
                        <img src="images/emailsupport.png" alt="">
                    </div>
                    <!-- Information product -->
                    <h3>Online How-to Video Guides</h3>
                    <p>We have made many How-to videos for Flatsome, so it’s easy to get started.</p>
                    <!-- Button tutorial -->
                    <a href="#" class="button">
                        <span>Get Support</span>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <!-- End Product -->
        </div>
    </div>
    <!-- End Product Image List -->
</div>