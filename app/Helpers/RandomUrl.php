<?php

namespace App\Helpers;

class RandomUrl
{
  public static function generateUrl($length = 7)
  {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    $url = '';

    for ($i = 0; $i < $length; $i++) {
      $url .= $characters[random_int(0, strlen($characters) - 1)];
    }

    return 'url=' . strtolower($url);
  }
}
