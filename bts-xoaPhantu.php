<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="number" name="songuyen" placeholder="Nhập số cần xóa">
		<input type="submit" name="submit" value="Xóa">
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$nhapso = $_POST["songuyen"];
			$mang = array(2,3,4,1,6,8,10,1,0);
			echo "Mảng trước khi xóa 1 phần tử <br>";
			print_r($mang);
			echo "<br>";
			for ($i = 0; $i < count($mang) ; $i++) { 
				if ($nhapso == $mang[$i]) {
					unset($mang[$i]);
				}
			}
			echo "Mảng sau khi xóa phần tử $nhapso <br>";
			print_r($mang);
		}

		
	?>

</body>
</html>