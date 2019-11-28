<!DOCTYPE html>
<html>
<head>
	<title>AJAX with PHP and MySQL</title>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#insert').click(function(event){	
				event.preventDefault();
				$.ajax({
					url: "insert.php",
					method: "post",
					data: $('form').serialize(),
					dateType: "text",					
					success: function(strMessage){
						$('#message').text(strMessage)
					}
				})
			})
		})

	</script>
</head>
<body>
	<h1>AJAX with PHP and MySQL => Load values from DAta Base</h1>
		<p id="message"></p>
		<form method="post" >
			<table cellpadding="5" cellspacing="5">			
				<tr><th>Enter name</th><td><input type="text" id="name" name="name"></th></tr>
				<tr><th>Enter email</th><td><input type="email" id="email" name="email"></td></tr>
				<tr><th>Enter contact</th><td><input type="text" id="contact" name="contact"></td></tr>
				<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert" value="Insert record"></td></tr>
			
			</table>

		</form>

	<!-- <div id="show_date"></div> -->
</body>
</html>