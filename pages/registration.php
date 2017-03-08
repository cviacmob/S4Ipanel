
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script type="text/javascript">// <![CDATA[
  function checkForm(form)

  {
      if(form.Fname.value == "") {
      alert("Error: Firstname cannot be blank!");
      form.Fname.focus();
      return false;
    }
    if(form.Lname.value == "") {
      alert("Error: Lastname cannot be blank!");
      form.Lname.focus();
      return false;
    }
    if(form.Gender.value == "") {
      alert("Error: Gender cannot be blank!");
      form.Gender.focus();
      return false;
    }

    if(form.email.value == "") {
      alert("Error: Username cannot be blank!");
      form.email.focus();
      return false;
    }
    re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(form.email.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.email.focus();
      return false;
    }
    if(form.Dob.value == "") {
      alert("Error: Dob cannot be blank!");
      form.Dob.focus();
      return false;
    }
 if(form.Mobile.value == "") {
      alert("Error: Username cannot be blank!");
      form.Mobile.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.password_confirmation.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }
 
   /* alert("You entered a valid password: " + form.password.value);
    return true;*/
  }
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

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 " style="top:-20px;">                    
        <div class="login-panel panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title">User Registration</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
            </div>     
            <div  class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <!-- <input type="email" class="form-control" id="inputEmail" placeholder="Email"  method="post"   >-->
                                           <form data-toggle="validator" id="registerForm" action="ajaxAPI.php" method="post" role="form" onsubmit="return Validation()">
                                        <input type="hidden" id="register" name="register" value="Register"/>
                                         <div class="form-group">
                                            <label>Title</label>
                                            <select class="form-control" id="title1" name="title">
                                                <option>Mr</option>
                                                <option>Mrs</option>
                                                <option>Ms</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                         <input type="text" class="form-control" id="Fname"   name="fname" placeholder="First Name" required>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
<!--                                             <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="Mname"  name="mname" placeholder="Middle Name" required>
                                            
                                        </div>-->
                                             <div class="form-group">
                                            <label>Last Name</label>
                                            <!--<input class="form-control">-->
                                            <input type="text" class="form-control" id="Lname" name="lname" placeholder="Last Name" required>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control" id="Gender" name="gender" select>
                                               <option value="">select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control"id="Dob" name="dob" placeholder="Enter text">
                                        </div>
                                             <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" id="email" name="email"  placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                           
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="tel" maxlength="10" minlength="10" pattern="^(\+[0-9]{1,5})?([1-9][0-9]{9})$"id="Mobile" name="mobile" class="form-control" placeholder="Mobile Number" required>
<!--                                            <input type="number" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                           <div class="help-block">Minimum of 6 characters</div>-->
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control" id="Country" name="country">
                                                <option>India</option>
                                                <option>Australia</option>
                                                <option>America</option>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"  data-regex="^[^\s]{6,20}$" data-regex-title="Please a enter a password 6 - 20 characters in length"data-bv-excluded="true" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" data-bv-excluded="true" data-title="Confirmation password required" data-match="password" data-match-title="Your password and confirmation password do not match">
                                        </div>
                                     
                                   <button type="submit" value="submit" class="btn btn-default" onclick="return checkForm(form);">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
         
            </div>     
		
        </div>  
    </div>
</div>
</div>
<script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#registerForm").submit(function(event) {
   
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
         url = $form.attr( 'action' );
    var formdata=$form.serializeArray();
    var posting = $.post( url, formdata);
    
         // url = "test.php";

      /* Send the data using post with element id name and name2*/
    //  var posting = $.post( url, { email: $('#email').val(), password: $('#password').val(),action:$('#action').val()} );
//alert('ready');
      /* Alerts the results */
      posting.done(function( data ) {
  //        alert('fail');
        if(data["code"]==0){
            
       window.location = "index.html";
    	$('#errorDiv').slideDown('fast', function(){
		$('#errorDiv').html('<div class="alert alert-info">success</div>');
       }).delay(3000).slideUp('fast');
  
          }
          else{
            //  myFunction();
        
							window.location = "registration2.php?err=true";
							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">LoginFailed</div>');
								$("#memberForm").trigger('reset');
								$('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
								$('#loginsubmit').html('&nbsp;Submit').prop('disabled', false);
							}).delay(3000).slideUp('fast');
          }
      });



    });
</script>
</body>
</html>
<?php
      include './footer.php';
      ?>