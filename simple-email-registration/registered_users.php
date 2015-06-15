<?php

session_start();
require 'functions.php';

if ( !is_logged_in() ) {
  header('Location: login.php');
  exit();
}
$registered_users = get_registered_users();
include 'registered_users.tmpl.php';
