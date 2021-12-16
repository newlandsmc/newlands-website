<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server - Map</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Blazing fast live mapping solution for Paper and friends" />
    <meta property="og:url" content="https://github.com/pl3xgaming/Pl3xMap" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pl3xMap" />
    <meta property="og:description" content="Blazing fast live mapping solution for Paper and friends" />
    <meta property="og:image" content="https://github.com/pl3xgaming/Pl3xMap/raw/master/plugin/src/main/resources/web/images/og.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="github.com/pl3xgaming/Pl3xMap" />
    <meta property="twitter:url" content="https://github.com/pl3xgaming/Pl3xMap" />
    <meta name="twitter:title" content="Pl3xMap" />
    <meta name="twitter:description" content="Blazing fast live mapping solution for Paper and friends" />
    <meta name="twitter:image" content="https://github.com/pl3xgaming/Pl3xMap/raw/master/plugin/src/main/resources/web/images/og.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#222222" />
    <meta name="keywords" content="minecraft, map, dynamic, pl3x, pl3xmap" />
    <meta name="description" content="Minecraft Dynamic Map" />
    <link rel="shortcut icon" href="favicon.ico" sizes="256x256" crossOrigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/style.css" />
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <div class="main">
      <object data=https://semivanilla.com/map/fullscreen style="margin: 50px 0px; width: 80%; height: 80vh;">
        <embed src=https://semivanilla.com/map/fullscreen style="width: 100%; height: 100%;">
        </embed> Error: Embedded data could not be displayed.
      </object>
    </div>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
