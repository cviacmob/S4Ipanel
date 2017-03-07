 <?php
        require 'mysql.php';
        $db = connect_db();
        session_start();
        $ID=$_SESSION['ID'];
        $sql = "SELECT * FROM membership WHERE ID='$ID'";
        $exe = $db->query($sql);
      //$result = mysql_query ($sql) or die (mysql_error ());*/
           while ($row=$exe->fetch_all(MYSQLI_ASSOC)){
         //   $fname=$row['FirstName'];
            $houseno= array_column($row,'HouseNo');
            $HouseNo             = array_shift($houseno);
            $floor= array_column($row,'Floor');
            $Floor             = array_shift($floor);
            $bname=array_column($row,'Apartment');
            $Bname             = array_shift($bname);
            $sname=array_column($row,'Streetname');
            $Sname             = array_shift($sname);
            $village=array_column($row,'Town');
            $Village             = array_shift($village);
            $state=array_column($row,'State');
            $State             = array_shift($state);
            $pincode=array_column($row,'PIN');
            $PINcode             = array_shift($pincode);
            $count=array_column($row,'Country');
            $country            = array_shift($count);
            $mob=array_column($row,'Telephone');
            $telephone            = array_shift($mob);
            $fax=array_column($row,'Fax');
            $FAX            = array_shift($fax);
            $landmark=array_column($row,'Landmark');
            $Landmark            = array_shift($landmark);
           ?>
</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Schools for India Admin Panel</title>
    <!--<title>SB Admin 2 - Bootstrap Admin Theme</title>-->

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            
        }
    });
    
    $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
});
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

                        </li>
<!--                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                        </li>-->
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
                           <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>-->
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
                     <!--   <div class="panel-heading">
                           <h1 class="page">Resident Address</h1>
                        </div>-->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="POST" id="residentForm" action="ajaxAPI.php">
                                        <input type="hidden" id="rdent" value="resident" name="rdent"/>
                                        <div class="form-group">
                                            <label>House Number</label>
                                            <input class="form-control"name="houseno" value="<?php echo $HouseNo; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Floor</label>
                                            <input class="form-control" name="floor" value="<?php echo $Floor; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Building Name</label>
                                            <input class="form-control" name="bname" value="<?php echo $Bname; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Street Name</label>
                                            <input class="form-control" name="sname" value="<?php echo $Sname; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                      <div class="form-group">
                                            <label>Village</label>
                                            <input  class="form-control" name="village" value="<?php echo $Village; ?>" placeholder="Enter text">
                                        </div>
                                       

                                           <div class="form-group">
                                                 <?php
                          //Include database configuration file
                           include('dbConfig.php');
    
                                 //Get all country data
                               $query = $db->query("SELECT * FROM countrylist ORDER BY CountryName ASC");
    
                               //Count total number of rows
                           $rowCount = $query->num_rows;
                                      ?>
                                            <label>Country</label>
                                            <select class="form-control" name="country" id="country">
                                                <option value="">Select Country</option>
                                                <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['CountryID'].'">'.$row['CountryName'].'</option>';
            }
        }else{
            echo '<option value="">Country not available</option>';
        }
        ?>
                                        </select>
                                        </div>
                                         <div class="form-group">
                                            <label>State</label>
                                            <select name="state" id="state" class="form-control">
                                                <option value="">Select State</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Pin Code</label>
                                            <input class="form-control" name="pincode" value="<?php echo $PINcode; ?>" placeholder="Enter text">
                                        </div>
                                    
                                         <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control" name="tphone" value="<?php echo $telephone; ?>" placeholder="Enter text">
                                        </div>
                                             <div class="form-group">
                                            <label>Fax</label>
                                            <input class="form-control" name="fax" value="<?php echo $FAX; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Land Mark</label>
                                            <input class="form-control" name="landmark" value="<?php echo $Landmark; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                     
                                   <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </form>
                                    <?php
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
      
<script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#residentForm").submit(function(event) {
   
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

          }
          else{
            //  myFunction();
        
							
							$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">LoginFailed</div>');
								$("#residentForm").trigger('reset');
								$('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
								$('#loginsubmit').html('&nbsp;Submit').prop('disabled', false);
							}).delay(3000).slideUp('fast');
          }
      });



    });
</script>
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
<?php
      include './footer.php';
      ?>