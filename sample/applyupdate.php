<?php
include ('id.php');
require 'mysql.php';
$msg = '';
echo 'shan';
/*if (isset($_POST['save']))*/
if($_SERVER['REQUEST_METHOD']=='POST')
{
   // echo 'shaaa';
    $db = connect_db();
     session_start();
     $ID=$_SESSION['ID'];
    
    if("$_POST[member]")
    {    
    $sql = "update  membership set reg_type='$Regtype' where ID='$ID'";
    $exe = $db->query($sql);
    }
    else if("$_POST[sponsor]"){
            $sql = "update  membership set reg_type='$_POST[sponsor]' where ID='$ID'";
    $exe = $db->query($sql);
    }
        else if("$_POST[volunteer]"){
            $sql = "update  membership set reg_type='$_POST[volunteer]' where ID='$ID'";
    $exe = $db->query($sql);
    }
        else if("$_POST[mentor]"){
            $sql = "update  membership set reg_type='$_POST[mentor]' where ID='$ID'";
    $exe = $db->query($sql);
    }
        else if("$_POST[member]"){
            $sql = "update  membership set reg_type='$Regtype' where ID='$ID'";
    $exe = $db->query($sql);
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