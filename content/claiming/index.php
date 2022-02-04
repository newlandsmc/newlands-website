<!doctype html>
<html lang="en">
  <head>
    <title>Semi-Vanilla Minecraft Server | Land Claiming</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script async src="/assets/javascript/cookie_notice.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/claiming-title-oil.webp); background-position: center;">
        <div>
          <h1>Land Claiming</h1>
          <h2>Powered by Lands</h2>
        </div>
      </div>
      <div class="content split-content">
        <div>
          <section>
            <h3>Getting Started</h3>
            <p>Land can be claimed on SemiVanilla using the "Lands" system. Lands are created by claiming chunks. Anything within claimed chunks - builds, chests, villagers, animals, and more - is protected.</p>
            <p>Lands are extremely powerful. Land owners can create custom roles to trust players, and control what permissions those roles have. Lands can also be divided into "areas" to control access to specific parts of a Land.</p>
            <p>Lands is entirely command and GUI based, although there are some optional in-game items that may make certain tasks easier.</p>
          </section>
          <section>
            <h3>Creating a Claim</h3>
            <p>To create a new Land, stand in a chunk you wish to claim and type <strong>/lands create [name]</strong>. This will create a new Land and automatically claim the chunk you are standing in.</p>
            <p>To expand your Land, stand in another nearby chunk and use <strong>/lands claim</strong>, or use <strong>/lands selection</strong> to get the optional selection tool.</p>
            <p>You can also create camps! Camps are 2x2 claims that last 24 hours.</p>
          </section>
          <section>
            <h3>Automatic Claim Delection</h3>
            <p>Lands are automatically deleted after the owner has been offline for 90 days. After this, the land is free-game to be reused or raided by anyone</p>
            <p>Members of Lands are also removed from those Lands after they've been inactive for 90 days.</p>
          </section>
        </div>
        <div>
          <section>
            <h3>Trusting Others</h3>
            <p>Trusting players is at-your-own-risk! Land owners have complete control over who can do things in their Land, what they can do, and where they can do it. It is up to you to use the tools at your disposal to appropriately trust players to your land.</p>
            <p>To grant someone access to a specific part of your Land, use Areas. You can divide your Land into Areas by using the selection tool (<strong>/lands selection</strong>). To create an Area, first open the GUI and navigate to "Areas" and click on "Create Area". Once an Area is created, get the selection tool and click on 2 opposite corners to select a square area, and then use <strong>/lands assign &lt;area&gt;</strong> to create an area with that selection.</p>
            <p>To trust someone to your Land or an Area of the land, use <strong>/lands trust &lt;player&gt; [area]</strong>. They will receive an invite and must accept it. After that, you can use the GUI to assign that player to a specific role and control their permissions.</p>
          </section>
          <section>
            <h3>Useful Commands</h3>
            <ul>
              <li><strong>/lands</strong> - Open Lands GUI</li>
              <li><strong>/lands create</strong> - Create new Land</li>
              <li><strong>/lands createcamp</strong> - Create new Camp</li>
              <li><strong>/lands claim</strong> - Claim current chunk</li>
              <li><strong>/lands unclaim</strong> - Unclaim current chunk</li>
              <li><strong>/lands selection</strong> - Lands selection tool (used for creating Areas)</li>
              <li><strong>/lands map</strong> - View map of claims around you</li>
              <li><strong>/lands view</strong> - Show outlines of nearby claims</li>
              <li><strong>/lands trust</strong> - Send invite to someone</li>
              <li><strong>/lands invites</strong> - View received invites</li>
              <li><strong>/lands leave</strong> - Leave a land</li>
            </ul>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
