<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="icon" href="photos/dz.png" type="image/x-icon">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles/home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <section>
        <div class="img">
        </div>
    </section>
    
    
        <nav>
            <div class="nav-bar">
             <!-- Toggle button--> 
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
                       <li> <a href="#">Catégories</a></li>
                       <li> <a href="#">About Us</a></li>
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
                 <img src="photos/user.png" class="img-prof" onclick="toggleMenu()">
             <div class="sub-menu-wrap" id="subMenu">
                 <div class="sub-menu">
                     <div class="user-info">
                       <img src="photos/user.png" >
                       <h3>User Name</h3>
                     </div>
                     <hr>

                     <a href="#" class="sub-menu-link">
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

                     <a href="#" class="sub-menu-link">
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