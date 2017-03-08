<?php
require_once 'config.php';
require_once 'documents.php';

$configuration = new Configuration();

$text1;
$output;

if (isset($_POST['Text'])) {
  $text1 = $_POST['Text'];
  if ($text1 != "") {
    $output = makeAPICall($text1, $configuration);
  }
}

// echo $text;
// die();

function makeAPICall($text, $config) {
  $ch = curl_init();

  $doc = array("language"=>"en", "id"=>"1", "text"=>$text);
  $docs = array($doc);
  $documents = new Documents($docs);
  $doc_string = json_encode($documents);

  curl_setopt($ch, CURLOPT_URL, $config->endpoint);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
  curl_setopt($ch, CURLOPT_POSTFIELDS, $doc_string);

  // receive server response ...
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $headers = array(
      // Request headers
      'Content-Type: application/json',
      'Ocp-Apim-Subscription-Key: ' . $config->apiKey,
  );

  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_VERBOSE, true);

  $server_output = curl_exec ($ch);
  curl_close ($ch);
  return $server_output;
}

?>
