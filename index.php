<?php
require_once 'APICall.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Text Analyzer</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <form action="" method="POST">
      <h1>Type in your sentence!</h1>
	  <h2>Some Test Code!</h2>
	  <h3>code that will not be commited</h3>
      <div class="form-group">
        <input type="textarea" name="Text" size="50"></input>
      </div>
      <input type="submit" value="Submit">
    </form>

    <?php
    if(isset($output)) {
      echo '<p>Your enthusiasm score is: ';
      $output_array = json_decode($output, true);
      echo number_format($output_array['documents'][0]['score'] * 100, 2);
      echo '</p>';
    } ?>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>
