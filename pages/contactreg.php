<?php
function contact()
{

    $db = connect_db();
    $title=$_POST["title"];
    $form=$_POST["form"];
    $mail=$_POST["mail"];
    $Subject=$_POST["subject"];
    $messages=$_POST["messages"];
    $additionalsetting="";
	$enquiry_date = date("Y-m-d");
    $result=array();
 
    $sql = "insert into sfi_contact_form_7 (title,form,mail,Subject,Messages,additional_settings,enquiry_date) values('$title','$form','$mail','$Subject','$messages','$additionalsetting','$enquiry_date')";
    $exe = $db->query($sql);
    $db = null;
    if($exe==true){
              $result['code']=0;
      $result['desc']="success";
      echo json_encode($result);
    }
    else{
        $result['code']=1002;
        $result['desc']="failed";
        echo json_encode($result);
    }
}
?>