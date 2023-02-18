<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla SMP | Features | Custom Enchantments</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/asthonia/enchantments-title.webp); background-position: center;">
        <div>
          <h1>Custom Enchantments</h1>
          <h2>By AdvancedEnchantments</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Available Enchantments</h3>
            <p>There are <strong>54</strong> custom enchantments on SVMC! They are available for all types of weapons, armor, and tools.</p>
            <p>To see a list of all available enchantments, <a href="all/">click here</a>.</p>
          </section>
          <section>
            <h3>Rarities</h3>
            <p>Custom enchantments are broken up into 6 different rarity categories. The higher the rarity, the less likely you are to find that enchant.</p>
            <ul>
              <li><span style="color: #ffffff;">Common</span> - 25% chance</li>
              <li><span style="color: #55ff55;">Uncommon</span> - 20% chance</li>
              <li><span style="color: #55ffff;">Rare</span> - 15% chance</li>
              <li><span style="color: #ff55ff;">Legendary</span> - 10% chance</li>
              <li><span style="color: #ffaa00;">Exotic</span> - 5% chance</li>
              <li><span style="color: #ffff00;">Fabled</span> - 2.5% chance</li>
            </ul>
          </section>
          <section>
            <h3>Obtaining Enchantments</h3>
            <p>Custom enchantments work just like vanilla enchantments! They can be obtained by enchanting an item in an Enchantment Table, or by using a Custom Enchantment Books.</p>
            <p>Custom Enchantment Books can be obtained by trading with villagers or found in loot chests around the world.</p>
            <p style="color: #ff674d;">Warning: Books CANNOT receive custom enchantments in Enchantment Tables.</p>
          </section>
        </div>
        <div>
          <section>
            <h3>Using Enchantments</h3>
            <p>All enchantments activate automatically! Read the description of each enchant carefully to learn what it does and when it applies.</p>
            <p>If an enchant description starts with "Chance of" the enchant will activate randomly when the item is used. If an enchant
description does NOT say those words, then A) the enchant activates every time the item is used, or B) the enchant activates randomly, and provides an "average benefit".</p>
            <p>For example, if an enchant provides an increase to damage dealt - it most likely applies randomly while the item is used,
providing an increase in damage dealt overall.</p>
            <p style="color: #ff674d;">Warning: Enchanted items do NOT work in offhand.</p>
          </section>
          <section>
            <h3>Limits</h3>
            <p>Each item can only have up to 4 custom enchantments. Custom enchantments do not count towards the vanilla enchantment limit.</p>
            <p>Additionally, some custom enchantments are not compatible with others.</p>
            <ul>
              <li>Strike and Area Strike are exclusive.</li>
              <li>Hasten, Haste, Trench, and Vein Miner are exclusive.</li>
              <li>Heavy, Tank, and Valor are exclusive.</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
