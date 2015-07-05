<?php

use Blog\DB as Database;
use Blog\Helpers as Helpers;

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  extract( $_POST );

  if ( empty($title) || empty($body) ) {
    $status = 'Title & Body are required.';
  } else {
    // Store the post in db
    Database\query('INSERT INTO posts (title, body) VALUES (:title, :body)', [':title' => $title, ':body' => $body], $conn);
    $status = 'Posted';
    $title = false;
    $body = false;
  }
} else {
  $status = false;
  $title = false;
  $body = false;
}

Helpers\renderView('admin', array(
  'status' => $status,
  'title' => $title,
  'body' => $body
));

