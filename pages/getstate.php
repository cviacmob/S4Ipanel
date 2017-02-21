<?php 
require_once('mysql.php');
$db=connect_db();
if(!empty($_POST["country_id"])){
    $sql="select * from statelist where country_id='".$_POST["country_id"]."'";
    $exe = $db->query($sql);
    $data= $exe->fetch_all(MYSQLI_ASSOC);
    ?>
    <?php 
    foreach($data as $state){
        ?>
        <option value="<?php echo $state["id"]; ?>"><?php echo $state["state_name"];?></option>
        <?php
    }
    
}
?>