<?php
//Include database configuration file
include('mysql.php');

if(isset($_POST["action"])){
	
	//G	et all state data
	
	$action=$_POST["action"];
	
	if($action=="login"){
		
		//login();
		echo $action;
		
	}
	
}

function login(){
	
	$db=connect_db();
	
	$uemail = $_POST["email"];
	
	$upwd = $_POST["password"];
	
	$pwd=md5($upwd);
	
	
	$sql = "SELECT * FROM user_login WHERE email = '$uemail' and password = '$pwd'";

	$exe = $db->query($sql);
 
  if ($exe->num_rows > 0)
	{
		
		
		$data         = $exe->fetch_all(MYSQLI_ASSOC);
		
	
		
		
		session_start();
		
		$id= array_column($data,'id');
		
		$ID             = array_shift($id);
		
		$email= array_column($data,'email');
		
		$Email            = array_shift($email);
		
		$_SESSION['ID']=$ID;
		
		$_SESSION['email'] = $Email;
		
		echo "Success";
	}
	
	else
	{
		echo "Failed";
		
	}
	
	
}

