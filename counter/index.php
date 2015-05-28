<?php

ini_set('display_errors', true);

/* Long way
function set_count($file_name = 'counter.txt') {
  if ( file_exists($file_name) ) {
    // read the value
    $handle = fopen($file_name, 'r');

    // increment it by one
    $count = (int) fread($handle, 20) + 1;

    // write the new value
    $handle = fopen($file_name, 'w');
    fwrite($handle, $count);

    // close
    fclose($handle);

  } else {
    // create it
    $handle = fopen($file_name, 'w+');

    // set a default value of 1
    $count = 1;

    fwrite($handle, 1);
    fclose($handle);
  }

  return $count;

}
 */

function set_count($file_name = 'counter.txt') {
  if ( file_exists($file_name) ) {
    // read the content of the file
    $count = (int) file_get_contents($file_name);

    // Increment the count
    $count++;

    // Overwrite the value
    file_put_contents($file_name, $count);

  } else {
   // create it
    $handle = fopen($file_name, 'w+');

    // set a default value of 1
    $count = 1;

    fwrite($handle, 1);
    fclose($handle);
  }

  return $count;
}

$count = set_count();

include 'index.tmpl.php';
