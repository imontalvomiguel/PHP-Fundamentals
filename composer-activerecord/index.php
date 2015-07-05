<?php

require 'vendor/autoload.php';

$cfg = ActiveRecord\Config::instance();
$cfg->set_model_directory('models');
$cfg->set_connections(
  array(
    'development' => 'mysql://root:root@localhost/blog',
  )
);

$posts = Post::all();

var_dump($posts);
die;
