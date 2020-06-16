<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1815">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="col_inner">
                    <!-- Main Title -->
                    <h3 class="title">Browse</h3>
                    <div class="border-title"></div>

                    <!-- List Menu -->
                    <div class="accordion" id="accordion" role="tablist">
                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <!-- Main Menu -->
                                <div class="panel-title-main">
                                    <a role="button" class="accordion_item_title ">Bag
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Menu -->

                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <!-- Main Menu -->
                                <div class="panel-title-main">
                                    <a role="button" class="accordion_item_title ">Booking
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Menu -->

                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <!-- Main Menu -->
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne" class="accordion_item_title collapsed">Clothing
                                    </a>
                                </div>
                                <!-- End Main Menu -->
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Sub Menu -->
                                <a class="dis-block accordion_inner">Hoodies</a>
                            </div>
                        </div>
                        <!-- End Menu -->

                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <!-- Main Menu -->
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" class="accordion_item_title collapsed">Men
                                    </a>
                                </div>
                                <!-- End Main Menu -->
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Sub Menu -->
                                <a class="dis-block accordion_inner">T-Shirt</a>
                            </div>
                        </div>
                        <!-- End Menu -->

                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <!-- Main Menu -->
                                <div class="panel-title">
                                    <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree" class="accordion_item_title collapsed">Music
                                    </a>
                                </div>
                                <!-- End Main Menu -->
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Sub Menu -->
                                <a class="dis-block accordion_inner">Albums</a>
                                <a class="dis-block accordion_inner">Singles</a>
                            </div>
                        </div>
                        <!-- End Menu -->

                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <!-- Main Menu -->
                                <div class="panel-title-main">
                                    <a role="button" class="accordion_item_title ">Posters
                                    </a>
                                </div>
                                <!-- End Main Menu -->
                            </div>
                        </div>
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="panel-title-main">
                                    <!-- Sub Menu -->
                                    <a role="button" class="accordion_item_title ">Shoes
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Menu -->

                        <!-- Menu -->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="panel-title-main">
                                    <!-- Main Menu -->
                                    <a role="button" class="accordion_item_title ">Uncategorized
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Menu -->
                    </div>
                    <!-- And List Menu -->

                    <!-- List Filter -->
                    <h3 class="title">Filter by</h3>
                    <div class="border-title"></div>

                    <!-- Product Filter List -->
                    <ul class="product">
                        <li class="product_item">
                            <!-- Product -->
                            <a class="item" href="">Black</a>
                            <!-- Number of Filterable products -->
                            <span class="count">(3)</span>
                        </li>
                        <li class="product_item">
                            <!-- Product -->
                            <a class="item" href="">Blue</a>
                            <!-- Number of Filterable products -->
                            <span class="count">(1)</span>
                        </li>
                        <li class="product_item">
                            <!-- Product -->
                            <a class="item" href="">Green</a>
                            <!-- Number of Filterable products -->
                            <span class="count">(2)</span>
                        </li>
                    </ul>
                    <!-- End Product Filter List -->

                    <!-- Price -->
                    <h3 class="title">Filter by price</h3>
                    <div class="before"></div>

                    <!-- Purification of Product prices -->
                    <div class="slidecontainer">
                        <input type="range" min="200" max="999" value="300" id="myRange">
                        <p>Price: <span id="demo"></span>.000k</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>