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

    // Loop through submitted data
    if (!empty($_POST['diagnosisName']) && !empty($_POST['diagnosisDate'])) {
        foreach ($_POST['diagnosisName'] as $diagnosisId => $diagnosisName) {
            $diagnosisDate = $_POST['diagnosisDate'][$diagnosisId];

            // Update query
            $updateQuery = "UPDATE `diagnosis` SET `diagnosisName` = ?, `diagnosisDate` = ? WHERE `diagnosis_id` = ?";
            $updateStatement = $databaseConnection->prepare($updateQuery);
            $updateStatement->bind_param("ssi", $diagnosisName, $diagnosisDate, $diagnosisId);
            $updateStatement->execute();
        }
        echo "<script>
                alert('Records updated successfully!');
                window.location.href = 'diagedit.php';
              </script>";
        exit();
    }

    // Close database connection
    $databaseConnection->close();
}
?>