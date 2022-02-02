<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server | Custom Enchants</title>
    <meta charset="utf-8" />
    <meta name="description" content="Custom enchants - A semi-vanilla 1.18.1 survival Minecraft server. Java + Bedrock support! Competitive multiplayer adventure. Join Now!" />
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
    <meta name="keywords" content="enchants, mod, custom, advanced, minecraft, survival, server, bedrock, semi, vanilla, java, pvp, pve, mcmmo, rpg, multiplayer" />
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
      <div class="sub-title" style="background-image: url(/assets/images/enchants-title.webp); background-position: center;">
        <div>
          <h1>Custom Enchants</h1>
          <h2>Powered by Advanced Enchantments</h2>
        </div>
      </div>
      <div class="content split-content">
        <div>
        <section>
          <h3>Custom Enchants</h3>
          <p>There are <b>124</b> custom enchants available on SemiVanilla. They are available for all types of weapons, armor, and tools.</p>
          <p>To see a list of all available enchants, <a href="all/">click here</a>.</p>
          <p>Custom enchants are broken up into 6 different rarity categories. The higher the rarity, the less likely you are to find that enchant.</p>
          <ul>
            <li><span style="color: #ffffff;">Simple</span> - 22.5% chance</li>
            <li><span style="color: #55ff55;">Unique</span> - 18% chance</li>
            <li><span style="color: #55ffff;">Elite</span> - 13.5% chance</li>
            <li><span style="color: #ff55ff;">Ultimate</span> - 9% chance</li>
            <li><span style="color: #ffaa00;">Legendary</span> - 4.5% chance</li>
            <li><span style="color: #ffff00;">Fabled</span> - 2.25% chance</li>
          </ul>
        </section>
        <section>
          <h3>Custom Items</h3>
          <p>Some custom items on the server can be used to modify enchanted items:</p>
          <ul>
            <li><b>Orbs</b> - Increases the maximum enchants you can add to an item. Some increase the items overall limit, while others increase the limit on a specific rarity category.</li>
            <li><b>Black Scrolls</b> - Removes a random enchant from an item and turns it into a book you can reuse on a different item.</li>
            <li><b>Trackers</b> - Adds a stat counter to track how many times you've used that item.</li>
            <li><b>Holy White Scrolls</b> - Allows you to keep the item on death. Only works once.</li>
            <li><b>Enchant Books</b> - Used in an anvil to enchant an item.</li>
          </ul>
        </section>
        </div>
        <div>
        <section>
          <h3>Obtaining Items/Enchants</h3>
          <p>Custom enchants work just like vanilla enchants! They can be obtained by enchanting an item in an Enchantment Table, or by using a Custom Enchantment Books.</p>
          <p>Custom enchant items (orbs, scrolls, trackers, and books), can be obtained by trading with villagers or found in loot chests around the world.</p>
          <p style="color: #ff674d;">Warning: Books CANNOT receive custom enchants in Enchantment Tables.</p>
        </section>
        <section>
          <h3>Using Enchants</h3>
          <p>All enchants activate automatically! Read the description of each enchant carefully to learn what it does and when it applies.</p>
          <p>If an enchant description starts with "Chance of" the enchant will activate randomly when the item is used. If an enchant description does NOT say those words, then A) the enchant activates every time the item is used, or B) the enchant activates randomly, and provides an "average benefit".</p>
          <p>For example, if an enchant provides an increase to damage dealt - it most likely applies randomly while the item is used, providing an increase in damage dealt overall.</p>
          <p style="color: #ff674d;">Warning: Enchanted items do NOT work in offhand.</p>
        </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
