<?php
require 'mysql.php';
require 'phpmailer/class.phpmailer.php';
require 'pin.php';
require 'pass.php';
$db=connect_db();
$email=$_POST["email"];
$mail          = new PHPMailer();
    $mail->CharSet = "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth   = true;
    $mail->Username   = "cviacmobility@gmail.com";
    $mail->Password   = "tech@cviac";
    $mail->SMTPSecure = "ssl";
    $mail->Host       = "smtp.gmail.com";
    $mail->Port       = "465";
    $Subject="PasswordReset";
    $pin=generatePIN($digit=6);
    $password=md5($pin);
    $pass=generateStrongPassword($length = 9, $add_dashes = false, $available_sets = 'luds');
    $sql="update user_login set password='$password' where email='$email'";
    $exe    = $db->query($sql);
    $Message="your Password is " .$pin;
    $mail->AddAddress($email);
    $mail->Subject = $Subject;
    $mail->Body    = $Message;
    $mail->Send();
    header("Location:index.html");
  
?>
