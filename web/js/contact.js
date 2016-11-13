/**
 * Created by horst on 12/11/16.
 */
require(['js/knockout',
    'js/jquery-3.1.1.min.js',
],function (ko,$) {
    var location = window.location.toString();
    if(location.indexOf('index') >= 0 ){
        if(location.indexOf("r=") >= 0){
            location = location.slice(0,location.indexOf("site%2")) + "about-me%2F";
        }else{
            location += "?r=about-me%2F";
        }
    }else{
        location += "index.php?r=about-me%2F";
    }

    var board_content = {
        FirstName: 'Yanglong',
        LastName: 'Cui',
        Phone: '1(905)-325-0111',
        Email: [
            'cuiyanglong@hotmail.com',
            'yanglongcui@gmail.com'
        ],
        Address: [
            'St Catharines',
            'mississauga'
        ],
        SocialLink: [
            {title : 'github',link : 'https://github.com/yc09od'},
            {title : 'linkedin',link : 'https://ca.linkedin.com/in/yanglong-cui-b389a0b7'},
            {title : 'facebook',link : 'https://www.facebook.com/yanglonghorst.cui'}
        ]
    };

    function Main() {
        var self = this;
        self.test = ko.observable("yes");
        self.board_content = ko.observableArray([]);
        self.board_content(board_content);
    }

    ko.applyBindings(new Main(), document.getElementById('contact'));
});