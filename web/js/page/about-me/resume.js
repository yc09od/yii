/**
 * Created by ycui on 11/3/2016.
 */
require(['js/knockout',
    'js/jquery-3.1.1.min.js',
    'js/moment-with-locales.js',
    'js/sweetalert2.min.js',
    'js/test.js',
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
        {
            title : 'UI developer',
            companyName : 'TELoIP Inc.',
            startTime : moment('20160809'),
            endTime : moment(),
            address : 'Mississauga, Ontario, Canada',
            summary : [
                '--develop SCN operational UI base on Zend server',
                '--develop dynamic UI by using Javascript, JQuery, Knockout',
                '--develop layout and effect by using CSS, Bootstrap 3',
                '--Transfer data with Orchestrator Api Service by ajax',
                '--Use Git to control version'
            ]
        },
        {
            title : 'Software developer',
            companyName : 'Future game studio',
            startTime : moment('20150901'),
            endTime : moment('20160503'),
            address : 'Toronto, Canada Area',
            summary : [
                '--Designing and testing games. Design programs to create random maps, enemas and equips.',
                '--Designing graphic recourse for game logo, characters and backgrounds.',
                '--Design games action and effect by using U3D. logic and mechanism by using C++ and java.',
                '--Home website design; Drawing up detailed website specifications by Html5, CSS3, JS, JQ, Bootstrap.',
                '--Responsive design with Bootstrap 3 and CSS; Testing effect with Chrome.',
                '--Back-end design with PHP5, MySQL; PHP functions, plugs and Database connections.',
                '--Maintain website with putty, Linux, Shell.',
                'Projects:',
                '--https://www.microsoft.com/en-us/store/games/10x10-blocks/9wzdncrd392l '
            ]
        },
        {
            title : 'Web Developer Associate',
            companyName : 'Future game studio',
            startTime : moment('20150501'),
            endTime : moment('20151003'),
            address : 'St catharines,ON, Canada',
            summary : [
                '--Using waterfall and spiral software engineering process model for design Process plan, budget report and equipment report editing. ',
                '--Design interface, effect and layout by communicating with clients.  Implement by using Php, html5, CSS, JavaScript, JQuery, ',
                '--ER diagram design and database implement by using MySQL; implement connections by using Ajax, MySQL ',
                '--Server set up and maintain by using cPanel , WHM.',
                '--Front end design and coding using php,JS,JQ,html5,css3,Photoshop CS6 ',
                '--Back end design and coding by use mysql php ajax -- teamwork '
            ]
        }
    ];

    function ResumeVM() {
        var resume = this;
        self.test = ko.observable("yes");
        self.board_content = ko.observableArray([]);
        self.board_content(board_content);
        self.content = content;
        console.log(moment("20160101").to(moment("20160202")));
    }

    ko.applyBindings(new ResumeVM(), document.getElementById('resume'));
});