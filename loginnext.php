<?php 
session_start();
$_SESSION['username']=$_POST['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbdental";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] == 'POST'  ){
	$username=$_POST['email'];
	
	$countQuery="SELECT 'username' FROM login WHERE username='$username'";
	
	$resulta = $conn->query($countQuery);
	if ($resulta->num_rows > 0) {
			
    
	} else {
		echo "<script>
                    alert('Account Not Found');
                    window.location.href = 'login.html'; // Adjust to your treatment editing page
                  </script>";
		}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
		@import url('https://fonts.googleapis.com/css2?family=Anton:wght@400;700&display=swap');	
		@import url('https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap');


        body {
            margin: 0;
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4; /* Optional background color for body */
        }

        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('dentbg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            filter: brightness(0.2); /* Reduce brightness to 20% */
            z-index: -1;
        }

        .content {    
            width: 492px;
            height: 517px;
            border-radius: 20px;
            border: 1px solid #FFFFFF;
            background: linear-gradient(to bottom, #0C3C68, #2DA6B6);
        }
		.flexcontainer{
		display:flex;
		}
		.headings{
			color: #FFF;
			
			font-family: Anton;
			font-size: 20px;
			font-style: normal;
			font-weight: 400;
			line-height: normal;
			margin-top:44px;
			margin-left:3px;
		}
		.field::placeholder {
			color: #B7BDC6;
		  }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="content">
					<div class="flexcontainer" style="margin-left:52px;">
							<img src="goldenlogo.png" style="width:24px;height:24px;margin-top:48px;"><span class="headings">GOLDEN DENTAL</span>
					</div>
					<div class="flexcontainer" style="margin-left:52px;">
							<span style="font-family:Arimo;font-size:28px;font-weight:bold;color:white;margin-top:31px;">Log in</span>
					</div>
					
					<div class="flexcontainer" style="margin-left:52px;">
							<span style="font-family:Arimo;font-size:15px;font-weight:bold;color:white;margin-top:31px;">Password</span>
					</div>
					<div class="flexcontainer" style="margin-left:52px;margin-top:5px;border-radius:10px;width:396px;height:42px;border:1px #FFFFFF solid;align-items: center;"><form action="logintodash.php" method="POST">
							<input type="password" name="password" class="field" style="font-family:Arimo;font-size:17px;font-weight:bold;color:white;margin-left:10px;outline:none;background:transparent;border:none;" placeholder="Password" maxlength=30>
					</div>
					<div class="flexcontainer" style="margin-left:52px;margin-top:18px;border-radius:10px;width:396px;height:42px;border:1px #FFFFFF solid;align-items: center;justify-content:center;background:#FFFFFF;">
							<button type="submit" style="width:100%;height:100%;outline:none;border:none;background:none;"><span style="font-family:Arimo;font-size:17px;font-weight:bold;color:#268FA5;outline:none;background:transparent;border:none;">Login</span></button></form>
					</div>
					
					<!-- 
					<div class="flexcontainer">
							<div style="margin-left:52px;margin-top:44px;width:167px;height:1px;align-items: center;justify-content:center;background:#FFFFFF;"></div>
							<span style="font-family:Arimo;font-size:17px;margin-top:35px;margin-left:24px;font-weight:bold;color:#B7BDC6;">or</span>
							<div style="margin-left:23px;margin-top:44px;width:167px;height:1px;align-items: center;justify-content:center;background:#FFFFFF;"></div>
					</div>
					<div class="flexcontainer" style="margin-left:52px;margin-top:44px;border-radius:10px;width:396px;height:42px;border:1px #FFFFFF solid;align-items: center;justify-content:center;">
							<span style="font-family:Arimo;font-size:17px;font-weight:bold;color:#FFFFFF;outline:none;background:transparent;border:none;">Create an account</span>
					</div>-->
    </div>
</body>
</html>
