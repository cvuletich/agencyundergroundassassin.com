<?php
require("../.local.inc.php");
$page = $_GET['page'] ? $_GET['page'] : "home";
if (!file_exists($page . ".php")) {
  header("Location: /errors/404.php", TRUE, 404);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>The Underground Assassin Game | Admin Area</title>
    <link rel="stylesheet" href="/css/admin.css" />
  </head>
  <body>
    <?php require("../views/admin/" . $page . ".php"); ?>
    <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="/js/admin.js"></script>
  </body>
</html>
