
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Schools for India StakeHolders Panel</title>

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
	var Title=document.getElementById("Title").value;
	if(Title =="")
	{
	alert("Enter Name");
	return false;
	}
	else if(Title.length<3){
	alert("Enter Name");
	return false;
	}
        
    var Subject=document.getElementById("Subject").value;
	if(Subject == ""){
	alert("please fill Subject");
	return false;
	}
	var Message=document.getElementById("Messsage").value;
	if(Message ==""){
	alert("please fill Message");
	return false;
	}
    
	var inputEmail=document.getElementById("inputEmail").value;
	if(inputEmail == ""){
	alert("please fill Email ");
	return false;
	}
        
	var Form=document.getElementById("Form").value;
	if(Form == ""){
	alert("Please select Category");
	return false;
	}
	
}

</script>
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
                <!--<a class="navbar-brand" href="index.html">SB Admin v2.0</a>-->
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">

                <li class="dropdown">
        
                        <li><a href="index.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    <!--</ul>-->
                    <!-- /.dropdown-user -->
                </li>
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
                            <a href="contact.php"><i class="fa fa-phone fa-fw"></i>Contact</a>
                           </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

<div class="container">

    <div id="loginbox" style="relative:auto;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="login-panel panel panel-default" >
            <div class="panel-heading">
                <div class="panel-title">Contact Us</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
            </div>     
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form" action="contactreg.php" name="valid" method="post" onsubmit="return Validation()">
                  <div class="inner-wrap">
                    <label>Name</label>

                        <input type="text" class="form-control" id="Title"name="title" placeholder="Name" required>                                       
                    </div>
                   <!-- </div>-->
                    <div class="inner-wrap">
                  <label>Email Id</label>

                         <input type="email" class="form-control" id="inputEmail"   name="mail" placeholder="Username or Email"  data-error="Bruh, that email address is invalid" required>                                      
                    </div>
                     <div class="inner-wrap">
                           <label>Subject</label>
                            <input type="text" class="form-control" id="Subject"   name="subject" placeholder="Subject" required>                                     
                    </div>  
                     <div class="inner-wrap">
                    <label>Select Category</label>
                      <select class="form-control" id="Form" name="form">
                                                <option>FAQ</option>
                                                <option>Feedback</option>
                                                <option>Enquiry</option>
                                                <option>Volunteer</option>
                                            </select>

                     </div>
                      <div class="inner-wrap">
                           <label>Message</label>
                          <textarea name="messages" class="form-control" id="Message"  placeholder="Message" rows="auto" cols="auto" required>
                       </textarea>
                    </div>

                        <div>
                            <div style="margin-top:20px" class="input-group">
                               <button type="submit" value="submit" style="margin-right:10px;" class="btn btn-success"onclick="return vallidateFun();">Submit </button>
                                        <button type="reset" class="btn btn-success">Reset </button>
                    </div>
                    </div>
                  
                </form>     
               

            </div>                     
        </div>  
    </div>
</div>
</div>
        </div>
    </div>
</div>
    <!-- /#wrapper -->

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
