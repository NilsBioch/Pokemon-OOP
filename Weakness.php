<?php


class Weakness{
    public function __construct($energyType, $multiplier)
    {
        $this->energyType = $energyType;
        $this->multiplier = $multiplier;
    }
}