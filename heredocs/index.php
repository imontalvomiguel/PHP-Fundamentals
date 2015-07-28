<?php

$post = array(
  'author' => 'Jeffrey Way',
  'body' => 'Here is the body',
  'title' => 'My awesome post',
  'publish-date' => '6-10-2012'
);

extract($post);

// Cuando trabajas con llaves de un arreglo debes usar {} interpolation
// $email =  "<h1>{$post['title']}</h1><p>{$post['body']}</p>";

// No es necesario cuando tienes variables normales
//$email =  "<h1>$title</h1><p>$body</p>";

// La mayoría de themes en wp concatenan el html
// $email = "<h1>{$post['title']}</h1>";
// $email .= "<p>{$post['body']}</p>";

// HEREDOCS - La manera más elegante de trabajar con fragmentos de html
$email = <<<EOT
<h1>{$post['title']}</h1>
<p>{$post['body']}</p>
EOT;

echo $email;
