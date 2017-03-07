<?php
function login(){
	
	$db=connect_db();
	
	$uemail = $_POST["email"];
	
	$upwd = $_POST["password"];
	
	$pwd=md5($upwd);
	
	
	$sql = "SELECT * FROM user_login WHERE email = '$uemail' and password = '$pwd'";

	$exe = $db->query($sql);
 
  if ($exe->num_rows > 0)
	{
		
		$result      =array();
		$data         = $exe->fetch_all(MYSQLI_ASSOC);
		
        session_start();
		
		$id= array_column($data,'id');
		
		$ID             = array_shift($id);
		
		$email= array_column($data,'email');
		
		$Email            = array_shift($email);
		
		$_SESSION['ID']=$ID;
		
		$_SESSION['email'] = $Email;
		$result['code']   =0;
		$result['desc']  ="success";
	   
		echo json_encode($result);
	}
	
	else
	{
		header('Content-Type: application/json');
		$result['code']   =1001;
		$result['desc']  ="failed";
	   
		echo json_encode($result);
		
	}
	
	
}
?>