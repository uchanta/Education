<!DOCTYPE html>
<html>
<head>
	<title>AJAX with PHP and MySQL</title>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.ajax({
				url: "date.php",
				data: "",
				dateType: "text",
				success: function(strDate){
					$('#show_date').text(strDate)

				}
			})
		})

	</script>
</head>
<body>
<h1>AJAX with PHP and MySQL => Introduction</h1>
<div id="show_date"></div>
</body>
</html>