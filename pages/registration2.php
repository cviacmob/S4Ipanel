
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Schools for India Admin Panel</title>

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
<script src="../pages/validation.js"></script>
<script>
    function vallidateFun(){
     var title = document.getElementById("title1").value;
	if(title == ""){
	alert("Please select title");
	return false;
	}
        
	var Fname=document.getElementById("Fname").value;
	if(Fname =="")
	{
	alert("Enter Fname");
	return false;
	}
        
        var Mname=document.getElementById("Mname").value;
	if(Mname == ""){
	alert("please fill Midle Name");
	return false;
	}
	var Lname=document.getElementById("Lname").value;
	if(Lname ==""){
	alert("please fill Last Name");
	return false;
	}
        
        var Gender=document.getElementById("Gender").value;
	if(Gender == ""){
	alert("please fill Gender");
	return false;
	}
        
	var Dob=document.getElementById("Dob").value;
	if(Dob == ""){
	alert("please fill DOB ");
	return false;
	}
        
	var inputEmail=document.getElementById("inputEmail").value;
	if(inputEmail == ""){
	alert("please fill Email ");
	return false;
	}
	var Mobile=document.getElementById("Mobile").value;
	if(Mobile == ""){
	alert("Please Fill Mobile Number");
	return false;
	}
        
	var Country=document.getElementById("Country").value;
	if(Country == ""){
	alert("Please select country");
	return false;
	}
    var regDOB = /^(\d{1,2})[-\/](\d{1,2})[-\/](\d{4})$/;

    if(regDOB.test(dob) == false)
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='warning'>DOB is only used to verify your age.</span>";
    }
    else
    {
    document.getElementById("statusDOB").innerHTML	= "<span class='valid'>Thanks, you have entered a valid DOB!</span>";	
    }
        
	var pwd  = document.getElementById("password1").value;
	var conpwd = document.getElementById("confirmpassword").value;
   if(pwd != "" && conpwd!="")
	{
        if(pwd.length<8){
            alert("Please enter 8 characters");
        }
		else if (pwd != conpwd) {
			alert("passwords not match");
		}
		else {
			alert("passwords match!!!");
		}
		return;
	}
	else{
		alert("Please fill the fields")
	}
    
	
}

</script>
</head>
<?php
include './header.php';
?>
<body>
   <!--<div id="wrapper">-->

        <!-- Navigation -->
        <!--<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">-->
            <!--<div class="navbar-header">-->
<!--<center><h2 class="page">Schools For India StakeHolders Panel</h2></center>-->
            <!--</div>-->
            <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
 
            </ul>
 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <!--<h1 class="page-header">Forms</h1>-->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="margin-top:5px" >
                       <!-- <div class="panel-heading">
                           <h1 class="page">User Registration</h1>
                        </div>-->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form data-toggle="validator" id="password" action="register.php" method="post" role="form" onsubmit="return Validation()">
									                    <?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-danger text-center"><?php echo "Registration failed!"; ?></div>
                    <?php } ?>
					
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
                                             <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="Mname"  name="mname" placeholder="Middle Name" required>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Last Name</label>
                                            <!--<input class="form-control">-->
                                            <input type="text" class="form-control" id="Lname" name="lname" placeholder="Last Name" required>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Sex</label>
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
                                            <input type="email" class="form-control" id="inputEmail" name="email"  placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                           
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
                                            <input type="password" class="form-control" name="password" id="password1" placeholder="Password"  data-regex="^[^\s]{6,20}$" data-regex-title="Please a enter a password 6 - 20 characters in length"data-bv-excluded="true" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password2" id="confirmpassword" placeholder="Confirm Password" data-bv-excluded="true" data-title="Confirmation password required" data-match="password" data-match-title="Your password and confirmation password do not match">
                                        </div>
                                     
                                   <button type="submit" value="submit" class="btn btn-default" onclick="return vallidateFun();">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
         
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
</html>
    <?php
      include './footer.php';
      ?>