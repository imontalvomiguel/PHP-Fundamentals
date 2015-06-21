<?php

require_once 'functions.php';


if ( isset($_GET['s']) && !empty($_GET['s']) ) {

  $s = $_GET['s'];

  try {
    /**
     * Prepared Statements
     */
    $results = $conn->prepare('SELECT * FROM film WHERE title LIKE ?');
    $results->bindValue(1,"%" . $s . "%");
    $results->execute();
  } catch (Exception $e) {
    echo $e->getMessage();
  }

  $matches = $results->fetchAll(PDO::FETCH_ASSOC);
}
?>

<pre>
  <?php var_dump($matches); ?>
</pre>

