<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Studios | 1.19.2 Minecraft Survival Network</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer>
      function copyToClipboard(id,ip,morehelp) {
        var aux = document.createElement("input");
        aux.setAttribute("value", ip);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "var(--action-taken)";
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
    <style>
      #frog {
        position: absolute;
        left: 30px;
        top: -100px;
        width: 180px;
      }
      #allay {
        position: absolute;
        right: -80px;
        top: 0px;
        width: 120px;
      }
      @media (max-width: 650px) {
        #allay {
          right: -2px;
          width: 80px;
        }
      }
    </style>
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background: linear-gradient( rgba(0, 0, 0, 0) 35%, rgba(0, 0, 0, 1) ), url(/assets/images/landing-title.webp); background-size: cover; background-position: 85%;">
      </div>
      <div class="title" style="position: absolute; z-index: 3;">
        <div class="landing-title-text" style="text-align: center;">
          <img class="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla Logo" />
          <h2 style="margin: 30px;">1.19.2 Survival Network</h2>
          <p class="ip hide-mobile">play.semivanilla.com</p>
          <div style="width:100%">
            <button type="button" id="asthonia-button" onclick="copyToClipboard('asthonia-button','play.semivanilla.com','https://semivanilla.com/join')">Play Now!</button>
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
          <h1 style="font-size: 4em;">Bedrock and Java Supported!</h1>
        </section>
        <section class="center" style="position: relative; background: linear-gradient(330deg, rgb(15,19,28), rgb(30 39 58)); border-radius: 50px;">
          <img id="frog" class="hide-mobile" src="/assets/images/frog.webp" alt="Minecraft Frog">
          <div>
            <h3>About Us</h3>
            <p>We are Minecraft players with almost 20 years combined experience running Minecraft servers. SemiVanilla MC is an old-school survival server with some classic addons, like mcMMO and land claiming, done to perfection.</p>
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
            <p>Asthonia is our PVE-only survival server. This is a casual server inspired by classic survival servers of the past. Asthonia offers RPG skills and abilities, custom enchants, and land claiming, in a vanilla 1.19.2 world.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>Khavalon</h3>
            <p>Khavalon is our PVP-enabled survival server. Khavalon offers all the same features as Asthonia, with RPG elements and land claiming, but adds an additional challenge for those who want it - PVP is on outside of claims.</p>
          </div>
          <div>
            <img class="wide" src="/assets/images/khavalon-logo.webp" alt="Khavalon Logo" />
          </div>
        </section>
      </div>
      <div class="content" style="background: linear-gradient(var(--primary) 50%, var(--secondary) 50%); margin-bottom: 0px; width: 100%; max-width: 100%;">
        <section class="center" style="position: relative; background: linear-gradient(90deg, rgb(24 12 32), rgb(73 37 96)); border-radius: 50px; flex-direction: column; width: auto; max-width: 90%;">
          <img id="allay" src="/assets/images/allay.webp" alt="Minecraft Allay">
          <h4 style="padding: 0px 30px;">JOIN OUR DISCORD!</h4>
          <a href="https://discord.gg/3WzZ3x6wGp" target="_blank"><button type="button" style="margin: 20px 0 0 0;">Join Discord!</button></a>
        </section>
      </div>
      <div class="overlay">
        <div class="overlay-bg" onclick="overlayDismiss()"></div>
        <div class="overlay-fg">
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
