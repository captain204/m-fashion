<?php $this->load->view('admin/includes/header');?>

 <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<?php foreach ($product as $products):?>
		  				<div class="panel-heading">
							<div class="panel-title">Edit product</div>
						</div>
						
		  				<div class="panel-body">				
		  						<div class="col-md-6">            
								  	 <?php echo form_open_multipart('admin/update_product_m/<?php echo $products->id;');?>
									  <div class="form-group">
									    <label for="name">Product name:</label>
									    <input type="text" name="name" class="form-control" value="<?= $products->name;?>" id="name">
									  </div>
									  <div class="form-group">
									    <label for="price">Price:</label>
									    <input type="text" name="price" class="form-control" value="<?=$products->price;?>" id="price">
									  </div>
									  <div class="form-group">
									    <label for="delivery">Delivery fee:</label>
									    <input type="text" name="deliver_fee" class="form-control" value="<?=$products->delivery_fee;?>" id="delivery">
									  </div>
									  <div class="form-group">
									    <label for="sizes">sizes:</label>
									    	<select class="form-control" name="sizes">
									    	<option><?=$products->sizes;?></option>
									    	<option>L</option>
									    	<option>XL</option>
									    	<option>M</option>
									    </select>

									  </div>
								  <button  name="submit" class="btn btn-primary pull-right">Submit</button>
							 </div>
							 <div class="col-md-6">
									  <div class="form-group">
									    <label for="description">Product description:</label>
									    <input type="text" name="description" class="form-control" value="<?=$products->description;?>" id="description">
									  </div>
									  <div class="form-group">
									    <label for="image">Image:</label>
									    <input type="file" class="form-control" name="image" value="<?=$products->image;?>" id="image">
									  </div>
									   <div class="form-group">
									    <label for="category">Category:</label>
									    <select class="form-control" name="category">
									    	<option><?=$products->category;?></option>
									    	<option>Women</option>
									    	<option>native</option>
									    </select>
									  </div>
									  <div class="form-group">
									    <label for="quantity">Quantity:</label>
									    <input type="text" name="quantity" class="form-control" value="<?=$products->quantity;?>" id="quantity">
									  </div>
									  <input type="hidden" name="id" value="<?php echo $products->id?>">
								  <a href="<?=base_url();?>admin/view_product_m" class="btn btn-danger pull-right">Discard</a></button>
								</form>
							 </div>
								</div>
		  					</div>
		  					<?php endforeach;?>
		  				</div>
		  	   		</div>
				</div>
			</div>
		</div>
	</div>
