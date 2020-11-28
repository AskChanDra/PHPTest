<?php 

use PHPTest\Task\Calculator;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
  protected $Sum;

  public function setUp(): void
  {
    $this->Sum = new Calculator();
  }

  public function testCalculatorOfSum()
  {
    $numbers = [2, 3];
    $this->assertEquals(5, $this->Sum->add($numbers[0], $numbers[1]));
  }
}