<html>
	<head>
		<title>Hello world</title>
	</head>
	<body>
		
		<?php

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);
			error_reporting(E_ALL);
			
			// variables
			// $age = 30;

			// echo $age;

			// data types
			// Integer 1 789789
			// String  "adnan" 'adnan' "687"
			// Float/Double   78.8989
			// Boolean true false 1 0

			// declaring a variable
			// defining a variable
			// $full_name = "Adnan Ahmad";
			// $age = 30;
			// $bank_balance = 678668767.89890890;
			// $status = true;

			// echo "<strong>";
			// echo $full_name;
			// echo "</strong>";
			// echo "<br >";
			// echo $age;
			// echo "<br >";
			// echo $bank_balance;
			// echo "<br >";
			// echo $status;

			// concatenation operator
			// echo "<strong>".$full_name.$age."</strong>";


			// Arrays
			// [] empty array
			// Simple arrays
			// index, position, key
			                // 0        1        2       3
			// $userinfo = ["Adnan Ahmed", 30, 324234.2344, true];

			// echo $userinfo[0].$userinfo[1].$userinfo[2].$userinfo[3];

			// Assosiative arrays
			// Multidimensional arrays
			// nested array
			// $userinfo = [
			// 				"name"		=>	["Adnan", "Ahmed"], 
			// 				"age"		=>	30, 
			// 				"bank"		=>	3434.2, 
			// 				"status"	=>	true
			// 			];

			// echo $userinfo["name"][0];


			// Loops
			// for
			// while
			// foreach

			// + - * / % < > <= >= != 

			// $i=$i+1;
			// $i++


			// variable declaration; condition; iteration
			// for( $i=0; $i<=20; $i=$i+2 ){
			// 	echo "Hello world ".$i."<br >";
			// }


			// $i=0;
			// while( $i<=20 ){
			// 	echo "Hello world ".$i."<br >";
			// 	$i=$i+2;
			// }

			// $userinfo = ["Adnan Ahmed", 30, 324234.2344, true, 787897];

			// $userinfo = [
			// 				"name"		=>	"Adnan Ahmed", 
			// 				"age"		=>	30, 
			// 				"bank"		=>	3434.2, 
			// 				"status"	=>	true
			// 			];

			// foreach( $userinfo as $index => $value ){
			// 	echo $index.' - '.$value.'<br >';
			// }


			// Conditions
			// $a = 12;
			// $b = 20;

			// if( $a==12 || $b==22 ){
			// 	echo 'Everything is good';
			// }

			// && ||
			// And &&
			// 1 0 = 0
			// 0 1 = 0
			// 1 1 = 1
			// 0 0 = 0

			// OR ||
			// 1 0 = 1
			// 0 1 = 1
			// 1 1 = 1
			// 0 0 = 0

			// if( $a === 12 ){
			// 	echo 'a is 12';
			// }

			// if( $a==10 ){
			// 	echo 'Yes a is equal to 10';
			// }else if( $a==11 ){
			// 	echo 'Yes a ia equal to 11';
			// }else if( $a==13 ){
			// 	echo 'Yes a ia equal to 13';
			// }else{
			// 	echo 'a is something else';
			// }

			// if( $a==10 ){
			// 	echo 'Yes a is equal to 10';
			// }

			// if( $a==11 ){
			// 	echo 'Yes a ia equal to 11';
			// }

			// if( $a==12 ){
			// 	echo 'Yes a ia equal to 12';
			// }



			// functions
			// Simple functions
			// Parameterized function, params, aurguments

			// function do_addition($a, $b, $c=5){
			// 	// $a = 10;
			// 	// $b = 20;

			// 	return $a + $b + $c;
			// }

			// echo do_addition(100, 20, 10);

			// addition -> exptect 2 params
			// substraction -> exptect 2 params
			// multiplication -> exptect 2 params
			// division -> exptect 2 params

			// include("functions.php");
			// echo sayHelloTo("Adnan Ahmed");


			// string functions
			$dummy_text = "happy new year";

			echo strtoupper($dummy_text);
			echo '<br >';
			echo strtolower($dummy_text);
			echo '<br >';
			echo ucfirst($dummy_text);
			echo '<br >';
			echo str_replace("happy", "hi", $dummy_text);
			echo '<br >';
			echo strlen($dummy_text);
			echo '<br >';
			echo substr($dummy_text, 0, 10);
			echo '<br >';

			$userinfo = ["Adnan Ahmed", 30, 324234.2344, true, 787897];

			echo count($userinfo);


			// Super global variables
			// $_POST
			// $_GET
			// $_REQUEST
			// $_SERVER
			// $_FILES
			// $_SESSION
			// $_COOKIE




		?>

	</body>
</html>