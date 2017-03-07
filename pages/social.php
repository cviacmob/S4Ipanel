</html>
<!DOCTYPE html>
<html lang="en">

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

<?php
	session_start();
	
	$ID=$_SESSION['ID'];
if(empty($ID)){
    header("Location:index.html");
}
else{
        require 'mysql.php';
        $db = connect_db();
        $sql = "SELECT * FROM membership WHERE ID='$ID'";
        $exe = $db->query($sql);
      //$result = mysql_query ($sql) or die (mysql_error ());*/
           while ($row=$exe->fetch_all(MYSQLI_ASSOC)){
            $facebook= array_column($row,'Facebook');
            $FaceBook= array_shift($facebook);
            $twitter= array_column($row,'Twitter');
            $Twitter= array_shift($twitter);
            $flickr= array_column($row,'Flickr');
            $Flickr= array_shift($flickr);
            $linkedin= array_column($row,'Linkedin');
            $LinkedIn= array_shift($linkedin);
            $blog= array_column($row,'Blog');
            $Blog= array_shift($blog);
            
?>
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
                                     <form role="form" id="socialForm" method="POST" action="ajaxAPI.php">
                                        <input type="hidden" id="social" name="social" value="Social"/>
                                        <div class="form-group">
                                            <label>Facebook</label>
                                            <input class="form-control"name="fb" value="<?php echo $FaceBook;?>"placeholder="Enter text">
                                        </div>
                                         <div class="form-group">
                                            <label>Twitter</label>
                                            <input class="form-control" name="twit" value="<?php echo $Twitter;?>" placeholder="Enter text">
                                        </div>
                                             <div class="form-group">
                                            <label>Blog</label>
                                            <input class="form-control" name="bg" value="<?php echo $Blog;?>" placeholder="Enter text">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Flickr</label>
                                            <input class="form-control"name="flick" value="<?php echo $Flickr;?>"  placeholder="Enter text">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>LinkedIn</label>
                                            <input class="form-control"name="link" value="<?php echo $LinkedIn;?>"  placeholder="Enter text">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                   <button type="submit" class="btn btn-default">Update</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                                                       <?php
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

  <script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#socialForm").submit(function(event) {
   
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

      /* Alerts the results */
 
      posting.done(function( data ) {
  
        if(data["code"]==0){
            

          }
          else{
            //  myFunction();
        
							
							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">LoginFailed</div>');
								$("#socialForm").trigger('reset');
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