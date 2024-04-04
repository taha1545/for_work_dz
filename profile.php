<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile page</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <!--header section starts-->

       <header>
          <div class="user">
            <img src="photos/user.png" >
            <h3 class="name">User Name</h3>
            <p class="post">Front end developer</p>
          </div>

          <nav class="navbar">
             <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
             </ul>
          </nav>
       </header>
    <!--header section ends-->
     <div id="menu" class="fas fa-bars"></div>

     <!--home section starts-->
      <section class="home" id="home">
         <h3>HI THERE !</h3>
         <h1>I'M <span>User Name</span></h1>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus aut doloremque tempore repellat. Labore, quis accusamus deleniti assumenda consectetur a cumque, adipisci eos dolores tempore illum, pariatur quibusdam dicta distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, minima!
         </p>
         <a href="#about"><button class="btn">About Me <i class="fas fa-user"></i></button></a>
      </section>

     <!--home section ends-->

     <!--about section starts-->
     <section class="about" id="about">
      <h1 class="heading"><span>About</span>Me</h1>
      <div class="row">
         <div class="info">
            <h3><span>Name :</span>User Name</h3>
            <h3><span>Age :</span>19</h3>
            <h3><span>Specialty :</span>Front end developer</h3>
            <h3><span>Language :</span>English</h3>
            <a href="Cv.pdf" download><button class="btn">Download CV <i class="fas fa-download"></i></button></a>
         </div>

         <div class="counter">
            <div class="box">
               <span>2+</span>
               <h3>Years of experience</h3>
            </div>

            <div class="box">
               <span>20+</span>
               <h3>Porject completed</h3>
            </div>

            <div class="box">
               <span>25</span>
               <h3>Happy clients</h3>
            </div>

            <div class="box">
               <span>6+</span>
               <h3>Award win</h3>
            </div>
         </div>
      </div>
     </section>
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
     <section class="Portfolio" id="Portfolio">
      <h1 class="heading">My <span>portfolio</span></h1>
      <div class="box-container">
         <div class="box">
            <img src="photo/img1.jpg" >
         </div>
         <div class="box">
            <img src="photos/img2.jpg">
         </div>
         <div class="box">
            <img src="photos/img3.jpg">
         </div>
         <div class="box">
            <img src="photos/img4.jpg" >
         </div>
         <div class="box">
            <img src="photos/img5.jpg">
         </div>
         <div class="box">
            <img src="photos/img6.jpg" >
         </div>
      </div>
     </section>
     <!--portfolio section ends-->

     <!--contact section starts-->
     <section class="contact" id="contact">
         <h1 class="heading"><span>Contact</span>Me</h1>
         <div class="row">
         <div class="content">
            <h3 class="title">Contact info</h3>
            <div class="info">
               <h3><i class="fas fa-envelope"> </i> jasminebatole123@gmail.com</h3>
               <h3><i class="fas fa-phone"> </i> +213-0000000000</h3>
               <h3><i class="fas fa-map-marker-alt"> </i>SBA</h3>
            </div>
         </div>
      

         <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="text" placeholder="project" class="box">
            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="submit" class="btn">Send <i class="fas fa-paper-plane"></i></button>
         </form>
      </div>
     </section>
     <!--contact section ends-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="profile.js"></script>
</body>
</html>
