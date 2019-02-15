<?php 
	$number = array(5,2,1,5,0,-1,4);
	$min = $number[0];
	for ($i=1; $i < count($number) ; $i++) { 
		if ($min > $number[$i]) {
			$min = $number[$i];
		}
	}
	echo "Giá trị nhỏ nhất trong mảng là: ".$min;
?>