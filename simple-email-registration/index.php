<?php

require 'functions.php';

if ( $_SERVER['REQUEST_METHOD'] === 'POST')
{
  $name = trim( $_POST['name'] );
  $email = trim( $_POST['email'] );

  if ( empty($name) || empty($email) || !valid_email($email) )
  {
    $status = 'Introduce un nombre y email validos';
  } else {
    register_user($name, $email);
    $status = 'Gracias por registrarte';
  }
}
include 'index.tmpl.php';
