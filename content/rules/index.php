<!doctype html>
<html lang="en">
  <head>
    <title>New Lands Survival | Rules</title>
    <meta name="description" content="Rules and guidelines for the New Lands Survival server. We provide a safe and inclusive environment on our Minecraft server!" />
    <meta property="og:description" content="Rules and guidelines for the New Lands Survival server. We provide a safe and inclusive environment on our Minecraft server!" />
    <meta name="twitter:description" content="Rules and guidelines for the New Lands Survival server. We provide a safe and inclusive environment on our Minecraft server!" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script async defer type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      document.getElementById('nav-rules').setAttribute('class','active');
    </script>
    <style>
      section {
        border-radius: 50px;
        margin: 0px;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/assets/images/rules-title.webp); background-position: 50% 40%;">
        <div>
          <h1>Server Rules</h1>
          <h2>Please follow these server rules</h2>
        </div>
      </div>
      <div class="content">
        <div class="shadow"></div>
        <!-- <section>
          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4636767855327079" crossorigin="anonymous"></script>
          <ins class="adsbygoogle"
            style="display:block; width:100%;"
            data-ad-client="ca-pub-4636767855327079"
            data-ad-slot="6713593253"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </section> -->
        <section style="padding-top: 30px;">
          <h3>Be Careful!</h3>
          <ul>
            <li class="rules">Unclaimed builds can be looted, reclaimed, or torn down!** (Do NOT intentionally destroy unclaimed builds just for the sake of destroying them!)</li>
            <li class="rules">Trusting players is at-your-own-risk! (Set up your land claim roles and areas carefully!)</li>
            <li class="rules">Trades and job agreements are at-your-own-risk! (Use the /trade GUI to avoid scams.)</li>
            <li class="rules">Do not log out somewhere unsafe! (We are not responsible for deaths on log-in due to missing blocks, placed lava, etc.)</li>
          </ul>
        </section>
        <section>
          <h3>Be Kind!</h3>
          <ul>
            <li class="rules">Player traps are prohibited! ("Player traps" = something designed to kill or trap a player that isn't an obvious threat until after it has triggered.)</li>
            <li class="rules">Harassment, threats, verbal abuse, hateful speech, and offensive generalizations are prohibited!</li>
            <li class="rules">No bullying!</li>
            <li class="rules">No trolling or antagonizing! (Do not participate in actions intended only to upset others.)</li>
            <li class="rules">Keep other's feelings in mind when using chat! (Staff have the right to shut down a conversation if needed.)</li>
            <li class="rules">Do not spam!</li>
          </ul>
        </section>
        <section>
          <h3>Be Fair!</h3>
          <ul>
            <li class="rules">Any hack or mod that gives you an unfair advantage in the game is not allowed!
              <ul>
                <li class="rules"><strong>Banned mods:</strong> minimaps</li>
                <li class="rules"><strong>Approved mods:</strong> performance enhancers (like Optifine), shaders, gameplay recording, inventory management, status HUDs</li>
              </ul>
            </li>
            <li class="rules">Do not exploit bugs in our server's features. Vanilla exploit are allowed, unless they involve duplicating items!</li>
            <li class="rules">If you share your account, you are responsible for anything that happens on your account!</li>
            <li class="rules">Alt accounts are prohibited!</li>
          </ul>
        </section>
        <section>
          <img style="position: absolute; left: -150px; bottom: -150px; width: 180px;" class="hide-mobile" src="/assets/images/warden.webp" alt="Minecraft Warden">
          <h3>Be Considerate!</h3>
          <ul>
            <li class="rules">Do not discuss or appeal bans/mutes/etc in public channels. (An appeal email is provided in every punishment message, or on the Discord <strong>#faq</strong> page.)</li>
            <li class="rules">Do not intentionally disparage, tarnish, or otherwise harm the server or staff.</li>
            <li class="rules">Do not advertise other Minecraft servers or Discords.</li>
            <li class="rules">Please only use English in public channels. (We are generally unable to moderate other languages.)</li>
          </ul>
        </section>
        <!-- <section>
          <ins class="adsbygoogle"
            style="display:block; width:100%;"
            data-ad-client="ca-pub-4636767855327079"
            data-ad-slot="8430101232"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
          <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </section> -->
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
