
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Women</h3>
						</div>
					</div>
					<!-- /section title -->
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<?php foreach($products_w as $product):?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url();?>assets/img/women/<?=$product->image?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?= $product->category;?></p>
												<h3 class="product-name"><a href="<?php echo base_url();?>product/product_w/<?php echo $product->id;?>"><?= $product->name;?></a></h3>
												<h4 class="product-price"><?=$product->price;?></h4>
												
												<div class="product-btns">
													<button class="quick-view"><i class="fa fa-eye"><a href="<?php echo base_url();?>product/product_w/<?php echo $product->id;?>"></i><span class="tooltipp">view</a></span></button>
												</div>
											</div>
											<form method="post" action="<?php echo base_url();?>cart/add">
												<div class="add-to-cart">
													QTY:<input type="text" class="qty" name="qty" value="1"><br>
													<input type="hidden" name="item_number" value="<?=$product->id;?>">
													<input type="hidden" name="price" value="<?=$product->price;?>">
													<input type="hidden" name="title" value="<?=$product->name;?>">
													<button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</div>
											</form>
										</div>
										<!-- /product -->
									<?php endforeach;?>			

<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Men wares</h3>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<!-- product -->
										<?php foreach($products_m as $product):?>
										<div class="product">
											<div class="product-img">
												<img src="<?php echo base_url();?>assets/img/men/<?=$product->image?>" alt="">
											</div>
											<div class="product-body">
												<p class="product-category"><?= $product->category;?></p>
												<h3 class="product-name"><a href="<?php echo base_url();?>product/product_m/<?php echo $product->id;?>"><?= $product->name;?></a></h3>
												<h4 class="product-price"><?=$product->price;?></h4>
												
												<div class="product-btns">
													<button class="quick-view"><i class="fa fa-eye"><a href="<?php echo base_url();?>product/product_m/<?php echo $product->id;?>"></i><span class="tooltipp">view</a></span></button>
												</div>
											</div>
											<form  method="post"  action="<?= base_url()?>cart/add">
												<div class="add-to-cart">
													<button name="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</div>
											</form>
										</div>
										<!-- /product -->
									<?php endforeach;?>

										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->