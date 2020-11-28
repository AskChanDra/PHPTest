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

      // A high
      $hand  = ['10s', 'js', 'qc', 'ac', 'kc'];

      $is_straight = TaskB::is_straight($hand);

      $this->assertTrue($is_straight);

      // A Low
      $hand  = ['ad', '5d', '2d', '4d', '3d'];

      $is_straight = TaskB::is_straight($hand);

      $this->assertTrue($is_straight);

    }

    public function testHandIsNotStraight() {

      $hand  = ['10s', 'js', 'qc', '8c', 'kc'];

      $is_not_straight = TaskB::is_straight($hand);

      $this->assertFalse($is_not_straight);

      $hand  = ['ad', '6d', '2d', '4d', '3d'];

      $is_not_straight = TaskB::is_straight($hand);

      $this->assertFalse($is_not_straight);

    }

    public function testHandIsStraighFlush() {

      // A Low
      $a_low  = ['10s', 'js', 'qs', 'as', 'ks'];

      $is_straight_flush = TaskB::is_straight_flush($a_low);

      $this->assertTrue($is_straight_flush);

      // A High
      $a_high  = ['ad', '5d', '2d', '4d', '3d'];

      $is_straight_flush = TaskB::is_straight_flush($a_high);

      $this->assertTrue($is_straight_flush);

    }

    public function testHandIsNotStraighFlush() {

      // A Low
      $a_low  = ['10s', 'js', 'qc', 'ac', 'kc'];

      $is_not_straight_flush = TaskB::is_straight_flush($a_low);

      $this->assertFalse($is_not_straight_flush);

      // A High
      $a_high  = ['ad', '5d', '2d', '4d', '3c'];

      $is_not_straight_flush = TaskB::is_straight_flush($a_high);

      $this->assertFalse($is_not_straight_flush);

    }

}