
$(document).ready(function () {
      /*https://www.itsolutionstuff.com/post/laravel-9-fullcalendar-ajax-tutorial-exampleexample.html */
    /*------------------------------------------
    --------------------------------------------
    Get Site URL
    --------------------------------------------
    --------------------------------------------*/
    var SITEURL = "{{ url('/calendar') }}";
    
    /*------------------------------------------
    --------------------------------------------
    CSRF Token Setup
    --------------------------------------------
    --------------------------------------------*/
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    
      
    /*------------------------------------------
    --------------------------------------------
    FullCalender JS Code
    --------------------------------------------
    --------------------------------------------*/
    var calendar = $('#calendar').fullCalendar({
        lang: 'hu',
        locale: 'hu',
        monthNames: ['Január,','Február,','Március,','Április,','Május,','Június,','Július,','Augusztus,','Szeptember,','Október,','November,','December,'],
        monthNamesShort: ['Jan','Feb','Márc','Ápr','Máj','Júni','Júli','Aug','Szept','Okt','Nov','Dec'],
        dayNames: ['Vasárnap', 'Hétfő','Kedd','Szerda','Csütörtök','Péntek','Szombat'],
        dayNamesShort: ['V', 'H','K','Sze','Cs','P','Szo'],
        firstDay: 1,
        dayRender: function (date, cell) {
            cell.css("background-color", "white");
        },

                    /*editable: true,
                    events: SITEURL + "/calendar",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/calendarAjax",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
  
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true);
  
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },
                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
  
                        $.ajax({
                            url: SITEURL + '/calendarAjax',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },
                            type: "POST",
                            success: function (response) {
                                displayMessage("Event Updated Successfully");
                            }
                        });
                    },
                    eventClick: function (event) {
                        var deleteMsg = confirm("Do you really want to delete?");
                        if (deleteMsg) {
                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/calendarAjax',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");
                                }
                            });
                        }
                    }*/
                });
                
 
    });
    
    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    } 