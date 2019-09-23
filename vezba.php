<?php


Class Person
{
	public $id;
	public $firstname;
	public $lastname;
	
	
}

$person = new Person;
$person->id = 1;
$person->firstname = "Klark";
$person->lastname = "Kent";

$conn = mysqli_connect("localhost", "root", "", "users");
mysqli_query($conn,"insert into persons values (null,'{$person->firstname}', '{$person->lastname}')");