<?php
session_start();
if(!isset($patientid)){
	$patientid=$_SESSION['patientid'];
}
if(!isset($patientid)){
	$patientid=$_GET['patientid'];
}
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your username
$password = "";            // Replace with your password
$dbname = "dbdental";      // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'  ){

$firstName=$_POST['firstName'];
$middleName=$_POST['middleName'];
$lastName=$_POST['lastName'];
$birthdate=$_POST['birthdate'];
$email=$_POST['email'];
$contactNumber=$_POST['contactNumber'];

$sql = "UPDATE patient SET 
            firstName = '$firstName', 
            middleName = '$middleName', 
            lastName = '$lastName', 
            contactNumber = '$contactNumber',  
            email = '$email', 
            birthdate = '$birthdate'            
            WHERE id = '$patientid'";
			
if ($conn->query($sql) === TRUE) {
       echo "<script>
                    alert('Record submitted successfully!');
                    window.location.href = 'patientrec.php?id=$patientid'; // Adjust to your treatment editing page
                  </script>";
    } else {
        
    }
}

    

$conn->close();
?>
