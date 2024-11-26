<?php
session_start(); // Start session at the top
$_SESSION['patientid']=1;
// Check if patientid is set in the session
if (!isset($_SESSION['patientid'])) {
    die("Error: Patient ID not found in session. Please log in.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Split Centered Container</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Content:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
           overflow-x:hidden;
        }
		span{
		margin:0;
		padding:0;
		}
        .left-container {
    width: 10.7%;
    height: 100%;
    background: linear-gradient(to bottom, #0C3B67, #2CA6B6);
    box-shadow: 4px 0px 4px 0px rgba(0, 0, 0, 0.25);
    z-index: 2; /* Bring the left container in front */
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center items horizontally */
    position:fixed;
	overflow:hidden;
	
    color: white; /* Text color for better visibility */
}
		.picture{
		width: 85px;
		height: 85px;
		border-radius: 85px;
		margin-top:11px;
background: url(<path-to-image>), lightgray 50% / cover no-repeat;
		}
		
		.pictext1{
		color: #FFF;
text-align: center;
font-family: Amiri;
font-size: 20px;
font-style: normal;
font-weight: normal;
line-height: normal;
margin-top:6px;
		}
		.pictext2{
		color: #FFF;
text-align: center;
font-family: Amiri;
font-size: 15px;
font-style: normal;
margin-top:-12px;
line-height: normal;
		}
        .right-container {
            width: 100%;
            
            display: flex;
            flex-direction: column; /* Stack top and bottom sections vertically */
			
        }
        .top-section {
			width:100%;
			position:fixed;
            height:	9.1%;	
            background: linear-gradient(to right, #0C3C68, #2DA6B6);
			
            z-index: 1; /* Send the top section to the back */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bottom-section {
             display: flex;
  flex-direction: row; /* Default: left to right */
            background-color: white;
            
        }

		
		.logotext{
		color: #FFF;
text-align: center;
font-family: Anton;
font-size: 20px;
font-style: normal;
font-weight: 400;
line-height: normal;
margin-top: -1px;
		}
		

		.margintop {
			margin-top:20px;
			width:100%;
			height:100%;
        }
        

        
		
		hr{
		background-color:white;
		width:76%;
		margin-top:9px;
		}
		/* ... Existing styles ... */
#notactive{
	border-color:transparent;
}
#active{
	border-color:white;
}
.dashboard1st {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 3px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard2 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 17px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard3 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 17px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard3 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 20px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard4 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 2px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.dashboard5 {
text-decoration:none;
    width: 98%;
    height: 3%;
    margin-top: 20px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: flex;
    align-items: center; /* Align items vertically center */
}
.icons {
    margin-left: 30px;
	width:20px;
	height:20px;
}

.dashtext {
	
	display:block;
    color: #FFF;
    font-family: Anton;
    font-size: 0.98rem;
	
    font-weight: 400 !important;
	transform: scaleX(1.1) scaleY(1);
    margin-left: 21px; /* Add some space between icon and text */
}

.dashboard6 {
text-decoration:none;
    width: 98%;
    height: 5%;
    margin-top: 450px;
    border-left: 5px;
    border-style: solid;
    border-right: 0px;
    border-top: 0px;
    border-bottom: 0px;
    display: block; 
	text-align: center;
    align-items: center; /* Align items vertically center */
	
}
.dashtextlogout {
	
    color: #FFFFFF;
    font-family: Content;
    font-size: 15px;

    line-height: normal;
    margin-left: 10px; /* Add some space between icon and text */
}
.logouticons {
vertical-align: middle;
margin-left:0px;
	width:19px;
	height:22px;
}
.fullbody{
	position:absolute;
	top:107px;
	left:205px;
	width:100%;
	height:100%;
	margin-top:0;
	display: flex;
    flex-direction: row;
	
}
.patientcontainer{
	width:30%;
	height:80%;
	position:absolute;
	background:#FFFFFF;
	border-radius:7px;
	left:240px;
	top:150px;
	
	
}

.patientcontainer2 {
    margin-top: 20px;
    width: 400px; /* Fixed width */
    height: 600px; /* Fixed height */
    position: absolute;
    background: #FFFFFF;
    border-radius: 10px;
    left: 150px;
    top: 180px;
    box-shadow: 1px 1px #ABABAB;
    transform: scale(1.5);
    display: inline-block;
    overflow-y: auto; /* Adds a vertical scrollbar if content exceeds the height */
    overflow-x: hidden; /* Prevents horizontal scrolling */
	padding-right:40px;
}




.flexcontainernoline{
	display:flex;
margin-top:15px;
margin-bottom:10px;
}

.flexcontainernoline span{
	font-family:Roboto;
	font-size:12px;
	font-weight:bold;

}
.flexcontainer1{
display:flex;
}
.smallicons{
	width:16px;
	height:16px;
	position:relative;
}
.flexcontainergrey{
display:flex;
margin-top:6px;
}
.flexcontainergrey span{
font-family:Roboto;
font-size:11px;
font-weight:bold;
color:#969696;
}

.flexcontainernoline input{
font-family:Roboto;
font-size:11px;
font-weight:bold;

outline:none;
border:none;
}
.leftalign{
	margin-left:34px;
	width:193px;
}
.aligninput{
width:188px;
margin-left:35px;
}
.align{
width:193px;
margin-left:35px;
}
.patientcontainer3 {
    width: 369px; /* Fixed width */
    min-height: 272px; /* Minimum height of the container */
    position: absolute;
    background: #FFFFFF;
    border-radius: 10px;
	
    left: 850px;
    top: 160px;
    box-shadow: 1px 1px #ABABAB;
    transform: scale(1.5);
    display: inline-block; /* Ensures height adjusts to content */
    overflow: visible; /* Allow the container to grow as needed */
}
    </style>
</head>
<body>
    <div class="left-container">
        <img src="goldenlogo.png" style="width:24px; height:24px; display:block; margin:14px auto 0;">
		<span class="logotext" style="margin-top:2px;">GOLDEN DENTAL</span>
		<div class="picture"></div>
		<span class="pictext1">Dr. Trio</span>
		<span class="pictext2">Admin</span>
		<hr></hr>
		<a href="dashdent.html"	 class="dashboard1st" id="notactive"><img src="dashboardicon.png" class="icons"><span class="dashtext" style="font-weight:normal;">Dashboard</span></a>
		<a href="appdent.html"	 class="dashboard2" id="notactive"><img src="appointments.png" class="icons"><span class="dashtext">Appointment</span></a>
		<a href="profdent.html"	 class="dashboard3" id="notactive"><img src="profileicon.png" class="icons"><span class="dashtext">Profile</span></a>
		<a href="patdent.html"	 class="dashboard5" id="active"><img src="patient.png" class="icons"><span class="dashtext">Patients</span></a>
		<div style="width: 100%;
    height: auto;
    text-align: center;"><div style="width: 126px;height:29px;margin: 0 auto;background-color: #EB480B;border-radius:8px;box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.25);"><a href="logout.html"	 class="dashboard6" id="notactive"><img src="exit.png" class="logouticons"><span class="dashtextlogout">Log Out</span></a></div></div>
    </div>
    <div class="right-container">
        <div class="top-section">
            <!-- Top content goes here -->
            
        </div>
        <div class="bottom-section">
            <div class="margintop">
				<div class="fullbody">                      <div style="width:100%;height:72px;display:flex;flex-direction:row;">
																<div style="display:inline-block;
																width:24.5%;height:72px;margin-left:25px;"><span style="													
																color:#248AA2;font-family: Anton;font-size: 25px;font-style: normal;font-weight: 400;line-height: normal;
																												">Patients>Patient Records>Prescription History</span>
																										</div>
																										<div style="display:inline-block;height:72px;width:74.05%;"></div>					
															</div>
															
															
																				<!-- -->
															<form method="POST" action="prescsave.php">
															<div class="patientcontainer2">
																<div class="flexcontainer1">
																<span style="font-family:Roboto;font-size:15px;font-weight:bold; margin-left:33px;margin-top:34px;margin-bottom:15px;">Prescription History</span><img src="diag.png" class="smallicons" style="margin-top:34px;margin-left:8px;">
																<button type="button" onclick="location.reload();" style="font-family:Roboto;font-size:11px;font-weight:bold;color:#BEBBBB;margin-top:10px; margin-left:100px;background:none;outline:none;border:none;">Undo</button>
																<button type="button" onclick="location.reload();" style="font-family:Roboto;font-size:11px;font-weight:bold;color:#BEBBBB;margin-top:10px; margin-left:-10px;background:none;outline:none;border:none;">changes</button>
																<button style="font-family:Roboto;font-size:11px;font-weight:bold;color:#BEBBBB;margin-top:10px; margin-left:20px;margin-right:10px;background:none;outline:none;border:none;color:#248AA2;">Save</button>
																
																</div>
																				<div class="flexcontainergrey" style="border-top: 0px;
																				  border-right: 0px;
																				  border-bottom: 1px solid #D3D3D3;
																				  border-left: 0px;padding-bottom:9px;"><span class="leftalign">Name</span><span>Date(mdy)</span>
																				  </div>
																				  
																				  
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

// Fetch prescription records for a specific patient
$targetPatientId = 1; // Change this dynamically as needed
$prescriptionQuery = "SELECT `prescriptionID`, `prescriptionName`, `prescriptionDate`, `patientid` 
                      FROM `prescription` 
                      WHERE `patientid` = ? 
                      ORDER BY `prescriptionDate` ASC"; // Ordering by prescriptionDate in ascending order
$prescriptionStatement = $databaseConnection->prepare($prescriptionQuery);
$prescriptionStatement->bind_param("i", $targetPatientId);
$prescriptionStatement->execute();
$prescriptionResults = $prescriptionStatement->get_result();
?>

<script>
// Function to restrict special characters
function validateInput(event) {
    const regex = /^[a-zA-Z0-9\s]*$/; // Allows only alphanumeric characters and spaces
    if (!regex.test(event.target.value)) {
        event.target.value = event.target.value.replace(/[^a-zA-Z0-9\s]/g, ''); // Removes special characters
    }
}

// Function to delete the prescription field from the database after confirmation
function deletePrescription(prescriptionId) {
    // Show confirmation dialog
    const confirmDelete = confirm("Are you sure you want to delete this prescription?");
    if (!confirmDelete) {
        return; // Exit if the user cancels the confirmation
    }

    // Send AJAX request to delete the prescription from the database
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'delete_prescription.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log(xhr.responseText); // Log server response
            if (xhr.responseText === "Success") {
                const prescriptionDiv = document.getElementById('prescription_' + prescriptionId);
                if (prescriptionDiv) {
                    prescriptionDiv.remove();
                }
            } else {
                alert('Error deleting prescription: ' + xhr.responseText);
            }
        } else {
            alert('Error sending AJAX request');
        }
    };
    xhr.send('prescription_id=' + prescriptionId); // Send the prescription_id to the server
}
</script>

<?php
if ($prescriptionResults->num_rows > 0) {
    while ($prescriptionRecord = $prescriptionResults->fetch_assoc()) {
        echo '<div class="flexcontainernoline" id="prescription_' . $prescriptionRecord['prescriptionID'] . '">';
        echo '<input class="aligninput" type="text" name="prescriptionName[' . $prescriptionRecord['prescriptionID'] . ']" value="' . htmlspecialchars($prescriptionRecord['prescriptionName']) . '" maxlength="30" oninput="validateInput(event)">';
        echo '<input type="date" name="prescriptionDate[' . $prescriptionRecord['prescriptionID'] . ']" value="' . htmlspecialchars($prescriptionRecord['prescriptionDate']) . '">';
        echo '<span class="delete-icon" style="margin-left:17px;cursor: pointer; color: red;" onclick="deletePrescription(' . $prescriptionRecord['prescriptionID'] . ')">&#10006;</span>'; // Delete icon (×)
        echo '</div>';
    }
} else {
    echo "<p>No prescription records found for patient ID $targetPatientId.</p>";
}

// Close the statement and database connection
$prescriptionStatement->close();
$databaseConnection->close();
?>






															</div>
															</form>	
																						<form method="POST" action="submit_prescription.php">
																						<div class="patientcontainer3">
																							<div class="flexcontainer1">
																								<span style="font-family:Roboto;font-size:15px;font-weight:bold; margin-left:33px;margin-top:34px;margin-bottom:15px;">
																									Create New Prescription
																								</span>
																								<button type="submit" style="font-family:Roboto;font-size:11px;font-weight:bold;color:#BEBBBB;margin-top:10px; margin-left:110px;background:none;outline:none;border:none;color:red;">
																									Submit
																								</button>
																							</div>
																							<div style="margin-left:30px;margin-top:40px;">
																								<span>Name</span>
																								<br>
																								<input type="text" id="prescriptionName" name="prescriptionName" maxlength="30" required 
																									pattern="^[A-Za-z0-9\s]+$" title="Only alphanumeric characters and spaces are allowed">
																								<br><br>
																								<span>Date</span>
																								<br>
																								<input type="date" name="prescriptionDate" required>
																							</div>
																						</div>
																					</form>



															<div style="height:2000px;"></div>
																				
										
										
				</div>							
			</div>
            </div>
			
			
        </div>
		
		
    </div>
	

</body>
</html>
