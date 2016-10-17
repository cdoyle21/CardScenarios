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
}