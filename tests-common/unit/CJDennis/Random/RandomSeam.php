<?php
namespace CJDennis\Random;

class RandomSeam extends Random {
  protected static $bytes = '';
  protected static $repeat_bytes = false;

  public static function clear_bytes() {
    self::$bytes = '';
  }

  public static function set_bytes(string $bytes) {
    self::$bytes .= $bytes;
  }

  public static function repeat_bytes() {
    self::$repeat_bytes = true;
  }
  
  public static function do_not_repeat_bytes() {
    self::$repeat_bytes = false;
  }

  protected static function random_bytes(int $count) {
    if (static::$bytes === '') {
      $random_bytes = parent::random_bytes($count);
    }
    else {
      $min = min(strlen(static::$bytes), $count);
      $random_bytes = substr(static::$bytes, 0, $min);
      static::$bytes = substr(static::$bytes, $min);
      if (static::$repeat_bytes) {
        static::$bytes .= $random_bytes;
      }
      $count -= $min;
      if ($count) {
        $random_bytes .= static::random_bytes($count);
      }
    }
    return $random_bytes;
  }
}
