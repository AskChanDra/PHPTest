<?php
/**
 * PHP Task B Test 
 * 
 * 
 */

use PHPUnit\Framework\TestCase;

use PHPTest\Task\TaskB;

class TaskBTest extends TestCase {
    public function testHandIsStraight() {
      $a_low  = ['10s', 'js', 'qc', 'ac', 'kc'];
      $straight = TaskB::is_straight($a_low);
      $this->assertTrue($straight);

      $a_high  = ['ad', '5d', '2d', '4d', '3d'];
      $straight = TaskB::is_straight($a_high);
      $this->assertTrue($straight);
    }
    public function testHandIsStraighFlush() {
      $a_low  = ['10s', 'js', 'qc', 'ac', 'kc'];
      $flush = TaskB::is_straight($a_low);
      $this->assertTrue($flush);

      $a_high  = ['ad', '5d', '2d', '4d', '3d'];
      $flush = TaskB::is_straight($a_high);
      $this->assertTrue($flush);
    }
}