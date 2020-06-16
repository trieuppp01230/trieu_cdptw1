<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1771">
    <div class="wp_image">
        <div class="container">
            <div class="row">
                <!-- Show Posts Element -->
                <div class="col-md- 3 col-xl-3 col-lg-12">
                    <div class="col_inner">
                        <!-- List Title -->
                        <h1 class="title">Amazing Blog Posts Element</h1>
                        <p class="lead">Display your Blog posts in many different ways.</p>
                        <!-- List Element -->
                        <ul class="list">
                            <li class="list_check"><i class="fa fa-check fl-left" aria-hidden="true"></i><span>Unlimited
                                    Styles and Options</span></li>
                            <li class="list_check"><i class="fa fa-check" aria-hidden="true"></i><span>Select Custom
                                    Posts</span></li>
                            <li class="list_check"><i class="fa fa-check" aria-hidden="true"></i><span>Slider / Row /
                                    Grid and Masonry Style</span></li>
                        </ul>
                    </div>
                </div>
                <!-- End Post Element -->

                <!-- Related Images  --> 
                <a href="" class="col-md-9 col-xl-9 col-lg-12 swiper-container"> <!-- Use swiper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/img1.jpg" alt="">
                            <!-- Infor in Images -->
                            <div class="box-swiper">
                                <p>Uncategorized</p>
                                <h5>Welcome to Flatsomet</h5>
                                <span>November 19, 2015</span>
                            </div>
                            <!-- End Infor -->
                        </div>

                        <div class="swiper-slide">
                            <img src="images/img2.jpg" alt="">
                            <!-- Infor in Images -->
                            <div class="box-swiper">
                                <p>Style</p>
                                <h5>A Simple Blog Post</h5>
                                <span>October 13, 2015</span>
                            </div>
                            <!-- End Infor -->
                        </div>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </a>
                <!-- End Related Images -->
            </div>
        </div>
    </div>
</div>