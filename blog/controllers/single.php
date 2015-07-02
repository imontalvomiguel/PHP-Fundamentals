<?php

use Blog\DB as Database;
use Blog\Helpers as Helpers;
global $conn;

$post = Database\get_by_id('posts', $_GET['id'], $conn);

if ($post)
{
  Helpers\renderView('single', ['post' => $post]);
} else {
  header("HTTP/1.0 404 Not Found");
  exit('Not found');
}
