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
