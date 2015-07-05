<?php namespace App\Html;

/**
 * Hml utility class
 */
class Html
{
  public static function anchor($href, $text)
  {
    return "<a href={$href}>{$text}</a>";
  }

  public static function script($src)
  {
    return "<script src={$src}></script>";
  }
}
