<?php
function social()
{
    
    $db=connect_db();
    session_start();
    $ID=$_SESSION['ID'];
    $Facebook=$_POST["fb"];
    $Blog=$_POST["bg"];
    $Twitter=$_POST["twit"];
    $LinkedIn=$_POST["link"];
    $Flickr=$_POST["flick"];
    $sql = "update  membership set Facebook='$Facebook',Twitter='$Twitter',Blog='$Blog',Flickr='$Flickr',Linkedin='$LinkedIn' where ID='$ID'";
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
		$result['code']   =1004;
		$result['desc']  ="failed";
	    echo json_encode($result);
    }

	
}
?>