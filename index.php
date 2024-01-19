<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<title>Vegetables D~Mart</title>

	<link rel="icon" href="favicon.ico" type="image/x-icon">

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
    .carousel_banner{
    	margin-top: 80px;
    }

	.col-md-3{

		border: none;

		margin: 5px 0px;

		border-radius: 2rem;

	}

	.col-md-3:hover{

		box-shadow: 0px 1px 5px 2px #0649BC;

	}

	#quantity_cont{

		transform: translate(110%);

		width: 53px;

		height: 32px;

		border-radius: 2rem;

		text-align: center;

	}

	#submit_button{

		width: 5rem;

		height: 3rem;

		color: orange;

		font-weight: bold;

		border-radius: 2rem;

		text-align: center;

		background-color: white;

		transform: translate(120%);

	}

	#submit_button:hover{

		background-color: orange;

		color: white;

		border: none;

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

	#chip_msg{

		border: 2px dashed green;

		display: inline-block;

		border-radius: 2rem;

		padding-right: 30px;

		padding-left: 15px;

		padding-top: 10px;

		padding-bottom: 10px;

		right: 15px;

		top: 470px;

		position: fixed;

		z-index:1;

		background-color: #F5FFFA;

	}

	#chip_link{

		text-decoration: none;

		font-size: 20px;

		text-shadow: 1px 2px 3px orange,

		             2px 2px 2px yellow;

	}

	#chip_btn{

		float: right;

		margin-left: 10px;

		position: absolute;

		margin-top: -5px;

		border: none;

		background-color: rgba(0, 0, 0, 0.0);

		color: orange;

	}

	#chip_btn:hover{

		color: red;

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

$con = mysqli_connect('localhost', 'root', '','shopingcart');



if (isset($_POST['add-to-card'])) {

	if (isset($_SESSION['shoping_cart'])) {

		$item_array_id= array_column($_SESSION['shoping_cart'], "item_id");

		if (!isset($_GET['ID'],$item_array_id)) {

			$count=count($_SESSION['shoping_cart']);

			$item_array = array(

				'item_id' => $_GET["id"],

				'item_name' => $_POST["hidden_name"],

				'item_price' => $_POST["hidden_price"],

				'item_quantity' => $_POST["quantity"]

			);

			$_SESSION['shoping_cart'][$count] = $item_array;

		}else{

			echo '<script>alert("Data is already added.")</script>';		

		}

	}

		else

	{

		$item_array = array(

			'item_id' => $_GET["id"],

			'item_name' => $_POST["hidden_name"],

			'item_price' => $_POST["hidden_price"],

			'item_quantity' => $_POST["quantity"]

		);

		$_SESSION['shoping_cart'][0] = $item_array;

	}

}

if (isset($_GET['action'])) {

	if ($_GET['action']=='delete') {

		foreach ($_SESSION['shoping_cart'] as $key => $value) {

			if ($value["item_id"] == $_GET["id"]){

			unset($_SESSION['shoping_cart'][$key]);

			

		}

	}

}

}

?>

<body>

    <div id="up-home"></div>

<div class="menuBarCont" style="padding:0; margin:0;">

	<!--<img src="logo.png" class="logo_media" width="150px;" style="position: absolute;">-->

<div class="menuBar_btn">

<label for="autoMenu">

	<img class="menu_icon_line" src="banner/meanu_icon.jpg" width="60px;" style="color: white;">

</label>

</div>

<input type="checkbox" id="autoMenu">

	<nav class="menuBar1">

	    <img src="logo.png" class="logo" width="200px;">

		<a class="menu_containt" id="menu_containt" href="index.php">HOME</a>

		<a class="menu_containt" href="Gifting.php">GIFTING</a>

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

	<div id="chip_msg">

		<a href="rewards.html" id="chip_link">Click for New Offers</a>

		<button id="chip_btn" onclick="this.parentElement.style.display='none'"><i class="fa fa-close"></i></button>

	</div>

	<div id="up-arrow">

	    <a href="#up-home"><img src="up-arrow.webp" width="55px" height="50px"></a>

	</div>

	<div class="container-fluid">

		<div class="container carousel_banner">

		<div id="carousel_slide" class="carusel slide "  data-ride="carousel">

			<div class="carousel-inner">

				<div class="item active">

					<img class="img-responsive img-thumbnail" src="./banner/img1.png" width="100%">

				</div>

				<div class="item">

					<img class="img-responsive img-thumbnail" src="./banner/img2.png" width="100%">

				</div>

				<div class="item">

					<img class="img-responsive img-thumbnail" src="./banner/img3.png" width="100%">

				</div>

				<div class="item">

					<img class="img-responsive img-thumbnail" src="./banner/img4.png" width="100%">

				</div>

				<div class="item">

					<img class="img-responsive img-thumbnail" src="./banner/img5.png" width="100%">

				</div>

			</div>

		</div>

	</div>

</div>

	<div class="heading_text1">

		Shop by category

		<hr />

	</div>

