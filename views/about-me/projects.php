<?php

/* @var $this yii\web\View */
use \app\assets\AppAsset;

$this->title = 'Yanglong Cui(eggplantcui)';

AppAsset::addScript($this,"@web/js/page/about-me/project.js");
AppAsset::addCss($this,"@web/css/page/about-me/project.css");

?>

<div id = "project">
    <div class="row top-background">
    </div>
    <div class="container">
        <div class="row" style="padding-top: 20px">
            <div class="col-lg-10 col-lg-offset-1 board">
                <div class="row">

                    <div class="col-lg-3" style="background-color: #181818;min-height: 500px">
                        <div class="row">
                            <h3 class="text-center text-dark-grey" style="background-color: #111111;padding: 20px;margin: 0">Project List</h3>
                            <div class="btn-group-vertical" style="width: 100%">
                                <button class="btn-side-nav" type="button" style="width: 100%">1</button>
                                <button class="btn-side-nav" type="button" style="width: 100%">1</button>
                                <button class="btn-side-nav" type="button" style="width: 100%">1</button>
                                <button class="btn-side-nav" type="button" style="width: 100%">1</button>
                                <button class="btn-side-nav" type="button" style="width: 100%">1</button>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-7"></div>
                </div>

            </div>

        </div>
    </div>
</div>
