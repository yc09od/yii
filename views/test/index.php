<?php

/* @var $this yii\web\View */
use \app\assets\AppAsset;

$this->title = 'My Yii Application test';
AppAsset::addScript($this,"@web/js/sweetalert2.min.js");
AppAsset::addCss($this,"@web/css/sweetalert2.min.css");
?>


<div class="site-index">
    <a class="btn btn-primary" type="button" onclick = "test()">Alert</a>
</div>


<script type="text/javascript">
    function test() {
        swal('Fk u baby');
    }

</script>