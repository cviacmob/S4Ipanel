<?php
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--<title>Schools for India Admin Panel</title>-->

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<!--<div class="login-panel panel panel-default">-->

<body>
<div id="wrapper">
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Schools for India Admin Panel</a>
            </div>
			</nav>
<div class="container">

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="login-panel panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
            </div>     
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <!-- <input type="email" class="form-control" id="inputEmail" placeholder="Email"  method="post"   >-->
                <form id="loginform" class="form-horizontal" role="form" action="login.php" method="post">
 <?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-danger text-center"><?php echo "Successfully Registered"; ?></div>
                    <?php } ?>
				
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input  type="email" class="form-control" name="email" value="" placeholder="username or email" data-error="Bruh, that email address is invalid" required>                                        
                    </div>
                            
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                       <input  type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
                                
                    <div class="input-group">
                       
                    <br>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <!--<a id="btn-login" type="submit" name="submit" class="btn btn-success">Submit</a>-->
                            <button type="submit" class="btn btn-success">Submit </button>
                            <a id="btn-fblogin" type="reset" href="#" class="btn btn-success">Cancel</a>
                            <a href="forgotpassword.php" class="btn btn-link">Forgot password</a>
                            <a href="registration.php" class="btn btn-link">New User</a>

                        </div>
                    </div> 
                    
                    <!-- <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account! 
                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                    Sign Up Here
                                </a>
                                
                            </div>
							
                        </div>
                    </div>   --> 
						<div class='modal-body-right' style="margin-auto:auto;">
	        			<div class="modal-social-icons">
	        				<a href='https://graph.facebook.com/?id=' class="btn btn-primary"> <i style="margin-left:2px;margin-right:2px;margin-top:2px;margin-bottom:2px;" class="fa fa-facebook"></i>Facebook </a>
	        				<a href='#' class="btn btn-primary"> <i style="margin-left:2px;margin-right:2px;margin-top:2px;margin-bottom:2px;" class="fa fa-twitter"></i>Twitter </a>
	        				<a href='#' class="btn btn-primary"> <i style="margin-left:2px;margin-right:2px;margin-top:2px;margin-bottom:2px;"  class="fa fa-google-plus"></i>Google </a>
	        				<a href='#' class="btn btn-primary"> <i  style="margin-left:2px;margin-right:2px;margin-top:2px;margin-bottom:2px;" class="fa fa-linkedin"></i> Linkedin </a>
	        			</div> 																												
        		<div class="clearfix"></div>
        		
      		</div>
 
                    

                </form>     
            </div>     
		
        </div>  
    </div>
</div>
</div>
</body>
<?php
      include './footer.php';
      ?>