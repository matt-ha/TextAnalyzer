<?php
if(!session_id()) {
    session_start();
}

require_once __DIR__ . '/vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '2077676495792277',
  'app_secret' => 'e8df9df4b114fec10800907f9a644de5',
  'default_graph_version' => 'v2.8',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // optional
$loginUrl = $helper->getLoginUrl('http://localhost/displayFbData.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>
