<?php include "inc/header.php";

class UserData {
	public $user;
	public $userId;
	const NAME = "Jaime Velasquez Jr";

	public function __construct($user, $userId) {
		$this->user = $user;
		$this->userId = $userId;
		echo "User name is {$user} and User ID is {$userId}";
	}

	public function display() {
		echo "Full name is " . UserData::NAME;
	}

	public function __desctruct() {
		unset($user);
		unset($userId);
	}

}

$user = "Jaime";
$userid = 13;

$url = new UserData($user, $userid);
echo '<br>';
$url->display();

include "inc/footer.php"; ?>

<!-- User name is ?? and User ID is ?? -->