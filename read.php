<?php
    include_once './config.php';

    $sql="select * from people";
    $result = $pdo->query($sql);
    while($row=$result->fetch(PDO::FETCH_ASSOC)){
        if($row['id'] == $_GET['id']){
            echo '<form class="form-inline m-2" action="update.php" method="POST">';
            echo '<td><input type="text" class="form-control" name="firstname" value="'.$row['firstname'].'"></td>';
            echo '<td><input type="text" class="form-control" name="lastname" value="'.$row['lastname'].'"></td>';
            echo '<td><input type="number" class="form-control" name="age" value="'.$row['age'].'"></td>';
            echo '<td><input type="text" class="form-control" name="ssn" value="'.$row['ssn'].'"></td>';
            echo '<td><button type="submit" class="btn btn-primary">Save</button></td>';
            echo '<input type="hidden" name="id" value="'.$row['id'].'">';
            echo '</form>';
        }else{
            echo "<tr>";
            echo "<td>".$row['firstname']. "</td>";
            echo "<td>".$row['lastname']. "</td>";
            echo "<td>".$row['age']. "</td>";
            echo "<td>".$row['ssn']. "</td>";
            echo '<td><a class="btn btn-primary" href="index.php?id='.$row['id'].'" role="button">Update</a></td>';
            echo '<td><a class="btn btn-danger" href="delete.php?id='.$row['id'].'" role="button">Delete</a></td>';
            echo "</tr>";
        }
    }
    

?>
