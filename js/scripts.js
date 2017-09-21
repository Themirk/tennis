function newEvent(title, y, m, d, h, m){
    var event = {
        title:title,
        start: y + '-' + m + '-' + d + 'T' + h + ':' + m
    };

}



/*
2017-09-18T16:00:00

$(document).ready(function() {

    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

    $(document).ready(function() {
        var newEvent = {
            title: 'NEW EVENT',
            start: new Date(y, m, d)
        };
        $('#calendar').fullCalendar( 'renderEvent', newEvent , 'stick');
    });

    $('#calendar').fullCalendar({
        editable: true
    });

});
*/