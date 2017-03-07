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
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
        <script src="https://code.jquery.com/jquery-1.12.4.js">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
        </script>

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/bootstrapValidator.min.css" rel="text/css">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/validation.js"></script>
  <link rel="stylesheet" type="text/css" href="../dist/css/jquery.sharepage.css">
  <style type="text/css">
    .share-page {
      width: 200px;
      margin: 100px auto 0;
    }
  </style>
  <script src="js/jquery.min.js"></script>
  <script src="../dist/js/jquery.sharepage.js"></script>
  <script>
    $(document).ready(function(){
      $("#share-buttons").sharepage({
        networks: ["linkedin", "facebook", "twitter", "googleplus", "vk", "unknown"],
        url: "http://google.com",
        title: "SharePage example title",
        source: "SharePage example page",
        width: 650,
        height: 600,
        design: "buttons"
      });
      $("#destroy").click(function(){
        $("#share-buttons").sharepage("destroy");
      });
    });
  </script>
  <style type="text/css">

  </style>
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
      <!--               <a class="btn btn-block btn-social btn-twitter">
    <span class="fa fa-twitter"></span> Sign in with Twitter
  </a>-->
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
                                    <form id="registration-form" data-toggle="validator" action="register.php" method="post" role="form">
                                         <div class="form-group">
                                            <label for="title">Title</label>
                                            <select class="form-control" id=" title" name="title">
                                                <option value="">select</option>
                                                <option value="1">Mr</option>
                                                <option value="2">Mrs</option>
                                                <option value="3">Ms</option>
                                            </select>
                                               <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputFname">First Name</label>
                                         <input type="text" class="form-control" id="inputFname"   name="fname" placeholder="First Name" required>
                                            <div class="help-block with-errors"></div>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label for="inputMname">Middle Name</label>
                                            <input type="text" class="form-control" id="inputMname"  name="mname" placeholder="Middle Name" required>
                                               <div class="help-block with-errors"></div>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label for="inputLname">Last Name</label>
                                            <!--<input class="form-control">-->
                                            <input type="text" class="form-control" id="inputLname" data-minlength="1" name="lname" placeholder="Last Name" required>
                                               <div class="help-block with-errors"></div>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label for="inputGender">Sex</label>
                                            <select class="form-control" id="inputGender" name="gender" select>
                                               <option value="">select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>
                                            </select>
                                               <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputDate">Date of Birth</label>
                                            <input type="date" class="form-control"id="inputDate" pattern="dd/mm/yyyy" name="dob" placeholder="Enter text">
                                               <div class="help-block with-errors"></div>
                                        </div>
                                             <div class="form-group">
                                            <label for="inputEmail">Email ID</label>
                                            <input type="email" class="form-control" id="inputEmail" name="email"  placeholder="Email" data-error="Bruh, that email address is invalid" required>
                                               <div class="help-block with-errors"></div>
                                           
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label for="inputMobile">Mobile Number</label>
                                            <input type="tel" type="number" maxlength="10" data-minlength="10" pattern="^(\+[0-9]{1,5})?([1-9][0-9]{9})$"id="inputMobile" name="mobile" class="form-control" placeholder="Mobile Number" required>
                                               <div class="help-block with-errors"></div>
<!--                                            <input type="number" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                           <div class="help-block">Minimum of 6 characters</div>-->
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label for="inputCountry">Country</label>
                                            <select class="form-control" id="inputCountry" name="country">
                                                <option value="">Select</option>
                                                <option value="1">India</option>
                                                <option value="2">Australia</option>
                                                <option value="3">America</option>
                                            </select>
                                               <div class="help-block with-errors"></div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputPassword">Password</label>
                                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password"  data-regex="^[^\s]{6,20}$" data-regex-title="Please a enter a password 6 - 20 characters in length"data-bv-excluded="true" required>
                                               <div class="help-block with-errors"></div>
                                        </div>
                                         <div class="form-group">
                                            <label for="inputConfirmpassword">Confirm Password</label>
                                            <input type="password" class="form-control" name="password2" id="inputConfirmpassword" placeholder="Confirm Password" data-bv-excluded="true" data-title="Confirmation password required" data-regex="^[^\s]{6,20}$" data-match="#inputPassword" data-match-title="Your password and confirmation password do not match">
                                               <div class="help-block with-errors"></div>
                                        </div>
                                  
                                   <button type="submit" value="submit" class="btn btn-success">Submit </button>
                                        <button type="reset"  class="btn btn-success">Reset </button>
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
    <script src="../pages/js/vali.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src="../dist/js/bootstrapValidator.min.js" type="text/javascript"></script>

</body>


</html>
