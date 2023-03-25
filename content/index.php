<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla | 1.19.4 Minecraft Survival Server</title>
    <meta name="description" content="SemiVanilla is a new Minecraft server with bare minimum plugins and modifications to the vanilla experience. The goal is to provide the best semivanilla experience out there!" />
    <meta property="og:description" content="SemiVanilla is a new Minecraft server with bare minimum plugins and modifications to the vanilla experience. The goal is to provide the best semivanilla experience out there!" />
    <meta name="twitter:description" content="SemiVanilla is a new Minecraft server with bare minimum plugins and modifications to the vanilla experience. The goal is to provide the best semivanilla experience out there!" />
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
    <script async defer type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      document.getElementById('nav-home').setAttribute('class','active');
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
          margin: 30px auto;
        }
      }
    </style>
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background: linear-gradient( rgba(0, 0, 0, 0) 45%, rgba(0, 0, 0, 1) ), url(/assets/images/landing-title.webp); background-size: cover; background-position: 40%;">
      </div>
      <div class="title" style="position: absolute; z-index: 3;">
        <div class="landing-title-text" style="text-align: center;">
          <img class="landing-logo hide-mobile-2" src="/assets/images/logo.webp" alt="SemiVanilla Logo" />
          <h1 style="margin: 30px;">1.19.4 Survival Server!</h1>
          <p class="ip">play.semivanilla.com</p>
          <div style="width:100%">
            <button type="button" class="copyip-button" id="cb1" onclick="copyToClipboard('cb1','play.semivanilla.com','https://semivanilla.com/join')">Copy IP!</button>
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
          <h2 id="grabber">A real nearly-vanilla survival experience.</h2>
        </section>
        <section class="center" style="position: relative; background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90)); border-radius: 25px;">
          <img id="frog" class="hide-mobile" src="/assets/images/villager.webp" alt="Minecraft Villager">
          <div>
            <h3>True SemiVanilla</h3>
            <p>SemiVanilla is a new Minecraft server with bare minimum plugins and modifications to the vanilla experience The goal is to provide the best "semivanilla" experience out there.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <img class="medium" style="max-width: 70%;" src="/assets/images/features-map.webp" alt="Digital art of a Minecraft map" />
          </div>
          <div>
            <h3>Random Spawn</h3>
            <p>Every player starts somewhere new, there is no main spawn! This gives everyone the same vanilla-like experience when starting out. Our world is 50K by 50K to give everyone room to spread out and the best chance that every new player will start somewhere unique!</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>Land Claiming</h3>
            <p>One of the few non-vanilla features we have is land claiming, and the ability to teleport to your land claims. Your builds are always safe, even when you are offline. <a href="/claiming">Learn more about GriefPrevention here</a>.</p>
          </div>
          <div>
            <img class="wide" style="max-width: 70%;" src="/assets/images/features-castle.webp" alt="Digital art of Minecraft style castle" />
          </div>
        </section>
      </div>
      <div class="content" style="width: 100%; max-width: 100%; margin-bottom: 50px !important;">
        <section class="center joinnow" style="position: relative; background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90)); border-radius: 25px; flex-direction: column; width: auto; max-width: 70%;">
          <img id="allay" src="/assets/images/allay.webp" alt="Minecraft Allay">
          <h4>Join Now!</h4>
          <p style="margin-bottom: 15px;" class="ip">play.semivanilla.com</p>
          <div style="width:100%">
            <button type="button" class="copyip-button" id= "cb2" onclick="copyToClipboard('cb2','play.semivanilla.com','https://semivanilla.com/join')">Copy IP!</button>
          </div>
        </section>
      </div>
      <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/ip-overlay.html'); ?>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
