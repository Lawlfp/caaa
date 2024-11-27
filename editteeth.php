<?php
// Database connection
$servername = "localhost"; // Replace with your server name
$username = "root";        // Replace with your username
$password = "";            // Replace with your password
$dbname = "dbdental";      // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch patient data by ID
function getPatientById($id) {
    global $conn;
    $sql = "SELECT `id`, `firstName`, `middleName`, `lastName`, `birthdate`, `sex`, `contactNumber`, `email`, `address`
            FROM `patient` 
            WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    }
    return null;
}

// Function to update patient data
function updatePatient($id, $data) {
    global $conn;
    $sql = "UPDATE `patient` 
            SET `firstName` = ?, `middleName` = ?, `lastName` = ?, `birthdate` = ?, 
                `sex` = ?, `contactNumber` = ?, `email` = ? , `address` = ? 
            WHERE `id` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssss", 
        $data['firstName'], $data['middleName'], $data['lastName'], $data['birthdate'],
        $data['sex'], $data['contactNumber'], $data['email'], $data['address'], $id
    );
    return $stmt->execute();
}

// Check if ID is provided
$id = isset($_GET['id']) ? $_GET['id'] : '';
$patient = null;
if (!empty($id)) {
    $patient = getPatientById($id);
}

// Handle form submission for saving updated data
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($id)) {
    $updatedData = [
        'firstName' => $_POST['patientFirstName'],
        'middleName' => $_POST['patientMiddleName'],
        'lastName' => $_POST['patientLastName'],
        'birthdate' => $_POST['patientBirthdate'],
        'sex' => $_POST['patientSex'],
        'contactNumber' => $_POST['patientContactNumber'],
        'email' => $_POST['patientEmail'],
		'address' => $_POST['address']
    ];

    if (updatePatient($id, $updatedData)) {
        header("Location: editteeth.php?id=$id&success=true");
        exit(); // Ensure no further code is executed
    } else {
        echo "Error updating patient data.";
    }

    // Refresh the patient data after updating
    $patient = getPatientById($id);
}

$conn->close();
?>
