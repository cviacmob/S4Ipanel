<?php
// connect to mysql database
/*$con = mysqli_connect("localhost", "root", "", "schools4db") or die("Error " . mysqli_error($con));*/
require 'mysql.php';

// check if form is submitted
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $db=connect_db();
    $uemail = $_POST["email"];
    $upwd = $_POST["password"];
    $pwd=md5($upwd);
    
    $sql = "SELECT * FROM user_login WHERE email = '$uemail' and password = '$pwd'";
    //echo '$pwd';
    $exe = $db->query($sql);
/*    $data         = $exe->fetch_all(MYSQLI_ASSOC);
    $id= array_column($data,'Title');*/
    
/*    $select="select * from membership where ID=$ID";
    $exe = $db->query($sql);
    $dat       = $exe->fetch_all(MYSQLI_ASSOC);*/
    

    if ($exe->num_rows > 0)
    {
        // login successful - start user session, store data in session & redirect user to index or dashboard page as per your need
        
        /*$row = mysqli_fetch_array($data);*/
        $data         = $exe->fetch_all(MYSQLI_ASSOC);
 /*       $id= array_column($data,'Title');
        $ID             = array_shift($id);*/

        session_start();
        $id= array_column($data,'id');
        $ID             = array_shift($id);
        $email= array_column($data,'email');
        $Email            = array_shift($email);
        $_SESSION['ID']=$ID;
        $_SESSION['email'] = $Email;
        
        header("Location: basicinfo.php"); //change this
    }
    else
    {
        // login failed
        header("Location:index2.php?err=true");
    }
}
?>
