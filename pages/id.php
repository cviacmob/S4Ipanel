<?php
function id_generate()
{
    $db  = connect_db();
    $sql = "SELECT ID from membership order by ID desc";
    $exe = $db->query($sql);
    //     $data = $exe->fetch_all(MYSQLI_ASSOC);
    //     $db = null;
    $ID  = $exe->num_rows + 1;
    //e    cho json_encode($ID);
    return $ID;
}
?>