import '/assets/javascript/jquery-3.6.0.min.js';

if(window.innerWidth > 750) {
  var video = document.getElementById('landing-title-video');
  video.setAttribute('src', video.getAttribute('hidden-src'));
}

$(function() {
	$('#scrollbutton, #scrollupbutton').click(function() {
	var id = $(this).attr('href');
	$('html,body').animate({ scrollTop: $(id).offset().top }, 'slow');
	return false;
	});
});

$(document).ready(function () {
  jQuery.getJSON("https://api.mcsrvstat.us/2/play.semivanilla.com",function(json){
    if (json.online == false) {
    }
    else {
      // success
      document.getElementById('player-count').innerHTML = json.players.online + ' Players Online';
    }
  });
});
