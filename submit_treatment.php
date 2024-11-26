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
    // Retrieve form data
    $treatmentName = $_POST['treatmentName'];
    $treatmentDate = $_POST['treatmentDate'];

    // Check if data is valid (simple validation)
    if (!empty($treatmentName) && !empty($treatmentDate)) {
        // Prepare SQL query to insert a new treatment record
        $insertQuery = "INSERT INTO `treatment` (`treatmentName`, `treatmentDate`) VALUES (?, ?)";
        $insertStatement = $databaseConnection->prepare($insertQuery);
        $insertStatement->bind_param("ss", $treatmentName, $treatmentDate);

        // Execute the query
        if ($insertStatement->execute()) {
            echo "<script>
                    alert('New treatment created successfully!');
                    window.location.href = 'treatmentedit.php'; // Adjust to your treatment editing page
                  </script>";
        } else {
            echo "<script>
                    alert('Error creating treatment: " . $databaseConnection->error . "');
                  </script>";
        }

        // Close statement
        $insertStatement->close();
    } else {
        echo "<script>
                alert('Please fill in all required fields.');
              </script>";
    }
}

// Close database connection
$databaseConnection->close();
?>
