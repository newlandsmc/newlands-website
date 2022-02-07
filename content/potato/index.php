<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Optimize Potato PC</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async defer>
      function copyToClipboard(id) {
        var aux = document.createElement("input");
        aux.setAttribute("value", "play.semivanilla.com");
        document.body.appendChild(aux);
        aux.select();
        document.execCommand("copy");
        document.body.removeChild(aux);
        document.getElementById(id).style.backgroundColor = "#d2a69f";
        $('.overlay').addClass('active');
      }
      function overlayDismiss() {
        $('.overlay').removeClass('active');
      }
    </script>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      section {
        justify-content: center;
        align-items: center;
      }
      img {
        border-radius: 15px;
      }
      .content ul li {
        margin: 0.5em 0;
      }
      .content ul p {
        margin: 0;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title">
        <div>
          <h1>Potato Optimization</h1>
          <h2>How to run Minecraft on a slow computer</h2>
        </div>
        <div style="position:absolute; bottom:80px;" id="welcome"></div>
      </div>
      <div class="content" id="landing" style="max-width:1400px;">
        <section>
          <div class="narrow">
            <h3>Install CurseForge App</h3>
            <p>We will use the CurseForge App to install some mods. It makes managing your mods very easy.</p>
            <p>After this, you will always launch Minecraft through the CurseForge App.</p>
            <p><a href="https://download.curseforge.com/">download.curseforge.com</a></p>
          </div>
          <div>
            <img class="wide" src="/assets/images/potato-curseforgeapp.webp" alt="CurseForge App Screenshot" />
          </div>
        </section>
        <section>
          <div>
            <img class="wide" src="/assets/images/potato-search.webp" alt="CurseForge App - Minecraft - Search for SVMC" />
          </div>
          <div class="narrow">
            <h3>Add SVMC Optimization Pack</h3>
            <p>Open CurseForge App, click on "Minecraft" and then "Browse Modpacks".</p>
            <p>Search for "SVMC" and select our Modpack "SVMC Potato Optimization Pack"</p>
            <p>Click "Install"</p>
            <p style="color:#4ad555;">You can also install this modpack without CurseForge App, if you'd prefer. The modpack is available on <a href="https://www.curseforge.com/minecraft/modpacks/svmc-potato-optimization-pack">www.curseforge.com</a>.</p>
          </div>
        </section>
        <section>
          <div class="narrow">
            <h3>Launch Minecraft</h3>
            <p>Navigate to the "My Modpacks" tab, select our Modpack, and click "Play"!</p>
            <p>This will open a new Minecraft launcher with our mods pre-installed.</p>
            <p style="color:#4ad555;">Note: If you already had Minecraft installed, this launcher uses a different folder for saving data. You won't have any of your old worlds or servers. You can still access your old worlds and saved servers, just open Minecraft without using CurseForge App.</p>
          </div>
          <div>
            <img class="wide" src="/assets/images/potato-launchminecraft.webp" alt="CurseForge App - Minecraft - My Modpacks" />
          </div>
        </section>
        <section>
          <div>
            <img class="wide" src="/assets/images/potato-settings.webp" alt="Minecraft Settings Screenshot" />
          </div>
          <div class="narrow">
            <h3>Minecraft Settings</h3>
            <p>Finally, let's apply some optimized settings:</p>
            <ul>
              <li><p><strong>Render Distance</strong> - 8</p><p>(The server will not show over 10)</p></li>
              <li><p><strong>Simulation Distance</strong> - 6</p><p>(The server will not show over 8)</p></li>
              <li><strong>Graphics</strong> - Fast</li>
              <li><strong>Clouds</strong> - Fast</li>
              <li><strong>Particles</strong> - Minimal</li>
              <li><p><strong>Mipmap Levels</strong> - 0</p><p>(Increase if possible)</p></li>
            </ul>
          </div>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
