<?php

use Blog\DB as Database;
use Blog\Helpers as Helpers;

$post = Database\get_by_id( intval($_GET['id']), 'posts', $conn );

if ($post)
{
  Helpers\renderView( 'single', ['post' => $post] );
} else {
  header("HTTP/1.0 404 Not Found");
  exit('Not found');
}
