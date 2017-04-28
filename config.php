<?php

class Configuration {

  public $endpoint;
  public $apiKey;

  public function __construct() {
    $this->endpoint = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment';
    $this->apiKey = '';
  }

}


?>
