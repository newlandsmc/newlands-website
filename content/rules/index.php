<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server - Rules</title>
    <meta charset="utf-8" />
    <meta name="description" content="Welcome to SemiVanilla MC! We are a semi-vanilla survival 1.18.1 Java Minecraft server hosting hard difficulty survival with RPG elements and competitive multiplayer. Server Rules: Be kind and play fair ..." />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A semi-vanilla survival 1.18.1 Java Minecraft server with RPG elements and competitive multiplayer. Server Rules: ..." />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A semi-vanilla survival 1.18.1 Java Minecraft server with RPG elements and competitive multiplayer. Server Rules: ..." />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#d61f00" />
    <meta name="keywords" content="semi, vanilla, java, minecraft, mc, survival, rpg, multiplayer, mcmmo, pvp, pve" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/fonts.css" />
    <link rel="stylesheet" href="/assets/css/reset.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/mobile.css" />
    <link rel="stylesheet" href="/assets/css/cookienotice.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-492PDMS8SH"></script> -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-492PDMS8SH');
    </script>
    <script>
      document.addEventListener("touchstart", function(){}, true);
    </script>
    <script type="text/javascript">
      function downloadJSAtOnload() {
        var nav = document.createElement("script");
        nav.src = "/assets/javascript/nav.js";
        nav.type = "module";
        document.body.appendChild(nav);
        var cookie_notice = document.createElement("script");
        cookie_notice.src = "/assets/javascript/cookie_notice.js";
        document.body.appendChild(cookie_notice);
        var gtag = document.createElement("script");
        gtag.src = "https://www.googletagmanager.com/gtag/js?id=G-492PDMS8SH";
        document.body.appendChild(gtag);
      }
      if (window.addEventListener)
      window.addEventListener("load", downloadJSAtOnload, false);
      else if (window.attachEvent)
      window.attachEvent("onload", downloadJSAtOnload);
      else window.onload = downloadJSAtOnload;
    </script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title">
        <div>
          <h1>Server Rules</h1>
          <h2>To sustain an enjoyable experience for all...</h2>
        </div>
      </div>
      <div class="content" id="rules">
        <section>
          <h3>Play Fair</h3>
          <p>Any hack or mod that gives you an unfair advantage in the game is not allowed. Exploit glitches are not allowed. Only the following mods may be used: Optifine, shaders, gameplay recording, inventory management, status HUDs.</p>
          <p>Defrauding, trolling, or falsely reporting others is prohibited. Do not attempt to trick or scam others.</p>
        </section>
        <section class="divider">
          <div style="width: 200px; border-top: 3px dotted #ff674d;"></div>
        </section>
        <section>
          <h3>Be Kind</h3>
          <p>Harassment, threats, verbal abuse, and hateful speech are not tolerated. Sexist, racist, homophobic, and broad, offensive generalizations about groups of people are prohibited.</p>
          <p>Actions that provide no gain, and only harm others, also known as "Griefing", is prohibited.</p>
          <p>Player traps are prohibited in the wild! You may only create player traps within your own home.</p>
        </section>
        <section class="divider">
          <div style="width: 200px; border-top: 3px dotted #ff674d;""></div>
        </section>
        <section>
          <h3>Respect the Server</h3>
          <p>Do not intentionally disparage, tarnish, or otherwise harm the server.</p>
          <p>Do not advertise other Minecraft servers or Discords.</p>
        </section>
        <section class="divider">
          <div style="width: 200px; border-top: 3px dotted #ff674d;""></div>
        </section>
        <section>
          <h3>That's it.</h3>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
