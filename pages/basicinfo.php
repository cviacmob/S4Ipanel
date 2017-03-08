<?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<script type="text/javacsript">
function val(){
document.getElementById("myForm").reset();
}
</script>

<body>
    <?php
require 'mysql.php';

if($_SERVER['REQUEST_METHOD']=='GET')
{
	
	$db = connect_db();
	
	session_start();
	
	$ID=$_SESSION['ID'];
	
	if(empty($ID)){
		
		header("Location:index.html");
		
	}
	
	else{
		
		$sql = "SELECT * FROM membership WHERE ID='$ID'";
		
		$exe = $db->query($sql);
		
		
		/*$result = mysql_query ($sql) or die (mysql_error ());*/
		
		while ($row=$exe->fetch_all(MYSQLI_ASSOC)){
			
			// 			$fname=$row['FirstName'];
			
			$Title= array_column($row,'Title');
			
			$title             = array_shift($Title);
			
			$Fname= array_column($row,'FirstName');
			
			$fname             = array_shift($Fname);
			
			$Mname=array_column($row,'MiddleName');
			
			$mname             = array_shift($Mname);
			
			$Lname=array_column($row,'LastName');
			
			$lname             = array_shift($Lname);
			
			$Gender=array_column($row,'Gender');
			
			$gender             = array_shift($Gender);
			
			$DOB=array_column($row,'DOB');
			
			$dob             = array_shift($DOB);
			
			$emailid=array_column($row,'EmailID1');
			
			$email             = array_shift($emailid);
			
			$mob=array_column($row,'Mobile1');
			
			$mobile             = array_shift($mob);
			
			$count=array_column($row,'Country');
			
			$country            = array_shift($count);
			
			$db=null;
			
			?>


   <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Schools for India Admin Panel</a>
            </div>
            

    <ul class="nav navbar-top-links navbar-right">
            
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

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
                            <a href="social.php"><i class="fa fa-group fa-fw"></i>Social Media Handle</a>
                       
                        </li>
                        <li>
                            <a><i class="fa fa-sitemap fa-fw"></i>Apply As</a>
                           <ul class="nav nav-second-level">
                                 <li>
                                    <a href="member.php">Member</a>
                                </li>
                                <li>
                                    <a href="volunteer.php">Volunteer</a>
                                </li>
                                 <li>
                                    <a href="sponsor.php">Sponsor</a>
                                </li>
                                <li>
                                    <a href="partner.php">Partner</a>
                                </li>
                                <li>
                                    <a href="mentor.php">Mentor</a>
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
                  
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form data-toggle="validator" id="myForm" name="myForm" action="ajaxAPI.php" role="form" method="post">
                         <div id="errorDiv"></div>
    

                                         <div class="form-group">
                                             <input type="hidden" id="basic" name="basic" value="basicinfo"/>
                                            <label>Title</label>
                                           <select class="form-control" name="Title" vale="<?php echo $title;
?>">
                                     
                                                <option value='Mr' ". ($title == 'Mr'? 'selected ': '') .">Mr</option>
                                                <option value='Mrs' ". ($title == 'Mrs'? 'selected ': '') .">Mrs</option>
                                                <option  value='Ms' ". ($title == 'Ms'? 'selected ': '') .">Ms</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                         <input type="text" class="form-control" id="inputFName" name="Fname" placeholder="First Name"  value="<?php echo $fname;
?>">
                                        </div>
                                             <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" id="inputLName" placeholder="Last Name"name="Lname" value="<?php echo $lname;
?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Gender</label>
                                           <select class="form-control" id="gender" name="Gender" value="<?php echo $gender;
?>">
                                
                                                <option value='Male' ". ($gender == 'Male'? 'selected ': '') .">Male</option>
                                                <option value='Female' ". ($gender == 'Female'? 'selected ': '') .">Female</option>
                                                <option  value='Others' ". ($gender == 'Others'? 'selected ': '') .">Others</option>
                                           </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="Dob"  id="Dob" value="<?php echo $dob ;
?>"  placeholder="Enter text">
                                        </div>
                                             <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email" value="<?php echo $email;
?>" data-error="Bruh, that email address is invalid" required>

                                        </div>
                                             <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" maxlength="10" minlength="10"name="Mobile" value="<?php echo $mobile;
?>" class="form-control" required>

                                        </div>
                                     <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control" name="Country" value="<?php echo $country;
?>" placeholder="Enter text">
                                        </div>
                                    
                                   <button type="submit" class="btn btn-default" name="submit" id="submit">Submit </button>
                                        <button type="reset" onclick="val()" class="btn btn-default">Reset </button>
                                    </form>
                                    <?php
}

}

}

?>
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
  
<script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#myForm").submit(function(event) {
   
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
         url = $form.attr( 'action' );
    var formdata=$form.serializeArray();
    var posting = $.post( url, formdata);
    $("body").scrollTop(0);
         // url = "test.php";

      /* Send the data using post with element id name and name2*/
    //  var posting = $.post( url, { email: $('#email').val(), password: $('#password').val(),action:$('#action').val()} );

      /* Alerts the results */
      posting.done(function( data ) {
  
        if(data["code"]==0){


    							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">success</div>');

							}).delay(3000).slideUp('fast');
        }
          
          else{
            //  myFunction();
        
							
							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">LoginFailed</div>');
							}).delay(3000).slideUp('fast');
							
									   
				
 
  /*   var options =  {
    content: "Some text", // text of the snackbar
    style: "toast", // add a custom class to your snackbar
    timeout: 1000 // time in milliseconds after the snackbar autohides, 0 is disabled
       }*/

      // $.snackbar(options);
             // alert(data["desc"]);
          }
      });

        // alert($form.attr( 'action' ));
        // $.ajax({
        //     type: "POST",
        //     url: $form.attr( 'action' ),
        //     data: { name: $('#name').val(), name2: $('#name2').val() },
        //     dataType: "json",
        //     success: function(data, textStatus) {
        //         alert(data);
        //     }
        // });

    });
</script>


</body>
</html>
<?php
include './footer.php';

?>