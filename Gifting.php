<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<title>Vegetables D~Mart</title>

	<link rel="Shortcut icon" href="favicon.ico">

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="fruit.css">

	<link rel="stylesheet" type="text/css" href="menubar.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">

  <script type="text/javascript" src="css/js/jquery.min.js"></script>

  <script type="text/javascript" src="css/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<style>

    html{

        scroll-behavior: smooth;

    }

	.gifting_txt{

		text-align: center;

		font-weight: bold;

		font-size: 20px;

		font-family: time new roman;

		color: green;

	}

	.gifting_txt1{

		text-align: center;

		font-weight: bold;

		font-size: 18px;

		font-family: time new roman;

		margin-top: 5px;

		margin-bottom: -10px;

	}

	.gifting_txt2{

		width: 5rem;

		height: 3rem;

		border-radius: 2rem;

		text-align: center;

		transform: translate(160%);

	}

	.gifting_txt3{

		width: 5rem;

		height: 3rem;

		color: orange;

		font-weight: bold;

		border-radius: 2rem;

		text-align: center;

		background-color: white;

		transform: translate(160%);

	}

	.gifting_txt3:hover{

		background-color: orange;

		color: white;

		border: none;

	}

	.col-md-3{

		border: none;

		margin: 5px 0px;

		border-radius: 2rem;

	}

	.col-md-3:hover{

		box-shadow: 0px 1px 5px 2px #0649BC;

	}

	.img-fluid{

		margin-left: 25px;

	}

	.footer_contant_mart:before{

		content: '';

		height: 15px;

		width: 100%;

		background-color: #A5CB0C;

		position: absolute;

		margin-top: -17px;

	}

	.footer_contant_mart{

		width: 100%;

		left: 0;

		bottom: 0;

		background-color: #F2F1EF;

		margin-top: 30px;

		margin-bottom: 2px;

	}

	.footer_contant_mart ul li{

		list-style-type: none;

	}

	.footer_contant_heading{

		font-family: 'Times New Roman';

		font-weight: bold;

		font-size: 20px;

		color: #273C48;

		margin: 10px 0px;

	}

	.footer_contant_txt{

		font-family: 'Times New Roman';

		font-weight: bold;

		font-size: 14px;

		color: green;

		margin: 15px 0px;

	}

	.footer_contant_txt li{

		margin: 10px 0px;

	}

	.footer_contant_txt1{

		font-family: 'Times New Roman';

		font-weight: bold;

		font-size: 16px;

		word-spacing: 5px;

		color: green;

		margin: 15px 0px;

	}

	.sub_mail_txt{

		padding: 8px 20px;

		border-radius: 2rem;

	}

	.sub_mail_btn{

		padding: 8px 20px;

		border-radius: 2rem;

		color: orange;

		font-weight: bold;

		border: 1px ridge red;

		background-color: white;

	}

	.sub_mail_btn:hover{

		background-color: orange;

		color: white;

		border: none;

	}

	.footer_contant_end{

		width: 100%;

		left: 0;

		margin-bottom: -1px;

		background-color: #273C48;

		text-align: center;

		font-weight: bold;

		font-size: 12px;

		color: white;

		letter-spacing: 2px;

		padding: 6px 0px;

	}

	#up-arrow{

	   position: fixed;

	   right: 10px;

	   top: 530px;

	   z-index: 1;

	}
		#menu_containt{
		  background-color: white;
		  color: #273C48;
		  border-radius: 2rem;
		}

</style>

</head>

<?php

$connection = mysqli_connect('localhost', 'root', '','shopingcart');



if (isset($_POST['add-to-cart'])) {

	if (isset($_SESSION['shoping_cart'])) {

		$item_array_id = array_column($_SESSION['shoping_cart'], "item_id");

		if (!isset($_GET['ID'],$item_array_id)) {

		$count = count($_SESSION['shoping_cart']);

		$item_array = array(

			'item_id' => $_GET['id'],

			'item_name' => $_POST['hidden_name'],

			'item_price' => $_POST['hidden_price'],

			'item_quantity' => $_POST['quantity']

		);

		$_SESSION['shoping_cart'][$count] = $item_array;

	}else{

		echo "data is already exist.";

	}

	}else{

		$item_array = array(

			'item_id' => $_GET['id'],

			'item_name' => $_POST['hidden_name'],

			'item_price' => $_POST['hidden_price'],

			'item_quantity' => $_POST['quantity']

		);

		$_SESSION['shoping_cart'][0] = $item_array;

	}

}



if (isset($_GET['action'])) {

	if ($_GET['action']=='delete') {

		foreach ($_SESSION['shoping_cart'] as $key => $value) {

			if ($value['item_id']==$_GET['id']) {

				unset($_SESSION['shoping_cart'][$key]);

			}

		}

	}

}

?>

<body>

<div id="up-home"> </div>

<div class="menuBarCont" style="padding:0; margin:0;">

<!--	<img src="logo.png" class="logo_media" width="70px;" style="position: absolute;">-->

<div class="menuBar_btn">

<label for="autoMenu">

	<img class="menu_icon_line" src="banner/meanu_icon.jpg" width="60px;" style="color: white;">

</label>

</div>

