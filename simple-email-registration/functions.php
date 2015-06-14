<?php

function register_user($name, $email)
{
  // MOVER ESTE ARCHIVO FUERA DE LA CARPETA PUBLICA POR SEGURIDAD
  file_put_contents('mailing_list.php', "$name: $email\n", FILE_APPEND);
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
