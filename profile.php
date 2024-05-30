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


    <!--/////////nav/////////-->
    
    <nav>
      <div class="nav-bar">
       <!-- Toggle button--> 
       <i class='bx bx-menu siderbarOpen' style='color:#1877F2'></i>
       
       <img src="dz.png" class="logo" onclick="goToPage4()">
       <script>
          function goToPage4() {
              window.location.href = "index.html";
          }
      </script>
       
        <div class="nav_menu" >
          <div class="logo-toggle"> 
              <!--<a href="#">For Work</a>
              <div class="logo-sider">
               <img src="dz.png" >
               <h2>For Work</h2>
             </div>
             -->
              <i class='bx bx-x cancel siderbarClose' style='color:#1877F2'></i>
           </div>
           <hr>
          <ul class="nav_lists">
                 <li><a onclick="goToPage5()">Home</a></li>
                 <script>
                  function goToPage5() {
                      window.location.href = "index.html";
                  }
              </script>
                 <li><a onclick="goToPage6()">Profiles</a></li>
                 <script>
                  function goToPage6() {
                      window.location.href = "index.html";
                  }
              </script>
                 <li><a onclick="goToPage1()">About Us</a></li>
                 <script>
                  function goToPage1() {
                      window.location.href = "aboutus.html";
                  }
              </script>
                 <li><a onclick="goToPage2()" >FAQs</a></li>
                 <script>
                  function goToPage2() {
                      window.location.href = "FAQs.html";
                  }
              </script>
                 <li><a onclick="goToPage3()">Contact Us</a></li>
                 <script>
                  function goToPage3() {
                      window.location.href = "contactus.html";
                  }
              </script>
          </ul>
        </div>

        <div class="nav_action">
           <div class="searchBox">
              <div class="searchToggle">
                 <i class='bx bx-x cancel'></i>
                 <i class='bx bx-search search'></i>
                 
              </div>
                 <div class="search-field">
                      <input type="text" placeholder="Search...">
                      <i class='bx bx-search '></i>
                 </div>
              
           </div>
           <div class="email">
              <i class='bx bx-envelope'></i> 
           </div>
           <div class="notification">
              <i class='bx bxs-bell'></i>
           </div>

             
                  <!--/////////////profile//////////////////-->

                 
                  <img  src="<?php 
                    
                    if(isset($image_name_self)){
                      echo "photos/".$image_name_self;
                    }else{
                      echo "photos/user.png";
                    }
                  ?>
                 " class="img-prof" onclick="toggleMenu()">
           
           
                 <div class="sub-menu-wrap" id="subMenu">
                 <div class="sub-menu">
                     <div class="user-info">

                       <img src="<?php 
                    
                   if(isset($image_name_self)){
                     echo "photos/".$image_name_self;
                   }else{
                     echo "photos/user.png";
                   }
                 ?>" >

                       
                       <h3>
                       <?php 
                   if(isset($name_self)){
                     echo $name_self;
                   }else{
                     echo "user name";
                   }
                 ?>
                       </h3>

                     </div>
                     <hr>

                     <a href="#" class="sub-menu-link">
                        <img src="profile.png">
                        <p>Edit Profile</p>
                        <span>></span>
                     </a>

                     <a href="#" class="sub-menu-link">
                        <img src="setting.png">
                        <p>Setting</p>
                        <span>></span>
                     </a>

                     <a href="#" class="sub-menu-link">
                        <img src="help.png">
                        <p>Help & Support</p>
                        <span>></span>
                     </a>

                     <a href="#" class="sub-menu-link">
                        <img src="logout.png">
                        <p>Logout</p>
                        <span>></span>
                     </a>

                     
                  </div>
            </div>
              </div>
            </div>
            
        </nav>
        <script src="navbar.js"></script>
    <!--header section starts-->
       <header>
          <div class="user">
            <img src="photos/user.png" >
            <h3 class="name">User Name</h3>
            <p class="post">Front end developer</p>
          </div>
          <div class="navbar">
             <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Education</a></li>
                <li><a href="#Portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
             </ul>
            </div>
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
               <h3><i class="fas fa-envelope"> </i> senpaimato5@gmail.com</h3>
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
