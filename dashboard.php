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
			if(isset($_SESSION['useremail'])){
    		echo $_SESSION['useremail'];

 ?>
    		<a href="logout.php">logout</a>
    		<?php
    		}
    		else
    		{
    			header('Location: login.php');
    		}
    		?>



</body>
</html>