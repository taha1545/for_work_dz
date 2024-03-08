<?php
 include("database.php");
  session_start();
  $email=$_SESSION["email"];

  // get id profile

  try{
    $sql = " SELECT id_profile FROM `user` WHERE email='$email'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
      $row=mysqli_fetch_assoc($res);
      $id=$row["id_profile"];
    }
    }catch(mysqli_sql_exception){
    echo"there is problem1";
    }

    // get information mn profile table
    try{
        $sql = " SELECT * FROM `profile` WHERE id_profile='$id'";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
          $row=mysqli_fetch_assoc($res);
          if(isset($row)){
            echo $row["name"] . "<br>";
            echo $row["familyname"]. "<br>";
            echo $row["phone"]. "<br>";
            echo $row["spect"]. "<br>";
        }else{
            echo"please fill the profile";
        }
        }
        }catch(mysqli_sql_exception){
        echo"there is problem1";
        }
       

mysqli_close($conn);
?>
 <a  href="editprofile.php">edit profile</a><br>