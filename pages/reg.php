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
        
	var pwd  = document.getElementById("password").value;
	var conpwd = document.getElementById("confirmpassword").value;
    if(pwd == "")
	{
		alert("enter password");
	}
	if(conpwd == "")
	{
		alert("enter conform password");
	}
	 else if(pwd == conpwd){
		alert("Please fill the fields");
                return false;
	}
	
}

</script>
</head>

<body>
   <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!--<div class="navbar-header">-->
<center><h2 class="page">Schools For India StakeHolders Panel</h2></center>
            </div>
            <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
 
                </li>
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
                        <div class="panel-heading">
                           <h1 class="page">User Registration</h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form data-toggle="validator" id="password" action="register.php" method="post" role="form" onsubmit="return Validation()">
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
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"  data-regex="^[^\s]{6,20}$" data-regex-title="Please a enter a password 6 - 20 characters in length"data-bv-excluded="true" required>
                                        </div>
                                         <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password2" id="confirmpassword" placeholder="Confirm Password" data-bv-excluded="true" data-title="Confirmation password required" data-match="password" data-match-title="Your password and confirmation password do not match">
                                        </div>
                                      <!--  <div class="form-group">
                                            <label>Static Control</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Radio Buttons</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select multiple class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>-->
                                <!-- /.col-lg-6 (nested) -->
                               <!-- <div class="col-lg-6">
                                    <h1>Disabled Form States</h1>
                                    <form role="form">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h1>Form Validation States</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h1>Input Groups</h1>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>-->
                                        <!--<div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                   </form> -->
                                   <button type="submit" value="submit" class="btn btn-default" onclick="return vallidateFun();">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
                                    </form>
                                    <script>
                                    $(document).ready(function() {
                                    $('#password').formValidation({
    framework: 'bootstrap',
    fields: {
        password: {
            validators: {
                identical: {
                    field: 'confirmpassword',
                    message: 'The password and its confirm are not the same'
                }
            }
        },
        confirmpassword: {
            validators: {
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
            }
        }
    }
});
                                    });
</script>
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
