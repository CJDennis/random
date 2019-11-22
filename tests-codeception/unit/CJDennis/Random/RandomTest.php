<?php
namespace CJDennis\Random;

use Codeception\Test\Unit;
use PHPUnit\Framework\Error\Deprecated;
use UnitTester;

class RandomTest extends Unit {
  use RandomTestCommon;
  /**
   * @var UnitTester
   */
  protected $tester;

  protected function _before() {
    set_error_handler(function ($code, $message, $file = null, $line = null) {
      throw new Deprecated($message, $code, $file, $line);
    }, E_USER_DEPRECATED);
    $this->common_before();
  }

  protected function _after() {
    $this->common_after();
    restore_error_handler();
  }
}
