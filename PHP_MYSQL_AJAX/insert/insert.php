<?php
	// print_r($_POST);
	$link = mysqli_connect('localhost','root','');
		if (!$link) {
		    die('Could not connect ------------: ' . mysql_error());
		}else{
		echo 'Connected successfully';
		}
	// mysql_close($link);
	// $link->select_db("college");
	mysqli_select_db($link,"college");

	$name=$_POST['name'];
	$email = $_POST['email'];
	$cont = $_POST['contact'];

	$strSql = "INSERT INTO student VALUES (null, '$name', '$email', '$cont')";
	// print_f($strSql);

	if(mysqli_query($link,$strSql)){
		echo "Recored successfully Inserted...!!!";
	}else{
		echo "ucs*******>>>>>>".mysql_error();
	}
	
?>