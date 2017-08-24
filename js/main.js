
$(document).ready(function() {
// Displays which tab is active using jQuery.
  var loc = window.location.pathname;
  $('#nav').find('a').each(function() {
    $(this).toggleClass('active',
      $(this).attr('href').substring(1) == loc);

    $(this).hover(function() {
      $(this).toggleClass("active");
    });
  });


if (window.location.pathname == '/events.php'){
  $('#calendar').fullCalendar({
    googleCalendarApiKey: 'AIzaSyBVg_79r8ngOQz4bu-6rnt2KD2EbS8vaBM',
    events: {
      googleCalendarId: 'comscisociety@cardiff.ac.uk'
    },

    defaultView: "list",
    visibleRange: {
      start: moment(),
      end: '2018-05-30',
    },
    header: false,
    height: "auto",
    });
};
});
