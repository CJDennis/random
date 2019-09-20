<?php
namespace CjDennis\Random;

class Random {
  public static function random_int() {
    $bytes = openssl_random_pseudo_bytes(2);
    return hexdec(bin2hex($bytes));
  }
}
