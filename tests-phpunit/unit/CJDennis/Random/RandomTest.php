<?php
namespace CJDennis\Random;

use PHPUnit\Framework\TestCase;

/**
 * @covers \CJDennis\Random\Random
 */
class RandomTest extends TestCase {
  protected function setUp(): void {
    $this->_before();
  }

  protected function tearDown(): void {
    $this->_after();
  }

  use RandomTestCommon;
}