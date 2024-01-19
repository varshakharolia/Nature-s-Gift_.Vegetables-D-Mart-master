<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<title>Registration</title>

	<link rel="icon" href="logo.png"height="10px" width="10px">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">

	<script type="text/javascript" src="css/js/jquery.min.js"></script>

	<script type="text/javascript" src="css/js/bootstrap.min.js"></script>

</head>

<body>



</body>

</html>

<?php

		$con = mysqli_connect('localhost', 'root', '','shopingcart');

			error_reporting(0);

			$Email = $_POST['Emailid'];

			$Passwd = $_POST['Password'];

			$Rpasswd = $_POST['Rpassword'];



			$email_query = "SELECT * FROM loginform where email ='$Email'";



			$email_query_result = mysqli_query($con, $email_query);

			if (!mysqli_num_rows($email_query_result) > 0) {

				if($Passwd != $Rpasswd){

					echo "<script>alert('Password not match..please try again...')</script>";

				}else{

					$query = "INSERT INTO loginform (email, password, rpassword) VALUES ('$Email', '$Passwd', '$Rpasswd')";

					$result = mysqli_query($con, $query);



					?>"<div class="alert alert-success">

				<strong>Success! </strong> Registeration process done...

				</div> <a href="login.html"><b><i><font color="red">Click Here</font></i></b></a> for login. <br>

Login & Order<font color="blue"><b> 100% offer</b></font> is available in first order...hurry up and enjoy..<font color="orange"><b>Thanks for Registaration....Good Day..</font></b>

"<?php

				}

			}else{

				echo "<script>alert('already exits..')</script>";

			}

			/*header("refresh:2; url=login.html");*/

?>