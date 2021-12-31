<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server</title>
    <meta charset="utf-8" />
    <meta name="description" content="A 1.18.1 hard mode survival Minecraft server with RPG elements and competitive multiplayer." />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A 1.18.1 hard mode survival Minecraft server with RPG elements and competitive multiplayer." />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A 1.18.1 hard mode survival Minecraft server with RPG elements and competitive multiplayer." />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#d61f00" />
    <meta name="keywords" content="minecraft, mc, survival, server, semivanilla, rpg, multiplayer, hardmode" />
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
    <style>
      @media (min-width: 750px) {
        nav {
          background-color: rgb(0 0 0 / 30%);
        }
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <video id="landing-title-video" autoplay loop muted src="/assets/videos/landing-title-video.mp4" poster="/assets/images/landing-title.jpg"></video>
      <div class="title" id="title-landing">
        <div>
          <img src="/assets/images/logo.webp" alt="SemiVanilla MC Logo" style="max-width: 50%; margin: auto;" />
          <h1>You awake in a strange place...</h1>
          <h2>play.semivanilla.com</h2>
          <div style="width: 100%; text-align: center;">
            <button type="button" id="copybutton" onclick="copyToClipboard()">Play Now</button>
          </div>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
