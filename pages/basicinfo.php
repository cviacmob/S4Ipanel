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
/*        session_start();
        $usernm="root";
        $passwd="";
        $host="localhost";
        $database="swift";

        $Username=$_SESSION['myssession'];



        mysql_connect($host,$usernm,$passwd);

        mysql_select_db($database);*/
        require 'mysql.php';
        $db = connect_db();
        session_start();
        $ID=$_SESSION['ID'];
        $sql = "SELECT * FROM membership WHERE ID='$ID'";
        $exe = $db->query($sql);
        /*$result = mysql_query ($sql) or die (mysql_error ());*/
        while ($row=$exe->fetch_all(MYSQLI_ASSOC)){
         //   $fname=$row['FirstName'];
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
                       <!-- <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i>Home</a>
                        </li>-->
                        <li>
                            <a href="basicinfo.php"><i class="fa fa-info fa-fw" ></i>Basic Information</a>
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
                            <a href="office.php"><i class="fa fa-building fa-fw"></i>Office Address</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-group fa-fw"></i>Social Media Handle</a>
                           <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
-->                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Apply As Volunteer</a>
                           <!-- <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                           -->         <!-- /.nav-third-level -->
                               <!-- </li>
                            </ul>-->
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-user-plus fa-fw"></i>Role</a>
                           </li>
                        <li>
                            <a href="#"><i class="fa fa-info-circle fa-fw"></i>Membership Information</a>
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
                            <a href="#"><i class="fa fa-list fa-fw"></i>Membership Terms and Condition</a>
                           </li>
                            <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i>Fees Structure</a>
                           </li>
                          <li>
                            <a href="basic.html"><i class="fa fa-phone fa-fw"></i>Contact</a>
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
                    <div class="panel panel-default" style="margin-top:5px" >
                        <div class="panel-heading">
                           <h1 class="page">Basic Information</h1>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form data-toggle="validator" action="update.php"role="form" method="post">
                                         <div class="form-group">
                                            <label>Title</label>
                                           <select class="form-control" name="$title">
                                              <!-- <option></option>
                                                <option>Mr</option>
                                                <option>Mrs</option>
                                                <option>Ms</option>-->
                                                <option value='Mr' ". ($title == 'Mr'? 'selected ': '') .">Mr</option>
                                                <option value='Mrs' ". ($title == 'Mrs'? 'selected ': '') .">Mrs</option>
                                                <option  value='Ms' ". ($title == 'Ms'? 'selected ': '') .">Ms</option>
                                            </select>
                                             <!--<input type="text" class="form-control" value="<?php echo $title ?>">-->
                                        </div>
                                        <div class="form-group">
                                            <label>First Name</label>
                                         <input type="text" class="form-control" id="inputName" placeholder="First Name"  value="<?php echo $fname;?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" id="inputName" placeholder="Middle Name" value="<?php echo $mname ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Last Name</label>
                                            <!--<input class="form-control">-->
                                            <input type="text" class="form-control" id="inputName" placeholder="Last Name" value="<?php echo $lname ?>">
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <div class="form-group">
                                            <label>Sex</label>
                                           <select class="form-control" name="$gender">
                                               <!--<h2> <option>Select</option></h2>-->
                                              <!--<option></option> 
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>Others</option>-->
                                                <option value='Male' ". ($gender == 'Male'? 'selected ': '') .">Male</option>
                                                <option value='Female' ". ($gender == 'Female'? 'selected ': '') .">Female</option>
                                                <option  value='Others' ". ($gender == 'Others'? 'selected ': '') .">Others</option>
                                           </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control"value="<?php echo $dob?>" placeholder="Enter text">
                                        </div>
                                             <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?php echo $email ?>" data-error="Bruh, that email address is invalid" required>
                                           
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                             <div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" maxlength="10" minlength="10" value="<?php echo $mobile ?>" class="form-control" required>
<!--                                            <input type="number" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                                           <div class="help-block">Minimum of 6 characters</div>-->
                                            <!--<p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                     <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control"value="<?php echo $country ?>" placeholder="Enter text">
                                        </div>
                                      <!--  <div class="form-group">
                                            <label>Static Control</label>
                                            <p class="form-control-static">email@example.com</p>
                                        </div>
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file">
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 1
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 2
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Checkbox 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Checkboxes</label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Radio Buttons</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Inline Radio Buttons</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label>Selects</label>
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Multiple Selects</label>
                                            <select multiple class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>-->
                                <!-- /.col-lg-6 (nested) -->
                               <!-- <div class="col-lg-6">
                                    <h1>Disabled Form States</h1>
                                    <form role="form">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled input</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">Disabled select menu</label>
                                                <select id="disabledSelect" class="form-control">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox">Disabled Checkbox
                                                </label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Disabled Button</button>
                                        </fieldset>
                                    </form>
                                    <h1>Form Validation States</h1>
                                    <form role="form">
                                        <div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Input with success</label>
                                            <input type="text" class="form-control" id="inputSuccess">
                                        </div>
                                        <div class="form-group has-warning">
                                            <label class="control-label" for="inputWarning">Input with warning</label>
                                            <input type="text" class="form-control" id="inputWarning">
                                        </div>
                                        <div class="form-group has-error">
                                            <label class="control-label" for="inputError">Input with error</label>
                                            <input type="text" class="form-control" id="inputError">
                                        </div>
                                    </form>
                                    <h1>Input Groups</h1>
                                    <form role="form">
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-eur"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Font Awesome Icon">
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control">
                                            <span class="input-group-addon">.00</span>
                                        </div>-->
                                        <!--<div class="form-group input-group">
                                            <input type="text" class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                   </form> -->
                                   <button type="submit" class="btn btn-default">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset </button>
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
