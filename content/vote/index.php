<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Vote</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script async src="/assets/javascript/button_clicked.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      .content p, .content h3 {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/vote-title-oil.webp); background-position: center;">
        <div>
          <h1>Vote for Us</h1>
          <h2>Earn rewards in-game every day!</h2>
        </div>
      </div>
      <div class="content" id="vote">
        <section class="center">
          <h3>Reward: Instant Expeditions</h3>
          <p>Every day you vote on all 6 sites you will instantly complete a maximum-reward expedition! Do /spoils in-game to claim your reward. Looking to automatically complete instant expeditions every day? Check out the store item: <a href="https://store.semivanilla.com/package/4846618" target="_blank">Instant Expeditions</a></p>
          <p>Note: Purchasing lifetime Instant Expeditions replaces voting rewards.</p>
        </section>
        <section class="center" id="votelinks">
          <div>
            <h3>minecraftservers.org</h3>
            <a href="https://minecraftservers.org/vote/630602" target="_blank"><button type="button" id="vote1" onclick="buttonClicked('vote1')">Vote</button></a>
          </div>
          <div>
            <h3>topmcservers.com</h3>
            <a href="https://topmcservers.com/server/1610/vote" target="_blank"><button type="button" id="vote2" onclick="buttonClicked('vote2')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft-server-list.com</h3>
            <a href="https://minecraft-server-list.com/server/484896/vote/" target="_blank"><button type="button" id="vote3" onclick="buttonClicked('vote3')">Vote</button></a>
          </div>
          <div>
            <h3>planetminecraft.com</h3>
            <a href="https://www.planetminecraft.com/server/semivanilla-mc/vote/" target="_blank"><button type="button" id="vote4" onclick="buttonClicked('vote4')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft-mp.com</h3>
            <a href="https://minecraft-mp.com/server/298736/vote/" target="_blank"><button type="button" id="vote5" onclick="buttonClicked('vote5')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft-server.net</h3>
            <a href="https://minecraft-server.net/vote/semivanilla_mc/" target="_blank"><button type="button" id="vote6" onclick="buttonClicked('vote6')">Vote</button></a>
          </div>
        </section>
        <section class="center">
          <h3>Reddit</h3>
          <p>We are also listed on /r/mcservers! Find our latest post to upvote and comment!</p>
          <p>Note: This site does not grant voting rewards.</p>
          <a href="https://www.reddit.com/user/semivanillamc" target="_blank"><button type="button" id="vote7" onclick="buttonClicked('vote7')">Visit Reddit</button></a>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
