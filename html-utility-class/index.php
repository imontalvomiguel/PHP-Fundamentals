<?php

ini_set('display_errors', true);
require 'Html.php';
use App\Html\Html as HTML;
echo HTML::anchor('http://montalvomiguel.net', '@montalvomiguel');
echo HTML::script('https://code.jquery.com/jquery-2.1.4.min.js');
