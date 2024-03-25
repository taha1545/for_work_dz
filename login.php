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
                <p>Welcome back ! Please login to your account.</p>
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

                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="remembre_password">Remember password</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Log in" name="login" >
                    </div>
                    
                        <a href="#">Forgot Username Password ?</a>
                </form>
                <h3 class="words">Or login with</h3>
                <ul class="sci">     
                    <li><img src="photos/social1.png" style="width: 40px;"></li>
                    <li><img src="photos/facebook-64x64.png" style="width: 50px;"></li>
                </ul>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
<?php
 include("database.php");
  session_start(); 
  if( isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["password"]) ){
      $email=$_POST["email"];
      $password=$_POST["password"];
      

     //
       $valid=false;
       $mistak=false;
      try{
        $sql = " SELECT * FROM `users`";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
         while ($row = mysqli_fetch_assoc($res)) {

            if( $email == $row["email"] && $password == $row["password"] ){
                   $valid = true;
            }else if ($email == $row["email"] && $password != $row["password"]){
                   $mistak = true;
            }else{
                $valid=false;
                $mistak=false;
            }
         }
        }
    }catch(mysqli_sql_exception $e){
        echo "There is a problem: " . $e->getMessage();
    }


    //
    if( $valid && !$mistak ){
        $_SESSION["email"]= $email;
        header("location:home.php");
    }else if( $mistak ){
         echo"incorect password";
    }else{
          $_SESSION["email"]= $email;
          try{
            $sql = "INSERT INTO users (email,password) VALUES ('$email','$password')";
             mysqli_query($conn,$sql);
            }catch(mysqli_sql_exception){
            echo"there is problem";
            }
         header("location:home.php");
        
    }

    }
  

 mysqli_close($conn);
?>