<?php
/**
 * Card Class
 * 
 * @package PHPTest
 */

namespace PHPTest\Task;

class InvalidCardException extends \Exception {}

class Card {

  /**
   * Rank of the Card
   * 
   * @var integer
   */
  protected $rank;

  /**
   * Suit of the Card
   * 
   * @var string
   */
  protected $suit;

  protected $ranks = [ 'a', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'j', 'q', 'k' ];

  protected $suits = [ 's', 'd', 'c', 'h' ];


  /**
   * Initialise a card
   * 
   * @param string $suit
   * @param integer $rank
   */
  public function __construct($suit = null, $rank = null) {

    if ( ! is_null($suit)) {
      $this->setSuit($suit);
    }

    if ( ! is_null($rank)) {
      $this->setRank($rank);
    }
  }

  /**
   * Set suit of the Card
   * 
   * @param string $suit
   */
  public function setSuit($suit) {

    if( ! $this->isValidSuit($suit)) {
      throw new InvalidCardException("An invalid suit supplied: $suit ");
    }

    $this->suit = $suit;
  }

  /**
   * Set rank of the Card
   * 
   * @param integer $rank
   */
  public function setRank($rank) {

    if( ! $this->isValidRank($rank)) {
      throw new InvalidCardException("An invalid rank supplied: $rank ");
    }

    $this->rank = $rank;
  }

  /**
   * Return the suit of the Card
   * 
   * @return string
   */
  public function getSuit() {

    return $this->suit;
  }

  /**
   * Return the rank of the Card
   * 
   * @return integer
   */
  public function getRank() {

    return $this->rank;
  }

  /**
   * Return the Card { rank suit }
   * 
   * @return string
   */
  public function getCard() {

    return $this->rank . $this->suit;
  }

  /**
   * Check if the supplied rank is valid Rank
   * 
   * @param integer @rank
   * @return boolean
   */
  protected function isValidRank($rank) {

    return in_array($rank, $this->ranks);
  }

  /**
   * Check if the supplied suit is valid Suit
   * 
   * @param string @suit
   * @return boolean
   */
  protected function isValidSuit($suit) {

    return in_array($suit, $this->suits);
  }

}