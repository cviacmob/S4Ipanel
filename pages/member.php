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
    

    <!-- /#wrapper -->

    <!-- jQuery -->
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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
</head>

    <script type="text/javascript">
$(document).ready(function(){
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
            }); 
        }else{
            $('#district').html('<option value="">Select district first</option>'); 
        }
    });
});
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
                <a class="navbar-brand" href="#">Schools for India Admin Panel</a>
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
                    <div class="panel panel-default" style="margin-top:5px">

                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-8">




    <form role="form" action="ajaxAPI.php" id="memberForm" method="POST">
                                        <input type="hidden" id="member" name="member" value="Member"/>
                                           <div class="form-group">
                                                 <?php
                          //Include database configuration file
                           include('dbconfig.php');
    
                                 //Get all country data
                               $query = $db->query("SELECT * FROM statelist ORDER BY state_name ASC");
    
                               //Count total number of rows
                           $rowCount = $query->num_rows;
                                      ?>
                                            <label>State</label>
                                            <select class="form-control" name="state" id="state">
                                                <option value="">Select State</option>
                                                <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['id'].'">'.$row['state_name'].'</option>';
            }
        }else{
            echo '<option value="">State not available</option>';
        }
        ?>
                                        </select>
                                        </div>
                                         <div class="form-group">
                                            <label>District</label>
                                            <select name="district" id="district" class="form-control">
                                                <option value="">Select District</option>
                                                </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Membership Plan</label>
                                            <select class="form-control" name="plan" >
                                                <option value="" selected disabled hidden>select</option>
                                                <option value="1">Annual</option>
                                                <option value="2">Halfyearly</option>
                                                <option value="3">Querterly</option>
                                                 <option value="4">Monthly</option>
                                            </select>                                
                                             </div>
                                         <div class="form-group">
                                            <label>Membership Type</label>
                                            <select class="form-control" name="type" >
                                                <option value="" selected disabled hidden>select</option>
                                                 <option>Cluster</option>
                                                <option>Unit</option>
                                            </select>                            
                                        </div>
                             
                                  
                                       <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
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
<script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#memberForm").submit(function(event) {
   
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
            alert('sucess');
             var delay = $(this).attr('data-delay');
                    if (delay != undefined) {
                        delay = parseInt(delay);
                        clearTimeout(timeOut);
                        timeOut = window.setTimeout(function () {
                            alert.slideUp();
                        }, delay);
                    }

          }
          else{
            //  myFunction();
        
							
							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">LoginFailed</div>');
								$("#memberForm").trigger('reset');
								$('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
								$('#loginsubmit').html('&nbsp;Submit').prop('disabled', false);
							}).delay(3000).slideUp('fast');
          }
      });



    });
</script>


</body>
<?php
      include './footer.php';
      ?>