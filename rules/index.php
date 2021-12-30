<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server - Rules</title>
    <meta charset="utf-8" />
    <meta name="description" content="A 1.18.1 hard mode survival Minecraft server with RPG elements and competitive multiplayer. Server Rules: ..." />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A 1.18.1 hard mode survival Minecraft server with RPG elements and competitive multiplayer. Server Rules: ..." />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A 1.18.1 hard mode survival Minecraft server with RPG elements and competitive multiplayer. Server Rules: ..." />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#d61f00" />
    <meta name="keywords" content="minecraft, mc, survival, server, semivanilla, rpg, multiplayer, hardmode" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/fonts.css" />
    <link rel="stylesheet" href="/assets/css/reset.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/mobile.css" />
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
        var copy_to_clipboard = document.createElement("script");
        copy_to_clipboard.src = "/assets/javascript/copy_to_clipboard.js";
        document.body.appendChild(copy_to_clipboard);
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
          <h2>To sustain an ejoyable experience for all...</h2>
        </div>
      </div>
      <div class="content" id="rules">
        <section>
          <h3>Play Fair</h3>
          <p>Any hack or mod that gives you an unfair advantage in the game is not allowed. Exploit glitches are not allowed. Only the following mods may be used: Optifine, shaders, gameplay recording, inventory management, status HUDs.</p>
          <p>Defrauding, trolling, or falsely reporting others is prohibited. Do not attempt to trick or scam others.</p>
        </section>
        <div style="width: 200px; border-top: 3px dotted #ff674d;"></div>
        <section>
          <h3>Be Kind</h3>
          <p>No harassment, threats, verbal abuse, or hateful speech. Sexist, racist, homophobic, and broad, offensive generalizations about groups of people are prohibited.</p>
          <p>Player traps are prohibited in the wild! You may only create player traps within your own home.</p>
        </section>
        <div style="width: 200px; border-top: 3px dotted #ff674d;""></div>
        <section>
          <h3>That's it.</h3>
        </section>
        <button type="button" id="copybutton" onclick="copyToClipboard()">Play Now</button>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
