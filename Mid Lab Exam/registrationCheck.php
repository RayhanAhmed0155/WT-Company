<?php
	
	session_start();

	if(isset($_POST['signUp'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$dob = $_POST['dob'];

		if(empty($name) == true || empty($email) == true || empty($username) == true || empty($password) == true  || empty($confirmPassword) == true || empty($gender) == true) || empty($dob) == true){
			echo "null submission!";
		}else{

			if($name == true || $email == true|| $username == true||$password == true||$confirmPassword == true||$gender == true||$dob==true){
				
				$_SESSION['name'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				$_SESSION['confirmPassword'] = $confirmPassword;
				$_SESSION['gender'] = $gender;
				$_SESSION['dob'] = $dob;

				header('location: login.html');

			}else{
				echo "invalid registration";
			}
		}

	}

?>