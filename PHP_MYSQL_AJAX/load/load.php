<?php
	$link = mysqli_connect('localhost','root','');
		if (!$link) {
		    die('Could not connect ------------: '. mysql_error());
		}else{
		echo 'Connected successfully';
		}

	mysqli_select_db($link,"college");

	$strSql = "SELECT * FROM student";
	$data  = mysqli_query($link,$strSql);

	echo "<table>
		<tr><th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Contact</th></tr>";
	if($data){
		while( $row = mysqli_fetch_assoc($data)){
			echo 
			"<tr>
				<td>$row[id]</td>
				<td>$row[name]</td>
				<td>$row[email]</td>
				<td>$row[contact]</td>
				<td><a href='../update/index.php?id=$row[id]&name=$row[name]&email=$row[email]&contact=$row[contact]''>Update</a></td>
				<td><a href='../delete/index.php?id=$row[id]&name=$row[name]&email=$row[email]&contact=$row[contact]''>Delete</a></td>
			</tr>";
		}
	}else{
		echo "ucz*******>>>>>>".mysql_error();
	}

?>