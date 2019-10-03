<?php
namespace CJDennis\Random;

use Codeception\Test\Unit;
use UnitTester;

class RandomTest extends Unit {
  /**
   * @var UnitTester
   */
  protected $tester;

  protected function _before() {
  }

  protected function _after() {
  }

  // tests
  public function testShouldReturnARandomSixteenBitInteger() {
    $this->assertTrue(is_int(Random::random_short_int()));
  }

  public function testShouldReturnATwoHexDigitString() {
    $this->assertRegExp('/^[\dA-F]{2}$/i', Random::random_hex_bytes(1));
  }

  public function testShouldReturnASixteenHexDigitString() {
    $this->assertRegExp('/^[\dA-F]{16}$/i', Random::random_hex_bytes(8));
  }

  public function testShouldReturnASixteenZeroString() {
    RandomSeam::set_bytes("\x00\x00\x00\x00\x00\x00\x00\x00");
    $this->assertSame('0000000000000000', RandomSeam::random_hex_bytes(8));
  }
}
