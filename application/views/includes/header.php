<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>M fashion</title>

		
		<link href="<?= base_url()?>assets/fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/bootstrap.min.css"/>

		
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/slick-theme.css"/>

		
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/nouislider.min.css"/>

		<link rel="stylesheet" href="<?= base_url()?>assets/css/font-awesome.min.css">

		
		<link type="text/css" rel="stylesheet" href="<?= base_url()?>assets/css/style.css"/>


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +2347067653476</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> mfashion@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Rukuba Road Jos Plateau State</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Women</option>
										<option value="1">Men</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty">3</div>
									<div class="cart-dropdown">
										<form>
											<div class="cart-list">
												<div class="product-widget">
													<?php $i = 1;?>
													<?php foreach ($this->cart->contents() as $items):?>
													<input type="hidden" name="<?php echo $i.'[rowid]';?>" value ="<?php echo $items['rowid']; ?>">														
													<input type="text" name="<?php echo $i.'[rowqty]';?>" value ="<?php echo $items['qty'];?>" maxlength="3" size="1">		 
													<div class="product-body">
														<h3 class="product-name"><?php echo $items['name'];?></h3></form>
														<h4 class="product-price"><span class="qty"><?php echo $this->cart->format_number($items['price']);?></h4>
													</div>
													<div class="cart-summary">
														<strong><?php echo $this->cart->format_number($this->cart->total());?></strong>
													</div>
													<?php $i++;?>
													<?php endforeach;?>
													
													<button class="delete"><i class="fa fa-close"></i></button>
												</div>
											</div>
											<div class="cart-btns">
												<p><button class="btn btn-default" type="submit">Update Cart</button></p>
												 <a href="cart"><button class="btn btn-default"> Checkout</button></a>
											</div>
										  </form>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Women</a></li>
						<li><a href="#">Men</a></li>
						<li><a href="#">Senegalese</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
