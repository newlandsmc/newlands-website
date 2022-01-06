import '/assets/javascript/jquery-3.6.0.slim.min.js';

$(window).bind('scroll', function() {
  if ($(window).scrollTop() < 100) {
    $('nav').removeClass('active');
  }
  else {
    $('nav').addClass('active');
  }
});
