<!doctype html>
<html lang="en">
  <head>
    <title>New Lands Survival | Features</title>
    <meta name="description" content="There are many features on the New Lands Survival Minecraft server! Land claiming, RPG Skills, a Live Map, and lots of custom features! Learn more here." />
    <meta property="og:description" content="There are many features on the New Lands Survival Minecraft server! Land claiming, RPG Skills, a Live Map, and lots of custom features! Learn more here." />
    <meta name="twitter:description" content="There are many features on the New Lands Survival Minecraft server! Land claiming, RPG Skills, a Live Map, and lots of custom features! Learn more here." />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/features-title.webp); background-position: center;">
        <div>
          <h1>Features</h1>
          <h2>What Makes Us Awesome</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Land Claiming</h3>
            <p>Protect your hard work and have peace of mind when you are offline. Claim land using a golden shovel and everything inside your claim is safe from all types of griefing!</p>
            <p><a href="claiming/">Learn more here!</a></p>
            <img style="width:70%" src="/assets/images/features-castle.webp" alt="Digital art of Minecraft style castle" />
          </section>
          <section>
            <h3>Custom Recipes</h3>
            <p>We run a custom datapack with lots of custom recipes! Our recipes can be used to craft items not normally craftable in survival, or convert items back into their raw materials.</p>
            <p>Custom recipes are unlocked in the recipe book just like vanilla recipes! You can see all available recipes to you in any crafting bench.</p>
            <p><a href="recipes/">Learn more here!</a></p>
          </section>
          <section>
            <h3>Live Map</h3>
            <p>The live map shows the entire in-game world in real time! It also shows player locations and claim information!</p>
            <p><a href="map/">See the maps here!</a></p>
            <img style="width:60%" src="/assets/images/features-map.webp" alt="Digital art of a Minecraft map" />
          </section>
          <section>
            <h3>Sleep Voting</h3>
            <p>Only 50% of players need to sleep to skip night on our server! Vote to skip night by laying in a bed. You do NOT need to remain in bed, your vote will continue to count even if you get out of bed!</p>
            <img style="width:70%" src="/assets/images/features-bed.webp" alt="Minecraft character sleeping in bed" />
          </section>
        </div>
        <div>
          <section>
            <h3>Random Spawn</h3>
            <p>Every player starts somewhere new! Every new player starts somewhere random in the survival world, just like vanilla Minecraft! Your starting location is saved so you will always respawn there if you don't have a bed.</p>
            <p>There is no main spawn in the survival world!</p>
          </section>
          <section>
            <h3>RPG Skills</h3>
            <p>Level up in everything you do, from tree cutting to sword fighting, and unlock special abilities in those skills. Use mana to activate your abilities or apply custom enchants to your items for a permanent effect!</p>
            <p><a href="skills/">Learn more here!</a></p>
            <img style="width:70%" src="/assets/images/features-steve.webp" alt="Digital art of Minecraft Steve with glowing diamond sword" />
          </section>
          <section>
            <h3>Custom Loot Tables</h3>
            <p>All of the vanilla loot chests (villages, temples, etc) have been modified! We've significantly buffed the loot tables, making exploration worth it, and providing more access to items that are normally limited in survival!</p>
            <p>Natural chests also generate loot for EVERY player that opens them, so everyone can get something, not just the first person!</p>
            <p style="color:#ff674d;">Please do not break natural chests if you don't need to! Leave them for someone else to discover.</p>
          </section>
          <section>
            <h3>Trade System</h3>
            <p>Make sure your items are safe when you trade by using the <strong>/trade</strong> UI when trading with other players! With the trade UI it is impossible to have your items stolen.</p>
            <p>You can open this UI any time by <strong>shift + right click</strong> on another player.</p>
          </section>
          <section>
            <h3>Custom Enchantments</h3>
            <p>Custom enchantments can be applied to your weapons, armor, and more just like vanilla enchants! There are over 50+ custom enchantments available on our server!</p>
            <p><a href="enchantments/">Learn more here!</a></p>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
