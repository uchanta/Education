<!DOCTYPE html>
<html>
<head>
	<title>AJAX with PHP and MySQL</title>
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#load').click(function(event){	
				event.preventDefault();
				$.ajax({
					url: "load.php",
					dateType: "html",					
					success: function(strMessage){
						$('#result').html(strMessage)
					}
				})
			})
		})

	</script>
</head>
<body>
	<h1>AJAX with PHP and MySQL => Insert From values into data base</h1>
	<div>
		<form method="post" >
			<table cellpadding="5" cellspacing="5">
				<tr><td><input type="submit" name="load" id="load" value="Load"> <a href="../insert/index.php">Inser student</a></td></tr>
			</table>

		</form>

		<div id="result"></div>
	</div>
</body>
</html>