<?php
namespace CjDennis\Random;

class RandomTest extends \Codeception\Test\Unit {
  /**
   * @var \UnitTester
   */
  protected $tester;

  protected function _before() {
  }

  protected function _after() {
  }

  // tests
  public function testShouldReturnARandomSixteenBitInteger() {
    $this->assertTrue(is_int(Random::random_int()));
  }
}