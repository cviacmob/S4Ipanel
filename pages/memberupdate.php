<?php
function member() 
{
    $db = connect_db();
     session_start();
    $ID=$_SESSION['ID'];
    $state=$_POST["state"];
    $district=$_POST["district"];
    $plan=$_POST["plan"];
    $type=$_POST["type"];
     $sql = "update membership set MemState='$state' ,MemDis='$district',MemType='$plan',MemPlan='$type' where ID='$ID'";
    $exe = $db->query($sql);
    $result=array();
  
    $db = null;
    if($exe==true){
        $result['code']=0;
        $result['desc']="success";
        echo json_encode($result);
}
else{
        $result['code']=1006;
        $result['desc']="failed";
        echo json_encode($result);
        
    }
}
?>