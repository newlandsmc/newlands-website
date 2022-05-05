<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Studios | Asthonia</title>
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
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div id="asthonia" class="sub-title" style="background: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3) ), url(/assets/images/asthonia/starshrew-bg.webp); background-size: cover; background-position: 85%;">
        <div id="landing-title-text" style="text-align: center">
          <img src="/assets/images/asthonia/logo.webp" alt="Asthonia Logo" />
        </div>
      </div>
      <div class="content" id="landing">
        <div class="shadow"></div>
        <section class="center" style="flex-direction: column; max-width: 600px; border-radius: 50px; border: #329dff dotted 3px; margin: 50px;">
          <h1>Friendly Community RPG Survival</h1>
          <p>Asthonia is a PVE survival RPG server focused on having a friendly, inviting community. This is a casual server for those who want an active and friendly community.</p>
        </section>
        <section class="center">
          <div>
            <h3>Friendly Community</h3>
            <p>Team up with others, or adventure alone, the choice is yours! Claim land to protect your base and trust others to let them teleport to it. On Asthonia you are safe around other players, since PVP is off.</p>
          </div>
          <div>
            <img class="small" src="/assets/images/asthonia/landing-pvp.webp" alt="Minecraft Swords" />
          </div>
        </section>
        <section class="center">
          <div>
            <img class="small" src="/assets/images/asthonia/landing-pickaxe.webp" alt="Minecraft Enchanted Pickaxe" />
          </div>
          <div>
            <h3>+ RPG Elements</h3>
            <p>Level up your skills to unlock special abilities. Level up your mana to use them. Enchant your weapons with custom enchantments and use your power to fight off challenging mobs, or summon a boss and defeat them to earn rewards.</p>
          </div>
        </section>
        <section class="center">
          <div>
            <h3>+ Hard Difficulty</h3>
            <p>It wouldn't be survival without a challenge! On Asthonia, we set the difficulty to hard, which means zombies can break through wooden doors, spiders have beneficial status effects, starvation kills, and more!</p>
          </div>
          <div>
            <img class="small" src="/assets/images/asthonia/landing-zombie.webp" alt="Minecraft Zombie" />
          </div>
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
