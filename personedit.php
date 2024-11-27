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
           overflow:hidden;
		    background:#F5F6F8;
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
	width:467px;
	height:400px;
	position:absolute;
	background:#FFFFFF;
	border-radius:10px;
	left:150px;
	top:180px;
	
	box-shadow: 1px 1px #ABABAB;
	transform:scale(1.5);
}
.flexcontainer{
display:flex;
margin-top:13px;
}
.flexcontainer1{
display:flex;
}
.smallicons{
	width:16px;
	height:16px;
	position:relative;
}
.b{
	font-family:Roboto;
	font-size:12px;
	font-weight:bold;
	margin-left:42px;
	width:183px;
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
.flexcontainer span{
	font-family:Roboto;
	font-size:12px;
	border-bottom:1px;
	width:183px;
border-left:0px;
border-top:0px;
border-right:0px;

border-color:white;
border-style:solid;
}
input{
	width:45%;
	height:20%;
	font-size:10px;
	outline:none;
	margin-bottom:4px;
	

}
    </style>
</head>
<body>
<?php
$_GET['id'] = 1;
 include 'editteeth.php'; ?>
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
																												">Patients>Patient Records>Personal Information</span>
																										</div>
																										<div style="display:inline-block;height:72px;width:74.05%;"></div>					
															</div>
															
															
																				<!-- -->
																				<?php if ($patient): ?>
															<div class="patientcontainer">
      <div class="flexcontainer1">
        <span style="font-family:Roboto;font-size:15px;font-weight:bold; margin-left:42px;margin-top:34px;margin-bottom:15px;">Personal Information</span>
		<form action="information_submit.php" method="POST">
        <img src="info.png" class="smallicons" style="margin-top:34px;margin-left:8px;">
        <span class="edit-btn" style="font-family:Roboto;font-size:11px;font-weight:bold;color:#BEBBBB;margin-top:37px; margin-left:185px; cursor: pointer;"><button style="background:none;border:none;color:#BEBBBB;font-family:Roboto;font-size:11px;font-weight:bold;">Save</button></span>
        
      </div>
      <div class="flexcontainer">
        <span class="b">Patient First Name</span>
        <input type="text" value="<?php echo htmlspecialchars($patient['firstName']); ?>" name="firstName"> 
      </div>
	   <div class="flexcontainer">
        <span class="b">Patient Middle Name</span>
        <input type="text" value="<?php echo htmlspecialchars($patient['middleName']); ?>" name="middleName"> 
      </div>
	   <div class="flexcontainer">
        <span class="b">Patient Last Name</span>
        <input type="text" value="<?php echo htmlspecialchars($patient['lastName']); ?>" name="lastName"> 
      </div>
      <div class="flexcontainer">
        <span class="b">Patient ID</span>
        <span class="patientID">P-<?php echo htmlspecialchars($patient['id']); ?></span>
      </div>
      <div class="flexcontainer">
        <span class="b">Sex</span>
        <span><?php echo htmlspecialchars($patient['sex']); ?>
      </div>
      <div class="flexcontainer">
        <span class="b">Birthdate</span>
        <input type="date" style="padding-right:3px;" value="<?php echo htmlspecialchars($patient['birthdate']); ?>" name="birthdate">
      </div>
      <div class="flexcontainer">
        <span class="b">Email</span>
        <input type="email"  value="<?php echo htmlspecialchars($patient['email']); ?>" name="email" id="emailInput" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" required>
      </div>    
      <div class="flexcontainer">
        <span class="b">Contact Number</span>
        <input type="number" value="09<?php echo htmlspecialchars($patient['contactNumber']); ?>" name="contactNumber" >
      </div>
	  </form>
    </div>
 <?php else: ?>
  <?php endif; ?>



															<div style="height:2000px;"></div>
																				
										
										
				</div>							
			</div>
            </div>
			
			
        </div>
		
		
    </div>
	

</body>
</html>
