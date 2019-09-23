<?php

require "config.php";
if(isset($_POST['btn_submit'])){
	$person = new Person;
	$person->firstname = $_POST['tb_firstname'];
	$person->lastname = $_POST['tb_lastname'];
	$person->Insert();
}

$form = new FormHelper("post","");
$form->open_tag();
echo "First name: <br />";
$form->input("text","tb_firstname");
echo "<br />";
echo "Last name: <br />";
$form->input("text","tb_lastname");
$form->input("submit","btn_submit","Register");
$form->close_tag();