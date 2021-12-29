function copyToClipboard() {
  var aux = document.createElement("input");
  aux.setAttribute("value", "play.semivanilla.com");
  document.body.appendChild(aux);
  aux.select();
  document.execCommand("copy");
  document.body.removeChild(aux);
  document.getElementById('copybutton').innerHTML = 'IP Copied!';
  document.getElementById('copybutton').style.backgroundColor = "#d2a69f";
}
