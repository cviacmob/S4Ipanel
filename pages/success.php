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

</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#btncheck').click(function() {
                if ($('#chkterms').is(':checked')) {
                    alert('you agreed conditions')
                }
                else {
                    alert('please check terms & conditions')
                }
            })
        })
    </script>

<body>


   <div id="wrapper">

        <!-- Navigation -->
     <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom:0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.html">SB Admin v2.0</a>-->
            </div>
            <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
     
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
           
                            <!-- /input-group -->
                        </li>

                         <li>
                            <a href="basicinfo.php"><i class="fa fa-info fa-fw" ></i>Basic Information</a>
        
                           <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="resident.php"><i class="fa fa-home fa-fw"></i>Residential Address</a>
                        </li>
                        <li>
                            <a href="office.php"><i class="fa fa-building fa-fw"></i>Office Address</a>
                        </li>
                        <li>
                            <a href="social.html"><i class="fa fa-group fa-fw"></i>Social Media Handle</a>
                                                      <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="volunteer.html"><i class="fa fa-sitemap fa-fw"></i>Apply As</a>
                           <ul class="nav nav-second-level">
                                 <li>
                                    <a href="member.php">Member</a>
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
                                
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="membershipinfo.php"><i class="fa fa-info-circle fa-fw"></i>Membership Information</a>

                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="terms.php"><i class="fa fa-list fa-fw"></i>Membership Terms and Condition</a>
                           </li>
                            <li>
                            <a href="feestructure.php"><i class="fa fa-sitemap fa-fw"></i>Fees Structure</a>
                           </li>
                          <li>
                            <a href="contact.php"><i class="fa fa-phone fa-fw"></i>Contact</a>
                           </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
            <!--<div class="navbar-header">-->

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
                    
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="margin-top:5px" >
                       
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-12">
							<!--<form>-->
							
						
<!--<form action="applyupdate.php" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
<div class="form-inline">                                
<label><input type="checkbox" name="checkbox" value="check" id="agree" />
 I have read and agree to the Terms and Conditions and Privacy Policy</label>-->

    <form id="form1" runat="server" action="applyupdate.php">
    <div<div class="form-inline">   
        <!--Check Status:--><?php if (isset($_GET['err'])) { ?>
                    <div class="alert alert-danger text-center"><?php echo "Successfully Updated"; ?></div>
                    <?php } ?>
    </div>

							
							
							        
            
            <!--</div>-->
        </div>
    
    
   <!--  <div class="form-group">
                <div style="margin-top:20px" class="input-group">
                  <button  type="submit"  style="margin-right:120px" value="submit"  name ="submit" class="btn btn-success">Agree </button>
                    </div>
                    </div>-->
							</form>
                            
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
<?php
      include './footer.php';
      ?> 
</html>
