<?php include "inc/header.php";

class Person {

	public $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function personDetails() {
		echo "Person Name is {$this->name}";
	}

}

$personOne = new Person("Klay");
$personOne->personDetails();

include "inc/footer.php"; ?>