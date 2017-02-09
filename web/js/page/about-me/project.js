/**
 * Created by ycui on 11/3/2016.
 */
require([
    'js/knockout',
    'js/moment-with-locales.js',
    'js/sweetalert2.min.js',
    'js/jquery-3.1.1.js',
],function (ko,moment) {
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
            Id : 0,
            Title_Nov : { id : 0 ,text : "SD Internet Portal"},
            Title : "Software-defined Internet Portal",
            Links : [
                {
                    link : "https://www.google.ca",
                    icon : "fa-github"
                }
            ],
            Period : {
                start : 1475985600000,
                end : -1
            },
            Location : {
                org : "Teloip Inc.",
                type : "Full time job",
                address : "5430 Timberlea Blvd #1, Mississauga, ON L4W 2T7",
                contact : "+1 877-783-5647"
            },
            Introduction : "this is indtroduction",
            Content : [
                {
                    label : "p",
                    text : "this is a p",
                    class : "bg-danger"
                },
                {
                    label : "img",
                    link : "this is a p",
                    class : "bg-danger"
                }
            ],
            Download : "",
            Tags : [
                "Python",
                "Linux"
            ]

        },
        {
            Id : 1,
            Title_Nov : { id : 1 ,text : "SD Internet Portal2"},
            Title : "Software-defined Internet Portal2",
            Links : [
                {
                    link : "https://www.google.ca",
                    icon : "fa-github"
                }
            ],
            Period : {
                start : 1475985600000,
                end : -1
            },
            Location : {
                org : "Teloip Inc.",
                type : "Full time job",
                address : "5430 Timberlea Blvd #1, Mississauga, ON L4W 2T7",
                contact : "+1 877-783-5647"
            },
            Introduction : "this is indtroduction",
            Content : [
                {
                    label : "p",
                    text : "this is a p",
                    class : "bg-danger"
                },
                {
                    label : "img",
                    link : "this is a p",
                    class : "bg-danger"
                }
            ],
            Download : "",
            Tags : [
                "Python",
                "Linux"
            ]

        }
    ];

    function ProjectVM() {
        var self = this;
        self.content = ko.observableArray(content);
        self.moment = moment;
        self.selectedProjectId = ko.observable(self.content()[0].Title_Nov.id);
        console.log(content);
    }

    ProjectVM.prototype.NovClick = function (id) {
        var self = this;
        self.selectedProjectId(id);
    };

    ko.applyBindings(new ProjectVM(), document.getElementById('project'));
});