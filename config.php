<?php
require_once getcwd() . '/vendor/autoload.php';
$ini = parse_ini_file('vendor/test/config.ini');
$key = $ini['app_pass'];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Configuration {

  public $endpoint;
  public $apiKey;

  public function __construct() {

    global $key;
    $this->endpoint = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment';
    $this->apiKey = $key;

  }

}

?>
