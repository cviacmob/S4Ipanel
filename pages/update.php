<?php
function basic()
{
    
    $db=connect_db();
    session_start();
    $ID=$_SESSION['ID'];
    $Title=$_POST['Title'];
    $FirstName=$_POST["Fname"];
    $LastName=$_POST["Lname"];
    $Gender=$_POST["Gender"];
    $DOB=$_POST["Dob"];
    $EmailID=$_POST["Email"];
    $Mobile=$_POST["Mobile"];
    $timezone= +5.50; 
    $today   = date("Y-m-d H:i:s",time() + 3600*($timezone+date("I")));
    $Country=$_POST["Country"];
    $sql = "update  membership set Title='$Title',FirstName='$FirstName',LastName='$LastName',Gender='$Gender',DOB='$DOB',EmailID1='$EmailID',Mobile1='$Mobile',StartDate='$today',Country='$Country' where ID='$ID'";
    $exe = $db->query($sql);
    $db = null;
    $result=array();
	if($exe==true){
      header('Content-Type: application/json');
		$result['code']   =0;
		$result['desc']  ="success";
	    echo json_encode($result);
		}
	
	
    else {
       
		header('Content-Type: application/json');
		$result['code']   =1001;
		$result['desc']  ="failed";
	    echo json_encode($result);
    }

	
}
?>