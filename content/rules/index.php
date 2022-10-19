<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla MC | Rules</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      section {
        border-radius: 50px;
        margin: 30px;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title">
        <div>
          <h1>Rules</h1>
          <h2>Be Careful, Kind, and Fair</h2>
        </div>
      </div>
      <div class="content" style="margin-top: 30px;">
        <div class="shadow"></div>
        <section style="background: linear-gradient(210deg, rgb(15,19,28), rgb(30,39,58));">
          <h3>Be Careful</h3>
          <ul>
            <li class="rules">Trusting players is at-your-own-risk! (Set up your land claim roles and areas carefully!)</li>
            <li class="rules">Trades and job agreements are at-your-own-risk! (Use the /trade GUI to avoid scams.)</li>
            <li class="rules">Unclaimed builds can be griefed*! Make sure you protect your home. (Significant griefing done to people you know are active and with the intent to harm is not allowed.)</li>
            <li class="rules">Do not log out somewhere unsafe! (We are not responsible for deaths on log-in due to missing blocks, placed lava, etc.)</li>
          </ul>
        </section>
        <section style="background: linear-gradient(210deg, rgb(15 23 28), rgb(30 46 58));">
          <h3>Be Kind</h3>
          <ul>
            <li class="rules">Player traps are prohibited. ("Player traps" = something designed to kill or trap a player that isn't an obvious threat until after it has triggered.)</li>
            <li class="rules">Harassment, threats, verbal abuse, hateful speech, and offensive generalizations are prohibited.</li>
            <li class="rules">No bullying. (Do not spawn camp, repeatedly kill the same player, or target new players.)</li>
            <li class="rules">No trolling or antagonizing. (Do not participate in actions intended only to upset others.)</li>
            <li class="rules">Keep other's feelings in mind when using chat. (Staff have the right to shut down a conversation if needed.)</li>
            <li class="rules">Do not spam.</li>
          </ul>
        </section>
        <section style="background: linear-gradient(210deg, rgb(15 27 28), rgb(30 52 58));">
          <h3>Be Fair</h3>
          <ul>
            <li class="rules">Any hack or mod that gives you an unfair advantage in the game is not allowed.
              <ul>
                <li class="rules"><strong>Banned mods:</strong> minimaps</li>
                <li class="rules"><strong>Approved mods:</strong> performance enhancers (like Optifine), shaders, gameplay recording, inventory management, status HUDs</li>
              </ul>
            </li>
            <li class="rules">Do not exploit bugs in our server's features. Vanilla exploit are allowed, unless they involve duplicating items.</li>
            <li class="rules">If you share your account, you are responsible for anything that happens on your account.</li>
            <li class="rules">Do not purposely sit AFK on the server. (no AFK machines, farms, etc.)</li>
            <li class="rules">Alt accounts are prohibited.</li>
          </ul>
        </section>
        <section style="position: relative; background: linear-gradient(210deg, rgb(15 28 24), rgb(30 58 53));">
          <img style="position: absolute; left: -150px; bottom: -150px; width: 180px;" class="hide-mobile" src="/assets/images/warden.webp" alt="Minecraft Warden">
          <h3>Be SVMC</h3>
          <ul>
            <li class="rules">Do not discuss or appeal bans/mutes/etc in public channels. (An appeal email is provided in every punishment message, or on the Discord <strong>#faq</strong> page.)</li>
            <li class="rules">Do not intentionally disparage, tarnish, or otherwise harm the server or staff.</li>
            <li class="rules">Do not advertise other Minecraft servers or Discords.</li>
            <li class="rules">Please only use English in public channels. (We are generally unable to moderate other languages.)</li>
          </ul>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
