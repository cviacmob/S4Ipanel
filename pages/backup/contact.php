<?php
session_start();
$ID=$_SESSION['ID'];
if(empty($ID)){
header("Location:index.html");
}
?>

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
    else if(Subject.length<3){
	alert("Enter Subject");
	return false;
	}
	var Message=document.getElementById("Messsage").value;
	if(Message ==""){
	alert("please fill Message");
	return false;
	}
    else if(Message.length<25){
	alert("Enter the Minimum 25 character");
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


<body>


   <div id="wrapper">

        <!-- Navigation -->
     <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
     <div class="container-fluid">
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
                            <a href="social.php"><i class="fa fa-group fa-fw"></i>Social Media Handle</a>
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
            <div id="snackbar">Some text some message..</div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="margin-top:5px" >
                       
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-12">      
                                    
            <form id="loginform" class="form-vertical" role="form" action="contactreg.php" name="valid" method="post" > 
                 <div class="form-group" style="margin-top:5px;">
                  <label>Name</label>
                   <input type="text" class="form-control" id="Title"name="title" placeholder="Name" required>                                       
                    </div>
                   <!-- </div>-->
                    <div class="form-group" style="margin-top:5px;">
                  <label>Email Id</label>
                  <!--  <div style="margin-bottom: 25px" class="input-group">-->
   <!--                     <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                         <input type="text" class="form-control" id="inputEmail"   name="mail" placeholder="Username or Email" required>                                      
                    </div>
                     <div class="form-group" style="margin-top:5px;">
                           <label>Subject</label>
                               <!-- <div style="margin-bottom: 25px" class="input-group">-->
<!--                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
-->                         <input type="text" class="form-control" id="Subject"   name="subject" placeholder="Subject" required>                                     
                    </div>  
                     <div class="form-group" style="margin-top:5px;">
                    <label>Select Category</label>
                      <select class="form-control" name="form">
                                                <option>FAQ</option>
                                                <option>Feedback</option>
                                                <option>Enquiry</option>
                                                <option>Volunteer</option>
                                            </select>

                     </div>
                      <div class="form-group" style="margin-top:5px;">
                           <label>Message</label>
                   <!-- <div style="margin-bottom: 25px" class="input-group">-->
<!--                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
-->                       <textarea name="messages" class="form-control" id="Message" placeholder="Message" rows="auto" cols="auto" required>
                       </textarea>
                    </div>
                    <!--<div class="input-group">
                       
                    <br>
                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                            <a id="btn-login" type="submit"  class="btn btn-success">Submit</a>
                            <a id="btn-login"  href="index.html" class="btn btn-success">Cancel</a>

                        </div>-->
                        <div>
                            <div style="margin-top:20px" class="input-group">
                               <button type="submit" value="submit" style="margin-right:10px;" class="btn btn-success"  onclick="myFunction()" onclick="return vallidateFun();">Submit </button>
                                        <button type="reset" class="btn btn-success">Reset </button>
                    </div>
                    </div>
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
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script>
    function myFunction() {
    // Get the snackbar DIV
    var x = document.getElementById("snackbar")

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
    </script>

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




 