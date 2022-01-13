<?php

class Player
{
    private $name;
    private $pinsThrown = [];

    public function __construct($name)
    {
        $this -> name = $name;
    }

    public function throwPins($one, $two)
    {
        array_push($this -> pinsThrown, array($one, $two));
    }

    public function getPinsThrown()
    {
        return $this->pinsThrown;
    }

    public function getName()
    {
        return $this -> name;
    }
}
