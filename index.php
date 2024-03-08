<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for_work_dz</title>
</head>
<body>
    <form action="index.php" method="post">
         <label for="email">email:</label><br>
        <input type="text" name="email"><br>
        <label for="password">password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login"><br>
    </form>
</body>
</html>


<?php
    include("database.php");
    session_start();

    if(isset($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
        $email=$_POST["email"];
        $password=$_POST["password"];
        $_SESSION["email"]=$email;
        try{
            $sql = "INSERT INTO user (email,password) VALUES ('$email','$password')";
             mysqli_query($conn,$sql);
            }catch(mysqli_sql_exception){
            echo"there is problem";
            }
         header("location:home.php");
        
    }else{
        echo"file the name";
    }
    
    

    mysqli_close($conn);
?>