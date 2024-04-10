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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles\home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!--/////////nav/////////-->
        <nav>
            <div class="nav-bar">
             <i class='bx bx-menu siderbarOpen' style='color:#ffffff'  ></i>
             
             
             <img src="photos/dz.png" class="logo">

             
              <div class="nav_menu" >
                <div class="logo-toggle"> 
                    <!--<a href="#">For Work</a>
                    <div class="logo-sider">
                     <img src="dz.png" >
                     <h2>For Work</h2>
                   </div>
                   -->
                    <i class='bx bx-x cancel siderbarClose'></i>
                 </div>
                 <hr>
                 <ul class="nav_lists">
                    <li> <a href="categories.php">Catégories</a></li>
                    <li> <a href="profile.php">profile </a></li>
                    <li> <a href="#">FAQs</a></li>
                    <li> <a href="#">Contact Us</a></li>
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

                     <a href="editprofile.php" class="sub-menu-link">
                        <img src="photos/profile.png">
                        <p>Edit Profile</p>
                        <span>></span>
                     </a>

                     <a href="#" class="sub-menu-link">
                        <img src="photos/setting.png">
                        <p>Setting</p>
                        <span>></span>
                     </a>

                     <a href="#" class="sub-menu-link">
                        <img src="photos/help.png">
                        <p>Help & Support</p>
                        <span>></span>
                     </a>

                     <a href="index.php?destroy='true'" class="sub-menu-link">
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