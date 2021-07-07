<?php

$mysqlserverhost = "localhost";
$database_name = "scandiweb-app";
$username_mysql = "user";
$password_mysql = "123456";



function sanitize($variable){
	$clean_variable = strip_tags($variable);
	$clean_variable = htmlentities($clean_variable, ENT_QUOTES, 'UTF-8');
	return $clean_variable;
}

function connect_to_mysqli($mysqlserverhost, $username_mysql, $password_mysql, $database_name){
	$connect = mysqli_connect($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
	if (!$connect) {
		  die("Connection failed mysql: " . mysqli_connect_error());
	}
	return $connect;	
}

if(isset($_POST["processform"])){
	$connection = connect_to_mysqli($mysqlserverhost, $username_mysql, $password_mysql, $database_name);
	$firstfield = mysqli_real_escape_string($connection, sanitize($_POST["firstfield"]));
	$secondfield = mysqli_real_escape_string($connection, sanitize($_POST["secondfield"]));
	$thirdfield = mysqli_real_escape_string($connection, sanitize($_POST["thirdfield"]));
	$fourthfield = mysqli_real_escape_string($connection, sanitize($_POST["fourthfield"]));	 
  $sql = $sql = "INSERT INTO product (SKU, Name, Price, type) VALUES ('$firstfield', '$secondfield', '$thirdfield', '$fourthfield')";
	if (mysqli_query($connection, $sql)) {
		  echo "<h2><font color=blue>New record added to database.</font></h2>";
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}
	mysqli_close($connection);
}

?>