<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server - 404</title>
    <meta charset="utf-8" />
    <meta name="description" content="SemiVanilla MC - A 1.18.1 survival Minecraft server. 404 Page not found." />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A 1.18.1 survival Minecraft server. 404 Page not found." />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A 1.18.1 survival Minecraft server. 404 Page not found." />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#309edf" />
    <meta name="keywords" content="minecraft, mc, survival, server, semivanilla" />
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
        var gtag = document.createElement("script");
        gtag.src = "https://www.googletagmanager.com/gtag/js?id=G-492PDMS8SH";
        document.body.appendChild(gtag);
        var landingtitle = document.createElement("script");
        landingtitle.src = "/assets/javascript/landing_title.js";
        document.body.appendChild(landingtitle);
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
    <div id="main">
      <video id="landing-title-video" autoplay loop muted src="/assets/videos/landing-title-video.mp4" poster="/assets/images/landing-title.jpg"></video>
      <div class="title" id="landing-title"> <!-- style="background: url(/assets/images/landing-title.jpg); background-position: center 0px; background-size: cover; background-attachment: fixed; background-repeat: no-repeat;"> -->
        <h1>404</h1>
        <h2>Page not found.</h2>
      </div>
    </div>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
