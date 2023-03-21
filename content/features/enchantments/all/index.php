<!doctype html>
<html lang="en">
  <head>
    <title>New Lands Survival MC | Features | Custom Enchantments | All</title>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/seo.html'); ?>
    <script async src="/assets/javascript/jquery-3.6.3.min.js"></script>
    <script async src="/assets/javascript/datatables.min.js"></script>
    <script defer async type="module" src="/assets/javascript/nav.js"></script>
    <style>
      table {
        border-spacing: 0px;
      }
      .row {
        margin-bottom: 30px;
      }
      tr:nth-of-type(odd) {
        background: linear-gradient(90deg, rgb(38 26 18), rgb(24 17 12));
      }
      tr:nth-of-type(even) {
        background: linear-gradient(90deg, rgb(26 18 12), rgb(16 10 6));
      }
      thead tr:nth-of-type(odd) {
        background: linear-gradient(90deg, rgb(52 79 45), rgb(37 56 32));
        cursor: pointer;
      }
      .table-sm th, .table-sm td {
        padding: 1em;
      }
    </style>
  </head>
  <body>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/header.html'); ?>
    <main>
      <div class="sub-title" style="background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/assets/images/enchantments-all-title.webp); background-position: center;">
        <div>
          <h1>Custom Enchantments</h1>
          <h2>List of All</h2>
        </div>
      </div>
      <div class="content">
        <div class="shadow"></div>
        <section>
          <p id="error-code">Your browser failed to load the table.</p>
          <table class="table table-striped table-sm no-footer" style="width:100%" id="main"></table>
        </section>
      </div>
    </main>
    <?php echo file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/assets/templates/footer.html'); ?>
    <script defer async type="module">
      import '/assets/javascript/jquery-3.6.3.min.js';
      import '/assets/javascript/datatables.min.js';
      $(document).ready(function() {
        $('#main').DataTable( {
          "ajax": '/assets/json/enchantments.json',
          "iDisplayLength": -1,
          "paging": false,
          "deferRender": true,
          "columnDefs": [
            {
              "targets": [0],
              "title": "Name",
              "width": "10%"
            },
            {
              "targets": [1],
              "title": "Description",
              "width": "50%"
            },
            {
              "targets": [2],
              "title": "Items",
              "width": "25%"
            },
            {
              "targets": [3],
              "title": "Lvls"
            },
            {
              "targets": [4],
              "title": "Rarity"
            }
          ]
        } );
        $('div.dataTables_filter input').focus();
      } );
      document.getElementById('error-code').style.display = "none";
    </script>
  </body>
</html>
