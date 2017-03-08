<?php
function office()
{
    $db = connect_db();
    session_start();
    $ID=$_SESSION['ID'];
    $Cname=$_POST["Cname"];
    $Bname=$_POST["Bname"];
    $Cno=$_POST["Cno"];
    $Sname=$_POST["Sname"];
    $Country=$_POST["CountryName"];
    $State=$_POST["state"];
    $Ctown=$_POST["ctown"];
    $PINcode=$_POST["Pincode"];
    $timezone= +5.50; 
    $today   = date("Y-m-d H:i:s",time() + 3600*($timezone+date("I")));
    $telephone=$_POST["tphone"];
    $FAX=$_POST["Fax"];
    $Extension=$_POST["Extension"];
    $sql = "update  membership set CompanyName='$Cname',BuildingName='$Bname',CompNumber='$Cno',CompStreetname='$Sname',CompState='$State',CompTown='$Ctown',CompPIN='$PINcode',CompTelephone='$telephone',CompFax='$FAX',CompExtension='$Extension' where ID='$ID'";
    $exe = $db->query($sql);
    
if($exe==true){
$result['code']=0;
$result['desc']="success";
echo json_encode($result);
}
else{
$result['code']=1004;
$result['desc']="failed";
echo json_encode($result);
}
    $db = null;
}
?>