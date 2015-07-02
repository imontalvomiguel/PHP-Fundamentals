<?php

require_once 'config.php';
require_once 'functions.php';
require_once 'helpers.php';

use Blog\DB as Database;
use Blog\Helpers as Helpers;

$conn = Database\connect($config);

if (!$conn) exit('Problem connecting to the db.');

Helpers\controller($_GET['url']);
