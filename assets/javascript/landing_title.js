(function() {
  if (document.documentElement.clientWidth > 1000) {
    var body = document.body, landing_title = document.getElementById("landing-title"), doc = document.documentElement;
    window.onscroll = function () {
      landing_title.style.backgroundPosition = "center " + ( 0 - (Math.max(doc.scrollTop, body.scrollTop) / 4) ) + "px";
    };
  };
}());
