<?php

$ini = parse_ini_file('vendor/test/config.ini');
$key = ($ini['app_pass']);

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
