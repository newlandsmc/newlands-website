<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server - Vote</title>
    <meta charset="utf-8" />
    <meta name="description" content="Welcome to SemiVanilla MC! We are a semi-vanilla survival 1.18.1 Java Minecraft server hosting hard difficulty survival with RPG elements and competitive multiplayer. Vote for the server on all 6 sites to earn an in-game reward - an instant expedition!" />
    <meta property="og:url" content="https://semivanilla.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SemiVanilla MC" />
    <meta property="og:description" content="A semi-vanilla survival 1.18.1 Java Minecraft server with RPG elements and competitive multiplayer. Vote for the server!" />
    <meta property="og:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta property="twitter:domain" content="semivanilla.com" />
    <meta property="twitter:url" content="https://semivanilla.com" />
    <meta name="twitter:title" content="SemiVanilla MC" />
    <meta name="twitter:description" content="A semi-vanilla survival 1.18.1 Java Minecraft server with RPG elements and competitive multiplayer. Vote for the server!" />
    <meta name="twitter:image" content="https://semivanilla.com/assets/images/promo-card.jpg" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="theme-color" content="#d61f00" />
    <meta name="keywords" content="semi, vanilla, java, minecraft, mc, survival, rpg, multiplayer, mcmmo, pvp, pve" />
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
        var button_clicked = document.createElement("script");
        button_clicked.src = "/assets/javascript/button_clicked.js";
        document.body.appendChild(button_clicked);
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
      .content p, .content h3 {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/vote-title.webp); background-position: center;">
        <div>
          <h1>Vote for Us</h1>
          <h2>Earn rewards in-game every day!</h2>
        </div>
      </div>
      <div class="content" id="vote">
        <section>
          <h3>Reward: Instant Expeditions</h3>
          <p>Every day you vote on all 6 sites you will instantly complete a maximum-reward expedition! Do /spoils in-game to claim your reward. Looking to automatically complete instant expeditions every day? Check out the store item: <a href="https://store.semivanilla.com/package/4846618" target="_blank">Instant Expeditions</a></p>
          <p>Note: Purchasing lifetime Instant Expeditions replaces voting rewards.</p>
        </section>
        <section id="votelinks">
          <div>
            <h3>minecraftservers.org</h3>
            <a href="https://minecraftservers.org/vote/630602" target="_blank"><button type="button" id="vote1" onclick="buttonClicked('vote1')">Vote</button></a>
          </div>
          <div>
            <h3>topminecraftservers.org</h3>
            <a href="http://topminecraftservers.org/vote/24515" target="_blank"><button type="button" id="vote2" onclick="buttonClicked('vote2')">Vote</button></a>
          </div>
          <div>
            <h3>topmcservers.com</h3>
            <a href="https://topmcservers.com/server/1610/vote" target="_blank"><button type="button" id="vote3" onclick="buttonClicked('vote3')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft.buzz</h3>
            <a href="https://minecraft.buzz/vote/3877" target="_blank"><button type="button" id="vote4" onclick="buttonClicked('vote4')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft-server.net</h3>
            <a href="https://minecraft-server.net/vote/semivanilla_mc/" target="_blank"><button type="button" id="vote5" onclick="buttonClicked('vote5')">Vote</button></a>
          </div>
          <div>
            <h3>minecraft-mp.com</h3>
            <a href="https://minecraft-mp.com/server/298736/vote/" target="_blank"><button type="button" id="vote6" onclick="buttonClicked('vote6')">Vote</button></a>
          </div>
        </section>
        <section>
          <h3>Reddit</h3>
          <p>We are also listed on /r/mcservers! Find our latest post to upvote and comment!</p>
          <p>Note: This site does not grant voting rewards.</p>
          <a href="https://www.reddit.com/user/semivanillamc" target="_blank"><button type="button" id="vote7" onclick="buttonClicked('vote7')">Visit Reddit</button></a>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
