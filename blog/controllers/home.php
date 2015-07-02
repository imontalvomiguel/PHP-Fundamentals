<?php

use Blog\DB as Database;
use Blog\Helpers as Helpers;

global $conn;

$posts = Database\get('posts', $conn);

Helpers\renderView('home', ['posts' => $posts]);
