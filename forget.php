<!DOCTYPE html>
<html>
    <head>
    <title>For_Work_dz</title>
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
        <title>set email</title> 
        <link rel = stylesheet  href="styles\forget.css"> 
    </head>
<body>
  <div class="form-container">
    <div class="logo-container">
      Forgot Password
    </div>

    <form class="form">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Enter your email" required="">
      </div>

      <!--<button class="form-submit-btn" type="submit">Send Email</button> -->
      <input  type="submit" class="form-submit-btn" placeholder="Send Email" name="ok">
    </form>

    <p class="signup-link">
      Don't have an account?
      <a href="#" class="signup-link link"> Sign up now</a>
    </p>
  </div>
</body>
</html>
<?php
  session_start();
  ob_start();
  include("database.php");
  //
  use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';

//
  if(isset($_POST["ok"]) && isset($_POST["email"])){
     $email=$_POST["email"];
     
     try{
        $sql = " SELECT * FROM `users` WHERE email='$email' ;";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
            $_SESSION["newemail"]=$email;
            $mail = new PHPMailer(true);

try {
$mail->isSMTP(); 
$mail->Host = 'smtp.gmail.com'; 
$mail->SMTPAuth = true; 
$mail->Username = 'societeagrisahel@gmail.com'; 
$mail->Password = 'xwtjkdsecwvqqxpg'; 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
$mail->Port = 465; 


$mail->setFrom("forworkdz@gmail.com","for work dz");
$mail->addAddress($email); 


$mail->isHTML(true); 
$mail->Subject = "change your password";
$alt=rand(1000,9999);
$mail->Body =$alt;
$_SESSION["alt"]=$alt;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
header('location:validacount.php');
} catch (Exception $e) {
echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
header('location:validacount.php');
}}}catch(mysqli_sql_exception $e){
    echo "There is a problem: " . $e->getMessage();
}}   
//
  mysqli_close($conn);
  ob_end_flush();
?>