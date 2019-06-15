<?php $this->load->view('admin/includes/header');?>
	<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  		  		<div class="panel-heading">
							<div class="panel-title">Add product</div>
						</div>
		  				<div class="panel-body">
		  					<div class="col-md-12">
		  						<?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
		  						 <?php echo form_open_multipart('admin/add_product_m');?>        
									  <div class="form-group">
									    <label for="name">Name</label>
									    <input type="text" name="name" class="form-control"  id="name">
									  </div>
									  <div class="form-group">
									    <label for="name">Image</label>
									    <input type="file" name="image" class="form-control"  id="image">
									  </div>
									  <div class="form-group">
									    <label for="price">Price</label>
									    <input type="text" name="price" class="form-control"  id="price">
									  </div>
									  <div class="form-group">
									    <label for="sizes">Category</label>
									    	<select class="form-control" name="category">
									    	<option>English</option>
									    	<option>Native</option>
									    	<option>Senegalese</option>
									    	</select>
									  </div>
									  <div class="form-group">
									    <label for="description">Description</label>
									    <textarea name="description" col="20" row="10" class="form-control"  id="description">
									    	
									    </textarea>
									  </div>
									  <div class="form-group">
									    <label for="delivery">Delivery fee:</label>
									    <input type="text" name="delivery_fee" class="form-control"  id="delivery">
									  </div>
									  <div class="form-group">
									    <label for="sizes">Sizes:</label>
									    	<select class="form-control" name="sizes">
									    	<option>L</option>
									    	<option>XL</option>
									    	<option>M</option>
									    	</select>
									  </div>
									  <div class="form-group">
									    <label for="delivery">Quantity:</label>
									    <input type="text" name="quantity" class="form-control"  id="quantity">
									  </div>
								  <button class="btn btn-primary pull-right" name="submit">Submit</button>
							</form>
		  				</div>
		  	   		</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin/includes/footer');?>