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

// Check if the POST request contains a prescription_id
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prescription_id'])) {
    $prescriptionId = intval($_POST['prescription_id']); // Sanitize input

    // Prepare the DELETE query
    $deleteQuery = "DELETE FROM `prescription` WHERE `prescriptionID` = ?";
    $deleteStatement = $databaseConnection->prepare($deleteQuery);

    if ($deleteStatement) {
        $deleteStatement->bind_param("i", $prescriptionId);
        if ($deleteStatement->execute()) {
            echo "Success"; // Respond with a success message
        } else {
            echo "Error executing delete query: " . $deleteStatement->error;
        }
        $deleteStatement->close();
    } else {
        echo "Error preparing delete query: " . $databaseConnection->error;
    }
} else {
    echo "Invalid request. Please provide a valid prescription ID.";
}

// Close the database connection
$databaseConnection->close();
?>
