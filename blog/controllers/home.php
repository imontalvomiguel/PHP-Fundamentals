<?php

use Blog\DB as Database;
use Blog\Helpers as Helpers;

$posts = Database\get('posts', $conn);

Helpers\renderView('home', ['posts' => $posts]);
