<?php
session_start();
$errors = array();
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'specialneeds');

//signup
if(isset($_POST['signup'])){
	$phone_regex="/^(009665|9665|\+9665|05|5)(5|0|3|6|4|9|1|8|7)([0-9]{7})$/";
	$name = $_POST['name'];
	$email_1 = $_POST['email_1'];
	$email_2 = $_POST['email_2'];
	$phone = $_POST['phone'];
	$pass_1 = $_POST['pass_1'];
	$pass_2 = $_POST['pass_2'];
	
	if (empty($name)) { array_push($errors, "اسم المستخدم مطلوب"); }
	if (empty($email_1)) { array_push($errors, "الايميل مطلوب"); }
	if (empty($email_2)) { array_push($errors, "الايميل مطلوب"); }
	if (empty($pass_1) || empty($pass_2)) { array_push($errors, "الرقم السري مطلوب"); }
    if (!preg_match($phone_regex, $phone)) { array_push($errors, "الرجاء ادخال رقم جوال سعودي"); }
	if ($pass_1 != $pass_2) { array_push($errors, "الرقم السري غير متطابق"); }
	
	$user_check_query = "SELECT * FROM user WHERE name='$name' OR email='$email_1' OR phone='$phone' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
       if ($user) { // if user exists
         if ($user['name'] === $name) {
           array_push($errors, "اسم المستخدم موجود مسبقا");
         }

         if ($user['email_1'] === $email_1) {
          array_push($errors, "الايميل موجود مسبقا");
         }
		 
		 if ($user['phone'] === $phone) {
          array_push($errors, "رقم الجوال موجود مسبقا");
         }
        }
	
	if (count($errors) == 0) {
         	$pass_1 = md5($pass_1);//encrypt the password before saving in the database
			$vkey = md5(time().round(3,999));

        	$query = "INSERT INTO user (name, email, phone, password, level, vkey, verified) 
  			VALUES('$name', '$email_1', '$phone', '$pass_1', 1, '$vkey', 1)";
        	mysqli_query($conn, $query);
        	$_SESSION['username'] = $name;
			$_SESSION['level'] = 1;
  	        $_SESSION['success'] = "yes";
			
  	        header('location: index.php');
  }
}

//signin
if(isset($_POST['signin'])){
	$mail = $_POST['mail'];
	$pass_1 = $_POST['pass_1'];
	
	if (empty($mail)) { array_push($errors, "اسم المستخدم مطلوب"); }
	if (empty($pass_1)) { array_push($errors, "الرقم السري مطلوب"); }
	
	if (count($errors) == 0) {
			$pass_1 = md5($pass_1);
			$query = "SELECT * FROM user WHERE email='$mail' AND password='$pass_1'";
			$results = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($results);
        if($row['verified'] == 1){
			if (mysqli_num_rows($results) == 1) {
				
				if(!empty($_POST["remember"])) {
	                setcookie ("mail",$_POST["mail"],time()+ 60*60*24*365);
	                setcookie ("password",$_POST["pass_1"],time()+ 60*60*24*365);
	                //echo "Cookies Set Successfuly";
                }else {
	                 setcookie("mail","");
	                 setcookie("password","");
	                // echo "Cookies Not Set";
                 }
				
				$_SESSION['username'] = $row['name'];
				$_SESSION['level'] = $row['level'];
				header('location: index.php');
			}else {
				array_push($errors, "اسم المستخدم او الرقم السري خطأ");
			}
		}else{
			array_push($errors, "الحساب غير مفعل");
		}
    }
  
}

//add
if(isset($_POST['add'])){
	    // name of the uploaded file
    $filename = $_FILES['file']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
	$file = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
	$fileType = $_FILES['file']['type'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO item (name, description, price, quantity,image) VALUES ('$name', '$description', $price, $quantity,'$filename')";
            if (mysqli_query($conn, $sql)) {
                echo "File uploaded successfully";
            }
        } else {
            echo "Failed to upload file.";
        }
}
?>