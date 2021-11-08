<?php
session_start();

if(!empty($_SESSION['signup'])){echo '<script type="text/JavaScript"> 
     alert("تم انشاء الحساب يرجى تفعيل الحساب عن طريق الايميل");
     </script>';
	 unset($_SESSION['signup']);
}
if(!empty($_SESSION['verifiedyes'])){echo '<script type="text/JavaScript"> 
     alert("تم تفعيل الحساب");
     </script>';
	 unset($_SESSION['verifiedyes']);
}
if(!empty($_SESSION['verifiedno'])){echo '<script type="text/JavaScript"> 
     alert("الحساب مفعل بالفعل");
     </script>';
	 unset($_SESSION['verifiedno']);
}

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
	
	if (empty($name)) { array_push($errors, "- اسم المستخدم مطلوب -"); }
	if (empty($email_1)) { array_push($errors, "- الايميل مطلوب -"); }
	if (empty($email_2)) { array_push($errors, "- الايميل مطلوب -"); }
	if (empty($pass_1) || empty($pass_2)) { array_push($errors, "- الرقم السري مطلوب -"); }
    if (!preg_match($phone_regex, $phone)) { array_push($errors, "- الرجاء ادخال رقم جوال سعودي -"); }
	if ($pass_1 != $pass_2) { array_push($errors, "- الرقم السري غير متطابق -"); }
	
	$user_check_query = "SELECT * FROM user WHERE name='$name' OR email='$email_1' OR phone='$phone' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
       if ($user) { // if user exists
         if ($user['name'] === $name) {
           array_push($errors, "- اسم المستخدم موجود مسبقا -");
         }

         if ($user['email'] === $email_1) {
          array_push($errors, "- الايميل موجود مسبقا -");
         }
		 
		 if ($user['phone'] === $phone) {
          array_push($errors, "- رقم الجوال موجود مسبقا -");
         }
        }
	
	if (count($errors) == 0) {
         	$pass_1 = md5($pass_1);//encrypt the password before saving in the database
			$vkey = md5(time().round(3,999));

        	$query = "INSERT INTO user (name, email, phone, password, level, vkey) 
  			VALUES('$name', '$email_1', '$phone', '$pass_1', 1, '$vkey')";
        	mysqli_query($conn, $query);
        	$_SESSION['signup'] = "yes";
			$subject = "Email Verification";
			$message = "<a href='http://4specialneeds.online/verify.php?vkey=$vkey'>اضغط هنا لتفعيل حسابك</a>";
			$headers = "From: customer@4specialneeds.online \r\n";
			$headers .= "MIME-Version: 1.0"."\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8"."\r\n";
			mail($email_1,$subject,$message,$headers);
  	        header('location: SignIn.php');
  }
}

//signin
if(isset($_POST['signin'])){
	$mail = $_POST['mail'];
	$pass_1 = $_POST['pass_1'];
	
	if (empty($mail)) { array_push($errors, "- اسم المستخدم مطلوب -"); }
	if (empty($pass_1)) { array_push($errors, "- الرقم السري مطلوب -"); }
	
	if (count($errors) == 0) {
			$pass_1 = md5($pass_1);
			$query = "SELECT * FROM user WHERE email='$mail' AND password='$pass_1'";
			$results = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($results);
			if (mysqli_num_rows($results) == 1) {
				if($row['verified'] == 1){
				if(!empty($_POST["remember"])) {
	                setcookie ("mail",$_POST["mail"],time()+ 60*60*24*365);
	                //echo "Cookies Set Successfuly";
                }else {
	                 setcookie("mail","");
	                // echo "Cookies Not Set";
                 }
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['level'] = $row['level'];
				header('location: index.php');
			}else {
				array_push($errors, "- الحساب غير مفعل -");
			}
		}else{
			array_push($errors, "- اسم المستخدم او الرقم السري خطأ -");
		}
    }
  
}

//add
if(isset($_POST['add'])){
	$user = $_POST['id'];
	    // name of the uploaded file
    $filename = $_FILES['imagefile']['name'];

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
	
	$newname = date("Ymdhis") . rand(10000,99999) . "." . $extension;
	
    // destination of the file on the server
    $destination = 'uploads/' . $newname;
	
	$file = $_FILES['imagefile']['tmp_name'];
    $size = $_FILES['imagefile']['size'];
	$fileType = $_FILES['imagefile']['type'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO item (userid, name, description, price, quantity, image) VALUES ($user, '$name', '$description', $price, $quantity,'$newname')";
            if (mysqli_query($conn, $sql)) {
                echo '<script type="text/JavaScript"> 
     alert("تم اضافة المنتج");
     </script>';
            }
        } else {
            echo '<script type="text/JavaScript"> 
     alert("حدث خطا");
     </script>';
        }
}
?>