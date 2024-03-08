<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addgig</title>
</head>
<body>
<form action="addgig.php" method="post">
         <label for="type">text:</label><br>
        <input type="text" name="type"><br>
        <input type="submit" name="login"><br>
    </form>
    
</body>
</html>
<?php

   include("database.php");
   session_start();


   
    if(isset($_POST["login"])){
        // insert text to gig
        $type=$_POST["type"];
        try{
            $sql = "INSERT INTO  gig (text) VALUES ('$type')";
             mysqli_query($conn,$sql);
            }catch(mysqli_sql_exception){
            echo"there is problem";
            }


            //get id_gig
            try{
                $sql = " SELECT id_gig FROM `gig` WHERE text='$type'";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0){
                  $row=mysqli_fetch_assoc($res);
                  $id=$row["id_gig"];//
                }
                }catch(mysqli_sql_exception){
                echo"there is problem1";
                }

              //change id_gig in table user
                $email=$_SESSION["email"];
                try{
                  $sql = "UPDATE user SET id_gig = '$id' WHERE email = '$email'";
                   mysqli_query($conn,$sql);
                  }catch(mysqli_sql_exception $e){
                      echo "There is a problem: " . $e->getMessage();
                  
                  }
                  header("location:home.php");
    }


?>