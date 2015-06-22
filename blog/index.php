<?php

require_once 'config.php';
require_once 'functions.php';

use Blog\DB as Database;

$conn = Database\connect($config);

if (!$conn) exit('Problem connecting to the db.');

$posts = Database\get('posts', $conn);

include 'index.view.php';
