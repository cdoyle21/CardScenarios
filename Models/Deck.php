<?php
namespace Deck;

class Deck
{
    /**
     * Shuffles an array of cards.
     *
     * @param array $cards The array of cards to shuffle.
     *
     * @return array
     */
    public function shuffle($cards)
    {
        $total_cards = count($cards);
        while (--$total_cards) {
            $j = mt_rand(0, $total_cards);

            if ($total_cards != $j) {
                // swap elements
                $tmp = $cards[$j];
                $cards[$j] = $cards[$total_cards];
                $cards[$total_cards] = $tmp;
            }
        }

        return $cards;
    }

    /**
     * Prints shuffled cards and Deals seven cards to four people
     *
     * @param $shuffledCards
     *
     * @return array
     */
    public function deal($shuffledCards)
    {
        print_r($shuffledCards);
        $hands = array(1 => array(), 2=>array(), 3=>array(), 4=>array());
        for ($i = 0; $i < 7; $i++) {
            $hands[1][] = array_shift($shuffledCards);
            $hands[2][] = array_shift($shuffledCards);
            $hands[3][] = array_shift($shuffledCards);
            $hands[4][] = array_shift($shuffledCards);
        }
        return $hands;
    }
}