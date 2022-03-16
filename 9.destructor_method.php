<?php include "inc/header.php";

class Person {

	public $name;
	public $id;

	public function __construct($name) {
		$this->name = $name;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function __destruct() {
		if ( !empty( $this->id ) ) {
			echo 'Saving Person';
		}
	}

}

$personOne = new Person("Klay");
$personOne->setId(13);
unset($personOne);

include "inc/footer.php"; ?>