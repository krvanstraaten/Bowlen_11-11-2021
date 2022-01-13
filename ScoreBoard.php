<?php

class ScoreBoard
{
    private $scores = [];
    private $players = [];

    public function __construct($players)
    {
        $this -> players = $players;
        var_dump($players);
    }

    private function calculatePlayerScore($player)
    {
        foreach ($player->getPinsThrown() as $round) {
            echo $player->getName() . " threw " . count($round) . " times" . PHP_EOL;
            foreach ($round as $x) {
                echo  $x . " pins" . PHP_EOL;
            }
            $sum[] = array_sum($round);
            echo $player->getName() . " scored " . array_sum($round) . " points this round" . PHP_EOL . PHP_EOL;
        }
        $this->scores[$player->getName()] = array_sum($sum);
    }

    private function calculateAllScores()
    {
        foreach ($this->players as $player) {
            $this->calculatePlayerScore($player);
        }
    }

    public function displayScores()
    {
        $this->calculateAllScores();
        foreach ($this->scores as $name => $score) {
            echo "$name's score is $score in total." . PHP_EOL;
        }
    }

    public function displayWinner()
    {
        $max = max($this->scores);
        $winner = array_search($max, $this->scores);
        echo PHP_EOL . "The winner is $winner!!";
    }
}
