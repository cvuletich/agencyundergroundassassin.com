<?php
Class API {
  private $_token;
  private $_method;
  private $_url;
  private $_data;

  function __construct($token, $method, $url, $data = null) {
    $this->_token = $token;
    $this->_method = $method;
    $this->_url = $url;
    $this->_data = $data;
    $this->_data['AuthToken'] = $this->_token;
    $this->_data['Method'] = $this->_method;
  }

  public function request() {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_GET, TRUE);
    curl_setopt($ch, CURLOPT_GETFIELDS, $this->_data);
    $response = curl_exec($ch);
    curl_close($ch);
    return json_decode($response, true);
  }
}
