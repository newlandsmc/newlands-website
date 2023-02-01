<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla MC | Features</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/asthonia/features-title.webp); background-position: center;">
        <div>
          <h1>All Features</h1>
          <h2>Found on SemiVanilla MC</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Land Claiming</h3>
            <p>Protect your hard work and have peace of mind when you are offline. Claim land using a golden shovel and everything inside your claim is safe from all types of griefing.</p>
            <p><a href="claiming/">Learn more here.</a></p>
            <img style="width:70%" src="/assets/images/landing-castle.webp" alt="Minecraft style castle" />
          </section>
          <section>
            <h3>Custom Recipes</h3>
            <p>There are several custom recipes on SVMC! They can be used to craft items not normally craftable in survival, or convert items back into their raw materials.</p>
            <p>Custom recipes are unlocked in the recipe book just like vanilla recipes! You can see all available recipes to you in any crafting bench.</p>
            <p><a href="recipes/">Learn more here.</a></p>
          </section>
          <section>
            <h3>Death Corpses</h3>
            <p>Whenever you die in-game, from PVP or other causes, a corpse will appear. Corpses contain the items you lost on death, and are protected for 5 minutes so only YOU can claim the items from the corpse. After 5 minutes, anyone can loot the corpse.</p>
            <p>Corpses "decay" (disappear) after 48 hours if unclaimed. Also, a player can never have more than 3 corpses.</p>
            <img style="width:70%" src="/assets/images/landing-alex.webp" alt="Alex laying in grass with items floating around" />
          </section>
          <section>
            <h3>Live Map</h3>
            <p>The live map shows the world in real-time. It also shows player locations and claim information.</p>
            <p><a href="map/">See the maps here.</a></p>
            <img style="width:70%" src="/assets/images/features-map.webp" alt="Minecraft map" />
          </section>
        </div>
        <div>
          <section>
            <h3>Random Spawn</h3>
            <p>Every player spawns somewhere random within the overworld when they first join. This location is set as their spawnpoint - so they will always return there if they have no bed or respawn anchor.</p>
            <p>There is no main spawn in the survival world.</p>
          </section>
          <section>
            <h3>RPG Skills</h3>
            <p>Level up your player in everything you do, from tree cutting to sword fighting, and unlock special abilities in those skills.
Use mana to activate your abilities or apply custom enchants to your items for a permanent effect.</p>
            <p><a href="skills/">Learn more here.</a></p>
            <img style="width:70%" src="/assets/images/landing-steve.webp" alt="Steve with glowing diamond sword" />
          </section>
          <section>
            <h3>Custom Loot Tables</h3>
            <p>Custom loot tables have been added for every natural chest! We've significantly buffed the loot tables, making exploration worth it, and providing more access to items that are normally limited in survival.</p>
            <p>Natural chests also regenerate loot every 2-12 hours, so there's always something to find even if someone else has already been there!</p>
            <p style="color:#ff674d;">Please do not break natural chests if you don't need to! Leave them for someone else to discover.</p>
          </section>
          <section>
            <h3>Trade System</h3>
            <p>Trades and job agreements are at-your-own-risk! Be sure to use the <strong>/trade</strong> UI when trading with other players 
to avoid scams. You can open this UI any time by <strong>shift + right click</strong> on another player.</p>
          </section>
          <section>
            <h3>Sleep Voting</h3>
            <p>To skip each night, the majority of players online must vote to skip the night. Sleeping in a bed for any amount of time will 
register your vote to skip the current night. You do NOT need to remain in bed, your vote will continue to count even if you get out of bed.</p>
            <img style="width:70%" src="/assets/images/features-bed.webp" alt="Minecraft character sleeping in bed" />
          </section>
          <section>
            <h3>Custom Enchants</h3>
            <p>Custom enchants can be applied to your weapons, armor, and more just like vanilla enchants. They apply a permanent effect to your item whenever you use it.</p>
            <p><a href="enchants/">Learn more here.</a></p>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
