<?php
require "../conDB.php";

$id = $_GET['id'];
$sub_id = $_GET['sub_id'];

try{
    $sql = "DELETE FROM tb_register
            WHERE id = '$id' AND subject_id = '$sub_id'
            ";
    $mysqli->guery($sql);

    if($mysqli->errno)
        header("Location:/add.php");
}
catch(Exception $e){
    echo $e->getMessage();
}
?>