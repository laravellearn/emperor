(function ($) {
    "use strict";

    // Full calendar
    $(window).on('load', function () {
        $('#external-events .fc-event').each(function () {
            $(this).data('event', {
                title: $.trim($(this).text()),
                stick: true
            });
            $(this).draggable({
                zIndex: 999,
                revert: true,
                revertDuration: 0
            });
        });
        $('#calendar').fullCalendar({
            header: {
                left: 'امروز',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            defaultDate: '2018-08-12',
            editable: true,
            droppable: true,
            events: [{
                title: 'عنوان',
                start: '2018-08-01',
                borderColor: '#04a9f5',
                backgroundColor: '#04a9f5',
                textColor: '#fff'
                }, {
                title: 'عنوان',
                start: '2018-08-07',
                end: '2018-08-10',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
                }, {
                id: 999,
                title: 'عنوان',
                start: '2018-08-09T16:00:00',
                borderColor: '#f4c22b',
                backgroundColor: '#f4c22b',
                textColor: '#fff'
                }, {
                id: 999,
                title: 'عنوان',
                start: '2018-08-16T16:00:00',
                borderColor: '#3ebfea',
                backgroundColor: '#3ebfea',
                textColor: '#fff'
                }, {
                title: 'عنوان',
                start: '2018-08-11',
                end: '2018-08-13',
                borderColor: '#1de9b6',
                backgroundColor: '#1de9b6',
                textColor: '#fff'
                }, {
                title: 'عنوان',
                start: '2018-08-12T10:30:00',
                end: '2018-08-12T12:30:00'
                }, {
                title: 'عنوان',
                start: '2018-08-12T12:00:00',
                borderColor: '#f44236',
                backgroundColor: '#f44236',
                textColor: '#fff'
                }, {
                title: 'عنوان',
                start: '2018-08-12T17:30:00',
                borderColor: '#a389d4',
                backgroundColor: '#a389d4',
                textColor: '#fff'
                }, {
                title: 'عنوان',
                start: '2018-08-13T07:00:00'
                }, {
                title: 'عنوان ',
                url: 'http://google.com/',
                start: '2018-08-28',
                borderColor: '#a389d4',
                backgroundColor: '#a389d4',
                textColor: '#fff'
                }],
            drop: function () {
                if ($('#drop-remove').is(':checked')) {
                    $(this).remove();
                }
            }
        });
    });

})(jQuery);