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

    <title>StakeHolders Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<script>
    function vallidateFun(form){
      if(form.Title.value == "") {
      alert("Error: Name cannot be blank!");
      form.Title.focus();
      return false;
    }
     if(form.inputEmail.value == "") {
      alert("Error: Email cannot be blank!");
      form.inputEmail.focus();
      return false;
    }
    re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(!re.test(form.inputEmail.value)) {
      alert("Error: Email must contain only letters, numbers and underscores!");
      form.inputEmail.focus();
      return false;
    }
  
    if(form.Subject.value == "") {
      alert("Error: Subject cannot be blank!");
      form.Subject.focus();
      return false;
    }
      if(form.Message.value == "") {
      alert("Error: Message cannot be blank!");
      form.Message.focus();
      return false;
    }
    

}

</script>

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
<!--                          <li>
                            <a href="#"><i class="fa fa-user-plus fa-fw"></i>Role</a>
                           </li>-->
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
                    <div class="panel panel-default" style="margin-top:5px">
                        <!--<div class="panel-heading">
                           <h1 class="page">Membership Information<h1>
                        </div>-->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form id="contactForm" class="form-vertical" role="form" action="ajaxAPI.php" name="valid" method="post" > 
      
            <input type="hidden" value="contact" id="contactus" name="contactus">
                <div id="errorDiv"></div>
            
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
                               <button type="submit" value="submit" id="loginsubmit"style="margin-right:10px;" class="btn btn-success" onclick="return vallidateFun(form);">Submit </button>
                                        <button type="reset" class="btn btn-success">Reset </button>
                                        <!--<div id="snackbar">Some text some message..</div>-->
                    </div>
                    </div>
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


 <script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#contactForm").submit(function(event) {
   
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
         url = $form.attr( 'action' );
    var formdata=$form.serializeArray();
    var send = $.post( url, formdata);
     
   //alert(url+formdata);
         // url = "test.php";

      /* Send the data using post with element id name and name2*/
    //  var posting = $.post( url, { email: $('#email').val(), password: $('#password').val(),action:$('#action').val()} );

      /* Alerts the results */

      send.done(function( data ) {
        if(data["code"]==0){
        $("#contactForm")[0].reset();
        $("#snackbarid").snackbar("show");
       //  $("#errorDiv").modal("show");
    
        // window.location = "contact.php";
        // console.log( $( this ).text() );

     		$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">success</div>');
								$("#contactForm").trigger('reset');
								$('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
								$('#loginsubmit').html('&nbsp;Submit').prop('disabled', false);
							}).delay(3000).slideUp('fast');
							
							
  
          }
          else{
            //  myFunction();
        
							
							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">Failed</div>');
								$("#contactForm").trigger('reset');
								$('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
								$('#loginsubmit').html('&nbsp;Submit').prop('disabled', false);
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