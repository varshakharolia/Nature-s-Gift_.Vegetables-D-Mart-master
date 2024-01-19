<?php

session_start();

?>

    <link rel="icon" href="logo.png"height="10px" width="10px">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">

	<script type="text/javascript" src="css/js/jquery.min.js"></script>

	<script type="text/javascript" src="css/js/bootstrap.min.js"></script>

<?php

		$con = mysqli_connect('localhost', 'root', '','shopingcart');

			$loemail = $_POST['email1'];

			$lopasswd = $_POST['passwd1'];

			

			$log_query = "SELECT * FROM loginform WHERE email ='$loemail'";



			$log_query_result = mysqli_query($con, $log_query);

			if (!mysqli_num_rows($log_query_result) > 0) {

				echo "<script>alert('Check Username and Password...')</script>";

			}else{

					$query_user = "SELECT * FROM loginform WHERE email = '$loemail'";

					$result = mysqli_query($con, $query_user);

				?>."<div class="alert alert-success">

				<strong>Success</strong> You are login successfully.(id::". <?php echo $loemail ?>.")

				</div>

				Now click here fo go <a href="index.php"><u><strong>HOME</strong></u></a>.

				<br>

				<font color="blue"><b><i>Have a nice day!</i></b></font>

				".

				<?php

			}

?>