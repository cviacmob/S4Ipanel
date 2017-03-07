<!DOCTYPE html>
<html lang="en">

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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

 <script src="js/forgotpassword.js"></script>
</head>
<script type="text/javascript">// <![CDATA[
  function checkForm(form)
  {
    if(form.id.value == "") {
      alert("Error: Username cannot be blank!");
      form.email.focus();
      return false;
    }
    re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(form.id.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.id.focus();
      return false;
    }
/* 
    if(form.password.value != "" && form.password.value == form.password_confirmation.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }*/
      /*if(form.password.value == form.email.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }*/
    /*} else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }*/
 
  }
</script>
</script>
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
            <div id="passwordreset" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">Reset Password</div>
                    </div>                     
                    <div class="panel-body">
                        <form id="signupform" class="form-horizontal" action="reset.php" method="POST" role="form">
                            <div class="form-group">
                                <label for="email" class=" control-label col-sm-3">email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="id" name="email" placeholder="Please input your email used to register with us">
                                </div>
                            </div>
                         <!--   <div class="form-group">
                                <label for="email" class=" control-label col-sm-3">New password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="create your new password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class=" control-label col-sm-3">Confirm password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="<password_confirmation></password_confirmatio>" name="password_confirmation" placeholder="confirm your new password">
                                </div>
                            </div>-->
                            <div class="form-group">
                                <!-- Button -->                                 
                                <div class="  col-sm-offset-3 col-sm-9">
                                    <button id="btn-signup" type="submit" value="submit" class="btn btn-success"onclick="return checkForm(form);">Submit</button>
                                </div>
                            </div>                             
                        </form>

                    </div>
                </div>
            </div>             
        </div>
		</div>
		</body>
		</html>