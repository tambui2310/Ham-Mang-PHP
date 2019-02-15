<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.login {
          height:320px; width:230px;
          margin:0;
          padding:10px;
          border:1px #CCC solid;
    }
    .login input {
          padding:5px; margin:5px
      }
	</style>  
</head>
<body>
	<form method="post">
		<div class="login">
		<h1>Đăng ký người dùng</h1>

		Tên người dùng: <input type="text" name="ten" placeholder="Nhập tên" ><br>
		Email: <input type="text" name="email" placeholder="Nhập email" ><br>
		Số điện thoại:<input type="number" name="phone" placeholder="Số điện thoại" ><br>
		<input type="submit" name="submit" value="Đăng ký">
		</div>
	</form>
	<?php
        $nameErr = NULL;
        $emailErr = NULL;
        $phoneErr = NULL;
        $name = NULL;
        $email = NULL;
        $phone = NULL;
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$ten = $_POST["ten"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$has_error = false;
			if (empty($ten)) {
				echo "Bạn chưa nhập tên";
				exit();
			}
			if (empty($phone)) {
				echo "Bạn chưa nhập số điện thoại";
				exit();
			}
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				return true;
				exit();
			}
			else
				echo 'Email không hợp lệ';
				exit();
			if ($has_error === false) {
                saveDataJSON("data.json", $name, $email, $phone);
                $name = NULL;
                $email = NULL;
                $phone = NULL;
            }
		}

		function loadRegistrations($filename){
            $jsondata = file_get_contents($filename);
            $arr_data = json_decode($jsondata, true);
            return $arr_data;
        }
        function saveDataJSON($filename, $name, $email, $phone)
        {
            try {
                $contact = array(
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone
                );
                // converts json data into array
                $arr_data = loadRegistrations($filename);
                // Push user data to array
                array_push($arr_data, $contact);
                //Convert updated array to JSON
                $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                //write json data into data.json file
                file_put_contents($filename, $jsondata);
                echo "Lưu dữ liệu thành công!";
            } catch (Exception $e) {
                echo 'Lỗi: ', $e->getMessage(), "\n";
            }
        }
	 ?>
	         <?php
            $registrations = loadRegistrations('data.json');
        ?>

</body>
</html>