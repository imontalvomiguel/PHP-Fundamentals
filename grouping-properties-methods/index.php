<?php

require 'config.php';

$dbh = new Blog\DB\Database($config['DB_USERNAME'], $config['DB_PASSWORD']);

if ( $dbh->getConn() )
{
  $post = $dbh->findId(5, 'posts');
  if ($post)
  {
    var_dump($post);
  } else {
    exit('nothing found');
  }
}
