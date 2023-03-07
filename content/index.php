<!doctype html>
<html lang="en">
  <head>
    <title>New Lands Survival | 1.19.3 Minecraft Survival Server</title>
    <meta name="description" content="New Lands Survival is a hard difficulty survival Minecraft server with a relaxing vibe and friendly community! We always run on the latest version! Grief protection, optional PVP, and more!" />
    <meta property="og:description" content="New Lands Survival is a hard difficulty survival Minecraft server with a relaxing vibe and friendly community! We always run on the latest version! Grief protection, optional PVP, and more!" />
    <meta name="twitter:description" content="New Lands Survival is a hard difficulty survival Minecraft server with a relaxing vibe and friendly community! We always run on the latest version! Grief protection, optional PVP, and more!" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer>
      function copyToClipboard(id,ip) {
        var aux = document.createElement("input");
        aux.setAttribute("value", ip);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "var(--action-taken)";
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
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
      @media (max-width: 700px) {
        #allay {
          right: -2px;
          top: -50px;
          width: 80px;
        }
        section img {
          margin: 30px auto !important;
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
          <img class="landing-logo" src="/assets/images/logo.webp" alt="New Lands Survival Logo" />
          <h1 style="margin: 30px;">1.19.3 Survival Community!</h1>
          <p class="ip">play.newlandsmc.com</p>
          <div style="width:100%">
            <button type="button" class="copyip-button" id="cb1" onclick="copyToClipboard('cb1','play.newlandsmc.com','https://newlandsmc.com/join')">Copy IP!</button>
          </div>
          <a aria-label="Scroll down to see more content" id="scrollbutton" class="scroll" href="#welcome">
            <span></span>
            <p style="display: none;">Learn More</p>
          </a>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing">
        <div class="shadow"></div>
        <section class="center" style="flex-direction: column; margin: 0 0 80px 0;">
          <h2 id="grabber">Bedrock, Java, and ViveCraft Support!</h2>
        </section>
        <section class="center" style="position: relative; background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90)); border-radius: 50px;">
          <img id="frog" class="hide-mobile" src="/assets/images/frog.webp" alt="Minecraft Frog">
          <div>
            <h3>Welcome!</h3>
            <p>New Lands Survival is a public survival server with a relaxing vibe, friendly community, and hard difficulty survival! We always run on the <strong>latest version</strong>, too! Scroll down to learn more.</p>
          </div>
          <div>
            <img class="small hide-mobile-2" src="/assets/images/campfire.webp" alt="Minecraft campfire" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="wide" style="-webkit-transform: scaleX(-1);" src="/assets/images/features-steve.webp" alt="Digital art of Minecraft Steve with glowing diamond sword" />
          </div>
          <div>
            <h3>Community</h3>
            <p>Community is at the heart of everything we do! We believe the most important ingredient to a survival server is a community you want to be part of. We're proud to be a friendly and inclusive server where everyone is welcome.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>Safety</h3>
            <p>We protect your game with optional PVP, self-service land protection, and active admins ready to help! Your builds are completely safe with <a href="/features/claiming">GriefPrevention</a> land claiming, and PVP is always off unless you choose to enable it.</p>
          </div>
          <div>
            <img class="wide" src="/assets/images/features-castle.webp" alt="Digital art of Minecraft style castle" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="medium" src="/assets/images/features-map.webp" alt="Digital art of a Minecraft map" />
          </div>
          <div>
            <h3>Adventure</h3>
            <p>There's a whole world to explore, <a href="/features/enchants/">custom enchantments</a> to discover, and <a href="/features/skills">skills</a> to level up! Our world is 50K by 50K and every player starts somewhere new... where will your adventure begin?</p>
          </div>
        </section>
      </div>
      <div class="content" style="margin-top: 50px; margin-bottom: 0px; width: 100%; max-width: 100%;">
        <section class="center joinnow" style="position: relative; background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90)); border-radius: 50px; flex-direction: column; width: auto; max-width: 70%;">
          <img id="allay" src="/assets/images/allay.webp" alt="Minecraft Allay">
          <h4>Join Now!</h4>
          <p style="margin-bottom: 15px;" class="ip">play.newlandsmc.com</p>
          <div style="width:100%">
            <button type="button" class="copyip-button" id= "cb2" onclick="copyToClipboard('cb2','play.newlandsmc.com','https://newlandsmc.com/join')">Copy IP!</button>
          </div>
        </section>
      </div>
      <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/ip-overlay.html'); ?>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
