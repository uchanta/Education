<!DOCTYPE html>
<html>
<head>
	<title>AJAX with PHP and MySQL</title>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#update').click(function(event){	
				event.preventDefault();
				$.ajax({
					url: "update.php",
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
		<form method="post" >
			<table cellpadding="5" cellspacing="5">
				<tr><th>Student Id</th><td><input type="text" id ="id" name="id" value="<?= $_GET['id']; ?>"  readonly="readonly"></td></tr>
				<tr><th>Enter Name</th><td><input type="text" id="name" name="name" value="<?= $_GET['name']; ?>"> </td></tr>
				<tr><th>Enter Email</th><td><input type="text" id="email" name="email" value="<?= $_GET['email']; ?>"> </td></tr>
				<tr><th>Enter Contact</th><td><input type="text" id="contact" name="contact" value="<?= $_GET['contact']; ?>"> </td></tr>

				<tr><td colspan="2" align="center"><input type="submit" name="update" id="update" value="Update"> <a href="../load">Load Data</a></td></tr>
	
			</table>

		</form>

		<div id="result"></div>
	</div>
</body>
</html>