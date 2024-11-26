<?php
session_start(); // Start session at the top

// Check if patientid is set in the session
if (!isset($_SESSION['patientid'])) {
    die("Error: Patient ID not found in session. Please log in.");
}

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "dbdental";

// Establish database connection
$databaseConnection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection status
if ($databaseConnection->connect_error) {
    die("Connection failed: " . $databaseConnection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form values
    $diagnosisName = $_POST['diagnosisName'];
    $diagnosisDate = $_POST['diagnosisDate'];

    // Get the patientid from session
    $patientid = $_SESSION['patientid'];

    // Validate inputs
    if (!empty($diagnosisName) && !empty($diagnosisDate) && !empty($patientid)) {
        // Prepare the SQL query
        $sql = "INSERT INTO diagnosis (diagnosisName, diagnosisDate, patientid) 
                VALUES ('$diagnosisName', '$diagnosisDate', '$patientid')";

        // Execute the query
        if ($databaseConnection->query($sql)) {
            echo "<script>
                    alert('New diagnosis record created successfully.');
                    window.location.href = 'diagedit.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error: " . addslashes($databaseConnection->error) . "');
                    window.location.href = 'diagedit.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Please fill in all fields.');
                window.location.href = 'diagedit.php';
              </script>";
    }
}

// Close the database connection
$databaseConnection->close();
?>