<input type="checkbox" id="autoMenu">

	<nav class="menuBar1">

		<img src="logo.png" class="logo" width="200px;">

		<a class="menu_containt" href="index.php">HOME</a>

		<a class="menu_containt" id="menu_containt" href="Gifting.php">GIFTING</a>

		<a class="menu_containt" href="rewards.html">OFFERS ZONE</a>

		<a class="menu_containt" href="about.html">ABOUT US</a>

		<a class="menu_containt" href="login.html">LOGIN</a>

		<input type="text" id="myInput" onkeyup="myFunction()" style="background-image: url(./banner/icons-transparent-search-9-original.png); background-repeat: no-repeat; background-position: right; background-size: contain;" placeholder="Search here..." title="Type here">

		<a href="Cart_Page.php"><img src="./banner/Cart_icon.png" class="Cart_icon" width="50px;"></a>

	</nav>

</div>

<script>

function myFunction() {

    var input, filter, ul, li, a, j, txtValue;

    input = document.getElementById("myInput");

    filter = input.value.toUpperCase();

    ul = document.getElementById("myUL");

    li = ul.getElementsByTagName("li");

    for (j = 0; j < li.length; j++) {

        a = li[j].getElementsByTagName("a")[0];

        txtValue = a.textContent || a.innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {

            li[j].style.display = "";

        } else {

            li[j].style.display = "none";

        }

    }

}

</script>

<div id="up-arrow">

	    <a href="#up-home"><img src="up-arrow.webp" width="55px" height="50px"></a>

</div>

	<div class="heading_text_gifts">

		Shop Now & Get One

	</div><hr />

<div class="container-fluid">

<?php



$query = "SELECT * FROM gifting ORDER BY id ASC";

$result = mysqli_query($connection, $query);



if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_array($result)) {

		?>

		<div class="col-md-3">

			<form method="post" action="Gifting.php?action=add&id=<?php echo $row['id']; ?>">

				<img style="width: 250px;" class="img-fluid" src="<?php echo $row['images']; ?>">

				<div class="card-body">

					<div class="gifting_txt"><?php echo $row['Name']; ?></div>

					<div class="gifting_txt1">MRP &nbsp; ₹<?php echo $row['Price']; ?></div><br>

					<input  class="gifting_txt2" type="text" name="quantity" value="1">

					<input type="hidden" name="hidden_name" value="<?php echo $row['Name'] ?>">

					<input type="hidden" name="hidden_price" value="<?php echo $row['Price'] ?>">

					<input class="gifting_txt3" type="submit" name="add-to-cart" value="ADD">

				</div>

			</form>

		</div>

<?php	}

}



?>

</div>

<div class="footer_contant_mart">

	<div class="container-fluid">

		<div class="row">

			<div class="col-md-2">

				<ul>

					<li><p class="footer_contant_heading">Can we help you?</p>

						<ol class="footer_contant_txt">

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Help Center</a></li>		

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Cange My Order</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Ad Match</a></li>

						</ol>

					</li>

					<li><p class="footer_contant_heading">Services</p>

						<ol class="footer_contant_txt">

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Photo Centre</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Finacial Services</a></li>

						</ol>

					</li>

				</ul>

			</div>

			<div class="col-md-2">

				<ul>

					<li><p class="footer_contant_heading">Flyers & more</p>

						<ol class="footer_contant_txt">

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Store Flyer</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Accessible flyer</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Gift Cards</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Grocery on Rollback</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Grocery Best Sellers</a></li>

						</ol>

					</li>

				</ul>

			</div>

			<div class="col-3">

				<ul>

					<li><p class="footer_contant_heading">About us</p>

						<ol class="footer_contant_txt">

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">About Vegetable D~Mart</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Careers</a></li>

							<li><img src="./banner/arrow_footer.png" width="25px;"><a href="#">Charity & Communities</a></li>

						</ol>

					</li>

					<li><p class="footer_contant_heading">Mailing address</p>

						<ol class="footer_contant_txt">

							<li>ABC Mart Corp.</li>

							<li>1970 Mamblam Road</li>

							<li>Banglore, INDIA</li>

						</ol>

					</li>

				</ul>

			</div>

			<div class="col-md-5">

				<h3 class="footer_contant_heading">Be in the know!</h3>

				<div class="footer_contant_txt1">Get up-to-date information on weekly flyer features, Rollback & clearance items, exclusive products and offers. Stay Happy Stay Home...</div>

				<input class="sub_mail_txt" type="mail" name="mail" placeholder="Enter Email Address">

				<input class="sub_mail_btn" type="submit" name="mail_add_submition">

				

				<div class="footer_contant_heading">Connect with us</div>

				<p class="footer_contant_txt1">Connect with us on your favourite social networks.</p>

				<div>

					<a href="#" class="w3-xlarge"><i class="fa fa-facebook"></i></a>

					<a href="#" class="w3-xlarge"><i class="fa fa-twitter"></i></a>

					<a href="#" class="w3-xlarge"><i class="fa fa-google"></i></a>

					<a href="#" class="w3-xlarge"><i class="fa fa-linkedin"></i></a>

					<a href="#" class="w3-xlarge"><i class="fa fa-instagram"></i></a>

					<a href="#" class="w3-xlarge"><i class="fa fa-skype"></i></a>

				</div>

			</div>

		</div>

	</div>

</div>

<p class="footer_contant_end">

	&copy;Vegetables D~Mart. All rights reserved | Privacy Policy | Terms of Use

</p>

</body>

</html>