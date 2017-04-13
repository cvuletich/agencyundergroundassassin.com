<?php
header("Content-type: application/json");
require("../../.local.inc.php");
$json['errors'] = array();
$json['result'] = "success";
$data = $_POST;

//$player = new Player();
//$player->setToken($_GET['token']);
if ($_SERVER['REQUEST_METHOD'] === "POST" && $player->verifyToken()) {
  switch ($_REQUEST['method']) {
    case "GetUserById":
      $player->getUser();
      break;
    case "Login":
      break;
    case "RegisterCampaign":
      break;
    case "RegisterPlayer":
      $newplayer = new Player();
      $newplayer->setAssassinName($data['assassinname']);
      $newplayer->setEmail($data['email']);
      $newplayer->setFirstName($data['firstname']);
      $newplayer->setLastName($data['lastname']);
      $newplayer->add();
      break;
  }
} else {
  $json['result'] = "failed";
  array_push($json['errors'], "Not authorized");
}
echo json_encode($json);
