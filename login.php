<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For_Work_dz</title>
    <link rel="icon" href="dz.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <section>
        <div class="imgBx">
            <img src="brandi-redd-aJTiW00qqtI-unsplash.jpg" alt="Background Image" >
            <img src="dz.png" alt="Logo" class="Logo">
            <h1>FOR WORK</h1>
        </div>
        <div class="contentBx">
            <div class="formBx">
                <h2>Login</h2>
                <p>Welcome back ! Please login to your account.</p>
                <br>
                
                <form action="#">
                    <div class="inputBx">
                        <span>Email</span>
                        <i class='bx bxs-envelope' style='color:#0085ff'></i>
                        <input type="email" placeholder="Enter your Email" required>
                        
                    </div>
                    <div class="inputBx">
                        <div class="input__overlay" id="input-overlay"></div>
                        <span>Password</span>
                        <input type="password" class="input__password" placeholder="Enter your Password" id="input-pass" required>
                        <i class='bx bxs-hide input__icon'style='color:#0085ff' id="input-icon"></i>

                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Remember password</label>
                    </div>
                    <div class="inputBx">
                        <input type="submit" value="Log in" name="" >
                    </div>
                    
                        <a href="#">Forgot Username Password ?</a>
                </form>
                <h3 class="words">Or login with</h3>
                <ul class="sci">     
                    <li><img src="social1.png" style="width: 40px;"></li>
                    <li><img src="facebook-64x64.png" style="width: 50px;"></li>
                </ul>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
