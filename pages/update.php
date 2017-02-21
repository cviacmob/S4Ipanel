<?php
include ('id.php');
require 'mysql.php';
$msg = '';
echo 'shan';
/*if (isset($_POST['save']))*/
if($_SERVER['REQUEST_METHOD']=='POST')
{
    echo 'shaaa';
    $db = connect_db();
/*    $ID = id_generate();
    $MemID= $ID.time();*/
   // echo $_POST["title"];
    $Title=$_POST["title"];
    $FirstName=$_POST["fname"];
    $MiddleName=$_POST["mname"];
    $LastName=$_POST["lname"];
    $Gender=$_POST["gender"];
    $DOB=$_POST["dob"];
    $EmailID=$_POST["email"];
    $Mobile=$_POST["mobile"];
    $timezone= +5.50; 
    $today   = date("Y-m-d H:i:s",time() + 3600*($timezone+date("I")));
    $Country=$_POST["country"];

    /*$img = file_get_contents($image);*/
    /*$con = mysqli_connect('localhost','root','','schools4db') or die('Unable To connect');*/
    $sql = "update into membership (Title,FirstName,MiddleName,LastName,Gender,DOB,EmailID1,Mobile1,StartDate,Country) values('$Title','$FirstName','$MiddleName','$LastName','$Gender','$DOB','$EmailID','$Mobile','$today','$Country')";
    $exe = $db->query($sql);
    

/*    $stmt = mysqli_prepare($con,$sql);

    mysqli_stmt_bind_param($stmt, "s",$img);
    mysqli_stmt_execute($stmt);*/

    /*$check = mysqli_stmt_affected_rows($exe);*/
   /* if($check==1){
        $msg = 'Successfullly UPloaded';
    }else{
        $msg = 'Could not upload';
    }*/
    /*mysqli_close($con);*/
    $db = null;
}
?>