<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	function ispassword_strong($password){

		// special charactor
		// length > 8
		// letters
		// numbers
		if( strlen($password)<8 ){
			return false;
		}

	}

	$username = '';
	$password = '';

	if( $_SERVER['REQUEST_METHOD']=='POST' ){

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		// $password = str_replace(" ", "", $password);

		// form validation

		if( $username == '' ){
			echo "Please enter your name first.";
		}else if( $password == '' ){
			echo "Please enter your password.";
		}else{

			if( strlen($username)<=3 ){
				echo "Your username should be greater then 3 charactors";
			}else if( strlen($password)<=4 ){
				echo "Your password should be greater then 4 charactors";
			}else if( ispassword_strong($password)==false ){
				echo 'Your password is not strong enough';
			}else{

				// capital letter
				// number
				// special charactor
				// length > 8

				echo 'Login successfully!';
			}
			
		}

	}

	


?>

<html>
	<head>
		<title>Register</title>
	</head>
	<body>

		<!-- 
		$_POST
		$_GET
		$_REQUEST 
		-->
		
		<form action="" method="POST">
			
			Username:
			<br>
			<input type="text" name="username" placeholder="Enter your username" value="<?php echo $username; ?>" />

			<hr>

			Password:
			<br>
			<input type="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>" />

			<hr>

			<input type="submit" value="SignUp" />

		</form>

	</body>
</html>