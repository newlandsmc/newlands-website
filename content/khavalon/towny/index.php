<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Studios | Khavalon | Towny</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <link rel="stylesheet" href="/assets/css/khavalon.css" />
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: url(/assets/images/khavalon/towny-title.webp); background-position: center;">
        <div>
          <h1>Towny</h1>
          <h2>Powered by TownyAdvanced</h2>
        </div>
      </div>
      <div class="content split-content">
        <div class="shadow"></div>
        <div>
          <section>
            <h3>Overview</h3>
            <p>Towny is an advanced land claiming and wars system. Every player can be a member of one "<strong>Town</strong>" - which is essentially a land claim. Every town has a "<strong>Mayor</strong>" (claim owner), "<strong>Residents</strong>" (members of the town), and can have other players "<strong>trusted</strong>" as well (giving them access, but not counting them as a Resident).</p>
            <p>Towns can be members of "<strong>Nations</strong>". Nations can go to war against each other. Being part of a nation also provides other benefits - like increasing the maximum size of your town.</p>
            <p>Anything outside of Towns is considered "<strong>Wilderness</strong>". On our server, anyone can do anything in Wilderness.</p>
          </section>
          <section>
            <h3>Creating a Town</h3>
            <p>To create a town, you must not already be the Resident of another town. (You can be trusted in as many towns as you want, but can only be the resident of one).</p>
            <p>If you are not currently in a town, stand where you'd like to create one, run <strong>/t create &lt;name&gt;</strong>, and then <strong>/t claim</strong> to claim that chunk. This will set your town's <strong>homeblock</strong></p>
            <p>After this, you can claim more chunks around your homeblock by standing in an adjacent chunk and running <strong>/t claim</strong> again.</p>
            <p>Adding more players as Residents of your town will increase your claim limit</p>
          </section>
          <section>
            <h3>Falling into Ruin</h3>
            <p>If you are offline for more than 90 days, your Towny data will be deleted and if you owned a Town it will fall into "<strong>Ruin</strong>".</p>
            <p>Towns also fall into Ruin when they are deleted (with the <strong>/t delete</strong> command).</p>
            <p>While a town is in Ruin, the land is still owned by the old Town's Mayor and can be reclaimed (<strong>/t reclaim</strong>). However, the land is NOT protected - anyone can raid the land and modify it or steal from it.</p>
            <p>Ruin lasts up to 3 days. After this time, anyone can claim the land.</p>
          </section>
          <section>
            <h3>Wars</h3>
            <p>Coming soon.</p>
          </section>
        </div>
        <div>
          <section>
            <h3>Towns</h3>
            <p>Towns are the foundation of the Towny system. Every player can be part of <strong>1</strong> Town (either as the "Mayor", or as a "Resident"). You can be <strong>trusted</strong> to as many Towns as you want, but you will not count towards their number of Residents, and therefore will not affect the class of the Town.</p>
            <p>"<strong>Mayors</strong>" are owners of Towns. They are the only ones that can control some aspects of a Town, like inviting others to the Town. "<strong>Residents</strong>" are other members that have chosen that Town as their home. Mayors can give Residents different roles and permissions.</p>
            <p>There are <strong>8</strong> Town classes, which are based on how many Residents are in your Town. Your Town's class determines how many chunks it can claim, and how many outposts it can have.</p>
            <ul>
              <li><strong>Ruins (0 residents)</strong> - 1 chunk limit, 0 outposts</li>
              <li><strong>Settlement (1 resident)</strong> - 32 chunk limit, 0 outposts</li>
              <li><strong>Hamlet (2 residents)</strong> - 64 chunk limit, 1 outposts</li>
              <li><strong>Village (3-4 residents)</strong> - 96 chunk limit, 1 outposts</li>
              <li><strong>Town (5-7 residents)</strong> - 192 chunk limit, 2 outposts</li>
              <li><strong>Large Town (8-11 residents)</strong> - 320 chunk limit, 2 outposts</li>
              <li><strong>City (12-15 residents)</strong> - 480 chunk limit, 3 outposts</li>
              <li><strong>Large City (16-19 residents)</strong> - 640 chunk limit, 3 outposts</li>
              <li><strong>Metropolis (20+ residents)</strong> - 800 chunk limit, 4 outposts</li>
            </ul>
          </section>
          <section>
            <h3>Nations</h3>
            <p>There are <strong>6</strong> Nation classes, which are based on how many residents are in all of the Towns that are part of the Nation. Your Nation's class determines how many bonus chunks and outposts each Town gets.</p>
            <ul> 
              <li><strong>0-9 residents</strong> - 0 bonus chunks, 0 bonus outposts</li>
              <li><strong>10-19 residents</strong> - 32 bonus chunks, 1 bonus outposts</li>
              <li><strong>20-29 residents</strong> - 64 bonus chunks, 1 bonus outposts</li>
              <li><strong>30-39 residents</strong> - 128 bonus chunks, 2 bonus outposts</li>
              <li><strong>40-59 residents</strong> - 256 bonus chunks, 2 bonus outposts</li>
              <li><strong>60+ residents</strong> - 512 bonus chunks, 3 bonus outposts</li>
            </ul>
          </section>
          <section>
            <h3>Useful Commands</h3>
            <p>Towny is an advanced plugin with many commands. You will need to use <strong>/[town|nation|resident|plot] help</strong> to see all commands in-game.</p>
            <p>Here, we've collected a few of the most useful commands to get started.</p>
            <ul>
              <li><strong>/town create &lt;name&gt;</strong> - Create a new town (and claim current chunk)</li>
              <li><strong>/town claim</strong> - Claim chunk you are in</li>
              <li><strong>/town unclaim</strong> - Unclaim chunk you are in</li>
              <li><strong>/town trust add &lt;player&gt;</strong> - Allow player to access your town</li>
              <li><strong>/town add &lt;player&gt;</strong> - Add a player to your town (as resident)</li>
              <li><strong>/invite accept &lt;town&gt;</strong> - Accept invite to a town</li>
              <li><strong>/town leave</strong> - leave a town</li>
              <li><strong>/town spawn</strong> - teleport to your town</li>
              <li><strong>/town delete</strong> - delete your town</li>
              <li><strong>/town reclaim</strong> - reclaim your town if it is in Ruin</li>
              <li><strong>/nation new &lt;name&gt;</strong> - create a new nation</li>
              <li><strong>/nation invite &lt;town&gt;</strong> - invite town to your nation</li>
              <li><strong>/nation add enemy &lt;nation&gt;</strong> - add enemy nation (allows starting war)</li>
              <li><strong>/tc &lt;message&gt;</strong> - Send message to towny chat</li>
              <li><strong>/nc &lt;message&gt;</strong> - Send message to nation chat</li>
              <li><strong>/g</strong> - Switch chat channel to global</li>
            </ul>
            <p>More: <a href="https://github.com/TownyAdvanced/Towny/wiki/Towny-Commands" target="_blank">Towny official Wiki</a></p>
          </section>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
