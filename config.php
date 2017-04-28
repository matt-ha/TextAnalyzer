<?php

$ini = parse_ini_file('/vendor/test/config.ini');

class Configuration {

  public $endpoint;
  public $apiKey;

  public function __construct() {
    $this->endpoint = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment';
    $this->apiKey = 'getenv('app_email')';

  }

}


?>
