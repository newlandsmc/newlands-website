<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Studios | Vote</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script async src="/assets/javascript/button_clicked.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      .content {
        margin-top: 30px;
        align-items: flex-start;
        flex-wrap: nowrap;
      }
      .content p, .content h3 {
        margin: 0;
        min-height: 2.5em;
      }
      section {
        border-radius: 50px;
        margin: 30px;
      }
      #votelinks {
        flex-direction: row;
        justify-content: center;
        flex-wrap: wrap;
        max-width: 600px;
      }

      #votelinks div {
        padding-top: 25px;
        padding-bottom: 25px;
        line-height: 2em;
        text-align: center;
        width: 33%;
        min-width: 250px;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/vote-title.webp); background-position: center;">
        <div>
          <h1>Vote for Us</h1>
          <h2>Earn Rewards Every Day!</h2>
        </div>
      </div>
      <div class="content" id="vote">
        <div class="shadow"></div>
        <section style="position: relative; height: fit-content; background: linear-gradient(90deg, rgb(15,19,28), rgb(30 39 58));" class="center" id="votelinks">
          <img style="position: absolute; right: -10px; bottom: -100px; width: 180px;" class="hide-mobile" src="/assets/images/sweet-berries.webp" alt="Minecraft Sweet Berries">
          <div>
            <h3>minecraft-mp.com</h3>
            <a href="https://minecraft-mp.com/server/298736/vote/" target="_blank"><button type="button" id="vote1" onclick="buttonClicked('vote1')">Vote</button></a>
          </div>
          <div>
            <h3>topmcservers.com</h3>
            <a href="https://topmcservers.com/server/1610/vote" target="_blank"><button type="button" id="vote2" onclick="buttonClicked('vote2')">Vote</button></a>
          </div>
          <div>
            <h3>minelist.net</h3>
            <a href="https://minelist.net/vote/3953" target="_blank"><button type="button" id="vote3" onclick="buttonClicked('vote3')">Vote</button></a>
          </div>
          <div>
            <h3>planetminecraft.com</h3>
            <a href="https://www.planetminecraft.com/server/semivanilla-mc/vote/" target="_blank"><button type="button" id="vote4" onclick="buttonClicked('vote4')">Vote</button></a>
          </div>
          <div>
            <h3>servers-minecraft.net</h3>
            <a href="https://servers-minecraft.net/server-semivanilla-studios-1-18-2-survival.1274/vote" target="_blank"><button type="button" id="vote5" onclick="buttonClicked('vote5')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft.buzz</h3>
            <a href="https://minecraft.buzz/vote/3877" target="_blank"><button type="button" id="vote6" onclick="buttonClicked('vote6')">Vote</button></a>
          </div>
        </section>
        <div id="vote-info" style="max-width: 300px;">
          <section style="background: linear-gradient(90deg, rgb(15 23 28), rgb(30 46 58));" class="center">
            <h3>Reward: Crates</h3>
            <p>Earn up to 7 Crates every day + 1 FREE Premium Crate each week!</p>
            <p>Every vote earns you a Vote Crate. Vote on all 6 sites to receive a Super Vote Crate. Vote 7 days in a row to receive a 
FREE Premium Crate. Learn more: <a href="/features/other/crates/">What's in a Crate?</a></p>
          </section>
          <section style="background: linear-gradient(90deg, rgb(15 27 28), rgb(30 52 58));" class="center">
            <h3>Reddit</h3>
            <p>We are also listed on /r/mcservers! Find our latest post to upvote and comment!</p>
            <p>Note: This site does not grant voting rewards.</p>
            <a href="https://www.reddit.com/user/semivanillamc" target="_blank"><button type="button" id="vote7" onclick="buttonClicked('vote7')">Visit Reddit</button></a>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
