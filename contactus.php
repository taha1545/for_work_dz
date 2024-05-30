<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles/contactus.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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
    <div class="container">
      <span class="big-circle"></span>
      <img src="shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Contact us</h3>
          <p class="text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
            dolorum adipisci recusandae praesentium dicta!
          </p>

          <div class="info">
            <div class="information">
              <img src="photos/location_1420916.png" class="icon"  />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="photos/mail_9068642.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="photos/telephone_724664.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="contactus.js"></script>
  </body>
</html>