<?php $this->load->view('admin/includes/header');?>
<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Welcone</div>
						</div>
		  				<div class="panel-body">            
								  <div class="row">
						            <div class="col-lg-12 grid-margin">
						              <div class="card">
						                <div class="card-body">
						                  <h2 class="card-title">Product list</h2>
						                  <?php foreach ($product as $products):?>
						                  <div class="table-responsive">
						                    <table class="table table-striped">
						                      <thead>
						                        <tr>              
                                    				<th>Image</th>
                                    				<th>Product Title</th>
                                    				<th>Status</th>
                                    				<th>Purchases</th>
                                    				<th>Description</th>
                                    				<th>Stock</th>
                                    				<th>Price</th>
                                    				<th>Setting</th>
						                        </tr>
						                      </thead>
						                      <tbody>
						                        <tr>
						                          <td><img src="<?=base_url();?>assets/img/men/<?=$products->image;?>" class="thumbnail" height="100" width="100"></a></td>
						                          <td><?=$products->name?></td>
						                          <td><button class="btn btn-primary">Active</button></td>
						                          <td></td>
						                          <td><?=$products->description?></td>
						                          <td><button class="btn btn-danger">In Stock</button></td>
						                          <td><?=$products->price?></td>
						                          <td><a href="update_product_m/<?=$products->id;?>"><span class="glyphicon glyphicon-edit"></span></a> <a href="delete_m/<?=$products->id;?>"><span class="glyphicon glyphicon-trash"></span></a></td>
						                        </tr>
						                      </tbody>
						                    </table>
						                  </div>
						              	<?php endforeach;?>
						                </div>
						              </div>
								</div>
		  					</div>
		  				</div>
		  	   		</div>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('admin/includes/footer');?>
