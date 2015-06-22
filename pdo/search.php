<?php

require_once 'config.php';
require_once 'functions.php';

if ( !empty($_GET['s']) ) {

  $s = $_GET['s'];

  $conn = connect($config);

  if ($conn)
  {
    $search_results = query('SELECT * FROM film WHERE title LIKE :term', [':term' => '%' . $s . '%'], $conn);
  } else {
    exit(':(');
  }

}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Search film</title>
  </head>
  <body>
    <h3>Search:</h3>
    <form>
      <table>
        <tr>
          <td>
            <input type="text" id="search" name="s" placeholder="Search" />
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Search" />
          </td>
        </tr>
      </table>
    </form>
    <?php if ( isset($search_results) ) :  ?>
      <hr />
      <?php if (!empty($search_results)) : ?>
      <table>
        <tr>
          <th>Title</th>
          <th>Description</th>
        </tr>
        <?php foreach ($search_results as $result) : ?>
        <tr>
          <td><?= $result['title']; ?></td>
          <td><?= $result['description']; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
      <?php else : ?>
      <p>Nothing found</p>
      <?php endif; ?>
    <?php endif; ?>
  </body>
</html>
