<?php

require_once 'config.php';
$dsn = 'mysql:host=localhost;dbname=sakila';
try {
  $conn = new PDO($dsn, $config['DB_USERNAME'], $config['DB_PASSWORD']);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo $e->getMessage();
  die();
}

/**
 * Query method.
 */
//try {
  //$results = $conn->query('SELECT * FROM film');
//} catch(Exception $e) {
  //echo $e->getMessage();
  //die();
//}
//$films = $results->fetchAll(PDO::FETCH_ASSOC);
//var_dump($films);
