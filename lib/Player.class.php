<?php
class Player {
  private $_id;
  private $_agency_id;
  private $_token;
  private $_email;
  private $_firstname;
  private $_lastname;
  private $_assassin_name;
  private $_role;
  private $_creation;

  function __construct() { }

  function add() {
    $api = new API(API_TOKEN, API_URL, "RegisterPlayer", $data);
  }

  function delete() {
    $api = new API(API_TOKEN, API_URL, "DeletePlayer", $data);
  }

  function login() {
    $api = new API(API_TOKEN, API_URL, "Login", $data);
  }

  function setPlayerById($id) {
    $data['id'] = $id;
    $api = new API(API_TOKEN, API_URL, "GetPlayerById", $data);
    return $api->request();
  }

  function setToken($token) {
    $this->_token = $token;
  }

  function update() {
    $api = new API(API_TOKEN, API_URL, "UpdatePlayer", $data);
  }

  function verifyToken() {
    return true;
  }
}
?>
