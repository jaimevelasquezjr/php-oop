<?php

   class UserData
   {
      public $user;
      public $userId;

      public function __construct($user, $userId)
      {
         $this->user = $user;
         $this->userId = $userId;
      }

      public function display() {
         echo "User name is: {$this->user} and User ID is: {$this->userId}";
      }
   }

?>