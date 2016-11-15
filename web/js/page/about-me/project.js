/**
 * Created by ycui on 11/3/2016.
 */
require(['js/knockout',
    'js/jquery-3.1.1.min.js',
    'js/moment-with-locales.js',
    'js/sweetalert2.min.js',
],function (ko,$,moment) {
    var location = window.location.toString();
    if(location.indexOf('index') >=0 ){
        if(location.indexOf("r=")){
            location = location.slice(0,location.indexOf("site%2")) + "about-me%2F";
        }else{
            location += "r=about-me%2F";
        }
    }else{
        location += "index.php?r=about-me%2F";
    }

    var content = [
    ];

    function ProjectVM() {
        var self = this;
    }

    ko.applyBindings(new ProjectVM(), document.getElementById('project'));
});