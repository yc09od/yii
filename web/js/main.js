/**
 * Created by ycui on 11/3/2016.
 */
require(['js/knockout','js/test'],function (ko) {

    function Main() {
        var self = this;
        self.test = ko.observable("yes");
    }

    ko.applyBindings(new Main(), document.getElementById('test'));
});