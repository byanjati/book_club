<?php

abstract class Beverage
{
    protected $description = "unknown beverage";

    abstract function getDescription();
    abstract public function cost();
}
