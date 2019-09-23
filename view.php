<?php

require "config.php";
$person = Person::getById(2);
print_r($person);


/*require "classes/IEntity.class.php";
require "classes/product.class.php";
require "classes/person.class.php";
$product = Product::getById(2);

$person = Person::getById(2);
print_r($person);
*/




/*
require_once "classes/person.class.php";

$person = Person::getById(1);
$person->firstname = "Sally";
$person->lastname = "Jones";
$person->Insert();
print_r($person);
*/