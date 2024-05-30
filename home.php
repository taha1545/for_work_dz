<?php
ob_start();
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
   }}
}catch(mysqli_sql_exception $e){
   echo "There is a problem22: " . $e->getMessage();
}
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
//
try{
   $sql = " SELECT name FROM `profile` WHERE id='$idpr' ";
   $res=mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
    $row = mysqli_fetch_assoc($res);
    $name_self=$row["name"]; 
   }  
}catch(mysqli_sql_exception $e){
   echo "There is a problem22: " . $e->getMessage();
}}
//
mysqli_close($conn);
ob_end_flush();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For work Dz</title>
    <link rel="stylesheet" href="styles/home.css">
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
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
         <p>platform for managing job  CVs</p>
         <a href="FAQs.html">Learn More</a>
        </div>


    <!--/////////nav/////////-->
        <nav>
            <div class="nav-bar">
             <!-- Toggle button--> 
             <i class='bx bx-menu siderbarOpen' style='color:#1877F2'></i>
             

             <img src="photos/dz.png" class="logo">

             
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
                       <li> <a href="home.php">Home</a></li>
                       <li> <a href="profile.php?id=0">my profile</a></li>
                       <li> <a href="aboutus.html">About Us</a></li>
                       <li> <a href="FAQs.html">FAQs</a></li>
                       <li> <a href="contactus.php">Contact Us</a></li>
                </ul>
              </div>

              <div class="nav_action">
                 <div class="searchBox">
                    <div class="searchToggle">
                       <i class='bx bx-x cancel'></i>
                       <i class='bx bx-search search'></i>
                       
                    </div>
                       <div class="search-field">
                       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                           <input type="text" placeholder="Search..." name="search">
                            <i class='bx bx-search '></i>
                           </form>
                        
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

                     <a href="editprofile.php" class="sub-menu-link">
                        <img src="photos/profile.png">
                        <p>Edit Profile</p>
                        <span>></span>
                     </a>

                     <a href="FAQs.html" class="sub-menu-link">
                        <img src="photos/setting.png">
                        <p>Setting</p>
                        <span>></span>
                     </a>

                     <a href="aboutus.html" class="sub-menu-link">
                        <img src="photos/help.png">
                        <p>Help & Support</p>
                        <span>></span>
                     </a>

                     <a href="index.php?destroy=true" class="sub-menu-link">
                        <img src="photos/logout.png">
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
</body>
</html>
<?php 
 ob_start();
 include("database.php");
 //
 if(!empty($_POST["search"])){
 $search=$_POST["search"];}
 //
 if(empty($search)){
 //
 try{
   $sql = " SELECT * FROM `profile`";
   $res=mysqli_query($conn,$sql);
   if(mysqli_num_rows($res)>0){
      echo"
      <!--profilesilder-->
      <h2>Profiles</h2>
      <section id='profilesilder'>
           
       <div class='swiper mySwiper container'>
           <div class='swiper-wrapper content'>          
      ";
    while ($row = mysqli_fetch_assoc($res)) {
       $id=$row["id"];
       $name=$row["name"];
       $familyname=$row["familyname"];
       $domaine=$row["domain"];
       $skills=$row["skills"];
       $experience=$row["experience"];
       $wilaya=$row["wilaya"];
       $image_name=$row["image_name"];
      //
       echo"
       <div class='swiper-slide card'>
       <div class='box1'></div>
                   <div class='card-content'>
                       <div class='image'>
                           <img src=' photos/$image_name' alt=''>
                       </div>
                       <div class='media-icons'>
                           <i class='fab fa-facebook'></i>
                           <i class='fab fa-twitter'></i>
                           <i class='fab fa-github'></i>
                       </div>
                       <div class='name-profession'>
                           <span class='name'>$name</span>
                           <span class='profession'>$skills</span>
                       </div>
                       <div class='rating'>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                           <i class='fas fa-star'></i>
                       </div>
                       
                       <div class='button b1'>
                           <a  href='profile.php?id=$id' class='aboutMe'>See Profile</a>
                           
                       </div>
                   </div>
                   </div>
                   
              
       "; }
    echo"       
      </div>
      </div>
    <div class='swiper-button-next'></div>
    <div class='swiper-button-prev'></div>
    <div class='swiper-pagination'></div>
</section>
<script src='https://unpkg.com/swiper@8/swiper-bundle.min.js'></script>
<!-- initializing swiper slider -->
<script>
    var swiper = new Swiper('.mySwiper', {
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
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    </script>
    ";
   }
}catch(mysqli_sql_exception $e){
   echo "There is a problem: " . $e->getMessage();
}}else{
   try{
      $sql = " SELECT * FROM `profile` WHERE name='$search' or  familyname='$search'or domain='$search'  ";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0){
         echo"
         <!--profilesilder-->
         <h2>Profiles</h2>
         <section id='profilesilder'>
              
          <div class='swiper mySwiper container'>
              <div class='swiper-wrapper content'>          
         ";
       while ($row = mysqli_fetch_assoc($res)) {
          $id=$row["id"];
          $name=$row["name"];
          $familyname=$row["familyname"];
          $domaine=$row["domain"];
          $skills=$row["skills"];
          $experience=$row["experience"];
          $wilaya=$row["wilaya"];
          $image_name=$row["image_name"];
         //
          echo"
          <div class='swiper-slide card'>
          <div class='box1'></div>
                      <div class='card-content'>
                          <div class='image'>
                              <img src=' photos/$image_name' alt=''>
                          </div>
                          <div class='media-icons'>
                              <i class='fab fa-facebook'></i>
                              <i class='fab fa-twitter'></i>
                              <i class='fab fa-github'></i>
                          </div>
                          <div class='name-profession'>
                              <span class='name'>$name</span>
                              <span class='profession'>$skills</span>
                          </div>
                          <div class='rating'>
                              <i class='fas fa-star'></i>
                              <i class='fas fa-star'></i>
                              <i class='fas fa-star'></i>
                              <i class='fas fa-star'></i>
                              <i class='fas fa-star'></i>
                          </div>
                          
                          <div class='button b1'>
                              <a  href='profile.php?id=$id' class='aboutMe'>See Profile</a>
                              
                          </div>
                      </div>
                      </div>
                      
                 
          "; }
       echo"       
         </div>
         </div>
       <div class='swiper-button-next'></div>
       <div class='swiper-button-prev'></div>
       <div class='swiper-pagination'></div>
   </section>
   <script src='https://unpkg.com/swiper@8/swiper-bundle.min.js'></script>
   <!-- initializing swiper slider -->
   <script>
       var swiper = new Swiper('.mySwiper', {
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
           el: '.swiper-pagination',
           clickable: true,
         },
         navigation: {
           nextEl: '.swiper-button-next',
           prevEl: '.swiper-button-prev',
         },
       });
       </script>
       ";
      }else{
         echo"
           <h3>.................no result found !!</h3>
         ";
      }
   }catch(mysqli_sql_exception $e){
      echo "There is a problem: " . $e->getMessage();
   }
}
//
mysqli_close($conn);
ob_end_flush();
?>
