<?php

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
		}else{
			echo 'Login successfully!';
		}
		
	}


?>