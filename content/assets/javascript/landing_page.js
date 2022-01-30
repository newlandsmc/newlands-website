import '/assets/javascript/jquery-3.6.0.min.js';

if(window.innerWidth > 750) {
  var video = document.getElementById('landing-title-video');
  video.setAttribute('src', video.getAttribute('hidden-src'));
}

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
