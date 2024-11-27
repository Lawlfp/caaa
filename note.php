<?php
session_start();
if(!isset($patientid)){
	$patientid=$_SESSION['patientid'];
}
if(!isset($patientid)){
	$patientid=$_GET['patientid'];
}
$patientid=$_SESSION['patientid'];
$servername = "localhost"; // e.g., "localhost"
$username = "root";
$password = "";
$dbname = "dbdental";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $note = $_POST['note'];
    

    // Database connection (ensure this is correct)
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
																	$sqlt = "SELECT note from teethnote WHERE patientid=$patientid";
																	$result = $conn->query($sqlt);
																	if ($result->num_rows > 0) {
																				$sql = "UPDATE teethnote SET 
																				note = '$note'
																				WHERE patientid=$patientid;
																				";
																				if ($conn->query($sql) === TRUE) {
																							echo "<script>
																								alert('Note saved successfully!');
																								window.location.href = 'patientrec.php'; // Adjust to your treatment editing page
																							  </script>";
																							} else {
																								
																							}	
																	} else {	
																					$sql = "INSERT INTO (teethnote, patientid) VALUES 
																				($note,$patientid);
																				";
																					if ($conn->query($sql) === TRUE) {
																							echo "<script>
																								alert('Note saved successfully!');
																								window.location.href = 'patientrec.php'; // Adjust to your treatment editing page
																							  </script>";
																							} else {
																								
																							}	
																				}

    
    $conn->close();
}
?>
