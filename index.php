<?php

require "config.php";



$person = Person::getById($_POST['tb_id']);



$form = new FormHelper("post","");
$form->open_tag();

$form->input("text","tb_id");

$form->input("submit","btn_submit","confirm");


$form->close_tag();

/*$cars = array("Mercedes","BMW","Opel","Audi");

function select(){
	global $cars;
echo "<select>";

foreach($cars as $car){
	echo "<option>{$car}</option>";
}
echo "</select>";
}

select();
*/
?>