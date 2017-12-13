<!DOCTYPE html>
<html>
<?php session_start();?>
  <?php include 'conf/_head.php'; ?>
  <body <?php body_class(); ?>>
    <main>
      <?php
        include 'views/content_header/_navbar.php';
        include 'views/_header.php';
        include 'views/_services.php';
        include 'views/_welcome.php';
        include 'views/_departments.php';
        include 'views/_plano.php';
        include 'views/_footer.php';
      ?>
    </main>

    <?php include 'conf/_scripts.php'; ?>
  </body>
</html>
