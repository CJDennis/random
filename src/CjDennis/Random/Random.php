<?php
namespace CjDennis\Random;

class Random {
  public static function random_int() {
    $bytes = openssl_random_pseudo_bytes(2);
    return hexdec(bin2hex($bytes));
  }

  public static function random_hex_bytes(int $count): string {
    return '42';
  }
}
