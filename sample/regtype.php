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
           session_start();
        $ID=$_SESSION['ID'];
    $Regtype=$_POST['reg_type'];
    if($_POST["Submit"]="submit")
    {
        for($i=0; $i<sizeof(Regtype);$i++){
    /*$img = file_get_contents($image);*/
    /*$con = mysqli_connect('localhost','root','','schools4db') or die('Unable To connect');*/
    $sql = "update  membership set reg_type[$i] ='$Regtype' where ID='$ID'";
    $exe = $db->query($sql);
    }
    }
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
    header("Location:index.html");
}
?>