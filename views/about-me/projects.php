<?php

/* @var $this yii\web\View */
use \app\assets\AppAsset;

$this->title = 'Yanglong Cui(eggplantcui)';

AppAsset::addScript($this,"@web/js/page/about-me/project.js");
AppAsset::addCss($this,"@web/css/page/about-me/project.css");
AppAsset::addCss($this,"@web/vendor/bootstrap-social-gh-pages/bootstrap-social.css");
AppAsset::addCss($this,"@web/vendor/bootstrap-social-gh-pages/assets/css/font-awesome.css");

?>

<div id = "project">
    <div class="row top-background">
    </div>
    <div class="container">
        <div class="row" style="padding-top: 20px">
            <div class="col-lg-10 col-lg-offset-1 board">
                <div class="row" style="height: 100%">

                    <div class="col-lg-3" style="background-color: #181818;min-height: 500px;box-shadow: 0 0 5px grey;height: 100%">
                        <div class="row">
                            <h3 class="text-center text-dark-grey" style="background-color: #111111;padding: 20px;margin: 0">Project List</h3>
                            <div class="btn-group-vertical" style="width: 100%">
                                <button class="btn-side-nav" type="button" style="width: 100%">1</button>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div id = "content_board" >

                            <!--video/slide-->
                            <div class="col-lg-12 margin-top-2 test">
                                yes
                            </div>


                            <div class="col-lg-12">
                                <h2>
                                    <span>This is Project Name</span>
                                    <a class="btn btn-social-icon btn-github pull-right" href="https://www.facebook.com/yanglonghorst.cui" style="margin: 0">
                                        <span class="fa fa-github"></span>
                                    </a>
                                </h2>
                                <div>
                                    <span>Aug 9, 2016</span>-
                                    <span>Nov 23, 2016</span>
                                    <span>(in 3 months)</span> |
                                    <span>Work : Teloip Inc</span>

                                </div>
                                <h4 class="margin-top-3">
                                    No opinions answered oh felicity is resolved hastened. Produced it friendly my if opinions humoured. Enjoy is wrong folly no taken. It sufficient instrument insipidity simplicity at interested. Law pleasure attended differed mrs fat and formerly. Merely thrown garret her law danger him son better excuse. Effect extent narrow in up chatty. Small are his chief offer happy had.
                                </h4>

                                <div>
                                    <p>yessss dfdf dsfsdf</p>
                                    <p>yessss dfdf dsfsdf</p>
                                    <p>yessss dfdf dsfsdf</p>
                                    <p>yessss dfdf dsfsdf</p>
                                    <p>yessss dfdf dsfsdf</p>
                                    <p>yessss dfdf dsfsdf</p>
                                    <p>yessss dfdf dsfsdf</p>
                                </div>

                                <div class="alert alert-success" role="alert">
                                    <h5 style="margin: 0 0 5px 0">Tag : </h5>
                                    <span class="label label-default">Python</span>
                                    <span class="label label-primary">Linux</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
