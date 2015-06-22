<?php

require_once 'config.php';
require_once 'functions.php';

use Blog\DB as Database;

$conn = Database\connect($config);

if ($conn)
{
  $films = Database\get('film', $conn);
} else {
  exit(':(');
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Films</title>
  </head>
  <body>
    <?php if ($films) : ?>
    <table>
      <tr>
        <th>Title</th>
        <th>Description</th>
      </tr>
      <?php foreach ($films as $film) : ?>
      <tr>
        <td><?= $film['title']; ?></td>
        <td><?= $film['description']; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php endif; ?>
  </body>
</html>
