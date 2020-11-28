<?php
/**
 * PHP Task A Test 
 * 
 * 
 */

use PHPUnit\Framework\TestCase;

use PHPTest\Task\TaskA;

class TaskATest extends TestCase
{
    public function testRandomHandOfFiveCardsCount() {
      $hand_array = TaskA::getFiveCards();
      $this->assertEquals( 5, count($hand_array));
    }

    public function testRandomHandHasValidRanks() {
      $ranks = $this->getRanks();

      $hand_array = TaskA::getFiveCards();
      $is_valid_rank = false;
      foreach($hand_array as $hand) {
        // 'a', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k'
        $r = substr($hand, 0, -1);
        if(in_array($r, $ranks)){
          $is_valid_rank = true;
        }
        $this->assertTrue($is_valid_rank);
        $is_valid_rank = false;
      }
    }

    public function testRandomHandHasValidSuits() {
      $suits = $this->getSuits();

      $hand_array = TaskA::getFiveCards();
      $is_valid_suit = false;
      foreach($hand_array as $hand) {
        // 's', 'd', 'c', 'h'
        $s = substr($hand, -1);
        if(in_array($s, $suits)){
          $is_valid_suit = true;
        }
        $this->assertTrue($is_valid_suit);
        $is_valid_suit = false;
      }
    }

    private function getRanks() {
      return [ 'a', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k' ];
    } 
    
    private function getSuits() {
      return [ 's', 'd', 'c', 'h' ];
    }
}

