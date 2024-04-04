<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For work Dz</title>
    <link rel="stylesheet" href="home.css">
    <script src="https://kit.fontawesome.com/96dcb489df.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <!-- section acceuil -->
    <div class="single-box" >
    </div>

     <section id="home-page">
        
        <div class="banner">
         <h2>For Work</h2>
         <p>une plateforme de gestion des CVs des demandeurs d'emplois</p>
         <a href="#">Learn More</a>
        </div>
    
    <!--/////////nav/////////-->
    
        <nav>
            <div class="nav-bar">
             <!-- Toggle button--> 
             <i class='bx bx-menu siderbarOpen' style='color:#1877F2'></i>
             

             <img src="dz.png" class="logo">

             
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
                       <li> <a href="#home-page">Home</a></li>
                       <li> <a href="categories.html">Catégories</a></li>
                       <li> <a href="#about-us">About Us</a></li>
                       <li> <a href="#faqs">FAQs</a></li>
                       <li> <a href="#contact-us">Contact Us</a></li>
                    
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
                 <img src="user.png" class="img-prof" onclick="toggleMenu()">
             <div class="sub-menu-wrap" id="subMenu">
                 <div class="sub-menu">
                     <div class="user-info">
                       <img src="user.png" >
                       <a href="profile.html"><h3>User Name</h3></a>
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

    </section> 
    <!-- section about us -->
    <section id="about-us">
      <br>
      <br>
      <div class="heading">
        <h1>About Us</h1>
        <p>Bridging Careers, Shaping Futures: Explore Our Journey.</p>
        </div>
        
        <div class="cont-us">
          <section class="about">
          <div class="about-image">
            <img src="photos/photo1712229956.jpeg">
          </div>
                <div class="about-content">
                    <h2>Where Careers Flourish and Futures Connect</h2>
                    <p> Our Story:

                        At For Work, we are dedicated to facilitating connections between businesses and job seekers. Founded with the vision of creating meaningful opportunities for both employers and individuals, our mission is to bridge the gap in the employment market.
                        
                        Our platform serves as a comprehensive solution, offering not only job listings but also training programs tailored to the needs of both employers and job seekers. We believe in empowering individuals to reach their full potential while helping businesses thrive through access to top talent.  
                             Our Mission :
                        
                        Connect businesses with talented individuals
                        Provide job seekers with opportunities for growth and development
                        Offer training programs to enhance skills and expertise
                        Foster a community that values collaboration and innovation
                        Join us in our mission to reshape the future of work and create a world where every individual has the opportunity to succeed .</p>
                      
                <a href="" class ="read-more">Read More</a>
                

                    </div>
                  </section>
        </div>
    </section>

    <!-- section FAQS -->

    <section id="faqs">
      <div class="accordion">
        <div class="image-box">
          <img src="photos/mainImg.png" alt="Accordion Image">
        </div>
        <div class="accordion-text">
          <div class="title">FAQs</div>
        <ul class="faq-text">
          <li>
            <div class="question-arrow">
              <span class="question">Comment  puis -je postuler à une offre d’emploi ?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Pour postuler , il vous suffit de créer un compte et de soumettre votre CV .</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">Combien de temps faut-il pour obtenir une réponse à ma
                candidature ?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Nous nous efforçons de répondre dans les 5 jours ouvrables.</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">Puis-je modifier mon CV après l’avoir soumis ?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Oui, vous pouvez modifier votre CV à tout moment dans votre profil .</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">Quels type d’emplois sont disponibles sur la plateforme ?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Nous avons des emplois pour tous les niveaux de compétence et d'intérêt, de la menuiserie à la programmation.</p>
            <span class="line"></span>
          </li>
          <li>
            <div class="question-arrow">
              <span class="question">Y a-t-il des frais pour postuler à un emploi
                sur la plateforme?</span>
              <i class="bx bxs-chevron-down arrow"></i>
            </div>
            <p>Non, postuler à un emploi est entièerement gratuit.</p>
            <span class="line"></span>
          </li>
        </ul>
        </div>
      </div>
    
    
      <script src="FAQs.js"></script>
  </section> 


    <!-- section contact-us -->
    <section id="contact-us">
           <br>
           <br>
           <br>
        <div class="container">
           <!--<span class="big-circle"></span>
            <img src="shape.png" class="square" alt="" />--> 
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Contact us</h3>
                <p class="text">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                  dolorum adipisci recusandae praesentium dicta!
                </p>
      
                <div class="info">
                  <div class="information">
                    <img src="location_1420916.png" class="icon"  />
                    <p>92 Cherry Drive Uniondale, NY 11553</p>
                  </div>
                  <div class="information">
                    <img src="mail_9068642.png" class="icon" alt="" />
                    <p>lorem@ipsum.com</p>
                  </div>
                  <div class="information">
                    <img src="telephone_724664.png" class="icon" alt="" />
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
    </section> 


<script>
    var menu_toggle = document.querySelector('nav_menu .nav_lists'); 
    var menu = document.querySelector('nav_menu .nav_lists');
    menu_toggle.onclick = function(){
        menu_toggle.classList.toggle('active') ; 
        menu.classList.toggle('responsive') ; 
    }
</script>

<script src="navbar.js"></script>

</body>
</html>
<?php 


?>