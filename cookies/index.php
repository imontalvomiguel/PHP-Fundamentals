<?php
// Setting the cookie
//setcookie('fontSize', 25, time() - 60 * 30, '/');

setcookie('prefs[fontSize]', 25);
setcookie('prefs[favoriteCategory]', 'news');
setcookie('prefs[screeenWidth]', '1024px');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>cookies</title>
    <style type="text/css" media="all">
      body {
        font-size: <?= $_COOKIE['fontSize'] . 'px'; ?>
      }
    </style>
  </head>
  <body>
    <?php
    if ( isset($_COOKIE['prefs']) ) {
      foreach ($_COOKIE['prefs'] as $key => $value) {
        echo '<li>'. htmlspecialchars($key) . ':' . htmlspecialchars($value);
      }
    }
    ?>
    <h1>hola</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
