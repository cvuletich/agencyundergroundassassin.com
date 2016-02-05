<?php
header("Content-type: application/json");
require("../../.local.inc.php");
$json['errors'] = array();
$json['result'] = "success";

$player = new Player();
$player->setToken($_GET['token']);
if ($_SERVER['REQUEST_METHOD'] === "POST" && $player->verifyToken()) {
  switch ($_REQUEST['method']) {
    case "GetUserById":
      break;
    case "Login":
      break;
    case "RegisterCampaign":
      break;
    case "RegisterPlayer":
      break;
  }
} else {
  $json['result'] = "failed";
  array_push($json['errors'], "Not authorized");
}
echo json_encode($json);
