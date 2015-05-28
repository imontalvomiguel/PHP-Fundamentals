<?php

session_start();
require_once('functions.php');
if ( !is_logged_in() ) {
  header('Location: login.php');
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>secret admin area</title>
  </head>
  <body>
    <h1>Welcome <?= $_SESSION['username']; ?></h1>
    <a href="logout.php">
      <span>logout</span>
    </a>
  </body>
</html>
