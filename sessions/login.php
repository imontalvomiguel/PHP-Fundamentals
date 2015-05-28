<?php

session_start();
ini_set('display_errors', true);

require_once('config.php');
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get their values
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (validate_user_creds($username, $password)) {
    // login + set session
    $_SESSION['username'] = $username;
    header('Location: admin.php');
  } else {
    $status = 'Incorrect login credentials';
  }
}


//if ( isset($_POST['loginForm'])) {
//}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Loginform</title>
  </head>
  <body>
    <form action="" method="post">
      <table>
        <tr>
          <td>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="" />
          </td>
        </tr>
        <tr>
          <td>
            <label for="username">Password</label>
            <input type="text" name="password" id="password" value="" />
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="loginForm" value="Submit" />
          </td>
        </tr>
      </table>
      <?php echo (isset($status) ? $status : ''); ?>
    </form>
  </body>
</html>
