<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$fnameeroor = $lnameeroor = $emailerror = $pwderror = $phoneerror = "";
if($_SERVER['REQUEST_METHOD']== 'POST'){
	if(empty($_POST['first_name'])){
		$fnameeroor="please fill the fname";
		echo "$fnameeroor";
	}
	else if(empty($_POST['last_name'])){
		$lnameeroor="please fill the lname";
		echo "$lnameeroor";
	}
	else if(empty($_POST['email'])){
		$emailerror="please fill the email";
		echo "$emailerror";
	}
	else if(empty($_POST['password'])){
		$pwderror="please fill the pwd";
		echo "$pwderror";
	}
	else if(empty($_POST['phone'])){
		$phoneerror="please fill the phone";
		echo "$phoneerror";
	}
	else{
		$fname=$_POST['first_name'];
		$lname=$_POST['last_name'];
		$email=$_POST['email'];
		$pwd=$_POST['password'];
		$phone=$_POST['phone'];

		$sql="INSERT INTO register(fname,lname,email,password,phone) VALUES ('$fname','$lname','$email','$pwd',
		'$phone')";

	    if (mysqli_query($conn, $sql)) {
	    	
			/*$to = $email;
			$subject = "Register";
			$txt = "Thanks for register!";
			$headers = "From: riteshs443@gmail.com" ;
			mail($to,$subject,$txt,$headers);*/
		    header('Location: login.php');
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

          mysqli_close($conn);
	}
}
?>
</body>
</html>
