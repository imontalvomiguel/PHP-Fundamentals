<?php

$images = glob('img/*.{png,jpg}', GLOB_BRACE);

foreach ($images as $img) {
  //echo dirname($img);
  //basename($img);
  //echo substr($img, -4);
  //print_r( pathinfo($img) );
  //extract( pathinfo($img) );
  //echo pathinfo($img, PATHINFO_FILENAME);
  extract( pathinfo($img) );
  echo "{$filename}-thumb.{$extension}\n";

}
