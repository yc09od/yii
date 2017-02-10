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
        <div class="row" class="padding-top-2">
            <div class="col-lg-10 col-lg-offset-1 board">
                <div class="row" style="height: 100%">

                    <div class="col-lg-3" style="background-color: #181818;min-height: 500px;box-shadow: 0 0 5px grey;height: 100%">
                        <div class="row">
                            <h3 class="text-center text-dark-grey" style="background-color: #111111;padding: 20px;margin: 0">Project List</h3>
                            <div class="btn-group-vertical" style="width: 100%" data-bind = "foreach : content">
                                <button data-bind ="click : $root.NovClick.bind($root,$data.Id),css : $root.selectedProjectId() != $data.Title_Nov.id ? 'btn-side-nav' : 'btn-side-nav btn-side-nav-active',text : $data.Title_Nov.text" type="button" style="width: 100%"></button>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-9">
                        <div id = "content_board" data-bind = "foreach : content">
                            <div class="col-lg-12" data-bind = "visible : $data.Id == $root.selectedProjectId()">
                                <h2>
                                    <span data-bind = "text : $data.Title">This is Project Name</span>
                                    <span data-bind = "foreach : $data.Links">
                                        <a class="btn btn-social-icon btn-github pull-right margin-left-10" data-bind = "attr : { href : link}" style="margin-top: 0">
                                            <span class="fa" data-bind = "css : icon"></span>
                                        </a>
                                    </span>
                                </h2>
                                <div>
                                    <span data-bind = "text : $root.moment($data.Period.start).format('MMMM YYYY')">Aug 9, 2016</span> -
                                    <span  data-bind = "text : $data.Period.end > -1 ? $root.moment($data.Period.end).format('MMMM YYYY') : $root.moment().format('MMMM YYYY')">Nov 23, 2016</span>
                                    | <span><span data-bind = "text : $data.Location.type">Work</span> : <span data-bind = "text : $data.Location.org">Teloip Inc</span></span>

                                </div>
                                <h4 class="margin-top-3" data-bind = "text : $data.Introduction">
                                    No opinions answered oh felicity is resolved hastened. Produced it friendly my if opinions humoured. Enjoy is wrong folly no taken. It sufficient instrument insipidity simplicity at interested. Law pleasure attended differed mrs fat and formerly. Merely thrown garret her law danger him son better excuse. Effect extent narrow in up chatty. Small are his chief offer happy had.
                                </h4>

                                <div data-bind = "foreach : Content">
                                    <!--ko if : $data.label == 'p'-->
                                        <p data-bind = "text : $data.text"></p>
                                    <!--/ko-->
                                    <!--ko if : $data.label == 'img'-->
                                        <p>img</p>
                                    <!--/ko-->
                                    <!--ko if : $data.label == 'h1'-->
                                        <p>h1</p>
                                    <!--/ko-->
                                    <!--ko if : $data.label == 'h2'-->
                                        <p>h2</p>
                                    <!--/ko-->
                                </div>

                                <div class="alert alert-success" role="alert">
                                    <h5 class="margin-bottom-1">Tag : </h5>
                                    <div data-bind = "foreach : $data.Tags">
                                        <span class="label label-primary" data-bind = "text : $data">linux</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
