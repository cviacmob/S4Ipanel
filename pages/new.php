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
            <div class="navbar-inner">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="#"><img src="http://placehold.it/30x80&text=Logo" alt=""></a>
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
                   
                        </li>
<!--                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                        </li>-->
                        <li>
                            <a href="basicinfo.php"><i class="fa fa-info fa-fw"></i>Basic Information</a>
                           <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                           --> <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="resident.php"><i class="fa fa-home fa-fw"></i>Residential Address</a>
                        </li>
                        <li>
                            <a href="office.php"><i class="fa fa-edit fa-fw"></i>Office Address</a>
                        </li>
                        <li>
                            <a href="social.html"><i class="fa fa-wrench fa-fw"></i>Social Media Handle</a>
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
                            <a href="membershipinfo.php"><i class="fa fa-files-o fa-fw"></i>Membership Information</a>
                       
                        </li>
                          <li>
                            <a href="terms.php"><i class="fa fa-list fa-fw"></i>Membership Terms and Condition</a>
                           </li>
                            <li>
                            <a href="feestructure.html"><i class="fa fa-sitemap fa-fw"></i>Fees Structure</a>
                           </li>
                          <li>
                            <a href="basic.html"><i class="fa fa-sitemap fa-fw"></i>Contact</a>
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
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="margin-top:5px">
                    
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form" method="POST" action="officeupdate.php">
                                       <div class="form-group">
                                            <label>Company Name</label>
                                            <input class="form-control" name="Cname" value="<?php echo $Cname;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Building Name</label>
                                            <input class="form-control"  name="Bname" value="<?php echo $Bname;?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Number</label>
                                            <input class="form-control" name="Cno" value="<?php echo $Cno;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Street Name</label>
                                            <input class="form-control" name="Sname" value="<?php echo $Csname;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
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
                                            <select class="form-control" name="CountryName" id="country">
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
                                            <label>Town</label>
                                            <input  class="form-control" placeholder="Enter text" name="ctown"  value="<?php echo $Ctown;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Pin Code</label>
                                            <input class="form-control" name="Pincode" value="<?php echo $Cpin;?>"placeholder="Enter text">
                                        </div>
                                         <div class="form-group">
                                            <label>Telephone</label>
                                            <input class="form-control"name="tphone" value="<?php echo $Cmob; ?>" placeholder="Enter text">
                                        </div>
                                             <div class="form-group">
                                            <label>Fax</label>
                                            <input class="form-control" name="Fax" value="<?php echo $CFAX; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Extension</label>
                                            <input class="form-control" name="Extension" value="<?php echo $Ext; ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                        <button type="reset" class="btn btn-default">Reset</button>
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