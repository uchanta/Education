<?php
$link = mysqli_connect('localhost','root','');
		if (!$link) {
		    die('Could not connect ------------: '. mysql_error());
		}else{
		echo 'Connected successfully';
		}

	mysqli_select_db($link,"college");

	$id= $_POST['id'];


	$strSql = "DELETE FROM student WHERE id = '$id' ";
	

	$data  = mysqli_query($link,$strSql);

	
	if($data){
		echo "Recored successfully Deleted...!!!";
	}else{
		echo "Error *******".mysql_error();
	}


?>