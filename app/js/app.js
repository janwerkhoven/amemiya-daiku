// MAIN JS

$(document).ready(function() {

  // images modal

  function openModal() {
    $('body').addClass('prevent-scroll');
    $('#modal').show().velocity({
      opacity: 1,
    }, 800, 'easeOutExpo');
    $('#modal modal').velocity({
      scale: 1,
      translateY: 0
    }, 800, 'easeOutExpo');
  }

  function closeModal() {
    $('body').removeClass('prevent-scroll');
    $('#modal').velocity({
      opacity: 1,
    }, 800, 'easeOutExpo', function() {
      $(this).hide();
    });
    $('#modal modal').velocity({
      scale: 1,
      translateY: 0
    }, 800, 'easeOutExpo');
  }

  $('#modal').on('click', function() {
    closeModal();
  });

  $(document).on('click', '#modal .modal img', function(e) {
    debugger;
    e.stopPropagation();
  });

  $('.images a').on('click', function(e) {
    e.preventDefault();
    openModal();
    $('#modal .modal').html('');
    $(this).closest('.images').find('img').clone().appendTo('#modal .modal');
  });

  $('#modal').hide().velocity({
    opacity: 0,
  }, 0);
  $('#modal modal').velocity({
    scale: 0.8,
    translateY: 70
  }, 0);

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