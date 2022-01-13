<?php

require('Player.php');

$player1 = new Player('Jane Doe');
$player1->throwPins(rand(1, 5), rand(1, 5));
$player1->throwPins(rand(1, 5), rand(1, 5));

$player2 = new Player('John Doe');
$player2->throwPins(rand(1, 5), rand(1, 5));
$player2->throwPins(rand(1, 5), rand(1, 5));



require('ScoreBoard.php');
$score = new Scoreboard([$player1, $player2]);
$score->displayScores();
$score->displayWinner();
