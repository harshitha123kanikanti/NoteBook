<?php 
	
	error_reporting(0);

	session_start();
	
	include("connection.php");
	
	function test_input($data) {
      
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	   
	if ($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST["submit"])) {
		echo "booooom";
		$username = test_input($_POST["username"]);
		$password = test_input($_POST["passwd"]);
		echo $username;
		echo $password;
		$query = "select * from admin where username='$username' and password='$password'";
		$result = mysqli_query($dbc, $query);
		$user = mysqli_fetch_array($result);
		echo $users;
			  
		if(($user['username'] == $username) && 
			($user['password'] == $password)) {
				echo "hello i am here";
				$_SESSION['username'] = $username;
				header("Location: adminindex.php");
		}
		else {
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION')";
			echo "</script>";
			die();
		}
		
	} else {
		echo "submit nahi ho raha, ruko ";
	}
	 
?>
