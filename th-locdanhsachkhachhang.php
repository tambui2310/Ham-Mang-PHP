<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
table {
    border-collapse: collapse;
    width: 100%;
}
th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
</style>
	<body>
		 <table border="0">
		  <caption><h1>Danh sách khách hàng</h1></caption>
		  <tr>
		    <th>STT</th>
		    <th>Tên</th>
		    <th>Ngày sinh</th>
		    <th>Địa chỉ</th>
		    <th>Ảnh</th>
		  </tr>
		 </table>
		 <?php 
		 	$customerlish = array(
		 		"1" =>  array("ten" => " Bùi Thiện Tâm" ,
							"ngaysinh" => "1995-10-23",
							"diachi" => "Quảng Trị",
							"anh" => "trunks.jpg"),
				"2" => array("ten" => "Trần Đăng Khoa",
							"ngaysinh" => "1997-1-12",
							"diachi" => "Huế",
							"anh" => "trunks.jpg", ) 
			);
		  ?>
		  <?php 
		  	foreach ($customerlish as $key => $value) {
		  	 	echo "<tr>";
		  	 	echo "<td>".$key."</td>";
		  	 	echo "<td>".$value["ten"]."</td>";
		  	 	echo "<td>".$value["ngaysinh"]."</td>";
		  	 	echo "<td>".$value["diachi"]."</td>";
		  	 	echo "<td><image src = '" . $value['anh']."' width = '60px' heigh = '60px' /></td>";
		  	 	echo "</tr>";
		  	 } 
		  	?>

	</body>
</html>