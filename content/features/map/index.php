<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Studios | Features | Map</title>
    <meta name="robots" content="noindex" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background-image: url(/assets/images/map-title.webp);">
        <div>
          <h2>Select a Map</h2>
          <h3>Maps Available:</h3>
          <section style="display: flex; flex-wrap: wrap; justify-content: space-around; width:100%">
            <a href="asthonia/" target="_blank">
              <button type="button">Asthonia</button>
            </a>
            <a href="khavalon/" target="_blank">
              <button type="button">Khavalon</button>
            </a>
          </section>
        </div>
        <div style="position: absolute; right: 0; bottom: 0;">
          <a href="download/">
            <button type="button">Downloads</button>
          </a>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
