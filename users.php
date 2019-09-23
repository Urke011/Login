<?php
require "config.php";


$all_persons = Person::getAll(); 


foreach($all_persons as $person){
echo "<div style='border:1px solid red;padding:4px;margin:10px;'>{$person[2]}</div>";
}