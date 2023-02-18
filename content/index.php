<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla SMP | 1.19.3 Minecraft Survival Server</title>
    <meta name="description" content="SemiVanilla SMP is a public survival Minecraft server with a relaxing vibe and friendly community! We always run on the latest version! Grief protection, optional PVP, and more!" />
    <meta property="og:description" content="SemiVanilla SMP is a public survival Minecraft server with a relaxing vibe and friendly community! We always run on the latest version! Grief protection, optional PVP, and more!" />
    <meta name="twitter:description" content="SemiVanilla SMP is a public survival Minecraft server with a relaxing vibe and friendly community! We always run on the latest version! Grief protection, optional PVP, and more!" />
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
      section img {
        margin: 0px auto;
      }
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
          <img class="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla SMP Logo" />
          <h2 style="margin: 30px;">1.19.3 Survival Community!</h2>
          <p class="ip">play.semivanilla.com</p>
          <div style="width:100%">
            <button type="button" id="asthonia-button" onclick="copyToClipboard('asthonia-button','play.semivanilla.com','https://semivanilla.com/join')">Copy IP!</button>
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
          <h1 id="grabber">Bedrock and Java Support!</h1>
        </section>
        <section class="center" style="position: relative; background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90)); border-radius: 50px;">
          <img id="frog" class="hide-mobile" src="/assets/images/frog.webp" alt="Minecraft Frog">
          <div>
            <h3>Welcome!</h3>
            <p>SemiVanilla SMP is a public survival server with a relaxing vibe and friendly community! We always run on the <strong>latest version</strong> and offer many unique features... scroll down to learn more!</p>
          </div>
          <div>
            <img class="small" src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="medium" src="/assets/images/features-map.webp" alt="Digital art of a Minecraft map" />
          </div>
          <div>
            <h3>Unique Spawns</h3>
            <p>Every player starts somewhere new! We do not have a main spawn, instead every player starts somewhere in the survival world, just like vanilla Minecraft!</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>RPG Skills</h3>
            <p>Level up in everything you do, from tree cutting to sword fighting, and unlock special abilities in those skills. Use mana to activate your abilities or apply custom enchants to your items for a permanent effect!</p>
          </div>
          <div>
            <img class="wide" src="/assets/images/features-steve.webp" alt="Digital art of Minecraft Steve with glowing diamond sword" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="wide" src="/assets/images/features-castle.webp" alt="Digital art of Minecraft style castle" />
          </div>
          <div>
            <h3>Land Protection</h3>
            <p>Protect your hard work and have peace of mind when you are offline. Claim land using a golden shovel and everything inside your claim is safe from all types of griefing!</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>And <a href="/features/">More</a>...</h3>
            <!-- <p>Learn about all of our features by exploring the "Features" pages: <a href="/features/claiming">Land Claiming</a>, <a href="/features/skills">Skills + Abilities</a>, <a href="/features/enchants">Custom Enchants</a>, <a href="/features/map">Live Map</a>, and <a href="/features/other">More</a>.</p> -->
          </div>
        </section>
      </div>
      <div class="content" style=" margin-bottom: 0px; width: 100%; max-width: 100%;">
        <section class="center" style="position: relative; background: linear-gradient(90deg, rgb(24 12 32), rgb(73 37 96)); border-radius: 50px; flex-direction: column; width: auto; max-width: 90%;">
          <img id="allay" src="/assets/images/allay.webp" alt="Minecraft Allay">
          <h4 style="padding: 0px 30px;">WE'RE ON DISCORD!</h4>
          <a href="https://discord.gg/3WzZ3x6wGp" target="_blank"><button type="button" style="margin: 20px 0 0 0;">Join our Discord!</button></a>
        </section>
      </div>
      <div class="overlay">
        <div class="overlay-bg" onclick="overlayDismiss()"></div>
        <div class="overlay-fg">
          <p id="overlay-ip" class="ip">play.semivanilla.com</p>
          <p style="margin:10px 0 10px 0;">IP Copied to Clipboard!</p>
          <a id="overlay-more-help"><button type="button">How to Join?</button></a>
          <div id="overlay-close" onclick="overlayDismiss()"></div>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
