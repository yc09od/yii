/**
 * Created by ycui on 11/3/2016.
 */
require(['js/knockout',
    'js/jquery-3.1.1.min.js',
    'js/sweetalert2.min.js',
    'js/test'
],function (ko,$) {
    var location = window.location.toString();
    var board_content = [
        {
            title : 'Resume',
            img : 'picture/main/resume.jpg',
            content : 'Welcome to check my latest resume online. The social links are also included.',
            link : location.slice(0,location.indexOf("site%2")) + "about-me%2Fresume"
        },
        {
            title : 'Project',
            img : 'picture/main/prodect.jpg',
            content : 'Find all I did, contact me if any projects or products are interesting to you.',
            link : location.slice(0,location.indexOf("site%2")) + "about-me%2Fprojects"
        },
        {
            title : 'Experience',
            img : 'picture/main/experience.jpg',
            content : 'What I Experienced, My treasure, may also form an cooperation opportunities to us.',
            link : location.slice(0,location.indexOf("site%2")) + "about-me%2Fexperience"
        }
    ];

    function Main() {
        var self = this;
        self.test = ko.observable("yes");
        self.board_content = ko.observableArray([]);
        self.board_content(board_content);
    }

    ko.applyBindings(new Main(), document.getElementById('main'));
});