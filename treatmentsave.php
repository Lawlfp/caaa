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
    // Re-establish database connection (in case the script was refreshed)
    $databaseConnection = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    if ($databaseConnection->connect_error) {
        die("Connection failed: " . $databaseConnection->connect_error);
    }

    // Loop through submitted treatment data
    if (!empty($_POST['treatmentName']) && !empty($_POST['treatmentDate'])) {
        foreach ($_POST['treatmentName'] as $treatmentId => $treatmentName) {
            $treatmentDate = $_POST['treatmentDate'][$treatmentId];

            // Update query for treatments
            $updateTreatmentQuery = "UPDATE `treatment` SET `treatmentName` = ?, `treatmentDate` = ? WHERE `treatmentID` = ?";
            $updateTreatmentStatement = $databaseConnection->prepare($updateTreatmentQuery);
            $updateTreatmentStatement->bind_param("ssi", $treatmentName, $treatmentDate, $treatmentId);
            $updateTreatmentStatement->execute();
        }
    }

    // After successful update, redirect with a success message
    echo "<script>
            alert('Treatment records updated successfully!');
            window.location.href = 'treatmentedit.php'; // Adjust this to your treatment editing page
          </script>";
    exit();
}

// Close database connection
$databaseConnection->close();
?>
