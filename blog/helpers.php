<?php namespace Blog\Helpers;

function renderView($view, $vars = array())
{
  extract($vars);
  ob_start();
  include "views/$view.tmpl.php";
  $content = ob_get_clean();
  include 'views/layout.tmpl.php';
}
