<?php
	
	session_start();

	if(isset($_POST['Login'])){

		$id = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($id == true || $password == true){
				
				$_SESSION['id'] = $username;
				$_SESSION['password'] = $password;

				header('location: publicHome.php');

			}else{
				echo "invalid username/password";
			}
		}

	}


?>