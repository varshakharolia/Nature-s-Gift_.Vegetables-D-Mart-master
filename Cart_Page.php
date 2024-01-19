<?php

session_start();

#$connection = mysqli_connect('localhost', 'root', '','shopingcart');

?>

<!DOCTYPE html>

<html>

<head>

	<title>CART</title>

<meta charset="utf-8">

<link rel="Shortcut icon" href="favicon.ico">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="fruit.css">

	<link rel="stylesheet" type="text/css" href="menubar.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">

  <script type="text/javascript" src="css/js/jquery.min.js"></script>

  <script type="text/javascript" src="css/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

	.table_heading{

		margin-top: 130px;

		margin-bottom: -110px;

		font-family: Times New Roman;

		font-weight: bolder;

		color: green;

	}

	.web_logo{

		display: none;

	}

	@media print{

		.menuBarCont{

			display: none;

		}

		.print_slip_btn{

			display: none;

		}

		.remove_btn{

			display: none;

		}

		.footer_contant_mart{

			display: none;

		}

	}

	@media screen{

		.table-responsive{

			display: block;

		}

	}

	.text-danger:hover{

		background-color: orange;

		color: white;

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
	.Cart_icon{
		text-decoration: underline;
		color: white;
	}

</style>

</head>

<body>

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

		<a class="menu_containt" href="Gifting.php">GIFTING</a>

		<a class="menu_containt" href="rewards.html">OFFERS ZONE</a>

		<a class="menu_containt" href="about.html" >ABOUT US</a>

		<a class="menu_containt" href="login.html">LOGIN</a>

		<input type="text" id="myInput" onkeyup="myFunction()" style="background-image: url(./banner/icons-transparent-search-9-original.png); background-repeat: no-repeat; background-position: right; background-size: contain;" placeholder="Search here..." title="Type here">

		<a href="Cart_Page.php"><img src="./banner/Cart_icon.png" class="Cart_icon" width="50px;"></a>

	</nav>

</div>

<div class="container">

<h2 class="table_heading">Products Details</h2>

<div class="table-responsive" style="margin-top: 150px;">

	<table class="table table-bordered" style="text-align: center;">

		<tr>

			<th style="text-align: center; font-size: 20px; color: red;">Item Name</th>

			<th style="text-align: center; font-size: 20px; color: red;">Item Quantity (kg.)</th>

			<th style="text-align: center; font-size: 20px; color: red;">Item Price</th>

			<th style="text-align: center; font-size: 20px; color: red;">Total</th>

			<th style="text-align: center; font-size: 20px; color: red;" class="remove_btn">Action</th>

		</tr>

		<?php

			error_reporting(0);

			if (!empty($_SESSION['shoping_cart'])) {

				$total = 0;

				foreach ($_SESSION['shoping_cart'] as $key => $value) {

				?>

				<tr>

					<td style="color: blue; font-weight: bold;"><?php echo $value['item_name']; ?></td>

					<td><?php echo $value['item_quantity']; ?></td>

					<td><?php echo $value['item_price']; ?></td>

					<td><?php echo $value['item_quantity']*$value['item_price']; ?></td>

					<td class="remove_btn"><a href="index.php?action=delete&id=<?php echo $value["item_id"]; ?>"><span class="text-danger" style="padding: 5px 10px; border: 1px ridge red; border-radius: 2rem;">Remove Item</span></a></td>

				</tr>

				<?php

				$total = $total + ($value['item_quantity']*$value['item_price']);

				$delivery_ch = 50;

				}

			}

		?>

		<tr>

			<td colspan="3" align="right" style=" font-weight: bold; border: none;">Sub-Total</td>

			<td style="font-weight: bold; "><?php echo $total ?></td>

			<td class="remove_btn" style=" border: none;"></td>

		</tr>

		<tr>

			<td colspan="3" align="right" style=" font-weight: bold;  border: none;">Delivery Charges</td>

			<td style="font-weight: bold;  border: none;"><?php echo $delivery_ch ?></td>

		</tr>

		<tr>

			<td colspan="3" align="right" style=" font-weight: bold;  border: none;">Total</td>

			<td style="font-weight: bold; background-color: yellow; border-left: none; border-right: none; border-bottom: none;"><?php echo $total+$delivery_ch ?></td>

		</tr>

	</table>

</div>

<a class="print_slip_btn" style="padding: 10px 10px; border: 1px ridge red; background-color: white; color: orange; font-weight: bold; font-size: 14px; border-radius: 2rem;"><button style="outline: none; border: none; background-color: white;" onclick="window.print()">Print Slip</button></a>

<a class="print_slip_btn" href="#" style="text-decoration:none; padding: 10px 10px; border: 1px ridge red; background-color: white; color: orange; font-weight: bold; font-size: 14px; border-radius: 2rem;">CONTINUE SHOPPING</a>

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