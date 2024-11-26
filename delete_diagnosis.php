<?php
// Database connection details
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "dbdental";

// Check if diagnosis_id is set in the POST request
if (isset($_POST['diagnosis_id'])) {
    $diagnosisId = (int)$_POST['diagnosis_id']; // Ensure it's an integer

    // Establish database connection
    $databaseConnection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check connection status
    if ($databaseConnection->connect_error) {
        die("Connection failed: " . $databaseConnection->connect_error);
    }

    // Prepare SQL query to delete the diagnosis record
    $deleteQuery = "DELETE FROM `diagnosis` WHERE `diagnosis_id` = ?";
    $deleteStatement = $databaseConnection->prepare($deleteQuery);
    $deleteStatement->bind_param("i", $diagnosisId);

    if ($deleteStatement->execute()) {
        echo "Success"; // Respond with success message
    } else {
        echo "Error deleting diagnosis"; // Respond with error message
    }

    // Close the statement and database connection
    $deleteStatement->close();
    $databaseConnection->close();
} else {
    echo "No diagnosis ID provided"; // Error if diagnosis_id is not provided
}
?>
