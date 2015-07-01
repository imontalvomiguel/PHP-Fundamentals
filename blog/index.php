<?php

require_once 'config.php';
require_once 'functions.php';
require_once 'helpers.php';

use Blog\DB as Database;
use Blog\Helpers as Helpers;

$conn = Database\connect($config);

if (!$conn) exit('Problem connecting to the db.');

$posts = Database\get('posts', $conn);

Helpers\renderView('index', ['posts' => $posts]);
