<?php namespace Blog\Helpers;

function renderView($view, $vars = array())
{
  extract($vars);
  ob_start();
  include "views/$view.tmpl.php";
  $content = ob_get_clean();
  include 'views/layout.tmpl.php';
}

function controller($name) {

  if (empty($name))
  {
    $name = 'home';
  }

  $file = "controllers/$name.php";

  if ( file_exists($file) )
  {
    require "controllers/$name.php";
  } else
  {
    header("HTTP/1.0 404 Not Found");
    exit('Not Found');
  }

}
