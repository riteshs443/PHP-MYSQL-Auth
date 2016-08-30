<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email=$_POST['email'];
	$pwds=$_POST['pwd'];
	$sql= "SELECT * FROM register WHERE email='$email'" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	if($row["email"] == $email && $row["password"] == $pwds){
    		$_SESSION['useremail']=$email;
    		$_SESSION['user']=$row;
    		header('Location: dashboard.php');
    	}
    	else{
    		echo "Email OR PWd is wrong";
    	}
        
      }
    } else {
    echo "Email OR PWd is wrong";
      }

mysqli_close($conn);
}
else
{
	header('Location: login.php');
}

?>
</body>
</html>
