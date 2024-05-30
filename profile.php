<?php
ob_start();
include("database.php");
session_start();
////////////////////////////////////////
 if(isset($_GET["id"])&& $_GET["id"] == 0  ){
//
$email=$_SESSION["email"];
$emailpr=$email;
$_SESSION["emailpr"]=$emailpr;
//
try{
 $sql = " SELECT id_profil FROM `users` WHERE email='$email' ";
 $res=mysqli_query($conn,$sql);

 if(mysqli_num_rows($res)>0){
  $row = mysqli_fetch_assoc($res);
 }  
 
}catch(mysqli_sql_exception $e){
 echo "There is a problem22: " . $e->getMessage();
}
///////////////////////////////////////////////
if(isset($row["id_profil"] )){
 $idprofile= $row["id_profil"];
 try{
   $sql = " SELECT * FROM `profile` WHERE id='$idprofile' ";
   $res=mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
     $name=$row["name"];
     $familyname= $row["familyname"];
     $phone= $row["phone"];
     $date=$row["date"];
     $wilaya=$row["wilaya"];
     $domaine=$row["domain"];
     $skills=$row["skills"];
     $Experience=$row["experience"];
     $image=$row["image_name"];
     $diplome= $row["diplome_name"];
   }  
}catch(mysqli_sql_exception $e){
   echo "There is a problem22: " . $e->getMessage();
}
}
//////////////////////////////////////////////
 }else{ 
   if(isset($_GET["id"])){
   $idprofile= $_GET["id"];
   try{
      $sql = " SELECT * FROM `profile` WHERE id='$idprofile' ";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0){
       $row = mysqli_fetch_assoc($res);
       $name=$row["name"];
       $familyname= $row["familyname"];
       $phone= $row["phone"];
       $date=$row["date"];
       $wilaya=$row["wilaya"];
       $domaine=$row["domain"];
       $skills=$row["skills"];
       $Experience=$row["experience"];
       $image=$row["image_name"];
       $diplome= $row["diplome_name"];
      }  
   }catch(mysqli_sql_exception $e){
      echo "There is a problem22: " . $e->getMessage();
   }
   try{
      $sql = " SELECT email FROM `users` WHERE id_profil='$idprofile' ";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0){
       $row = mysqli_fetch_assoc($res);
       $emailpr=$row["email"];
       $_SESSION["emailpr"]=$emailpr;
      }  
   }catch(mysqli_sql_exception $e){
      echo "There is a problem22: " . $e->getMessage();
   }
  }}
