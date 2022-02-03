<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server | Features</title>
    <meta charset="utf-8" />
    <meta name="description" content="Features - A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure. Join Now!" />
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
    <meta name="keywords" content="bettersleep, loottables, recipes, datapack, minecraft, survival, server, bedrock, semi, vanilla, java, pvp, pve, mcmmo, rpg, multiplayer" />
    <link rel="shortcut icon" href="/assets/images/favicon.ico" sizes="256x256" crossOrigin="anonymous" />
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
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/features-title.webp); background-position: center;">
        <div>
          <h1>Vanilla+</h1>
          <h2>Custom Features on SVMC</h2>
        </div>
      </div>
      <div class="content split-content">
        <div>
          <section>
            <h3>Better Sleep</h3>
            <p>Phantoms are disabled on SemiVanilla. Instead, to encourage sleep, players will experience <b>Exhaustion</b> - hearing random noises, occasional blindness, and nausea - if they don't sleep for extended periods of time.</p>
            <p>Phantom Membranes are still available on the server - we've added them to our custom lootchests!</p>
            <p>Additionally, only 33% of players need to sleep to skip night.</p>
          </section>
          <section>
            <h3>Custom Recipes</h3>
            <p>There are several custom recipes on SemiVanilla. They can be used to craft items not normally craftable in survival, or convert items back into their raw materials.</p>
            <p>Custom recipes are unlocked in the recipe book just like vanilla recipes! You can see all available recipes to you in any crafting bench.</p>
            <p>To see all custom recipes, <a href="recipes/">click here</a>.</p>
          </section>
          <section>
            <h3>Trade System</h3>
            <p>Trades and job agreements are at-your-own-risk! Be sure to use the <span style="color:#ff674d;">/trade</span> UI when trading with other players to avoid scams. You can open this UI any time by <span style="color:#ff674d;">shift + right click</span> on another player.</p>
          </section>
        </div>
        <div>
          <section>
            <h3>Random Spawn</h3>
            <p>Every player spawns somewhere random within the overworld when they first join. This location is set as their spawnpoint - so they will always return there if they have no bed or respawn anchor.</p>
            <p>There is no spawn on SemiVanilla.</p>
          </section>
          <section>
            <h3>Custom Loot Tables</h3>
            <p>Custom loot tables have been added for every natural chest! We've significantly buffed the loot tables, making exploration worth it, and providing more access to items that are normally limited in survival.</p>
            <p>Natural chests also regenerate loot every 2-12 hours, so there's always something to find even if someone else has already been there!</p>
            <p style="color:#ff674d;">Please do not break natural chests if you don't need to! Leave them for someone else to discover.</p>
          </section>
          <section>
            <h3>ShulkerPacks</h3>
            <p>Shulkers can be opened while they are in your inventory! Simply right click on any shulker while in your inventory GUI.</p>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
