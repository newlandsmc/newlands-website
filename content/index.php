<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Hard Survival | RPG</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
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
  </head>
  <body id="landing-body">
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background-image: url(/assets/images/landing-title.webp);">
        <video id="landing-title-video" autoplay loop muted hidden-src="/assets/videos/landing-title-video.mp4" poster="/assets/images/landing-title.webp"></video>
        <div id="landing-title-text" style="text-align: center">
          <img id="landing-logo" src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" />
          <h1 class="hide-mobile-2">You awake in a strange place...</h1>
          <h2 class="hide-mobile" id="player-count">0 Players Online</h2>
          <p class="ip">play.semivanilla.com</p>
          <div style="width:100%">
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
          <p class="ip">play.semivanilla.com</p>
          <p>Copied to Clipboard</p>
          <button type="button" onclick="overlayDismiss()">Okay</button>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
