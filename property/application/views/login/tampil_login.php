<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/admin/css/style.css" rel="stylesheet">
    <link href="assets/admin/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form action="<?=base_url();?>login/proses_login" class="form-login" method="post">
		        <h2 class="form-login-heading">LOGIN<br><br>APLIKASI PROPERTY
</h2>
				
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="id" placeholder="username" autofocus required="">
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="password" required="">
		            <label class="checkbox">
		                <span class="pull-right">
		                   
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" type="submit" value="MASUK" name="login">
		            <i class="fa fa-lock"></i> MASUK </button>
		            
		           
		
		        </div>
		
		         
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/admin/js/jquery.js"></script>
    <script src="assets/admin/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/admin/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/admin/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
