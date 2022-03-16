<?php include "inc/header.php"; ?>


<?php

	class Person {
		public $name;
		public $id;

		public function __construct($name) {
			$this->name = $name;
		}   

		public function personDetails() {
			echo "Person Name: {$this->name}";
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function __destruct() {
			if(! empty($this->id)) {
				echo 'Saving Person';
			}
		}

	}

	$person = new Person("Jong Velasquez");
	//$person->personDetails();
	$person->setId(12);
	unset($person);

?>















<?php include "inc/footer.php"; ?>