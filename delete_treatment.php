<?php

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

if (isset($_POST['treatment_id'])) {
    $treatmentId = $_POST['treatment_id'];

    // Prepare the DELETE query to remove the treatment record
    $deleteQuery = "DELETE FROM `treatment` WHERE `treatmentID` = ?";
    $deleteStatement = $databaseConnection->prepare($deleteQuery);
    $deleteStatement->bind_param("i", $treatmentId);

    // Execute the query
    if ($deleteStatement->execute()) {
        echo "Success"; // Successful deletion
    } else {
        echo "Error: " . $databaseConnection->error; // Error message
    }

    // Close statement
    $deleteStatement->close();
}

// Close database connection
$databaseConnection->close();
?>
