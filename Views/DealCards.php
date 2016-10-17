<?php
    namespace ShuffleCards;
    include "../Controllers/Card.php";
    include "../Models/Deck.php";
    use Card\Card;
    use Deck\Deck;

    $deck = new Deck();

    // Cards in sequence
    echo "Cards: " . implode(', ', Card::cards());

    // Shuffle Cards 
    echo "Shuffled Cards: " . implode(', ', $deck->shuffle(Card::cards()));