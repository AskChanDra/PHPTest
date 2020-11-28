<?php
/**
 * Task A
 * 
 * Generate a random hand of 5 standard playing cards.
 * 
 */

namespace PHPTest\Task;

class TaskA {
  public static function getFiveCards(){
    $deck = new Deck();

    // Get Started with 52 Standard Palying Cards.
    $deck->setStandardPlayingCards();

    // Shuffle: Using PHP mt_rand()
    //$deck->shuffle2();

    // Shuffle: using PHP shuffle()
    $deck->shuffle();     

    // Create new Hand
    $hand = new Hand();

    // Add 5 Cards to the hand.
    for ($x = 0; $x <= 4; $x++) {
      $hand->addCard($deck->takeCard());
    }

    return $hand->getCardArray();
  }
}
