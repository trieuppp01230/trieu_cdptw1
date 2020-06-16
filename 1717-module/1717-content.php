<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1717">
    <!-- Main Title -->
    <div class="title">
        <div class="container">
            <h2>Portfolio</h2>
        </div>
    </div>
    <!-- End Title -->

    <!-- Menu -->
    <div class="container">
        <div class="nav_menu">
            <!-- List Menu -->
            <ul class="nav_menu_list">
                <li class="nav_menu_list_item"><a href="#" class="nav_menu_list_item_link link-default active"
                        data-filter="all">All</a>
                </li>
                <li class="nav_menu_list_item"><a href="#" class="nav_menu_list_item_link link-default"
                        data-filter="design">Design</a></li>
                <li class="nav_menu_list_item"><a href="#" class="nav_menu_list_item_link link-default"
                        data-filter="lookbook">LookBook</a></li>
            </ul>
            <!-- End List Menu -->
        </div>
    </div>
    <!-- End Menu -->

    <!-- Show Product List -->
    <section class="category">
        <div class="container">
            <div class="row" class="category_list">
                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter lookbook">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img1.jpg" alt="" class="category_item_img img-responsive">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">LookBook</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter design">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img2.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">Design</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter lookbook">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img1.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">LookBook</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter lookbook">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img2.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">LookBook</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter lookbook ">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img1.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">LookBook</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter lookbook">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img2.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">LookBook</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter design">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img1.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">Desigh</p>
                    </a>
                </div>
                <!-- End Product Information -->

                <!-- Product Information -->
                <div class="col-lg-3 col-md-3 col-sm-4 col-6 category_item filter lookbook">
                    <a href="" class="link">
                        <!-- image Product -->
                        <img src="images/img2.jpg" alt="" class="category_item_img">
                        <!-- infor -->
                        <h5 class="category_item_name">Flat T-Shirt Company</h5>
                        <p class="category_item_detail detail">LookBook</p>
                    </a>
                </div>
                <!-- End Product Information -->
            </div>
        </div>
    </section>
    <!-- End List Product -->
</div>