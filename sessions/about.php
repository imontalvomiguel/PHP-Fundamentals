<?php

session_start();

echo $_SESSION['username'];

session_destroy();
$_SESSION = array();

var_dump($_SESSION);
