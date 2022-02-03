<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Hard Survival | RPG</title>
    <meta charset="utf-8" />
    <meta name="description" content="A semi-vanilla 1.18.1 survival Minecraft server. Hard survival. RPG skills and abilities. PVP. Java + Bedrock support! A challenging adventure awaits... Join Now!" />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla Minecraft Server" />
    <meta property="og:description" content="A semi-vanilla 1.18.1 survival Minecraft server. Hard survival. RPG skills. PVP. Java + Bedrock support!" />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla Minecraft Server" />
    <meta name="twitter:description" content="A semi-vanilla 1.18.1 survival Minecraft server. Hard survival. RPG skills. PVP. Java + Bedrock support!" />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://semivanilla.com/assets/images/apple-touch-icon.png">
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/cookienotice.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-492PDMS8SH"></script>
    <script async>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-492PDMS8SH');
    </script>
    <script async>
      document.addEventListener("touchstart", function(){}, true);
    </script>
    <script async defer>
      function copyToClipboard(id) {
        var aux = document.createElement("input");
        aux.setAttribute("value", "play.semivanilla.com");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "#d2a69f";
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async src="/assets/javascript/cookie_notice.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script defer async type="module" src="/assets/javascript/landing_page.js"></script>
    <style>
      @media (min-width: 650px) {
        nav {
          background-color: rgb(0 0 0 / 30%);
        }
      }
      #scrollbutton {
        position: absolute;
        bottom: 50px; 
        left: 50%;
        z-index: 2;
        display: inline-block;
        -webkit-transform: translate(0, -50%);
        transform: translate(0, -50%);
        color: #fff;
        transition: opacity .3s;
        padding-top: 40px;
      }
      #scrollbutton:hover {
         opacity: .5;
      }
      #scrollbutton span {
        position: absolute;
        top: 0;
        left: 50%;
        width: 46px;
        height: 46px;
        margin-left: -23px;
        border: 2px solid #fff;
        border-radius: 100%;
        box-sizing: border-box;
      }
      #scrollbutton span::after {
        position: absolute;
        top: 50%;
        left: 50%;
        content: '';
        width: 16px;
        height: 16px;
        margin: -12px 0 0 -8px;
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        box-sizing: border-box;
      }
      #scrollbutton span::before {
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        content: '';
        width: 44px;
        height: 44px;
        box-shadow: 0 0 0 0 rgba(255,255,255,.1);
        border-radius: 100%;
        opacity: 0;
        -webkit-animation: sdb03 3s infinite;
        animation: sdb03 3s infinite;
        box-sizing: border-box;
      }
      @-webkit-keyframes sdb03 {
        0% {
          opacity: 0;
        }
        30% {
          opacity: 1;
        }
        60% {
          box-shadow: 0 0 0 60px rgba(255,255,255,.1);
          opacity: 0;
        }
        100% {
          opacity: 0;
        }
      }
      @keyframes sdb03 {
        0% {
          opacity: 0;
        }
        30% {
          opacity: 1;
        }
        60% {
          box-shadow: 0 0 0 60px rgba(255,255,255,.1);
          opacity: 0;
        }
        100% {
          opacity: 0;
        }
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background-image: url(/assets/images/landing-title.webp);">
        <video id="landing-title-video" autoplay loop muted hidden-src="/assets/videos/landing-title-video.mp4" poster="/assets/images/landing-title.webp"></video>
        <div>
          <img id="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" />
          <h1 class="hide-mobile-2">You awake in a strange place...</h1>
          <h2 class="hide-mobile" id="player-count">0 Players Online</h2>
          <h2>play.semivanilla.com</h2>
          <div style="width: 100%; text-align: center;">
            <button type="button" id="copybutton" onclick="copyToClipboard('copybutton')">Play Now</button>
          </div>
          <a id="scrollbutton" href="#welcome">
            <span></span>
            <p style="display: none;">Learn More</p>
          </a>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing">
        <section class="center" style="flex-direction: column; max-width: 600px;">
          <h3>Welcome to SemiVanilla</h3>
          <p>A semi-vanilla 1.18.1 survival Minecraft server. Hard survival. RPG skills and abilities. PVP. Java + Bedrock support. A challenging adventure awaits...</p>
        </section>
        <section class="center">
          <div class="left">
            <h3>Hard Difficulty Survival</h3>
            <p>Zombies can break through wooden doors and spawn reinforcements. Spiders have beneficial status effects. Villagers turn into zombie villagers when killed. Hostile mobs deal more damage. Starvation kills.</p>
          </div>
          <div class="right">
            <img src="/assets/images/landing-zombie.webp" alt="Minecraft Zombie" />
          </div>
        </section>
        <section class="center">
          <div class="left">
            <img src="/assets/images/landing-pickaxe.webp" alt="Minecraft Enchanted Pickaxe" />
          </div>
          <div class="right">
            <h3>+ RPG Elements</h3>
            <p>Level up your skills to unlock special abilities. Level up your mana to use them. Enchant your weapons with custom enchantments and use your power to fight off challenging mobs, or summon a boss and defeat them to earn rewards.</p>
          </div>
        </section>
        <section class="center">
          <div class="left">
            <h3>+ Competitive Multiplayer</h3>
            <p>Hunt down other players and you'll become a bounty. Hunt down Bounties and you'll become a hero. Team up with others to build your base and strengthen your defenses, or go rogue and fight anyone who dares approach.</p>
          </div>
          <div class="right">
            <img src="/assets/images/landing-pvp.webp" alt="Minecraft Swords" />
          </div>
        </section>
        <section class="center" style="flex-direction: column; max-width: 600px;">
          <h3>Redefining Semi-Vanilla</h3>
          <p>A unique survival experience that builds on the vanilla survival game. A challenging adventure awaits... do you accept?</p>
          <button type="button" id="copybutton2" onclick="copyToClipboard('copybutton2')">Play Now</button>
        </section>
      </div>
      <div class="overlay">
        <div>
          <h3>play.semivanilla.com</h3>
          <p>Copied to Clipboard</p>
          <button type="button" onclick="overlayDismiss()">Okay</button>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
