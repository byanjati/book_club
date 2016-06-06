<?php

class Sparkling extends CondimentDecorator
{
    protected $beverage;

    public function __construct($beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Sparkling";
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.3;
    }
}
