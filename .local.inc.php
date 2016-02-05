<?php
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : preg_replace('/[0-9]{2}$/', "", gethostname());

define("API_TOKEN", "507c8d625be371ad3113704708ef471fe74b7037f5345e9f072d1e39384f6956");
define("API_VERSION", "0.1");
define("BASE_URL", $host);
define("API_URL", "http://" . BASE_URL . "/api/v" . API_VERSION . "/");
define("LIB_PATH", __DIR__ . "lib");
define("MAILGUN_KEY", "key-124f79a09311cfc9b437effe652d0d9b");

switch($host) {
  case "dev.agencyundergroundassassin.com":
    define("DB_HOST", "localhost");
    define("DB_NAME", "assassin");
    define("DB_PASS", "assassin");
    define("DB_USER", "assassin_dev");
    break;
  case "stage.agencyundergroundassassin.com":
    define("DB_HOST", "localhost");
    define("DB_NAME", "assassin");
    define("DB_PASS", "assassin");
    define("DB_USER", "assassin_dev");
    break;
  case "agencyundergroundassassin.com":
  case "www.agencyundergroundassassin.com":
    define("DB_HOST", "localhost");
    define("DB_NAME", "assassin");
    define("DB_PASS", "assassin");
    define("DB_USER", "assassin_dev");
    break;
}

require("lib/API.class.php");
require("lib/Agency.class.php");
require("lib/DB.class.php");
require("lib/Game.class.php");
require("lib/Player.class.php");

DB::$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$player = new Player();
?>
