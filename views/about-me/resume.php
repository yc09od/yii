<?php

/* @var $this yii\web\View */
use \app\assets\AppAsset;

$this->title = 'Yanglong Cui\'s resume';

AppAsset::addScript($this,"@web/js/page/about-me/resume.js");
AppAsset::addCss($this,"@web/css/page/about-me/resume.css");
AppAsset::addCss($this,"@web/vendor/bootstrap-social-gh-pages/bootstrap-social.css");
AppAsset::addCss($this,"@web/vendor/bootstrap-social-gh-pages/assets/css/font-awesome.css");
?>

<div id = "resume">
    <div class="row top-background"></div>
    <div class="col-lg-8 col-lg-offset-2 board">


        <div class="row margin-top-3">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="col-lg-12">
                    <a class="btn btn-social-icon btn-github pull-right" href="https://github.com/yc09od">
                        <span class="fa fa-github"></span>
                    </a>
                    <a class="btn btn-social-icon btn-linkedin pull-right" href="https://ca.linkedin.com/in/yanglong-cui-b389a0b7">
                        <span class="fa fa-linkedin"></span>
                    </a>
                    <a class="btn btn-social-icon btn-facebook pull-right" href="https://www.facebook.com/yanglonghorst.cui">
                        <span class="fa fa-facebook"></span>
                    </a>
                </div>
                <div class="clearfix"></div>

                <!--name and contact-->
                <div class="col-lg-6">
                    <h1>Yanglong Cui</h1>
                </div>
                <div class="col-lg-6" style="margin-top: 22px">
                    <p class="margin-0 text-right">24 IDA st, ST CATHARINES,ONTARIO</p>
                    <p class="margin-0 text-right">1 (905) 325-0111 yanglongcui@gmail.com</p>
                </div>
                <div class="divider col-lg-12"></div>


                <div class="col-lg-12">
                    <h3>Summary : </h3>
                    <p>Well experienced Front end Portal development with modern tools like bootstrap,MVVM,PHP.
                        A good team player, A sick inventor, A true-life photographer and A crazy cook.
                        Seeking full time Front end and software developer jobs.
                    </p>
                </div>
                <div class="divider col-lg-12"></div>

                <!--working experience-->
                <div class="col-lg-12">
                    <h3>Working Experience: </h3>

                    <div class="working-board margin-top-3" data-bind = "foreach : content">
                        <div class="title">
                            <h4 class="margin-bottom-0" data-bind = "text : title" ></h4>
                        </div>
                        <div class="companyName">
                            <p class="margin-0" data-bind = "text : companyName"></p>
                        </div>
                        <div class="info">
                            <span data-bind = "text : startTime.format('ll')"></span> -
                            <span data-bind = "text : endTime.format('ll')"></span>
                            (<span data-bind = "text : startTime.to(endTime).slice(startTime.to(endTime).indexOf('in'))"></span>) |
                            <span data-bind = "text : address"></span>
                        </div>
                        <div class="summary" data-bind = "foreach : summary">
                            <p class="margin-0" data-bind = "text : $data">
                            </p>
                        </div>
                        <div class="divider col-lg-12" data-bind = "visible : $index == $parent.length - 1"></div>
                    </div>
                </div>
                <div class="divider col-lg-12"></div>

                <!--Education-->
                <div class="col-lg-12">
                    <h3>Education</h3>
                    <h4 class="margin-bottom-0">
                        Brock University
                    </h4>
                    <p class="margin-0">
                        Bachelor's Degree (with Honours)| Computer Science
                    </p>
                    <p class="margin-0">2011-2016</p>
                    <p class="margin-0">1812 Sir Isaac Brock Way, St. Catharines, ON L2S 3A1</p>
                </div>

                <div class="col-lg-12 margin-top-3">
                    <div class="pull-right">
                        <label>Resume</label>
                        <a class = "btn btn-primary" role="button" href="pdf/resume.pdf">Download</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
