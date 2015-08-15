// MAIN JS

var J = jQuery.noConflict();

// JQUERY

J(document).ready(function() {

  // NAVIGATION
  J('#x1').next("ul").hide();
  if (document.body.id == 'furniture' || document.body.id == 'buildings' || document.body.id == 'exchange') {
    J('#x1').next("ul").show();
  }
  J('#x1').click(function(event) {
    event.preventDefault();
    J(this).next("ul").slideToggle(300);
    J('#x1').not(this).next("ul").slideUp(300);
  });

  // HEADER LOGO RIGHT
  J('#header-bg-box').hover(function() {
    J(this).stop();
    J(this).animate({
      height: 261
    }, 400);
  }, function() {
    J(this).stop();
    J(this).animate({
      height: 166
    }, 300);
  });

  // JQUERY LIGHTBOX
  // J(function() {
  //   J('.gallery a.g1').lightBox();
  //   J('.gallery a.g2').lightBox();
  //   J('.gallery a.g3').lightBox();
  //   J('.gallery a.g4').lightBox();
  //   J('.gallery a.g5').lightBox();
  // });

});