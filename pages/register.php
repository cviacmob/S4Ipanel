<?php
include ('id.php');
require 'mysql.php';
$msg = '';
//echo 'shan';
/*if (isset($_POST['save']))*/
if($_SERVER['REQUEST_METHOD']=='POST')
{

   // echo 'shaaa';
    $db = connect_db();
    $ID = id_generate();
    $MemID= $ID.time();
   // echo $_POST["title"];
    $Title=$_POST["title"];
    $FirstName=$_POST["fname"];
    $MiddleName="";
    $LastName=$_POST["lname"];
    $Gender=$_POST["gender"];
    $DOB=$_POST["dob"];
    $EmailID=$_POST["email"];
    $Mobile=$_POST["mobile"];
    $timezone= +5.50; 
    $today   = date("Y-m-d H:i:s",time() + 3600*($timezone+date("I")));
    $Country=$_POST["country"];
    $Password=$_POST["password"];
	$ConPassword=$_POST["password_confirmation"];
	if($Password!=$ConPassword){
	header("Location:registration2.php?err=true");
	}
    $Pwd=md5($Password);
    if (!preg_match("/^[a-zA-Z ]+$/",$FirstName)) {
        header("Location:index.html");
	}
     if (!preg_match("/^[a-zA-Z ]+$/",$MiddleName)) {
        header("Location:index.html");
	}
     if (!preg_match("/^[a-zA-Z ]+$/",$LastName)) {
        header("Location:index.html");
	}
    if (!preg_match("/^[a-zA-Z ]+$/",$Gender)) {
        header("Location:index.html");
	}
    
	if(!filter_var($EmailID,FILTER_VALIDATE_EMAIL)) {
/*		$error = true;
		$email_error = "Please Enter Valid Email ID";*/
        /*echo "shan";*/
        header("Location:index.html");
	}
	if(strlen($Password) < 8) {
/*		$error = true;
		$password_error = "Password must be minimum of 6 characters";*/
        /*echo $Password;*/
                header("Location:index.html");
	}
     if (!preg_match('/^\+?([0-9]{1,4})\)?[-. ]?([0-9]{9})$/', $Mobile)) {
                 header("Location:index.html");
     
    }
     if (!preg_match("/^[a-zA-Z ]+$/",$Country)) {
        header("Location:index.html");
	}

    

    /*$img = file_get_contents($image);*/
    /*$con = mysqli_connect('localhost','root','','schools4db') or die('Unable To connect');*/
    $sql = "insert into membership (ID,MemID,Title,FirstName,MiddleName,LastName,Gender,DOB,EmailID1,Mobile1,StartDate,Country) values('$ID','$MemID','$Title','$FirstName','$MiddleName','$LastName','$Gender','$DOB','$EmailID','$Mobile','$today','$Country')";
    $exe = $db->query($sql);
    $sql="insert into user_login(id,email,password) values('$ID','$EmailID','$Pwd')";
    $exec = $db->query($sql);
    /*$last_id = $exe->mysql_insert_id();*/
    if($exec==true){ 
    header("Location:index1.php?err=false");
    }
    else{
      header("Location:registration2.php?err=true");
    }

    $db = null;
}
?>