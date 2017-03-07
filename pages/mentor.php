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

</head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script type="text/javascript">
        $(function() {
            $('#btncheck').click(function() {
                if ($('#chkterms').is(':checked')) {
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
                    <div class="panel panel-default" style="margin-top:5px" >
                       
                        <div class="panel panel-body">
                            <div class="row">
                                <div class="col-lg-12">
							<!--<form>-->
							
						
<!--<form action="applyupdate.php" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions and Privacy Policy'); return false; }">
<div class="form-inline">                                
<label><input type="checkbox" name="checkbox" value="check" id="agree" />
 I have read and agree to the Terms and Conditions and Privacy Policy</label>-->

    <form id="form3" runat="server" action="ajaxAPI.php">
    <div<div class="form-inline">   

<b><li>Mentors</li></b>
<br>We need support in the areas where you think you have a better say. We are eager to listen.</br>

<br>May be you had a dream of doing something similar, may be you did a similar project, and may be you were part of an organization which implemented similar projects in India or elsewhere.</br>

<br>If so, we would like you to help when we engage with other agencies, be it vendors, partners, government agencies or corporations.</br>

<br>Does our project strike an emotion in you? We are open to your ideas, and we would be happy to have you with us when we plan and execute this project.</br>

<br>If you are an educator, builder, or just anyone good at what you do, no matter what your age is, we would like to have you as our mentor to thousands of our volunteers who are working towards implementing this project successfully.</br>

<br>If you are a teacher or someone who has expertise in the educational system or has enough experience in managing rural educational programs, we would like to take your advice seriously.</br>

<b></br>The Current Need:</br></b>

<br>Currently we are setting up the regional offices and district offices across the country.</br>

<br>We need help in creating the most effective process so that we can open the 604 such offices in the next two years.</br>

<br>If you would like to be a mentor for this team, you can contact us at <b>mentors@schoolsforindia.org</b></br>

Become a Mentors

<br>Tags: Mentors</br>
        <!--Check Status:-->
          <div style="margin-top:20px" class="input-group">
            <div class="form-group">
<!--              <div class="col-xs-6 col-xs-offset-3">
-->                <div class="form-inline">
                    <label class="form wrap-content">
                    <input type="checkbox" name="mentor" class="form-inline"  value="Mentor" id="agree" > 
                    I have read and agree to the Terms and Conditions   </label>
                  
                </div>
              </div>
            </div>
          </div>
          <div>
            <div style="margin-top:20px" class="input-group">
              <button type="submit" value="submit" style="margin-right:30px;margin-left:30px;" class="btn btn-success">Agree </button>
              <button type="reset" class="btn btn-success">Cancel </button>
            </div>
    </div>

							
							
							        
            
            <!--</div>-->
        </div>
    
    
   <!--  <div class="form-group">
                <div style="margin-top:20px" class="input-group">
                  <button  type="submit"  style="margin-right:120px" value="submit"  name ="submit" class="btn btn-success">Agree </button>
                    </div>
                    </div>-->
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
    $("#form3").submit(function(event) {
   
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
//alert('ready');
      /* Alerts the results */
      posting.done(function( data ) {
  //        alert('fail');
        if(data["code"]==0){
            alert('sucess');
           /*  var delay = $(this).attr('data-delay');
                    if (delay != undefined) {
                        delay = parseInt(delay);
                        clearTimeout(timeOut);
                        timeOut = window.setTimeout(function () {
                            alert.slideUp();
                        }, delay);
                    }
*/
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