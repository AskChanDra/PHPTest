<?php
/**
 * Task A
 * 
 * Generate a random hand of 5 standard playing cards.
 * 
 */

namespace PHPTest\Task;

require __DIR__ . './../vendor/autoload.php';

$deck = new Deck();

// Get Started with 52 Standard Palying Cards.
$deck->setStandardPlayingCards();

// Shuffle to get random cards.
$deck->shuffle();

// Create new Hand
$hand = new Hand();

// Add 5 Cards to the hand.
for ($x = 0; $x <= 4; $x++) {
  $hand->addCard($deck->takeCard());
}

// Log Console
echo "Five Random Playing Cards : \n ";
echo  print_r($hand->getCardArray());
echo  "\n"; 

