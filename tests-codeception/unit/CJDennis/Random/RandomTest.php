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
    $this->common_before();
  }

  protected function _after() {
    $this->common_after();
  }

  protected function set_dummy_deprecation_handler() {
    set_error_handler(function ($code, $message, $file = null, $line = null) {
      return false;
    }, E_USER_DEPRECATED);
  }

  protected function clear_dummy_deprecation_handler() {
    restore_error_handler();
  }

  protected function set_deprecation_escalation_handler() {
    restore_error_handler();

    set_error_handler(function ($code, $message, $file = null, $line = null) {
      throw new Deprecated($message, $code, $file, $line);
    }, E_USER_DEPRECATED);
  }

  protected function set_deprecation_ignoring_handler() {
    restore_error_handler();

    set_error_handler(function ($code, $message, $file = null, $line = null) {
      return true;
    }, E_USER_DEPRECATED);
  }
}
