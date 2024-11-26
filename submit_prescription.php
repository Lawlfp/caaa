<?php
// Database connection details
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

// Check if the form data has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate input
    $prescriptionName = trim($_POST['prescriptionName']);
    $prescriptionDate = $_POST['prescriptionDate'];
    $patientId = 1; // Replace with dynamic patient ID based on your application logic

    if (!preg_match('/^[A-Za-z0-9\s]+$/', $prescriptionName)) {
        die("Invalid prescription name. Only alphanumeric characters and spaces are allowed.");
    }

    // Prepare the SQL query to insert the new prescription
    $insertQuery = "INSERT INTO `prescription` (`prescriptionName`, `prescriptionDate`, `patientid`) VALUES (?, ?, ?)";
    $insertStatement = $databaseConnection->prepare($insertQuery);

    if ($insertStatement) {
        $insertStatement->bind_param("ssi", $prescriptionName, $prescriptionDate, $patientId);

        if ($insertStatement->execute()) {
            // On success, show alert and redirect to the prescription list or edit page
            echo "<script>
                    alert('Prescription successfully added!');
                    window.location.href = 'presedit.php'; // Redirect to the prescription editing page
                  </script>";
            exit();
        } else {
            echo "Error executing insert query: " . $insertStatement->error;
        }
        $insertStatement->close();
    } else {
        echo "Error preparing insert query: " . $databaseConnection->error;
    }
} else {
    echo "Invalid request method. Please submit the form.";
}

// Close the database connection
$databaseConnection->close();
?>
