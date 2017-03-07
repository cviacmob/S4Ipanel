<?php

function membership(){
	
	$db=connect_db();
	
	session_start();
	
	$ID=$_SESSION['ID'];
	
	
	if(isset($_POST["member"])){
		
		$state=$_POST["state"];
		
		$district=$_POST["district"];
		
		$memplan=$_POST["plan"];
		
		$memtype=$_POST["type"];
		
		$result=array();
		
		$sql="update membership set MemState='$state',MemDis='$district',MemPlan='$memplan',MemType='$memtype' where ID='$ID'";
		
		$exe=$db->query($sql);
		
		if($exe==true){
			
			$result['code']=0;
			
			$result['desc']="success";
			
			echo json_encode($result);
			
		}
		
        else{
		$result['code']=1007;
		
		$result['desc']="success";
		
		echo json_encode($result);
        }
		
	}
	
	elseif(isset($_POST["volunteer"])){
		
		$volunteer=$_POST["volunteer"];
		
		$sql="update membership set MemType='$volunteer' where ID='$ID'";
		
		$exe=$db->query($sql);
		
		$result=array();
		
		if($exe==true){
			
			$result['code']=0;
			
			$result['desc']="success";
			
			echo json_encode($result);
			
		}
		else{
		$result['code']=1008;
		
		$result['desc']="success";
		
		echo json_encode($result);
        }
		
	}
	
	elseif(isset($_POST["sponsor"])){
		
		$sponsor=$_POST["sponsor"];
		
		$sql="update membership set MemType='$sponsor' where ID='$ID'";
		
		$exe=$db->query($sql);
		
		$result=array();
		
		if($exe==true){
			
			$result['code']=0;
			
			$result['desc']="success";
			
			echo json_encode($result);
			
		}
        else{
		
		$result['code']=1008;
		
		$result['desc']="success";
		
		echo json_encode($result);
        }
		
	}
	
	elseif(isset($_POST["mentor"])){
		
		$mentor=$_POST["mentor"];
		
		$sql="update membership set MemType='$mentor' where ID='$ID'";
		
		$exe=$db->query($sql);
		
		$result=array();
		
		if($exe==true){
			
			$result['code']=0;
			
			$result['desc']="success";
			
			echo json_encode($result);
			
		}
		else{
		$result['code']=1009;
		
		$result['desc']="success";
		
		echo json_encode($result);
        }
		
	}
	
	elseif(isset($_POST["partner"])){
		
		$partner=$_POST["partner"];
		
		$sql="update membership set MemType='$partner' where ID='$ID'";
		
		$exe=$db->query($sql);
		
		$result=array();
		
		if($exe==true){
			
			$result['code']=0;
			
			$result['desc']="success";
			
			echo json_encode($result);
			
		}
        else{
		
		$result['code']=1010;
		
		$result['desc']="success";
		
		echo json_encode($result);
        }
		
	}
	
}

?>