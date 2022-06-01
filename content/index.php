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
        document.getElementById(id).style.backgroundColor = "var(--action-taken)";
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
    </script>
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background: linear-gradient( rgba(0, 0, 0, 0), rgba(0, 0, 0, 1) ), url(/assets/images/minecraft-repainted.webp); background-size: cover; background-position: 85%;">
      </div>
      <div class="title" style="position: absolute; z-index: 3;">
        <div class="landing-title-text" style="text-align: center;">
          <img class="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla Logo" />
          <h2 style="line-height: 1.5em;" class="hide-mobile-2">RPG Survival Network</h1>
          <p class="ip hide-mobile">play.semivanilla.com</p>
          <div style="width:100%">
            <button type="button" id="asthonia-button" onclick="copyToClipboard('asthonia-button','play.semivanilla.com','https://semivanilla.com/join','/assets/images/starshrew-bg.webp')">PLAY NOW!</button>
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
          <h1 style="font-size: 4em;">We Make Awesome Servers</h1>
        </section>
        <section class="center" style="background: linear-gradient(90deg, rgb(15,19,28), rgb(30 39 58)); border-radius: 50px;">
          <div>
            <h3>About Us</h3>
            <p>We are a team of Minecraft players with almost 20 years combined experience running Minecraft servers. We specialize in vanilla+ servers that provide a unique survival experience that players new and old can all enjoy.</p>
          </div>
          <div>
            <img class="small" src="/assets/images/logo.webp" alt="SemiVanilla Logo" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="wide" src="/assets/images/asthonia-logo.webp" alt="Asthonia Logo" />
          </div>
          <div>
            <h3>Asthonia</h3>
            <p>Asthonia is a PVE survival RPG server focused on having a friendly, inviting community. This is a casual server designed for those who want to join an active and friendly community and have a place to relax and chat, even if not actively playing.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>Khavalon</h3>
            <p>Khavalon is a PVP ENABLED survival RPG server. This is semi-vanilla survival amplified in every way, designed for those who want a challenge and want to get involved in a fast-paced server that requires grinding to get to the top.</p>
          </div>
          <div>
            <img class="wide" src="/assets/images/khavalon-logo.webp" alt="Khavalon Logo" />
          </div>
        </section>
      </div>
      <div class="content" style="background: linear-gradient(var(--primary) 50%, var(--tertiary) 50%); margin-bottom: 0px; width: 100%; max-width: 100%;">
        <section class="center" style=" background: linear-gradient(90deg, rgb(24 12 32), rgb(73 37 96)); border-radius: 50px; flex-direction: column; width: auto; max-width: 90%;">
          <h4 style="padding: 0px 30px;">JOIN OUR DISCORD!</h4>
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
