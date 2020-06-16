<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1739">
    <div class="container">
        <div class="row">
            <!-- Html List Question -->
            <div class="col-md-6">
                <div class="col-inner">
                    <!-- Tiêu đề chính -->
                    <div class="title">
                        <h3 class="section_title"><span class="section_title_main">Frequently Asked Questions</span>
                        </h3>
                        <p class="title_lead">Please read our FAQ before sending a message.</p>
                    </div>

                    <!-- Child Question List-->
                    <div class="accordion" id="accordion" role="tablist">
                        <!-- Child Question One-->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <div class="panel-title">
                                    <!-- Question -->
                                    <a role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne" class="accordion_item_title collapsed">What are the
                                        delivery charges for orders from the Online Shop?
                                    </a>
                                </div>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Answer -->
                                <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean id convallis tellus.
                                    Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                                    Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                            </div>
                        </div>
                        <!-- End Child Question One -->

                        <!-- Child Question Two-->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <!-- Question -->
                                    <a role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" class="accordion_item_title collapsed">Which payment methods are accepted in the Online Shop?
                                    </a>
                                </div>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Answer -->
                                <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean id convallis tellus.
                                    Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                                    Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                            </div>
                        </div>
                        <!-- End Child Question Two -->

                        <!-- Child Question Three-->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <!-- Question -->
                                    <a role="button" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree" class="accordion_item_title collapsed">How long
                                        will delivery take?
                                    </a>
                                </div>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Answer -->
                                <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean id convallis tellus.
                                    Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                                    Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                            </div>
                        </div>
                        <!-- End Child Question Three -->

                        <!-- Child Question Four-->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <!-- Question -->
                                    <a role="button" data-toggle="collapse" href="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour" class="accordion_item_title collapsed">How secure
                                        is shopping in the Online Shop? Is my data protected?
                                    </a>
                                </div>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Answer -->
                                <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean id convallis tellus.
                                    Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                                    Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                            </div>
                        </div>
                        <!-- End Child Question Four -->

                        <!-- Child Question Five-->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <!-- Question -->
                                    <a role="button" data-toggle="collapse" href="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive" class="accordion_item_title collapsed">What exactly
                                        happens after ordering?
                                    </a>
                                </div>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFive" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Answer -->
                                <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean id convallis tellus.
                                    Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                                    Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                            </div>
                        </div>
                        <!-- End Child Question Five -->

                        <!-- Child Question Six-->
                        <div class="accordion_item">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <div class="panel-title">
                                    <!-- Question -->
                                    <a role="button" data-toggle="collapse" href="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix" class="accordion_item_title collapsed">Do I receive an invoice for my order?
                                    </a>
                                </div>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSix" aria-expanded="false" style="height: 0px;"
                                data-parent="#accordion">
                                <!-- Answer -->
                                <p class="accordion_inner">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean id convallis tellus.
                                    Nulla aliquam in mi et convallis. Pellentesque rutrum feugiat ante ut imperdiet.
                                    Vivamus et dolor nec nisl consectetur vulputate id non ante.</p>
                            </div>
                        </div>
                        <!-- End Child Question Five -->
                    </div>
                </div>
            </div>
            <!-- End List Question -->

            <!-- Form Make Question -->
            <div class="col-md-6">
                <div class="col-inner">
                    <!-- Main Title -->
                    <div class="title">
                        <h3 class="section_title"><span class="section_title_main">Send us an email</span></h3>
                    </div>
                    <!-- Form content -->
                    <form action="#" class="form">
                        <p>
                            <label>Your Name (required)</label>
                            <input type="text" name="yourname">
                        </p>
                        <p>
                            <label>Your Email (required)</label>
                            <input type="text" name="yourname">
                        </p>
                        <p>
                            <label>Your Message (required)</label>
                            <textarea name="textarea"></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Submit" class="submit">
                        </p>
                    </form>
                    <p class="text">This is form is just for demo purpose. No inquiries will be answered.</p>
                </div>
            </div>
            <!-- End Question Form -->
        </div>
    </div>
</div>