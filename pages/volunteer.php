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
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
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
				
                <a class="navbar-brand" href="index.html">Schools for India Admin Panel</a>
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

    <form id="form1" runat="server" action="ajaxAPI.php" method="post" >
    <div class="form-inline">   
              <div style="border: 3px solid #e5e5e5; height:auto; overflow: auto; padding: 20px;" class="form-group">
      
       <!--<div class="pre-scrollable">-->
           <div class="scroll-area">
                <ul>
                   <b> <li>Volunteers</li></b>
                  
           <p>
What kind of work?
<br>Schools for India is  currently in the process of conducting  surveys of all  districts in the country. We are gathering all the data in the public domain relating to various villages,the population, literacy levels,the number of schools etc.Based on this research Schools for India will hire professional marketing/survey agencies to conduct door to door survey to identify where we need to build the schools. Presently we need volunteers who can perform the secondary research for the districts across India.</br>

<br>If you have the conviction that you can be part of this project, and willing to spend your time and energy, in what ever way you can, when ever you can, how ever you can, you are welcome to participate in this nation building activity. Who ever you are, you are welcome…</br>

Types of Volunteers: Mind, Body and Spirit

<br>You can be a Mind –Volunteer focusing on creating the plans, processes, and do work virtually, You can be anywhere in the world, but connected to the work that is happening in India.</br>

<br>You can be a Body-Volunteer on the ground,working  shoulder to shoulder  with the local communities, sharing their dreams and sweating it out to make it a reality.</br>

<br>You can be the Spirit-Volunteer with Good will, spreading the word and ensuring the success of each and every building of learning that will come up all over India</br>

Volunteering: What you can do?

<br>Schools for India, intends to build schools in every district. This involves creating and maintaining a data base pertaining to each and every district.</br>

<br>The secondary research involves gathering of complete district information.</br>

<br>Information pertaining to the villages in the district, the population, details of existing schools, etc.</br>

  <b> <br>Volunteer Privileges:</br></b>

<br>Schools for India will provide an e-mail account for every registered volunteer. You will also receive the weekly newsletter. The volunteers will have access to the various portals and online resources of Schools for India.</br>

<br>Find below the step by step guide to becoming a volunteer:</br>

Step 1:
<br>Identify the district for which you would like to work for.</br>

Step 2
<br>Send an email to volunteers@schoolsforindia.org confirming your intent to be a volunteer.</br>

Step 3
<br>Based on acceptance fromSchools for India, you will be attached as a volunteer for that district. You need not be in that district physically.</br>

Step 4
<br>You will get the template in which you need to start collecting the information about the district. You can do online search and get acquainted with what is happening in that district.</br>

Step 5
<br>After completing analysis of the district you can send the information to Schools for India to be published in the website.</br>

Step 6
<br>The district level project plan will be made and sent to you, so that you can start working with others in the district towards building the schools.</br>

<b><br> FAQ</br></b>
<br>Do I need to be in India to be a volunteer?</br>

<br>No, you can be anywhere in the world, but accessible through e-mail.
Do I need to pay any fee or contribute monetarily to the project?</br>

<br>No, you need not contribute monetarily.
If I incur any expenses while performing the work, will I be reimbursed?</br>

<br>All expenses like travel etc would be reimbursed at actuals. You need to obtain
prior permission from the Regional Director for such expenditure.</br>
Become a Volunteer
Tags: Volunteers
        </p>
                </ul>
    <div style="margin-top:20px" class="input-group">
            <div class="form-group">
              <div class="form-inline">
                    <label class="form wrap-content">
                    <input type="checkbox" name="volunteer" class="form-inline"  value="Volunteer" id="agree" > 
                    I have read and agree to the Terms and Conditions   </label>
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            <div style="margin-top:15px" class="input-group">
              <button type="submit" value="submit" style="margin-right:30px;margin-left:30px;" id="btncheck" class="btn btn-success">Agree </button>
              <button type="reset" class="btn btn-success">Cancel </button>
            </div>
       </div>
        <!--Check Status:-->
        
    </div>
    </div>

							
							
							        
            
            <!--</div>-->
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
    <!-- /#wrapper -->
<script type='text/javascript'>
  /* attach a submit handler to the form */
    $("#form1").submit(function(event) {
   
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