mysqli_close($conn);
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
    <title>profile </title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
       <header>
          <div class="user">
            <img src="<?php 
               if(isset($image)){
                     echo "photos/".$image;
               } else{
                   echo "photos/user.png";
               }
            ?>" >

            <h3 class="name"><?php 
               if(isset($name)){
                     echo "".$name."";
               } else{
                   echo "user name";
               }
            ?></h3>
            <p class="post"><?php 
               if(isset($skills)){
                     echo "".$skills."";
               } else{
                   echo "no skill defined";
               }
            ?></p>
          </div>
          <nav class="navbar">
             <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.html">About</a></li>
                <li><a href="FAQs.html">FAQs</a></li>
                <li><a href="contactus.php">Contact</a></li>
             </ul>
          </nav>
       </header>
    <!--header section ends-->
     <div id="menu" class="fas fa-bars"></div>
     <!--home section starts-->
      <section class="home" id="home">
         <h3>HI THERE !</h3>
         <h1>I'M <span><?php 
               if(isset($name)){
                     echo "".$name."";
               } else{
                   echo "user name";
               }
            ?></span></h1>
         <p><?php 
               if(isset($Experience)){
                     echo "".$Experience."";
               } else{
                   echo "no Experience ";
               }
            ?></p>
         <a href="#about"><button class="btn">About Me <i class="fas fa-user"></i></button></a>
      </section>
     <!--home section ends-->
     <!--about section starts-->
     <section class="about" id="about">
      <h1 class="heading"><span>About</span>Me</h1>
      <div class="row">
         <div class="info">
            <h3><span>Name :</span><?php 
               if(isset($name)){
                     echo "".$name."";
               } else{
                   echo "user name";
               }
            ?></h3>
            <h3><span>birthday :</span><?php 
               if(isset($date)){
                     echo "".$date."";
               } else{
                   echo "1/1/1996";
               }
            ?></h3>
            <h3><span>Specialty :</span><?php 
               if(isset($skills)){
                     echo "".$skills."";
               } else{
                   echo "no skill found";
               }
            ?></h3>
            <h3><span>Language :</span>English</h3>
            <a href="<?php 
               if(isset($diplome)){
                     echo"photos/". $diplome;
               } else{
                   echo "cv.pdf";
               }
            ?>" download><button class="btn">Download CV <i class="fas fa-download"></i></button></a>
         </div>
          <!--about section ends-->
     <!--education section starts-->
       <section class="education" id="education">
         <h1 class="heading">My <span>Education</span></h1>
         <div class="box-container">
            <div class="box">
               <i class="fas fa-graduation-cap"></i>
               <span>2016</span>
               <h3>Front end development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis quis labore consequuntur doloremque eius ratione, excepturi dicta porro obcaecati atque. Voluptate laudantium ex itaque! Sit quibusdam ex fugit vitae!</p>
            </div>
            <div class="box">
               <i class="fas fa-graduation-cap"></i>
               <span>2017</span>
               <h3>Front end development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis quis labore consequuntur doloremque eius ratione, excepturi dicta porro obcaecati atque. Voluptate laudantium ex itaque! Sit quibusdam ex fugit vitae!</p>
            </div>
            <div class="box">
               <i class="fas fa-graduation-cap"></i>
               <span>2018</span>
               <h3>Front end development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis quis labore consequuntur doloremque eius ratione, excepturi dicta porro obcaecati atque. Voluptate laudantium ex itaque! Sit quibusdam ex fugit vitae!</p>
            </div>
            <div class="box">
               <i class="fas fa-graduation-cap"></i>
               <span>2019</span>
               <h3>Front end development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis quis labore consequuntur doloremque eius ratione, excepturi dicta porro obcaecati atque. Voluptate laudantium ex itaque! Sit quibusdam ex fugit vitae!</p>
            </div>
            <div class="box">
               <i class="fas fa-graduation-cap"></i>
               <span>2020</span>
               <h3>Front end development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis quis labore consequuntur doloremque eius ratione, excepturi dicta porro obcaecati atque. Voluptate laudantium ex itaque! Sit quibusdam ex fugit vitae!</p>
            </div>
            <div class="box">
               <i class="fas fa-graduation-cap"></i>
               <span>2021</span>
               <h3>Front end development</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque perspiciatis quis labore consequuntur doloremque eius ratione, excepturi dicta porro obcaecati atque. Voluptate laudantium ex itaque! Sit quibusdam ex fugit vitae!</p>
            </div>
         </div>
      </section>
     <!--education section ends-->
     <!--portfolio section starts-->
    
      </div>
     <!--contact section starts-->
     <section class="contact" id="contact">
         <h1 class="heading"><span>Contact</span>Me</h1>
         <div class="row">
         <div class="content">
            <h3 class="title">Contact info</h3>
            <div class="info">
               <h3><i class="fas fa-envelope"> </i> <?php
               if(isset($emailpr)){
                  echo $emailpr;
               }else{
                  echo" no email found";
               }
               
               ?></h3>
               <h3><i class="fas fa-phone"> </i> 
               <?php
                 if(isset($phone)){
                  echo $phone;
               }else{
                  echo" no email found";
               }
               ?>
            </h3>
               <h3><i class="fas fa-map-marker-alt"> </i><?php
                if(isset($wilaya)){
                  echo $wilaya;
               }else{
                  echo" no email found";
               }
               ?></h3>
            </div>
         </div>
      
         <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input type="text" placeholder="name" class="box" name="name">
            <input type="email" placeholder="email" class="box" name="email">
            <input type="text" placeholder="project" class="box"  name="project">
            <input   type="text" cols="30" rows="10" class="box message" placeholder="message" name="text">
            <input type="submit" class="btn" value="send" name="send"> 
         </form>
      </div>
     </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
</body>
</html>
<?php
 ob_start();
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 //required files
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
 
  $emailpr=$_SESSION["emailpr"];

 if(isset($_POST["send"])){
//
$mail = new PHPMailer(true);
//
try {
$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true;
$mail->Username = 'societeagrisahel@gmail.com'; 
$mail->Password = 'xwtjkdsecwvqqxpg'; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
$mail->Port = 465; 

$mail->setFrom($_POST["email"],$_POST["name"]);
$mail->addAddress($emailpr); 


$mail->isHTML(true); 
$mail->Subject = $_POST["project"];
$mail->Body = $_POST["text"];
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
header('location:home.php');
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
header('location:home.php');
}}
//
ob_end_flush();
?>
