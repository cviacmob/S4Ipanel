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

</head>

<body>
    <?php
        require 'mysql.php';    
        $db = connect_db();
        session_start();
        $ID=$_SESSION['ID'];
        if(empty($ID)){
            header("Location:index.html");
        }
        else{
        $sql = "SELECT *  FROM memfeeinfo ORDER BY 'ID'";
        $exe = $db->query($sql);
      //$result = mysql_query ($sql) or die (mysql_error ());*/
           while ($row=$exe->fetch_all(MYSQLI_ASSOC)){
         //   $fname=$row['FirstName'];
            $ten_Schools= array_column($row,'Ten_Schools');
            $Ten_Schools             = array_shift($ten_Schools);
            $one_School= array_column($row,'One_School');
            $One_School             = array_shift($one_School);
            $one_Class=array_column($row,'One_Class');
            $One_Class             = array_shift($one_Class);
            $one_Brick=array_column($row,'One_Brick');
            $One_Brick             = array_shift($one_Brick);
            $adopt_child=array_column($row,'Annual_AdoptChild');
            $Adopt_child             = array_shift($adopt_child);
            $annual=array_column($row,'Annual');
            $Annual             = array_shift($annual);
            $monthly=array_column($row,'Monthly');
            $Monthly             = array_shift($monthly);
           ?>

 

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
                      <!--  <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>-->
                            <!-- /input-group -->
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
                       <!-- <div class="panel-heading">
                           <h1 class="page">Fees Structure</h1>
                        </div>-->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form role="form">
                                         <div class="form-group">
                                            <label>For Building 10 Schools</label>
                                            <input class="form-control" value="<?php echo $Ten_Schools;?>" readonly>
                                        </div>
                                            <!-- <div class="form-group">
                                            <label>Unit/Block</label>
                                            <input class="form-control" value="" >-->
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                     <!--   </div>-->
                                             <div class="form-group">
                                            <label>One School</label>
                                            <input class="form-control" value="<?php echo $One_School;?>" readonly>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                          <div class="form-group">
                                            <label>For a Class Room</label>
                                            <input class="form-control" value="<?php echo $One_Class;?>" readonly>
                                        </div>
<!--                                         <div class="form-group">
                                            <label>For Building One Class Room</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>-->
                                             <div class="form-group">
                                            <label>Donate a Brick</label>
                                            <input class="form-control" value="<?php echo $One_Brick?>" readonly>
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                            <!-- <div class="form-group">
                                            <label>For One Brick </label>
                                            <input class="form-control">-->
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                    <!--    </div>-->
                                          <div class="form-group">
                                            <label>Adopt a Child</label>
                                            <input class="form-control" value="<?php echo $Adopt_child;?>" readonly>
                                        </div>
                                         <div class="form-group">
                                            <label>Annual</label>
                                            <input class="form-control" value="<?php echo $Annual;?>" readonly>
                                        </div>
                                         <div class="form-group">
                                            <label>Monthly</label>
                                            <input class="form-control" value="<?php echo $Monthly;?>" readonly>
                                        </div>

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