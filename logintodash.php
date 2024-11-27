<?php 
session_start();

$uname=$_SESSION['username'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbdental";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'  ){
	$pass=$_POST['password'];
	
	$countQuery="SELECT 'username','password' FROM login WHERE username='$uname' AND password='$pass' ";
	
	$resulta = $conn->query($countQuery);
	if ($resulta->num_rows > 0) {
		echo "<script>
                    alert('Success!');
                    window.location.href = 'dashdent.php'; // Adjust to your treatment editing page
                  </script>";
    
	} else {
		echo "<script>
                    alert('Wrong Password');
                    window.location.href = 'login.html'; // Adjust to your treatment editing page
                  </script>";
		}
}


?>