<?php $this->load->view('admin/includes/header');?>

 <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				
		  				<div class="panel-heading">
							<div class="panel-title">Edit product</div>
						</div>
						
		  				<div class="panel-body">
		  				<?php foreach ($product as $products):?>				
		  						<div class="col-md-6">
		  							<?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>  
		  							<?php echo form_open_multipart('admin/update_product_m/<?=$products->id;');?>     
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
									    <input type="text" name="delivery_fee" class="form-control" value="<?=$products->delivery_fee;?>" id="delivery">
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
									 <a href="<?=base_url();?>admin/view_product_m" class="btn btn-danger pul
									 l-right">Discard</a></button>								 
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
								     <button class="btn btn-primary pull-right" name="submit">Submit</button>
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
