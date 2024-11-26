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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Re-establish database connection
    $databaseConnection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($databaseConnection->connect_error) {
        die("Connection failed: " . $databaseConnection->connect_error);
    }

    // Loop through submitted data for prescriptions
    if (!empty($_POST['prescriptionName']) && !empty($_POST['prescriptionDate'])) {
        foreach ($_POST['prescriptionName'] as $prescriptionId => $prescriptionName) {
            $prescriptionDate = $_POST['prescriptionDate'][$prescriptionId];

            // Update query for prescriptions
            $updateQuery = "UPDATE `prescription` SET `prescriptionName` = ?, `prescriptionDate` = ? WHERE `prescriptionID` = ?";
            $updateStatement = $databaseConnection->prepare($updateQuery);
            $updateStatement->bind_param("ssi", $prescriptionName, $prescriptionDate, $prescriptionId);
            $updateStatement->execute();
        }
        echo "<script>
                alert('Records updated successfully!');
                window.location.href = 'presedit.php'; // Adjust this to your prescription editing page
              </script>";
        exit();
    }

    // Close database connection
    $databaseConnection->close();
}
?>
