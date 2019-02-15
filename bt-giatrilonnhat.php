<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="number" placeholder="Nhập số">
		<input type="submit" name="submit" value="Tìm">
	</form>
	<?php 
		if ($_SERVER["RESPONSE_METHOD"] === "POST") {
			$nhapso = $_POST["number"];
			
		}
	?>

</body>
</html>