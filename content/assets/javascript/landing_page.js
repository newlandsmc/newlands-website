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

function copyToClipboard(id) {
  var aux = document.createElement("input");
  aux.setAttribute("value", "play.semivanilla.com");
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
  document.getElementById(id).innerHTML = 'IP Copied!';
  document.getElementById(id).style.backgroundColor = "#d2a69f";
}
