<?php

include('Beverage.php');
include('DarkRoast.php');
include('CondimentDecorator.php');
include('Mocha.php');
include('Sparkling.php');

$darkRoast = new DarkRoast("this is darkRoast");
echo $darkRoast->getDescription() . "\r\n";
echo $darkRoast->cost() . "\r\n";

$darkRoast = new Mocha($darkRoast);
echo $darkRoast->getDescription() . "\r\n";
echo $darkRoast->cost() . "\r\n";

$darkRoast = new Sparkling($darkRoast);
echo $darkRoast->getDescription() . "\r\n";
echo $darkRoast->cost() . "\r\n";
