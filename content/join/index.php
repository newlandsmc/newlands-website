<!doctype html>
<html lang="en">
  <head>
    <title>New Lands Survival | How to Join</title>
    <meta name="description" content="How to join a public Minecraft server on Java Edition or Bedrock! How to enter the IP of a Minecraft server! Provided by New Lands Survival!" />
    <meta property="og:description" content="How to join a public Minecraft server on Java Edition or Bedrock! How to enter the IP of a Minecraft server! Provided by New Lands Survival!" />
    <meta name="twitter:description" content="How to join a public Minecraft server on Java Edition or Bedrock! How to enter the IP of a Minecraft server! Provided by New Lands Survival!" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
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
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      $(document).ready(function () {
        jQuery.getJSON("https://api.mcsrvstat.us/2/play.newlandsmc.com",function(json){
          if (json.online == false) {
          }
          else {
            // success
            document.getElementById('player-count').innerHTML = 'Players Online: ' + json.players.online;
          }
        });
      });
    </script>
    <style>
      .howjoin {
        width: 90%;
      }
      section {
        justify-content: center;
        align-items: center;
      }
      #allay {
        position: absolute;
        right: -80px;
        top: 0px;
        width: 120px;
        margin-top: 0px;
      }
      @media (max-width: 700px) {
        .howjoin {
          width: 100%;
        }
        #allay {
          right: -2px;
          top: -50px;
          width: 80px;
        }
      }
      #player-count {
        align-self: center;
        width: fit-content;
        margin: 4px auto;
        padding: 4px 30px;
        border-radius: 1000px;
        background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90));
        font-family: mctext;
        color: var(--focus);
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: linear-gradient( rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1) ), url(/assets/images/join-title.webp); background-position: 40%;">
        <div>
          <h1>How to Join!</h1>
          <h2>We Support Java and Bedrock!</h2>
          <p id="player-count">Players Online: ...</p>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing">
        <div class="shadow"></div>
        <section>
          <div class="narrow">
            <h3>Java Edition</h3>
            <ol>
              <li>In Minecraft, go to <strong>Multiplayer</strong> and then <strong>Add Server</strong>.</li>
              <li>Enter a name, this can be anything you want!</li>
              <li>Enter "<span style="color: var(--confirm);">play.newlandsmc.com</span>" for the <strong>Server Address</strong>.</li>
              <li>Click <strong>Done</strong>.</li>
              <li>Select our server and join!</li>
            </ol>
          </div>
          <div>
            <img class="howjoin" src="/assets/images/join-java-edition-small.webp" alt="Minecraft Java Edition Screenshot" />
          </div>
        </section>
        <section>
          <div>
            <img class="howjoin" src="/assets/images/join-bedrock-edition-small.webp" alt="Minecraft Bedrock Edition Screenshot" />
          </div>
          <div class="narrow">
            <h3>Bedrock Edition</h3>
            <ol>
              <li>In Minecraft, go to <strong>Play</strong> and then <strong>Servers</strong>.</li>
              <li>Scroll to the bottom and tap on <strong>Add Server</strong>.
              <li>Enter a name, this can be anything you want!</li>
              <li>Enter "<span style="color: var(--confirm);">play.newlandsmc.com</span>" for the <strong>Server Address</strong>. Leave the default port (19132).</li>
              <li>Tap <strong>Play</strong>!</li>
            </ol>
          </div>
        </section>
      </div>
      <div class="content" style="width: 100%; max-width: 100%; margin-bottom: 50px !important;">
        <section class="center joinnow" style="position: relative; background: linear-gradient(330deg, rgb(110 14 44), rgb(11 36 90)); border-radius: 50px; flex-direction: column; width: auto; max-width: 70%;">
          <img id="allay" src="/assets/images/allay-small.webp" alt="Minecraft Allay">
          <h4>Join Now!</h4>
          <p style="margin-bottom: 15px;" class="ip">play.newlandsmc.com</p>
          <div style="width:100%">
            <button type="button" class="copyip-button" id="cb1" onclick="copyToClipboard('cb1','play.newlandsmc.com','https://newlandsmc.com/join')">Copy IP!</button>
          </div>
        </section>
      </div>
      <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/ip-overlay.html'); ?>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
