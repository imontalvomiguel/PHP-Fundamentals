<?php

define('MAILING_LIST', 'mailing_list.php');

function register_user($name, $email)
{
  // MOVER ESTE ARCHIVO FUERA DE LA CARPETA PUBLICA POR SEGURIDAD
  $sanitized_name = filter_var($name, FILTER_SANITIZE_STRING);
  file_put_contents(MAILING_LIST, "$sanitized_name: $email\n", FILE_APPEND);
}

function previous($key)
{
  if ( !empty($_REQUEST[$key]) )
  {
    return htmlspecialchars($_REQUEST[$key]);
  }
  return '';
}

function valid_email($email)
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function get_registered_users($path = MAILING_LIST)
{
  $users = file($path);

  if ( count($users) )
  {
    return array_map(function($user)
    {
      $info = explode(': ', $user);
      return [
        'name' => $info[0],
        'email' => $info[1]
      ];
    }, $users);
  }

  return [];
}
