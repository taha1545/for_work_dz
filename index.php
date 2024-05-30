<?php
ob_start();
  session_start();
 //
  if(isset($_COOKIE['email']) && isset( $_COOKIE['password'])  && empty($_GET["destroy"])){
    $_SESSION["email"]= $_COOKIE['email'];
    echo"
     <script>
     window.location.href = 'home.php';
       </script>";} 
       else if (isset($_COOKIE['email']) && isset( $_COOKIE['password'])  && isset($_GET["destroy"])){
    setcookie('email', "jhsdjkas", time() -3600, '/');
    setcookie('password', "iahcaidj", time() -3600, '/');
 }
//
 ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For_Work_dz</title>
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section>
        <div class="imgBx">
            <img src="photos/brandi-redd-aJTiW00qqtI-unsplash.jpg" alt="Background Image" >
            <img src="photos/dz.png" alt="Logo" class="Logo">
            <h1>FOR WORK</h1>
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <p>Welcome ! Please login to your account</p>
                <br>
             
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="inputBx">
                        <span>Email</span>
                        <i class='bx bxs-envelope' style='color:#0085ff'></i>
                        <input type="email" placeholder="Enter your Email" name="email" required>
                    </div>
                    <div class="inputBx">
                        <div class="input__overlay" id="input-overlay"></div>
                        <span>Password</span>
                        <input type="password" class="input__password" placeholder="Enter your Password" id="input-pass" name="password" required>
                        <i class='bx bxs-hide input__icon'style='color:#0085ff' id="input-icon"></i>
                        <p style="display:none" id="mistake" >incorect password !</p>
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="check">Remember my account</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Log in" name="login" >
                    </div>
                        <a href="forget.php">Forgot  Password ?</a>
            </form>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
<?php
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 
 require 'phpmailer/src/Exception.php';
 require 'phpmailer/src/PHPMailer.php';
 require 'phpmailer/src/SMTP.php';
 //
     ob_start();
     include("database.php");
        //
  if( isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"]) ){ 
        //
      $email=$_POST["email"];
      $password=$_POST["password"]; 
        //
       $valid=false;
       $mistak=false;
        //
        try{
        $sql = " SELECT * FROM `users` WHERE email='$email' ";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
         $row = mysqli_fetch_assoc($res);
        //
            if( $email == $row["email"] && $password == $row["password"] ){
                   $valid = true;
            }else if ($email == $row["email"] && $password != $row["password"]){
                   $mistak = true;
                   $valid=true;
            }else{
                $valid=false;
                $mistak=false;
            } }
    }catch(mysqli_sql_exception $e){
        echo "There is a problem: " . $e->getMessage();
    }
       //
    if( $valid && !$mistak ){
        $_SESSION["email"]= $email;
        if (isset($_POST["check"])) {
            setcookie('email', $email, time() + 60 * 60 * 24 * 30, '/');
            setcookie('password', $password, time() + 60 * 60 * 24 * 30, '/');
        }
        echo"
     <script>
     window.location.href = 'home.php';
       </script>";
    }else if( $mistak  && $valid ){
       echo" <script> document.querySelector('#mistake').style.display = 'block'; </script>";
    }else{
          $_SESSION["email"]= $email;
        //
          if (isset($_POST["check"])) {
            setcookie('email', $email, time() + 60 * 60 * 24 * 30, '/');
            setcookie('password', $password, time() + 60 * 60 * 24 * 30, '/');
        }
        //
        try {
            $mail = new PHPMailer(true);
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
            $mail->Subject = "for work dz sign in";
            $mail->Body ="welcome to for work site";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                 $mail->send();
                $sql = "INSERT INTO users (email,password) VALUES ('$email','$password')";
                 mysqli_query($conn,$sql);
                
            } catch (Exception ) {
            echo "<p>email does not exsiste</p>";
            }
            echo"
            <script>
            window.location.href = 'home.php';
              </script>";
    }}
         //
 mysqli_close($conn);
 ob_end_flush();
?>
