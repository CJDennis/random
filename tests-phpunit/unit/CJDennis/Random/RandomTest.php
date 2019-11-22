<?php
namespace CJDennis\Random;

use PHPUnit\Framework\TestCase;

/**
 * @covers \CJDennis\Random\Random
 */
class RandomTest extends TestCase {
  use RandomTestCommon;

  protected function setUp(): void {
    $this->common_before();
  }

  protected function tearDown(): void {
    $this->common_after();
  }

  protected function set_dummy_deprecation_handler() {
  }

  protected function clear_dummy_deprecation_handler() {
  }

  protected function set_deprecation_escalation_handler() {
  }

  protected function set_deprecation_ignoring_handler() {
  }
}
