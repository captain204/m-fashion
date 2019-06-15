<?php $this->load->view('admin/includes/header');?>

	<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  		  		<div class="panel-heading">
							<div class="panel-title">Add Admin</div>
						</div>
		  				<div class="panel-body">
		  					<div class="col-md-12">
		  							  <div class="form-group">
									    <label for="firstname">Firstname</label>
									    <input type="text" name="firstname" class="form-control">
									  </div>
									  <div class="form-group">
									    <label for="lastname">Lastname</label>
								<?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
								<form method="post" action="<?php echo base_url();?>admin/add">
		  						    <input type="text" name="lastname" class="form-control">
									  </div>
									  <div class="form-group">
									    <label for="username">Username:</label>
									    <input type="text" name="username" class="form-control">
									  </div>
									  <div class="form-group">
									    <label for="password">Password:</label>
									    <input type="password" name="password" class="form-control">
									  </div>
									  <div class="form-group">
									    <label for="password">Confirm Password:</label>
									    <input type="password" name="password1" class="form-control">
									  </div>
									  <div class="form-group">
									    <label for="email">Email:</label>
									    <input type="text" name="email" class="form-control">
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