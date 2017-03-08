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
                                <div class="col-lg-12">




                                    <form id="form2" runat="server" action="ajaxAPI.php">
                                        <div id="errorDiv"></div>
                                        <div class="form-inline">
                                            <ul>
                                                <b> <li>Corporate Sponsor</li></b>

                                                <p>
                                                    <br>Would you like your organization to be part of this initiative?</br>

                                                    <br>Schools for India is signing up global and Indian corporations to
                                                    sponsor administrative and educational requirements of the project.</br>

                                                    <br>These Corporations will sponsor one or more cluster(s) for a period
                                                    of 15 years. This enables the corporate to fulfill its corporate social
                                                    responsibility by providing education to the underprivileged and empowering
                                                    the society that they operate in.</br>

                                                    <br>It is anticipated that the dependence of the cluster over the corporate
                                                    financial support system will decrease over a period in time.</br>

                                                    <br>If you are looking forward to contributing to the development of
                                                    literacy and education of rural India, we provide you with the best way
                                                    to ensure that your objectives are met quickly and results are achieved.</br>

                                                    <br>Schools for India brings to the table the project management expertise
                                                    to complete every project on time, by utilizing the latest building technology
                                                    and standardized construction techniques.</br>

                                                    <br>The entire fund management will be transparent and supervised by
                                                    a professional body.</br>

                                                    <b><br>Funding principles:</b></br>
                                                    <br>Funding from Membership Fees: Annual Membership Fees, Life Membership
                                                    fees, etc</br>

                                                    <b><br>Corporate Funding:</b></br>
                                                    <br> This can be done in two ways – Direct Funding and Indirect Funding.</br>

                                                    <b><br>Direct Funding:</b></br>
                                                    <br>Sign up for a specific Unit or a cluster. End-to-end ownership in
                                                    terms of providing the funding.</br>

                                                    <b><br>Indirect Funding:</b></br>
                                                    <br>Funding for a specific region or for a concept – like improving the
                                                    infrastructure capability of the science labs. Specific Hard or soft
                                                    infrastructure to a number of units or clusters is also accepted. For
                                                    more information please contact <b> corp_sponsor@schoolsforindia.org<br></b>                                                    Become a Corporate Sponsor

                                                    <br>Tags: Corporate Sponsor</br>
                                                </p>
                                            </ul>
                                            <div style="margin-top:20px" class="input-group">
                                                <div class="form-group">
                                                    <!--              <div class="col-xs-6 col-xs-offset-3">
-->
                                                    <div class="form-inline">
                                                        <label class="form wrap-content">
                    <input type="checkbox" name="sponsor" class="form-inline"  value="Sponsor" id="agree" > 
                    I have read and agree to the Terms and Conditions   </label>

                                                    </div>
                                                </div>
                                            </div>
                                </div>
                                <div>
                                    <div style="margin-top:20px" class="input-group">
                                        <button type="submit" value="submit" style="margin-right:30px;margin-left:30px;" id="btncheck" class="btn btn-success">Agree </button>
                                        <button type="reset" class="btn btn-success">Cancel </button>
                                    </div>
                                </div>





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
    $("#form2").submit(function(event) {
   
      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
         url = $form.attr( 'action' );
    var formdata=$form.serializeArray();
    var posting = $.post( url, formdata);
    $("body").scrollTop(0);
         // url = "test.php";

      /* Send the data using post with element id name and name2*/
    //  var posting = $.post( url, { email: $('#email').val(), password: $('#password').val(),action:$('#action').val()} );
//alert('ready');
      /* Alerts the results */
      posting.done(function( data ) {
  
        if(data["code"]==0){
                  				$('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">success</div>');
                               }).delay(3000).slideUp('fast');
  
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