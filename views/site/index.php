<?php

/* @var $this yii\web\View */
use \app\assets\AppAsset;

$this->title = 'Yanglong Cui(eggplantcui)';

AppAsset::addScript($this,"@web/js/main.js");
AppAsset::addCss($this,"@web/css/sweetalert2.min.css");
AppAsset::addCss($this,"@web/css/main.css");

?>

<div id = "main">
    <div id = "index-slide" class="container-fluid row">
        <div id = "slide-1" class="container">
            <div class="row">
                <div class= "col-lg-4 col-lg-offset-1">
                    <h1 class = "index-slide-title text-center">Welcome !</h1>
                    <h3 class = "index-slide-content text-center">My personal website</h3>
                    <h3 class = "index-slide-content text-right">-Yanglong Cui</h3>
                </div>
                <div class= "col-lg-6 col-lg-offset-1" style = "overflow : hidden;margin-top:5.5%">
                        <img style = "width: 100%;overflow: hidden;border-radius: 3px 3px 0 0;box-shadow: 0 0 4px lightgrey;" src="picture/main/main-slider-item-1.bmp" alt="Cinque Terre">
                </div>
            </div>
        </div>
        <!--
        <div id = "slide-2" class="container">
                <div class="row">
                    <div class="col-lg-12">yes</div>
                </div>
        </div>
        <div id = "slide-3" class="container">
                <div class="row">
                    <div class="col-lg-12">yes</div>
                </div>
        </div>
        -->
    </div>

    <div class="site-index container margin-top-2 margin-bottom-3">
        <div class= "row">
            <h1 class="text-center" style = "font-weight: bolder;font-size: 3em;font-family: sans-serif;">What do I have<span class="glyphicon glyphicon-ok-circle text-success" style = "font-size : 28px"></span></h1>
        </div>

        <div class= "row" style = "margin-top:20px" data-bind = "foreach : board_content">
            <div class = "col-lg-4 margin-bottom-2">
                <div class = "col-lg-8 col-lg-offset-2">
                    <img class="img-responsive img-rounded" alt="Cinque Terre" data-bind="attr: { src: img}">
                </div>
                <div class = "col-lg-10 col-lg-offset-1">
                    <h1 class= "text-center text-sans-serif" style = "color: #4f4f4f;" data-bind="text : title"></h1>
                    <p class= "text-center text-sans-serif" style = "color: #4f4f4f;min-height: 60px" data-bind="text : content">Him rendered may attended concerns jennings reserved now. Sympathize did now preference unpleasing mrs few. Sympathize did now preference unpleasing mrs few.</p>
                    <div class = "col-lg-12 text-center">
                        <a href="javascript:void(0)" rule = "button" class="btn btn-primary" data-bind="attr: { href: link}">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid row margin-top-2" style = "background-color : #afafaf;box-shadow: 0 0 3px gray;">
        <div class="container">
              <div class = "col-lg-4 col-lg-offset-2">
                <h1 class= "text-center text-sans-serif" style = "margin-top: 45%">This is Mr. Cui</h1>
                <h3 class= "text-center text-sans-serif">A good team member, a good programer</h3>
              </div>
              <div class = "col-lg-4">
                <img style = "width: 100%" src="picture/main/author.png" alt="Cinque Terre">
              </div>
        </div>
    </div>


</div>
