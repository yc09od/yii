/**
 * Created by ycui on 11/3/2016.
 */
require(['js/knockout',
    'js/jquery-3.1.1.min.js',
    'js/sweetalert2.min.js',
    'js/test'
],function (ko,$) {

    var board_content = [
        {
            title : 'Resume',
            img : 'picture/main/resume.jpg',
            content : 'Welcome to check my latest resume online. The social links are also included.',
            link : '#'
        },
        {
            title : 'Prodect',
            img : 'picture/main/prodect.jpg',
            content : 'Find all I did, contact me if any projects or products are interesting to you.',
            link : '#'
        },
        {
            title : 'Experience',
            img : 'picture/main/experience.jpg',
            content : 'What I Experienced, My treasure, may also form an cooperation opportunities to us.',
            link : '#'
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