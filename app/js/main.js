// MAIN JS

$(document).ready(function() {

  // navigation

  $('nav li.parent ul').css({
    height: 0
  });

  $('nav li.parent a').on('click', function() {
    if ($(this).siblings('ul').hasClass('expanded')) {
      $(this).siblings('ul').removeClass('expanded').velocity('stop').velocity({
        height: 0
      }, 400, 'easeOutExpo');
    } else {
      $(this).siblings('ul').addClass('expanded').velocity('stop').velocity({
        height: 117
      }, 400, 'easeOutExpo');
    }
  });

});