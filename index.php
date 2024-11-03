<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>mysite</title>
    </head>
    <body>
        <table class="table">
            <tbody>
                <?php include 'read.php'; ?>
            </tbody> 
        </table>
        
        <form class="form-inline m-2"action="create.php" method="POST">
            <label for="firstname">Name:</label>
            <input class="form-control m-2" type="text" name="firstname" id="firstname">
            <label for="lastname">Lastname:</label>
            <input class="form-control m-2" type="text" name="lastname" id="lastname">
            <label for="age">Age:</label>
            <input class="form-control m-2" type="text" name="age" id="age">
            <label for="ssn">SSN:</label>
            <input class="form-control m-2" type="text" name="ssn" id="ssn">
            <button type="submit" class="btn btn-primary" name="add">Add</button>
        </form>
    </body> 
</html>   

