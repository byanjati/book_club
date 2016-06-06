<?php

class DarkRoast extends Beverage
{
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function cost() {
        return 0.3;
    }
}
