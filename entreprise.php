<!DOCTYPE html PUBLIC "-//W3C/DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1 , minimum-scale=1 , maximum-scale=1, user-scalable=no">
    <title>CSS Responsive Contact Form With Google Map</title>
    <link href="styles/entreprise.css" rel="stylesheet" type="text/css" />
    <link href="https//fonts.googleeapis.com/css?family=Poppins:ital;wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

    <div class="contact-in">
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104321.22320754825!2d-0.548988856701853!3d35.205516807911245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7f0030b5f78f73%3A0x24600b519acfdc29!2z2LPZitiv2Yog2KjZhNi52KjYp9iz4oCO!5e0!3m2!1sar!2sdz!4v1714372345159!5m2!1sar!2sdz" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-form">
        <h1>Entreprise</h1>
            <input type="text" placeholder="Nom" class="contact-form-txt"/>
            <input type="text" placeholder="Addresse" class="contact-form-txt"/>
           <input type="text" placeholder="Email" class="contact-form-txt"/>
           <input type="text" placeholder="Téléphone" class="contact-form-txt"/>
           <input type="text" placeholder="Spécialité" class="contact-form-txt"/>
           <textarea placeholder="Annonce" class="contact-form-txtarea"></textarea>
           <input type="submit" name="Submit" value ="Enregistrer"class="contact-form-btn"/>
           </form>
        </div>
    </div>

    <script>
        function saveData() {
            const nom = document.getElementById('nom').value;
            const adresse = document.getElementById('adresse').value;
            const email = document.getElementById('email').value;
            const telephone = document.getElementById('telephone').value;
            const specialite = document.getElementById('specialite').value;
            const annonce = document.getElementById('annonce').value;

            localStorage.setItem('nom', nom);
            localStorage.setItem('adresse', adresse);
            localStorage.setItem('email', email);
            localStorage.setItem('telephone', telephone);
            localStorage.setItem('specialite', specialite);
            localStorage.setItem('annonce', annonce);

            window.location.href = 'index.html';
        }
    </script>
</body>
</html>