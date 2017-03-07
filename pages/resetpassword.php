<?php
// connect to mysql database
/*$con = mysqli_connect("localhost", "root", "", "schools4db") or die("Error " . mysqli_error($con));*/
require 'mysql.php';

// check if form is submitted
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $db=connect_db();
    $uemail = $_POST["email"];
    $upwd = $_POST['password'];
    $conpwd=$_POST['password_confirmation'];
    $pwd=md5($uemail);
    $password=md5($upwd);

    $sql = "update user_login set password='$password' where password='$pwd'";
    echo '$pwd';
    $exe = $db->query($sql);

    if($exe==true){
        
        header("Location: index.html"); //change this
    }
    else
    {
        // login failed
        header("Location:index2.php?err=true");
    }
}
?>
