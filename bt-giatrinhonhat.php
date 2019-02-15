<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 		
		function giaTriNhoNhat($number)
		{
		$index = 0;
		$min = $number[0];
			for ($i=0; $i <count($number) ; $i++) { 
				if ($min > $number[$i]) {
					$min = $number[$i];
					$index = $i;				
				}
			}
		echo "Giá trị nhỏ nhất: ".$min." tại vị trí ".$index;
		}
		$_number  = array(4,2,6,1,3);
		giaTriNhoNhat($_number);	
	?>

</body>
</html>