<?php  
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $sex = $_POST['sex'];
    $cnumber = $_POST['cnumber'];
    $expertise = $_POST['expertise'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
	$id = $_POST['id'];
    // Your database connection code
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbdental";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the doctor's ID from the session
    

    // SQL query to update data in the 'doctors' table
    $sql = "UPDATE doctors SET 
            firstName = '$fname', 
            middleName = '$mname', 
            lastName = '$lname', 
            sex = '$sex', 
            contactNumber = '$cnumber', 
            Expertise = '$expertise', 
            email = '$email', 
            birthdate = '$birthdate', 
            address = '$address' 
            WHERE doctor_id = $id";

    if ($conn->query($sql) === TRUE) {
			echo "<script>
                    alert('Success!');
                    window.location.href = 'newprofile.php'; // Adjust to your treatment editing page
                  </script>";
    } else {
        
    }
}
	?>