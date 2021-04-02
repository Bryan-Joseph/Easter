<!DOCTYPE html>
<?php
    include "connection.php";
?>
<html lang="en">
<head>
    <title>Join the easter chat group</title>
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Fill this form to get details about easter chat group.</h1>
        <form action="" method="POST">
            <div class="form-group col-md-4">
                <label for="name">Full Name :</label>
                <input type="text" class="form-control" placeholder="Enter full name" name="name">
            </div>
            <div class="form-group col-md-4">
                <label for="email">Email :</label>
                <input type="text" class="form-control" placeholder="Enter email" name="email">
            </div>
            <div class="form-group col-md-4">
                <input type="submit" name="submitI">
            </div>
        </form>
    </div>
</body>
<?php
    if (isset($_POST["submitI"])) {
        $to = $_POST["email"];
        $name = $_POST["name"];
        $subject = "Details for chat group";
        $message = "Hi $name , I welcome you to the easter chat group At 12:00 in the afternoon at easter sunday please open this link https://chat-website-byan.herokuapp.com/ and type the room as 13568924681";
        $header = "From: josephbryan997@gmail.com";


        mysqli_query($link,"insert into echat (fullname,email) values ('$_POST[name]','$_POST[email]')") or die(mysqli_error($link));
        if ( mail($to,$subject,$message,$header)) {
            echo "succecsess";
        }else{
            echo "fail";
        }
            
    }
?>
</html>