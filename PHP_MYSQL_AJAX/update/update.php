<?php
$link = mysqli_connect('localhost','root','');
		if (!$link) {
		    die('Could not connect ------------: '. mysql_error());
		}else{
		echo 'Connected successfully';
		}

	mysqli_select_db($link,"college");

	$id= $_POST['id'];
	$name= $_POST['name'];
	$email = $_POST['email'];
	$cont = $_POST['contact'];

	echo $id.$name.$email.$cont ;

	$strSql = "UPDATE student SET name= '$name', email='$email', contact='$cont' WHERE id = '$id' ";
	

	$data  = mysqli_query($link,$strSql);

	
	if($data){
		echo "Recored successfully Updated...!!!";
	}else{
		echo "ucz*******>>>>>>".mysql_error();
	}


?>