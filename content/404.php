<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server | 404</title>
    <meta name="robots" content="noindex" />
    <meta charset="utf-8" />
    <meta name="description" content="404 Page Not Found - A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure. Join Now!" />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure." />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure." />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://semivanilla.com/assets/images/apple-touch-icon.png">
    <meta name="theme-color" content="#000000" />
    <meta name="keywords" content="semi, vanilla, minecraft, survival, server, bedrock, java, pvp, pve, mcmmo, rpg, multiplayer" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/cookienotice.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-492PDMS8SH"></script>
    <script async>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-492PDMS8SH');
    </script>
    <script async>
      document.addEventListener("touchstart", function(){}, true);
    </script>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script async src="/assets/javascript/cookie_notice.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script defer async type="module" src="/assets/javascript/landing_page.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background-image: url(/assets/images/404-title.webp);">
        <video id="landing-title-video" autoplay loop muted hidden-src="/assets/videos/404-video.mp4" poster="/assets/images/404-title.jpg"></video>
        <div>
          <h1>404</h1>
          <h2>Page not found.</h2>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
