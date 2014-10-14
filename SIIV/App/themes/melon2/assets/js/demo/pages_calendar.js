/*
 * pages_calendar.js
 *
 * Demo JavaScript used on dashboard and calendar-page.
 */

"use strict";

$(document).ready(function(){

	//===== Calendar =====//
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	var h = {};

	if ($('#calendar').width() <= 400) {
		h = {
			left: 'title',
			center: '',
			right: 'prev,next'
		};
	} else {
		h = {
			left: 'prev,next',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		};
	}

	$('#calendar').fullCalendar({
                defaultView: 'agendaWeek',
                minTime: '08:00:00',
                maxTime: '20:00:00',
		disableDragging: false,
                defaultEventMinutes: 60,               
                eventDurationEditable:false,
		header: h,
		editable: true,
                eventClick: function(calEvent, jsEvent, view) {

                    /*alert('Event: ' + calEvent.title);
                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                    alert('View: ' + view.name);*/

                    // change the border color just for fun
                    //$(this).css('border-color', 'red');
                    
                    $('#calendar').fullCalendar('removeEvents', calEvent.id);
                    /*$('#calendar').fullCalendar('removeEvents', function (calEvent) {
                        return event.id == calEvent.Id;
                    });*/

                },
                dayClick: function(date) {

                    //alert('Clicked on: ' + date);
                    
                    $('#calendar').fullCalendar( 'renderEvent', {id:'tbk', title: 'tbk',start:date, allDay: false, } );
                    $(location).attr('href',"/STATInterpretes/STATV2/App/appointment/create");

                    // change the day's background color just for fun
                    //$(this).css('background-color', 'red');

                },
                eventDrop: function(event, delta, revertFunc) {

                    alert(event.title + " was dropped on " + event.start);

                },
		events: [{
				title: 'All Day Event',
				start: new Date(y, m, 1),
				backgroundColor: App.getLayoutColorCode('yellow')
			}, {
				title: 'Long Event',
				start: new Date(y, m, d - 5),
				backgroundColor: App.getLayoutColorCode('green'),                                                               
                                allDay: false
			}, {
				title: 'Repeating Event',
				start: new Date(y, m, d - 3, 16, 0),
				allDay: false,
				backgroundColor: App.getLayoutColorCode('red')
			}, {
				title: 'Repeating Event',
				start: new Date(y, m, d + 4, 16, 0),
				allDay: false,
				backgroundColor: App.getLayoutColorCode('green')
			}, {
				title: 'Meeting',
				start: new Date(y, m, d, 10, 30),
				allDay: false,
			}, {
				title: 'Lunch',
				start: new Date(y, m, d, 12, 0),
				end: new Date(y, m, d, 14, 0),
				backgroundColor: App.getLayoutColorCode('grey'),
				allDay: false,
			}, {
				title: 'Birthday Party',
				start: new Date(y, m, d + 1, 19, 0),
				end: new Date(y, m, d + 1, 22, 30),
				backgroundColor: App.getLayoutColorCode('purple'),
				allDay: false,
			}, {
				title: 'Click for Google',
				start: new Date(y, m, 28),
				end: new Date(y, m, 29),
				backgroundColor: '#f00',
				url: 'http://google.com/',
			}
		]
	});

});