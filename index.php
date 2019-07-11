<?php
	include 'user.php';
		class Student extends User{ // dlia nasledovania
			protected $email;

			public function setEmail($email){ 
			$this->email = $email;
		}
	}
