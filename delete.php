<?php
    include './config.php';
    $id= $_GET['id'];
    $sql="delete from people where id='$id'";
    $pdo->query($sql);
    header("location: index.php");
    exit();
    $pdo=null;
?>
