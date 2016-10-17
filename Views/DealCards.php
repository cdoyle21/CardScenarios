<?php
namespace ShuffleCards;
include "../Controllers/Card.php";
include "../Models/Deck.php";
use Card\Card;

// Cards in sequence
echo "Cards: " . implode(', ', Card::cards());