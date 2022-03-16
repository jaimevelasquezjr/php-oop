<?php

   include "inc/header.php";

class UserData {
	public $user;
	public $userId;

	public function __construct($user, $userId) {
		$this->user = $user;
		$this->userId = $userId;
	}

	public function display() {
		echo "User name is {$this->user} and User ID is {$this->userId}";
	}

}

class Admin extends UserData {
	public $level;

	public function display() {
		echo "User name is {$this->user}, User ID is {$this->userId} and User level is {$this->level}";
	}

}

$user = "Jaime";
$userid = 13;

$url = new UserData($user, $userid);
echo '<br>';
$url->display();

echo '<br>';

$user = "Klay";
$userid = 21;

$ad = new Admin($user, $userid);
$ad->level = "Administrator";
$ad->display();

?>

<?php include "inc/footer.php"; ?>

<!-- User name is ?? and User ID is ?? -->
