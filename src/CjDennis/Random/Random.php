<?php
namespace CjDennis\Random;

class Random {
  public static function random_int() {
    trigger_error(__METHOD__ . '() is deprecated. Use ' .__CLASS__. '::random_short_int() instead.', E_USER_DEPRECATED);
    return static::random_short_int();
  }

  public static function random_short_int() {
    return hexdec(static::random_hex_bytes(2));
  }

  public static function random_hex_bytes(int $count): string {
    return bin2hex(static::random_bytes($count));
  }

  protected static function random_bytes(int $count) {
    return openssl_random_pseudo_bytes($count);
  }
}
