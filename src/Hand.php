<?php
/**
 * Hand Class
 * 
 */

 namespace PHPTest\Task;

 class InvalidHandException extends \Exception {}

 class Hand extends Deck {

  /**
   * Card in this hand
   * 
   */
  protected $cards;

  /**
   * Card limit in Hand
   */
  protected $cardLimit;

  public function __construct(array $cards = []) {

    parent::__construct($cards);
    $this->cardLimit = 5;
  }

  /**
   * Add Card
   * 
   */
  public function addCard($card) {
    
    if($this->cardLimit == $this->getCardCount()) {
      throw new InvalidHandException("Hand limit is already full.");
    }
    parent::addCard($card);
  }

  /**
   * Get Card in array format
   * 
   * @return array of string
   */
  public function getCardArray() {
    $cardArray = [];
    foreach($this->cards as $card) {
      $cardArray[] = $card->getCard();
    }

    return $cardArray;
  }

 }