<div  class="container-fluid">

	<div class="container1">

        <div class="row">

		<div class="col">

			<div class="card" style="width: 27rem; border-radius: 2rem;">

				<img class="img-fluid" src="banner/hearthealthy.jpg" style="border-top-left-radius: 2rem; border-top-right-radius: 2rem;">

				<div class="card-body">

					<h5 class="card-title">Heart Healthy Foods</h5>

					<p class="card-text">&nbsp;&nbsp;Amarnath Couscous</p>

					<p class="card-text">&nbsp;&nbsp;Flours Rice Condiments</p>

					<p class="card-text">&nbsp;&nbsp;Seafood lean Meats</p>

					<a herf="#" class="btn btn_cat_card">View All</a>

				</div>

			</div>

		</div>

		<div class="col">

				<div class="card" style="width: 27rem; border-radius: 2rem;">

				<img class="img-fluid" src="banner/exotic.jpg" style="border-top-left-radius: 2rem; border-top-right-radius: 2rem;">

				<div class="card-body">

					<h5 class="card-title">Exotic Vegitables</h5>

					<p class="card-text">&nbsp;&nbsp;Asparagus Artichokes</p>

					<p class="card-text">&nbsp;&nbsp;Avocados Peppers</p>

					<p class="card-text">&nbsp;&nbsp;Broccofi Zucchini</p>

					<a herf="#" class="btn btn_cat_card">View All</a>

				</div>

			</div>

		</div>

		<div class="col">

				<div class="card" style="width: 27rem; border-radius: 2rem;">

				<img class="img-fluid" src="./International-Cuisine.jpg" style="border-top-left-radius: 2rem; border-top-right-radius: 2rem;">

				<div class="card-body">

					<h5 class="card-title">International Cuisine</h5>

					<p class="card-text">&nbsp;&nbsp;Pasta</p>

					<p class="card-text">&nbsp;&nbsp;Rice Quinoa</p>

					<p class="card-text">&nbsp;&nbsp;Olive Extravirgin Olive Oils</p>

					<a herf="#" class="btn btn_cat_card">View All</a>

				</div>

			</div>

		</div>

	<div class="col">

				<div class="card" style="width: 27rem; border-radius: 2rem;">

				<img class="img-fluid" src="banner/Organic.jpg" style="border-top-left-radius: 2rem; border-top-right-radius: 2rem;">

				<div class="card-body">

					<h5 class="card-title">Organic</h5>

					<p class="card-text">&nbsp;&nbsp;Fruits & Vegetables</p>

					<p class="card-text">&nbsp;&nbsp;Staples</p>

					<p class="card-text">&nbsp;&nbsp;Bakery & Dairy</p>

					<a herf="#" class="btn btn_cat_card">View All</a>

				</div>

			</div>

		</div>

	</div>   

</div>

</div>



<div  class="container-fluid">

<div class="container">

	<div class="cat_vegetable">Vegetables</div>



<?php



$query = "SELECT * FROM cart ORDER BY id ASC";

$result = mysqli_query($con, $query);



if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_array($result)) {

	?>





<!--<div class="col-md-2" style="margin-left: 35px;">-->

<div class="col-md-3 justify-content-end">

	<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">

		<img style="width: 250px;" src="<?php echo $row['image']; ?>" class="img-fluid">

		<div class="card-body">

			<div class="card-text1" style="text-align: center;"><?php echo $row['Name']; ?></div>

			<div style="text-align: center; padding: 5px 5px;"><b>500g </b>| 1kg | 2kg</div>

			<div class="MRP">MRP &nbsp;&nbsp;&nbsp;₹<?php echo $row['Price']; ?></div>

			<input id="quantity_cont" type="text" name="quantity" value="1">

			<input type="hidden" name="hidden_name" value="<?php echo $row['Name'] ?>">

			<input type="hidden" name="hidden_price" value="<?php echo $row['Price'] ?>">

			<input id="submit_button" type="submit" name="add-to-card" value="ADD">

		</div>

	</form>

</div>

<?php

	}

}

?>

<!--style="background-color: white; border: 1px solid red; padding: 5px 10px; font-weight: bold; border-radius: 2rem; color: orange;" -->

<div class="cat_vegetable">Fruits</div>



<?php



$query = "SELECT * FROM fruits ORDER BY id ASC";

$result = mysqli_query($con, $query);



if (mysqli_num_rows($result) > 0) {

	while ($row = mysqli_fetch_array($result)) {

	?>

<!--<div class="col-md-2" style="margin-left: 35px;">-->

<div class="col-md-3 justify-content-end">

	<form method="post" action="index.php?action=add&id=<?php echo $row["id"]; ?>">

		<img style="width: 250px;" src="<?php echo $row['image']; ?>" class="img-fluid">

		<div class="card-body">

			<div class="card-text1" style="text-align: center;"><?php echo $row['Name']; ?></div>

			<div style="text-align: center; padding: 5px 5px;"><b>500g </b>| 1kg | 2kg</div>

			<div class="MRP">MRP &nbsp;&nbsp;&nbsp;₹<?php echo $row['Price']; ?></div>

			<input id="quantity_cont" type="text" name="quantity" value="1"><input type="hidden" name="hidden_name" value="<?php echo $row['Name'] ?>">

			<input type="hidden" name="hidden_price" value="<?php echo $row['Price'] ?>">

			<input id="submit_button" style="background-color: white; border: 1px solid red; padding: 5px 10px; font-weight: bold; border-radius: 2rem; color: orange;" type="submit" name="add-to-card" value="ADD">

		</div>

	</form>

</div>



<?php

	}

}

?>

</div>

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