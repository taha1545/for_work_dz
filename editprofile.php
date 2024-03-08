<!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>
   </head>
   <body>
   <form action="editprofile.php" method="post"  enctype="multipart/form-data">

         <label for="name">name:</label><br>
        <input type="text" name="name"><br>

        <label for="familyname">family name:</label><br>
        <input type="text" name="familyname"><br>

        <label for="phone">phone:</label><br>
        <input type="phone" name="phone"><br>

       

        <label for="spc">specialite:</label><br>
        <input type="text" name="spc"><br>

        <lable for="image" >image:</lable>
        <input type="file" name="image"><br>

        <input type="submit" name="login"><br>

    
    </form>
   </body>
   </html>
   <?php
    include("database.php");
   session_start();



    if(isset($_POST["login"]) && !empty($_POST["name"]) && !empty($_POST["familyname"])  && !empty($_POST["phone"])  && !empty($_POST["spc"])){

          $name=$_POST["name"];
          $familyname=$_POST["familyname"];
          $phone=$_POST["phone"];
          $spc=$_POST["spc"];


// insert an image

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$check = getimagesize($_FILES["image"]["tmp_name"]);
if($check !== false) {
  echo "File is an image - " . $check["mime"] . ".";
  $uploadOk = 1;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
} else {
  if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
    
//

        try{
            $sql = "INSERT INTO profile (name,familyname,phone,spect) VALUES ('$name','$familyname','$phone','$spc')";
             mysqli_query($conn,$sql);
            }catch(mysqli_sql_exception){
            echo"there is problem";
            }
           

            //select id
            try{
                $sql = " SELECT id_profile FROM `profile` WHERE name='$name'";
                $res=mysqli_query($conn,$sql);
                if(mysqli_num_rows($res)>0){
                  $row=mysqli_fetch_assoc($res);
                  $id=$row["id_profile"];
                }
                }catch(mysqli_sql_exception){
                echo"there is problem1";
                }

              //add id profile to user;
              $email=$_SESSION["email"];
              try{
                $sql = "UPDATE user SET id_profile = '$id' WHERE email = '$email'";
                 mysqli_query($conn,$sql);
                }catch(mysqli_sql_exception $e){
                    echo "There is a problem: " . $e->getMessage();
                
                }

                header("location:home.php");
            
    }else{
        echo"file the name2";
    }
        mysqli_close($conn);
?>



