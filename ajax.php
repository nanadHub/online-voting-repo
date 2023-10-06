<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div id="text">
		<p>hello mother father</p>
	</div>
	<button id="click">Click Me!</button>
</body>
<script src="js/jquery.js"></script>
<!-- <script src="js/script.js"></script> -->
<script>
	$(document).ready(function(){
		$('#click').click(function(){
			$('#text').load("data.txt");

		});
	});
</script>
</html>