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
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
		<a class="navbar-brand" href="#">Schools for India Admin Panel</a>
        <!--<a class="navbar-brand" href="index.html">SB Admin v2.0</a>-->
      </div>
      <!-- /.navbar-header -->
      <ul class="nav navbar-top-links navbar-right">
        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
        <!-- </ul>-->
        <!-- /.dropdown-user -->
        <!-- </li>-->
        <!-- /.dropdown -->
      </ul>
      <!-- /.navbar-top-links -->
      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
            </li>
            <li>
              <a href="basicinfo.php"><i class="fa fa-info fa-fw" ></i>Basic Information</a>
            </li>
            <li>
              <a href="resident.php"><i class="fa fa-home fa-fw"></i>Residential Address</a>
            </li>
            <li>
              <a href="office.php"><i class="fa fa-building fa-fw"></i>Office Address</a>
            </li>
            <li>
              <a href="social.html"><i class="fa fa-group fa-fw"></i>Social Media Handle</a>
            </li>
            <li>
              <a href="volunteer.html"><i class="fa fa-sitemap fa-fw"></i>Apply As</a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="Member.php">Member</a>
                </li>
                <li>
                  <a href="volunteer.html">Volunteer</a>
                </li>
                <li>
                  <a href="sponsor.html">Sponsor</a>
                </li>
                <li>
                  <a href="partner.html">Partner</a>
                </li>
                <li>
                  <a href="mentor.html">Mentor</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="membershipinfo.php"><i class="fa fa-info-circle fa-fw"></i>Membership Information</a>
            </li>
            <li>
              <a href="terms.php"><i class="fa fa-list fa-fw"></i>Membership Terms and Condition</a>
            </li>
            <li>
              <a href="feestructure.php"><i class="fa fa-sitemap fa-fw"></i>Fees Structure</a>
            </li>
            <li>
              <a href="contact.html"><i class="fa fa-phone fa-fw"></i>Contact</a>
            </li>
          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>
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
                    
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="margin-top:5px" >
                       
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-12">
							<!--<form>-->
							  <form id="registrationForm" class="form-vertical"action="memberpdfshow.php" >
      <div class="form-group">
        <!--      <right> <h2> <label class="col-xs-3 control-label"></label></h2></right>
          <right> <div class="col-xs-9">
               <div style="border: 3px solid #e5e5e5; height: 200px;width: 700px; overflow: auto; padding: 20px;">-->
        <p>Schools for India is a non profitable charitable Organization,  involved in creating the best in class schools across India <br>
          , with the aim of providing education for the people of rural India.
          6000 schools across the country have been planned. Each of the schools will have the capacity to teach 945 students, <br>
          including up to 15 special children from primary to secondary school.
          Schools for India is embarking on a magnificent infrastructure building plan with the aim of providing the best schools for rural India, <br>with facilities on par with or superior to that of city schools for students for rural India. 
          The school buildings will be constructed within 12 weeks from the date of commencement using latest international building technologies
        </p>
        <center>
          <div style="margin-top:20px" class="input-group">
            <div class="form-group">
              <div class="col-xs-6 col-xs-offset-3">
                <div class="form-inline">
                  <center>
                    <label class="form wrap-content">
                    <input type="checkbox" name="checkbox" class="form-inline"  value="check" id="agree" > 
                    I have read and agree to the Terms and Conditions   </label>
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            <div style="margin-top:20px" class="input-group">
              <button type="submit" value="submit" style="margin-right:30px;" class="btn btn-success">Agree </button>
              <button type="reset" class="btn btn-success">Cancel </button>
            </div>
          
        
    </form>
						
        </div>
                            
                            </div>
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
    
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
  </body>
</html>
<?php
      include './footer.php';
      ?>