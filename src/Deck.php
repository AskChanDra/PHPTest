<?php
/**
 * Deck Class
 * 
 * @package PHPTest
 */

 namespace PHPTest\Task;

 class Deck {

  /**
   * Collection of Cards
   */
  protected $cards = [];

  public function __construct( array $cards = []) {
    
    $this->setCards($cards);
  }

  /**
   * Return the total cards
   * 
   * @return integer
   */
  public function getCardCount() {

    return count($this->cards);
  }

  /**
   * Shuffle the deck
   * 
   */
  public function shuffle() {

    shuffle($this->cards);
  }

  /**
   * Shuffle the deck Method 2
   */
  public function shuffle2() {

    $total_cards = $this->getCardCount();

    foreach($this->cards as $index => $card) {
     
      // Get random Index
      $random_index = mt_rand(1, $total_cards) - 1;
      $temp_card = $this->cards[$random_index];

      $this->cards[$index] = $temp_card;
      $this->cards[$random_index] = $card;
    }
  }

  /**
   * Take a card off the top of the deck
   * 
   * @return Card
   */
  public function takeCard() {
    
    return array_shift($this->cards);
  }

  /**
   * Places a card at top of the deck
   * 
   */
  public function addCard($card) {

    //array_unshift($this->cards, $card);
    $this->cards->prepend($card);
  }


  /**
   * Set collection of card
   */
  public function setCards( array $cards) {
    
    $this->cards = new Collection($cards);
  }

  /**
   * Get the Cards
   */
  public function getCards() {

    return $this->cards;
  }

  /**
   * Get standard 52 cards
   * 
   * @return Collection of 52 Cards
   */
  public static function getStandardPalyingCards() {

   $ranks = [ 'a', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k' ];
   $suits = [ 's', 'd', 'c', 'h' ];

   $cards = array();
   foreach( $suits as $suit) {
     foreach( $ranks as $rank ) {
       $cards[] = new Card( $suit, $rank );
     }
   }

   return $cards;
  }

  /**
   * Get standard 52 cards
   * 
   * @return Collection of 52 Cards
   */
  public function setStandardPlayingCards() {

    $ranks = [ 'a', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k' ];
    $suits = [ 's', 'd', 'c', 'h' ];
 
    $cards = array();
    foreach( $suits as $suit) {
      foreach( $ranks as $rank ) {
        $cards[] = new Card( $suit, $rank );
      }
    }
 
    $this->cards =  $cards;
  }

 }