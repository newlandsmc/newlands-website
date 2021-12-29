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
    <link rel="stylesheet" href="/assets/css/style.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-492PDMS8SH"></script> -->
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-492PDMS8SH');
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
      <div class="sub-title" id="sub-title-rules">
        <div>
          <h1>Server Rules</h1>
          <h2>To sustain an ejoyable experience for all...</h2>
        </div>
      </div>
      <div class="content" id="rules">
        <section>
          <h3>Play Fair</h3>
          <p>Cheats, hacks, bots, and mods are not allowed. Exploit glitches are not allowed.</p>
          <p>Defrauding, trolling, win trading, and falsely reporting others is not allowed.</p>
        </section>
        <div style="width: 200px; height: 3px; background-color: #ff674d;"></div>
        <section>
          <h3>Be Kind</h3>
          <p>No harassment, bullying, aggression, insults, threats, verbal abuse, hateful speech.</p>
          <p>Player traps are not allowed in the wild.</p>
        </section>
        <div style="width: 200px; height: 3px; background-color: #ff674d;"></div>
        <section>
          <h3>That's it.</h3>
        </section>
        <button type="button" id="copybutton" onclick="copyToClipboard()">Play Now</button>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
