<?php

class Configuration {

  public $endpoint;
  public $apiKey;

  public function __construct() {
    $this->endpoint = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment';
    $this->apiKey = '51a9e2c2b75e477ca2d6e8e6263c23cc';
  }

}


?>
