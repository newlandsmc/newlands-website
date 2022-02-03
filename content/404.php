<!doctype html>
<html lang="en">
  <head>
    <title>SemiVanilla Minecraft Server | 404</title>
    <meta name="robots" content="noindex" />
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async type="module" src="/assets/javascript/jquery-3.6.0.min.js"></script>
    <script async src="/assets/javascript/cookie_notice.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <script defer async type="module" src="/assets/javascript/landing_page.js"></script>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="title" style="background-image: url(/assets/images/404-title.webp);">
        <video id="landing-title-video" autoplay loop muted hidden-src="/assets/videos/404-video.mp4" poster="/assets/images/404-title.jpg"></video>
        <div>
          <h1>404</h1>
          <h2>Page not found.</h2>
        </div>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/cookies-notice.html'); ?>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
  </body>
</html>
