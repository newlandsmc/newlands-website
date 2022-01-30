<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server | Hard Difficulty Survival | RPG</title>
    <meta charset="utf-8" />
    <meta name="description" content="A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure. Join Now!" />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure." />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure." />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://semivanilla.com/assets/images/apple-touch-icon.png">
    <meta name="theme-color" content="#000000" />
    <meta name="keywords" content="semi, vanilla, minecraft, survival, server, bedrock, java, pvp, pve, mcmmo, rpg, multiplayer" />
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
        document.getElementById(id).innerHTML = 'IP Copied!';
        document.getElementById(id).style.backgroundColor = "#d2a69f";
      }
    </script>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async src="/assets/javascript/cookie_notice.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script defer async type="module" src="/assets/javascript/landing_page.js"></script>
    <style>
      @media (min-width: 750px) {
        nav {
          background-color: rgb(0 0 0 / 30%);
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
          <img src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" style="max-width: 50%; margin: auto;" />
          <h1>You awake in a strange place...</h1>
          <h2 id="player-count">0 Players Online</h2>
          <h2>play.semivanilla.com</h2>
          <div style="width: 100%; text-align: center;">
            <button type="button" id="copybutton" onclick="copyToClipboard('copybutton')">Play Now</button>
          </div>
        </div>
      </div>
      <div class="content" id="landing">
        <section class="center">
          <div class="left">
            <h3>Hard Difficulty Survival</h3>
            <p>Zombies can break through wooden doors and spawn reinforcements. Spiders have beneficial status effects. Villagers turn into zombie villagers when killed. Hostile mobs deal more damage. Starvation kills. </p>
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
            <p>Level up your defense to unlock special abilities. Level up your mana to use them. Fight off random boss mobs, or summon a king boss and defeat them to earn powerful rewards.</p>
          </div>
        </section>
        <section class="center">
          <div class="left">
            <h3>+ Competitive Multiplayer</h3>
            <p>Hunt down players and you'll become a bounty. Hunt down Bounties and you'll be a hero. Team up with others to build your base and strengthen your defenses.</p>
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
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
