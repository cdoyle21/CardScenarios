<?php
namespace Card;

class Card {
    static private $values = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
    static private $suits = array('Heart', 'Club', 'Spades', 'Diamonds');

    /*
     * Our Card Constructor
     * Pre PHP 5 this would be
     * public function Card ( $values, $suits )
     *
     */
    public function __construct( $values, $suits )
    {
        Card::$values = $values;
        Card::$suits = $suits;
    }

    /**
     * Builds a deck of cards in perfect sequence.
     *
     * @return array
     */
    static public function cards()
    {
        $cards = array();
        foreach (Card::$suits as $suit) {
            foreach (Card::$values as $value) {
                $cards[] = $value . $suit;
            }
        }

        return ($cards);
    }

}