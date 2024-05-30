<?php
include("database.php");
session_start();

//
$email=$_SESSION["email"];
try{
   $sql = " SELECT id_profil FROM `users` WHERE email='$email' ";
   $res=mysqli_query($conn,$sql);
 if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
   if(!empty($row["id_profil"])){
    $idpr=$row["id_profil"];   
   }
}
}catch(mysqli_sql_exception $e){
   echo "There is a problem22: " . $e->getMessage();
}
//
//
if(!empty($idpr)){
try{
   $sql = " SELECT image_name FROM `profile` WHERE id='$idpr' ";
   $res=mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    $image_name_self=$row["image_name"]; 
   }  
}catch(mysqli_sql_exception $e){
   echo "There is a problem22: " . $e->getMessage();
}

try{
   $sql = " SELECT name FROM `profile` WHERE id='$idpr' ";
   $res=mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    $name_self=$row["name"]; 
   }  
}catch(mysqli_sql_exception $e){
   echo "There is a problem22: " . $e->getMessage();
}

}
//
//


mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For work Dz</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/96dcb489df.js" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
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
                   <li><a href="#home-page">Home</a></li>
                   <li><a href="#profilesilder">Profiles</a></li>
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

    </section> 

    <!--profilesilder-->
    <h2>Profiles</h2>
    <section id="profilesilder">
        
        <div class="swiper mySwiper container">
            <div class="swiper-wrapper content">
                <div class="swiper-slide card">
                    <div class="box1"></div>
                    <div class="card-content">
                        <div class="image">
                            <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?size=626&ext=jpg&uid=R70460828&ga=GA1.2.1826433234.1647754373" alt="">
                        </div>
                        <div class="media-icons">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="name-profession">
                            <span class="name">User Name</span>
                            <span class="profession">Graphic Designer</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                        <div class="button b1">
                            <button class="aboutMe">See Profile</button>
                            
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="box1"></div>
                    <div class="card-content">
                        <div class="image">
                            <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?size=626&ext=jpg&uid=R70460828&ga=GA1.2.1826433234.1647754373" alt="">
                        </div>
                        <div class="media-icons">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="name-profession">
                            <span class="name">User Name</span>
                            <span class="profession">Graphic Designer</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        
                        <div class="button b1">
                            <button class="aboutMe">See Profile</button>
                            
                        </div>
                    </div>
                </div>

                <div class="swiper-slide card">
                    <div class="box1"></div>
                    <div class="card-content">
                        <div class="image">
                            <img src="https://img.freepik.com/free-photo/bohemian-man-with-his-arms-crossed_1368-3542.jpg?size=626&ext=jpg&uid=R70460828&ga=GA1.2.1826433234.1647754373" alt="">
                        </div>
                        <div class="media-icons">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="name-profession">
                            <span class="name">User Name</span>
                            <span class="profession">Graphic Designer</span>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        
                        <div class="button b1">
                            <button class="aboutMe">See Profile </button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </section>

    <!--entreprise-->
 <div class="contact-form">
        <h1>Annonces d'Entreprise</h1>
        <div class="info-box">
        <p>Spécialité: <span id="specialite"></span></p>
        <p>Annonce: <span id="annonce"></span></p>
        <p>Email: <span id="email"></span></p>
        <p>Téléphone: <span id="telephone"></span></p>
    </div>
    </div>
    </div>

    <script>
    document.getElementById('specialite').innerText = localStorage.getItem('specialite');
    document.getElementById('annonce').innerText = localStorage.getItem('annonce');
    document.getElementById('email').innerText = localStorage.getItem('email');
    document.getElementById('telephone').innerText = localStorage.getItem('telephone');
    </script>

    

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- initializing swiper slider -->
    <script>
        var swiper = new Swiper(".mySwiper", {
          slidesPerView: 3,
          spaceBetween: 30,
          grabCursor: true,
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
              pauseOnMouseEnter: true,
            },
          slidesPerGroup: 1,
          loop: true,
          loopFillGroupWithBlank: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
        </script>
 

</body>
</html>
<?php 
 include("database.php");

 //
 try{

   $sql = " SELECT * FROM `profile`";
   $res=mysqli_query($conn,$sql);

   if(mysqli_num_rows($res)>0){
    while ($row = mysqli_fetch_assoc($res)) {
       $id=$row["id"];
       $name=$row["name"];
       $familyname=$row["familyname"];
       $domaine=$row["domain"];
       $skills=$row["skills"];
       $experience=$row["experience"];
       $wilaya=$row["wilaya"];
       $image_name=$row["image_name"];
      
       echo"<div class='gigs'>";
         echo"<p>";
                  echo "<img src='photos/$image_name' height='200' width='200' class='image_gigs'>";
                  echo "<br>";
                   echo "name:"."  ". $name;
                   echo "<br>";
                   echo  "family name:"."  ". $familyname;
                   echo "<br>";
                   echo  "domaine:"."".$domaine;
                   echo "<br>";
                   echo   "skills:"."  ".$skills;
                   echo "<br>";
                   echo  "wilaya:"."  ".$wilaya;
                   echo "<br>";
                   echo "<a href='profile.php?id=$id'>see profile</a>";
                   echo "<br>";
                  
           echo "</p>";
       echo "</div>";
       echo"
       <style>
       *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Poppins',sans-serif;
      }
      .gigs {
         max-width: 400px;
         margin :100px 50px;
         background-color: rgba(7, 15, 136, 0.5);
         padding: 25px ;
         float: left;
         border: 3px solid black;
         box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
       }
       
       .image_gigs {
         width: 100%;
         object-fit: cover;
       }
       
       .gigs p {
         color: white;
         font-size: 18px;
         line-height: 1.5;
       }
       
       .gigs a {
         display: block;
         background-color: #3498db;
         color: white;
         padding: 10px;
         text-align: center;
         text-decoration: none;
         border-radius: 5px;
         margin-top: 20px;
       }
       </style>
       ";
       
    }
   }
}catch(mysqli_sql_exception $e){
   echo "There is a problem: " . $e->getMessage();
}

mysqli_close($conn);
?>


 