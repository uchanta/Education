<!DOCTYPE html>
<html>
<head>
	<title>AJAX with PHP and MySQL</title>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#delete').click(function(event){	
				event.preventDefault();
				$.ajax({
					url: "delete.php",
					method: "post",	
					data: $('form').serialize(),
					dataType: "text",				
					success: function(strMessage){
						$('#message').text(strMessage)
					}
				})
			})
		})

	</script>
</head>
<body>
	<h1>AJAX with PHP and MySQL => Update data base Values</h1>
	<div>
		<p id="message"></p>
		
			<table cellpadding="5" cellspacing="5">
				<tr><th>Student Id</th><td><?= $_GET['id']; ?></td></tr>
				<tr><th>Name</th><td><?= $_GET['name']; ?>"></td></tr>
				<tr><th>Email</th><td><?= $_GET['email']; ?>"> </td></tr>
				<tr><th>Contact</th><td><?= $_GET['contact']; ?>"> </td></tr>
			</table>
			<h2>Are you sure want to delet this record?</h2>
		<form method="post" >
			<input type="text" readonly="readonly" name="id" value="<?=$_GET['id'];?>">
			<input type="submit" name="delete" id="delete" value="Delete"><a href="../load/">Load Data</a>
				
		</form>

		<div id="result"></div>
	</div>
</body>
</html>