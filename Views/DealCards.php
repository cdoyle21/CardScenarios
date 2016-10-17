<?php
    namespace DealCards;
    include "../Controllers/Card.php";
    include "../Models/Deck.php";
    use Card\Card;
    use Deck\Deck;

    $deck = new Deck();

    // Cards in sequence
    echo "Cards: " . implode(', ', Card::cards());

    // Shuffle cards then deal 7 cards to 4 people
    print_r($deck->deal($deck->shuffle(Card::cards())));