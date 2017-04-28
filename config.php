<?php

//$ini = parse_ini_file('vendor\test\config.ini');
$key = getenv('app_pass');
// print gettype($key);
// $key2 = json_decode($key,true);
// print_r($key2);
// die();

class Configuration {

  public $endpoint;
  public $apiKey;
  public $key;
  
  public function __construct() {
    global $key;
    $this->endpoint = 'https://westus.api.cognitive.microsoft.com/text/analytics/v2.0/sentiment';
    $this->apiKey = $key;

  }

}


?>
