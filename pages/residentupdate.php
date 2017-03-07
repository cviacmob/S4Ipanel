<?php
function resident()
{
    $db = connect_db();
    session_start();
    $ID=$_SESSION['ID'];
    $HouseNo=$_POST["houseno"];
    $Floor=$_POST["floor"];
    $Bname=$_POST["bname"];
    $Sname=$_POST["sname"];
    $Village=$_POST["village"];
    $State=$_POST["state"];
    $PINcode=$_POST["pincode"];
    $country=$_POST["country"];
    $timezone= +5.50; 
    $today   = date("Y-m-d H:i:s",time() + 3600*($timezone+date("I")));
    $telephone=$_POST["tphone"];
    $FAX=$_POST["fax"];
    $Landmark=$_POST["landmark"];
    $sql = "update  membership set HouseNo='$HouseNo',Floor='$Floor',Apartment='$Bname',StreetName='$Sname',Town='$Village',State='$State',PIN='$PINcode',Country='$country',Telephone='$telephone',Fax='$FAX',Landmark='$Landmark' where ID='$ID'";
    $exe = $db->query($sql);
    $result=array();
    
if($exe==true){
 $result['code']=0;
 $result['desc']="success";
 echo json_encode($result);
}
else{
 $result['code']=1003;
 $result['desc']="failed";
 echo json_encode($result);

}
    $db = null;
}
?>