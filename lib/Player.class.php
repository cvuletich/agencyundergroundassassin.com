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

  public function add($data) {
    $options = ['cost' => 11, 'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)];
    $password = password_hash($data['password1'], PASSWORD_BCRYPT, $options);
    echo $password;
    //password_verify();
    //$api = new API(API_TOKEN, API_URL, "RegisterPlayer", $data);
  }

  public function delete() {
    $api = new API(API_TOKEN, API_URL, "DeletePlayer", $data);
  }

  public function login() {
    $api = new API(API_TOKEN, API_URL, "Login", $data);
  }

  public function setAssassinName($assassinname) {
    $this->_assassin_name = $assassinname;
  }

  public function setEmail($email) {
    $this->_email = $email;
  }

  public function setFirstName($firstname) {
    $this->_firstname = $firstname;
  }

  public function setLastName($lastname) {
    $this->_lastname = $lastname;
  }

  public function setPlayerById($id) {
    $data['id'] = $id;
    $api = new API(API_TOKEN, API_URL, "GetPlayerById", $data);
    return $api->request();
  }

  public function setToken($token) {
    $this->_token = $token;
  }

  public function update() {
    $api = new API(API_TOKEN, API_URL, "UpdatePlayer", $data);
  }

  public function verifyToken() {
    return true;
  }
}
?>
