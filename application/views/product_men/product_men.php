
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<?php foreach($product as $products):?>
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<img src="<?= base_url();?>assets/img/men/<?= $products->image;?>" alt="">
							</div>
						</div>
					</div>
					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?=$products->name;?></h2>
						<div>
								<h3 class="product-price"><?=$products->price;?></h3>
								<span class="product-available">In Stock</span>
							</div>
							<p><?=$products->description?></p>

							<div class="product-options">
								<label>
									Size
									<select class="input-select">
										<option value="0">X</option>
										<option value="0">XL</option>
										<option value="0">L</option>
									</select>
								</label>
								<label>
									Color
									<select class="input-select">
										<option value="0">Original</option>
										<option value="0">Red</option>
										<option value="0">Gray</option>
									</select>
								</label>
							</div>

							<div class="add-to-cart">
								<div class="qty-label">
									Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div>
								<form method="post" action="<?= base_url();?>cart/add">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<!-- /Product details -->
				</div>
				<?php endforeach;?>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div>

					<!-- product -->
					<?php foreach ($related as $product):?>
					<div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="<?= base_url();?>assets/img/men/<?= $product->image;?>" alt="">

							</div>
							<div class="product-body">
								<h3 class="product-name"><a href="<?=base_url();?>product/product_m/<?=$product->id;?>"><?=$product->name;?></a></h3>
								<h4 class="product-price"><?=$product->price;?></h4>
							</div>
							<form method="post" action="<?= base_url();?>cart/add">
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
								</div>
							</form>
						</div>
					</div>
					<!-- /product -->
				  <?php endforeach; ?>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->
