<?php
    include_once './config.php';
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $ssn=$_POST['ssn'];

    $sql="insert into people(firstname,lastname,age,ssn) values ('$firstname','$lastname','$age','$ssn')";
    $pdo->query($sql);

    header('location: index.php');
    exit();
?>  