<?php
if (isset($_POST['font-size'])) {
  $font_size = $_POST['font-size'];
} else if (isset($_COOKIE['fontSize'])) {
  $font_size = $_COOKIE['fonSizes'];
} else {
  $font_size = 16;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  setcookie('fontSize', $font_size, time() + 60 * 60);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>fontsize</title>
    <style type="text/css" media="all">
      body {
      font-size: <?php echo $font_size . 'px'; ?>
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <table>
        <tr>
          <td>
            <label for="font-size">Fontsize: </label>
          </td>
        </tr>
        <tr>
          <td>
            <select name="font-size" id="font-size">
              <option value="10">10</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="40">40</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="fontsize" id="submit" value="Submit" />
          </td>
        </tr>
      </table>
    </form>

    <h1>Lorem Ipsum</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
