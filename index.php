<?php
$page = $_GET['page'] ? $_GET['page'] : "home";
if (!file_exists($page . ".php")) {
  header("Location: /errors/404.php", TRUE, 404);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>The Agency Underground Assassin Game</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <?php require("views/" . $page . ".php"); ?>
    <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
