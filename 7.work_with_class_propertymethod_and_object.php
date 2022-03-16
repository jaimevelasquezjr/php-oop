<?php include "inc/header.php";

// 7. Work With Class,Property, Method and Object

class Person {

	public $name;

	public function personName() {
		echo "Person name is: " . $this->name;
	}

}

$personOne = new Person;
$personOne->name = "Jong";
$personOne->personName();

include "inc/footer.php"; ?>