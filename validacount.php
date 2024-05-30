<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
    <title>validication</title>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <input   id="ls" type="password"   name="alt" >
        <input    id="ls1" type="submit" placeholder="submit"  name="ok" >
        <input   style="display:none" id="mistake" type='password' placeholder='new password'  name='newpassword' >
        <input  style="display:none"   id="mistakeok" type='submit' placeholder='change'  name="go" >
</form>
</body>
</html>
<?php
session_start();
ob_start();
include("database.php");
//
if(isset($_POST["ok"]) && isset($_POST["alt"]) && ($_POST["alt"] == $_SESSION["alt"]) ){
 // 
 echo" <script> document.querySelector('#mistake').style.display = 'block'; </script>";
 echo" <script> document.querySelector('#mistakeok').style.display = 'block'; </script>";
 echo" <script> document.querySelector('#ls').style.display = 'none'; </script>";
 echo" <script> document.querySelector('#ls1').style.display = 'none'; </script>";
}


if(isset($_POST["newpassword"]) && isset($_POST["go"]) ){
  //
  $newpassword=$_POST["newpassword"];
  $email=$_SESSION["newemail"];
  //
  try{
    $sql = " SELECT ID FROM `users` WHERE email='$email' ";
    $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
     $row = mysqli_fetch_assoc($res);
    if(!empty($row["ID"])){
     $id=$row["ID"];   
    }}
 }catch(mysqli_sql_exception $e){
    echo "There is a problem22: " . $e->getMessage();
 }
  //
  try{
    $sql = "UPDATE users
    SET  password='$newpassword'
    WHERE id = $id";
     mysqli_query($conn,$sql);
    }catch(mysqli_sql_exception $e){
    echo  $e->getMessage();
    }
    echo"
     <script>
     window.location.href = 'home.php';
       </script>";
}

mysqli_close($conn);
ob_end_flush();
?>