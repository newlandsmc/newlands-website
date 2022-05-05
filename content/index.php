<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Studios | 1.18.2 Minecraft Survival Network</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer>
      function copyToClipboard(id,ip,morehelp,bg) {
        var aux = document.createElement("input");
        aux.setAttribute("value", ip);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "#d2a69f";
        document.getElementById('overlay-fg-1').style.background = "linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url(" + bg + ") 0px 0px/1280px";
        document.getElementById('overlay-more-help').href = morehelp;
        document.getElementById('overlay-ip').innerHTML = ip;
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.0.min.js';
      $(function() {
        $('.scroll').click(function() {
          var id = $(this).attr('href');
          $('html,body').animate({ scrollTop: $(id).offset().top }, 'slow');
          return false;
        });
      });
      $(document).ready(function () {
        jQuery.getJSON("https://api.mcsrvstat.us/2/play.khavalon.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('player-count-khavalon').innerHTML = json.players.online + ' Players Online';
          }
        });
        jQuery.getJSON("https://api.mcsrvstat.us/2/play.asthonia.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('player-count-asthonia').innerHTML = json.players.online + ' Players Online';
          }
        });
      });
    </script>
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) ), url(/assets/images/minecraft-repainted.webp); background-size: cover; background-position: 85%; -webkit-clip-path: polygon(0 0, 0 calc( 100vh + 4px ), 100vw 0); clip-path: polygon(0 0, 0 calc( 100vh + 4px ), 100vw 0);">
        <div id="landing-title-text" style="text-align: center; margin-right: 33vw; margin-bottom: 33vh;">
          <img id="landing-logo" src="/assets/images/khavalon-logo.webp" alt="Khavalon Logo" />
          <h2 style="line-height: 1.5em;" class="hide-mobile-2">Towny PVP Survival</h1>
          <h3 class="hide-mobile" id="player-count-khavalon">99 Players Online</h2>
          <div style="width:100%">
            <button type="button" id="khavalon" onclick="copyToClipboard('khavalon','play.semivanilla.com','https://semivanilla.com/join','/assets/images/minecraft-repainted.webp')">PLAY NOW!</button>
          </div>
        </div>
      </div>
      <div class="title" style="background: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) ), url(/assets/images/starshrew-bg.webp); background-size: cover; background-position: 85%; -webkit-clip-path: polygon(100vw 0, 0 calc( 100vh + 4px ), 100vw calc( 100vh + 4px )); clip-path: polygon(100vw 0, 0 calc( 100vh + 4px ), 100vw calc( 100vh + 4px )); position: absolute;">
        <div id="landing-title-text" style="text-align: center; margin-left: 33vw; margin-top: 33vh;">
          <img id="landing-logo" src="/assets/images/asthonia-logo.webp" alt="Asthonia Logo" />
          <h2 style="line-height: 1.5em;" class="hide-mobile-2">Casual RPG Survival</h1>
          <h3 class="hide-mobile" id="player-count-asthonia">99 Players Online</h2>
          <div style="width:100%">
            <button type="button" id="asthonia" onclick="copyToClipboard('asthonia','play.semivanilla.com','https://semivanilla.com/join','/assets/images/starshrew-bg.webp')">PLAY NOW!</button>
          </div>
          <a id="scrollbutton" class="scroll" href="#welcome">
            <span></span>
            <p style="display: none;">Learn More</p>
          </a>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing">
        <div class="shadow"></div>
        <section class="center" style="flex-direction: column; margin: 50px;">
          <h1 style="line-height: 1em;">We Make Awesome Servers</h1>
        </section>
        <section class="center">
          <div>
            <h3>About Us</h3>
            <p>We are a team of Minecraft players with almost 20 years combined experience running Minecraft servers. We specialize in semi-vanilla and vanilla+ servers that provide a unique survival experience that players new and old can all enjoy. We set trends, not follow them.</p>
          </div>
          <div>
            <img class="small" src="/assets/images/logo.webp" alt="SemiVanilla Logo" />
          </div>
        </section>
        <section class="center">
          <div>
            <a href="https://semivanilla.com/khavalon"><img class="wide" src="/assets/images/khavalon-logo.webp" alt="Khavalon Logo" /></a>
          </div>
          <div>
            <a href="https://semivanilla.com/khavalon"><h3>Khavalon</h3></a>
            <p>Khavalon is a PVP ENABLED towny survival server. This is semi-vanilla survival amplified in every way, designed for those who want a challenge and want to get involved in a fast-paced server that requires grinding to get to the top.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <a href="https://semivanilla.com/asthonia"><h3>Asthonia</h3></a>
            <p>Asthonia is a PVE survival RPG server focused on having a friendly, inviting community. This is a casual server designed for those who want to join an active and friendly community and have a place to relax and chat, even if not actively playing.
</p>
          </div>
          <div>
            <a href="https://semivanilla.com/asthonia"><img class="wide" src="/assets/images/asthonia-logo.webp" alt="Asthonia Logo" /></a>
          </div>
        </section>
        <section class="center" style="flex-direction: column; max-width: 600px;">
          <h3>JOIN OUR DISCORD!</h3>
          <a href="https://discord.gg/3WzZ3x6wGp" target="_blank"><button type="button">JOIN DISCORD!</button></a>
        </section>
      </div>
      <div class="overlay">
        <div class="overlay-bg" onclick="overlayDismiss()"></div>
        <div id="overlay-fg-1" class="overlay-fg">
          <p id="overlay-ip" class="ip">play.semivanilla.com</p>
          <p style="margin:10px 0 30px 0;">Copied to Clipboard!</p>
          <a id="overlay-more-help"><button type="button">More Help</button></a>
          <button type="button" onclick="overlayDismiss()">Okay</button>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
