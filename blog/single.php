<?php

require_once 'config.php';
require_once 'functions.php';
require_once 'helpers.php';

use Blog\DB as Database;
use Blog\Helpers as Helpers;

$conn = Database\connect($config);

if( isset($_GET['id']) )
{
  $id = intval($_GET['id']);
}

if (!$conn) exit('Problem connecting to the db.');
if (!isset($id)) exit('Query parameter not found');

$post = Database\get_by_id('posts', $id, $conn);

if ($post)
{
  Helpers\renderView('single', ['post' => $post]);
} else {
  header('location: index.php');
  exit();
}
