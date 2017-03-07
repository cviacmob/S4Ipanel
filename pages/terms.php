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
    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#btncheck').click(function() {
                if ($('#agree').is(':checked')) {
                    alert('you agreed conditions')
                }
                else {
                    alert('please check terms & conditions')
                }
            })
        })
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
        <!--<a class="navbar-brand" href="index.html">SB Admin v2.0</a>-->
      </div>
      <!-- /.navbar-header -->
      <ul class="nav navbar-top-links navbar-right">
        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
        </li>
        <!-- </ul>-->
        <!-- /.dropdown-user -->
        <!-- </li>-->
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
              <a ><i class="fa fa-sitemap fa-fw"></i>Apply As</a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="Member.php">Member</a>
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
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>
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
                    <div class="panel panel-default" style="margin-top:5px" >
                       
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-12">
							<!--<form>-->
							  <form id="termsForm" class="form-vertical"action="memberpdfshow.php" >
      <div class="form-group">
        <b><li>Members</li></b>
<br>Schools for India aims to enroll members from across the globe to participate in the progress of the project. These members can choose to either be an integral part of (a) a school ; or (b) a cluster for a nominal membership. One elected member shall represent a state that encompasses various districts.</br>
<br>These members will have access to all the entities of the organizational structure and will receive constant updates on the progress of the project from inception. The members are expected to contribute quality time and regular feedback to ensure unparalleled success of the project.</br>
<br>If you are interested in becoming a member please write to
<b>members@schoolsforindia.org</b></br>

<b><br>Role of a Member:</br></b>

<br>SCHOOLS FOR INDIA has three types of Members namely Member Unit, Member Cluster and Member-State.</br>
<br>A Member-Unit is a Member who will be associated with the development and progress and entitled to receive information pertaining to a specific school to be set up by SCHOOLS FOR INDIA.</br>
<br>As a Member-Unit you will have the role of monitoring the building of a specific Unit and will posses authorized access to monitor the said Unit from the time of its conception, through building of the Unit and running of the Unit after it is successfully constructed.</br>
<br>A Member-Cluster is a member who will be associated with the development and progress and is entitled to receive information pertaining to all the schools to be set up by SCHOOLS FOR INDIA in a specific district.</br>
As a Member-Cluster you will have the role of monitoring the building of all Units in a specific Cluster and will posses authorized access to monitor each of the said Units in the Cluster from the time of its conception, through building of the said Units and running of the said Units after they are successfully constructed.</br>
<b><br>Role of a Member:</br></b>
  <br> A Member-State is a Member, who is elected from amongst the Member-Clusters associated with a specific Cluster and by the Member-Clusters and Member-Units associated with that Cluster to act as the head Member of that Cluster.</br>


<br>Each Member-State will have the role of actively overseeing building of all Units in a specific Cluster and will posses authorized access to monitor each of the said Units in the Cluster from the time of its conception, through building of the said Units and running of the said Units after they are successfully constructed.</br>

<br>The Member-States of the various Clusters will be the representative of the Member-Units and Member-Clusters associated with their specific Cluster and will work closely with the Trustees and other staff of SCHOOLS FOR INDIA in conceptualizing, building and running as the case may be, of the Units in the specific Cluster to which they are associated.</br>

<br>A Member-State is to hold such post for a period of one year, and no Member is eligible for re-appointment as a Member-State whether for the said Cluster or for any other Clusters.</br>

<br>No person can act as the Member-State for more than one Cluster. In the event, the post of a Member-State becomes vacant due to resignation, removal, death, incapacity or any other reason, the Member-Clusters and Member-Units of that particular Cluster shall re-elect a Member-State who shall hold such post till the end of the year, and if such person has served as Member-State for less than 6 months, then he/she may be eligible for re-appointment for the next year as well.</br>

<br>It is expressly stated that the election process for electing the Member-States for each Cluster is conducted solely by the Member-Clusters and Member-Units of the said Cluster and SCHOOLS FOR INDIA will not be a party to such election process and will not in any manner be held liable for any claims, damages, etc arising in this regard.</br>

<b><br>Responsibilities and Opportunities of a Member:</br></b>

<br>The core responsibilities of a Member, whether you are a Member-Unit, Member-Cluster or Member-State are as follows:</br>

<br>1. To provide lasting moral support for the Unit(s) with which you are associated.</br>

<br>2. To ensure that the planning, building and running of the Unit(s) with which you are associated takes place in keeping with the objects for which SCHOOLS FOR INDIA was established.</br>

<br>3. To provide all assistance and required inputs to SCHOOLS FOR INDIA to enable uniformity in quality of construction of the Units as well as in the education imparted in the Units and to ensure that costs in connection with planning, building and running of the Units is minimized.</br>

<br>4. To participate in all the crucial meetings, that will be conducted to decide the sites, building specifications for the Unit (s), and other related matters from time to time. The meeting schedule will be published in the website and the members would also be intimated through e-mail.</br>

<br>5. To assist SCHOOLS FOR INDIA to overcome all hurdles for initiating and running the Unit(s), by providing actual and moral support to us.</br>

<br>6. To participate in the site visits as and when necessary to ensure that the various agencies engaged by SCHOOLS FOR INDIA are performing their duties and tasks as per our stated objectives.</br>

<br>7. To help in identifying the required volunteers from time to time for completing the necessary tasks in connection with the conception, building or running of the Unit(s) as and when needed.</br>

<br>8. Any other responsibility or duty which you voluntarily take on in your role as a Member whether as a result of your interactions with other Members / Trustees / employees of SCHOOLS FOR INDIA or otherwise.</br>

<br>Privileges of a Member</br>
<br>As a Member of SCHOOLS FOR INDIA you will be entitled to the following privileges:</br>

<br>9. Online access to information relating to a specific Unit / Cluster as the case may be.</br>

<br>10. To get the SCHOOLS FOR INDIA monthly newsletter by email.</br>

<br>11. Access to the Cluster Celebrity, through e-mail and meeting him/her for the annual meeting.</br>

<br>A Cluster Celebrity is very well known celebrity from any of the field and  volunteers to support a particular cluster.</br>

<br>The cluster celebrity would be a person from anywhere in the world but would like to volunteer for development of the education for underprivileged children in the world and India in particular.</br>

<br>The celebrity would be actively taking part in each of the school project for a particular cluster and will  also work with the members.</br>

<br>12. Access to the Unit(s) sites with prior permission from the Cluster Manager,and the SCHOOLS FOR INDIA support staff at each location.</br>

<br>become a member</br>

Tags: Members
          <div style="margin-top:20px" class="input-group">
            <div class="form-group">
               <div class="form-inline">
                    <label class="form wrap-content">
                    <input type="checkbox" name="terms" class="form-inline"  value="Terms" id="agree" > 
                    I have read and agree to the Terms and Conditions   </label>
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            <div style="margin-top:15px" class="input-group">
              <button type="submit" value="submit" style="margin-right:30px;" class="btn btn-success">Agree </button>
              <button type="reset" class="btn btn-success">Cancel </button>
            </div>
          
        
    </form>
						
        </div>
                            
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


    
  </body>
<?php
      include './footer.php';
      ?>