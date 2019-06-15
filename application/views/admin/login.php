<!DOCTYPE html>
<html>
  <head>
    <title>M Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?=base_url()?>assets/admin/css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">M fashion</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
	<?php if($this->session->flashdata('failed')):?>
		<div class="alert alert-danger text-center">
		<?php echo $this->session->flashdata('failed');?>
		</div>
	<?php endif;?>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Login </h6>
			                <?php echo validation_errors('<div class ="alert alert-danger">','</div>');?>
							<form method="post" action="<?php echo base_url();?>admin/login">
		  						<input class="form-control" name="username" type="text" placeholder="Username">
			                	<input class="form-control" name="password" type="password" placeholder="Password">
			                	<div class="action">
			                    	<button class="btn btn-primary signup" name="submit">Login</button>
			                	</div>
			                </form>                
			            </div>
			        </div>

			        <div class="already">
			            <p>Forgot password</p>
			            <a href="signup.html">click here</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url();?>assets/admin/js/bootstrap.min.js"></script>
    <script src="<?=base_url();?>assets/admin/js/custom.js"></script>
  </body>
</html>