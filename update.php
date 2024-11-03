<?php
    include './config.php';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $ssn=$_POST['ssn'];
    $id=$_POST['id'];

    $sql="update people set firstname='$firstname', lastname='$lastname', age='$age', ssn='$ssn' where id='$id'";
    $result = $pdo->query($sql);
    header("location: index.php");
    exit();
    $pdo = null;