<?php

  include("database.php");
 session_start();
////////////////////////////////////////
 $email=$_SESSION["email"];
 try{
  $sql = " SELECT id_profil FROM `users` WHERE email='$email' ";
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
   $row = mysqli_fetch_assoc($res);
  }  
}catch(mysqli_sql_exception $e){
  echo "There is a problem22: " . $e->getMessage();
}

///////////////////////////////////////////////
if(isset($row["id_profil"] )){
  $idprofile= $row["id_profil"];
  try{
    $sql = " SELECT * FROM `profile` WHERE id='$idprofile' ";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
     $row = mysqli_fetch_assoc($res);
      $name=$row["name"];
      $familyname= $row["familyname"];
      $phone= $row["phone"];
      $domaine=$row["domain"];
      $skills=$row["skills"];
      $Experience=$row["experience"];
    }  
}catch(mysqli_sql_exception $e){
    echo "There is a problem22: " . $e->getMessage();
}
}
//////////////////////////////////////////////



 mysqli_close($conn);
?>


<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>edit profile</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <link rel="icon" href="photos/dz.png" type="image/x-icon">
      <link rel="stylesheet" href="styles\editprofile.css" />
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data">

      <div class="upload">
        <img src="photos\editeprofile.jpg" id="profile-pic">
        <div class="round">
            <!--//////////////////-->
          <input type="file" accept="image/jpeg , image/jpg , image/png" id="input-file" name="image">
          <i class = "fa fa-camera"></i>
        </div>
        <script>
            let profilePic = document.getElementById("profile-pic");
            let inputFile = document.getElementById("input-file");
            inputFile.onchange = function(){
                profilePic.src = URL.createObjectURL(inputFile.files[0]);
            }
        </script>

      </div>
        <div class="main-user-info">  
          <div class="user-input-box">
            <label for="Nom">Name</label>
            <input type="text"
                    id="Nom"
                    name="name"
                    placeholder="<?php
                      if(isset($name)){
                         echo "".$name."";
                      } else{
                        echo "user123";
                      }
                    ?>"/>
          </div>
          <div class="user-input-box">
            <label for="Prenom">Family name</label>
            <input type="text"
                    id="username"
                    name="familyname"
                    placeholder="<?php
                      if(isset($familyname)){
                         echo "".$familyname."";
                      } else{
                        echo "family name";
                      }
                    ?>"/>
          </div>
          <div class="user-input-box">
            <label for="Domaine">Domaine</label>
            <input type="Domaine"
                    id="Domaine"
                    name="Domaine"
                    placeholder="<?php
                      if(isset($domaine)){
                         echo "".$domaine."";
                      } else{
                        echo "worker ";
                      }
                    ?>"/>
          </div>
          <div class="user-input-box">
            <label for="Téléphone">phone</label>
            <input type="text"
                    id="Téléphone"
                    name="phone"
                    placeholder="<?php
                      if(isset($phone)){
                         echo "".$phone."";
                      } else{
                        echo "067233729";
                      }
                    ?>"/>
          </div>
          <div class="user-input-box">
            <label for="Date de naissance">date de naissance</label>
            <input type="date"
                    id="date de naissance"
                    name="date"/>
          </div>
          <div class="user-input-box">
            <label for="Wilaya">Wilaya</label>
            <select name="wilaya">
              <option name="wilaya" value="Adrar" >Adrar</option>
<option name="wilaya" value="Chlef" >Chlef</option>
<option name="wilaya" value="Laghouat" >Laghouat</option>
<option name="wilaya" value="Oum El Bouaghi" >Oum El Bouaghi</option>
<option name="wilaya" value=" Batna " >Batna</option>
<option name="wilaya" value="Bejaïa" >Bejaïa</option>
<option name="wilaya" value="Biskra " >Biskra</option>
<option name="wilaya" value="Béchar" >Béchar</option>
<option name="wilaya" value="Blida" >Blida</option>
<option name="wilaya" value="Bouira" >Bouira</option>
<option name="wilaya" value="Tamanrasset" >Tamanrasset</option>
<option name="wilaya" value="Tebessa" >Tebessa</option>
<option name="wilaya" value="Telemcen" >Telemcen</option>
<option name="wilaya" value="Tiaret" >Tiaret</option>
<option name="wilaya" value="Tizi ouzou" >Tizi ouzou</option>
<option name="wilaya" value="Alger" >Alger</option>
<option name="wilaya" value="Djelfa" >Djelfa</option>
<option name="wilaya" value="Djijel" >Djijel</option>
<option name="wilaya" value="Setif" >Setif</option>
<option name="wilaya" value="Saida" >Saida</option>
<option name="wilaya" value="Skikda" >Skikda</option>
<option name="wilaya" value="Sidi Bel Abbes" >Sidi Bel Abbes</option>
<option name="wilaya" value="Annaba" >Annaba</option>
<option name="wilaya" value="Guelma" >Guelma</option>
<option name="wilaya" value="Constantine" >Constantine</option>
<option name="wilaya" value="Médéa" >Médéa</option>
<option name="wilaya" value="Mostaganem" >Mostaganem</option>
<option name="wilaya" value="M'Sila " >M'Sila</option>
<option name="wilaya" value="Mascara" >Mascara</option>>
<option name="wilaya" value="Ouargla" >Ouargla</option>
<option name="wilaya" value="Oran" >Oran</option>
<option name="wilaya" value="EL Bayadh" >EL Bayadh</option>
<option name="wilaya" value="Ilizi" >Ilizi</option>
<option name="wilaya" value="Bordj Bou Arreridj " >Bordj Bou Arreridj</option>
<option name="wilaya" value="Boumerdès " >Boumerdès</option>
<option name="wilaya" value="El Tarf" >El Tarf</option>
<option name="wilaya" value="Tindouf " >Tindouf</option>
<option name="wilaya" value="Tissemsilt " >Tissemsilt</option>
<option name="wilaya" value="El Oued " >El Oued</option>
<option name="wilaya" value="Khenchela " >Khenchela</option>
<option name="wilaya" value=" Souk Ahras " >Souk Ahras</option>
<option name="wilaya" value="Tipaza " >Tipaza</option>
<option name="wilaya" value="Mila" >Mila</option>
<option name="wilaya" value="Aïn Defla" >Aïn Defla</option>
<option name="wilaya" value="Naâma" >Naâma</option>
<option name="wilaya" value="Aïn Témouchent" >Aïn Témouchent</option>
<option name="wilaya" value="Ghardaia " >Ghardaia</option>
<option name="wilaya" value="Relizane " >Relizane</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="compétences">skills</label>
            <input type="text"
                    id="compétences"
                    name="skills"
                    placeholder="<?php
                      if(isset($skills)){
                         echo "".$skills."";
                      } else{
                        echo "Nothing";
                      }
                    ?>"/>
          </div>
          
          <div class="user-input-box">
            <label for="Experience">Experience</label>
            <input type="text"
                    id="Experience"
                    name="Experience"
                    placeholder="<?php
                      if(isset($Experience)){
                         echo "".$Experience."";
                      } else{
                        echo "no experince";
                      }
                    ?>"/>
          </div>
          <div class="scanneDiplome ">
            <button type = "button" class = "btn-warning">
              <i class = "fa fa-upload"></i> Diplome
              <input type="file" name="diplome">
            </button>
          </div>

        </div>
        <div class="gender-details-box">
          <span class="gender-title">gender</span>
          <div class="gender-category">
            <input type="radio" name="male" id="male">
            <label for="Homme">male</label>
            <input type="radio" name="female" id="female">
            <label for="Femme">female</label>
            
          </div>
        </div>
        
        <div class="form-submit-btn">
         <p style="display:none" id="mistake" >................................................ please fill all information !!</p>
          <input type="submit" value="Register" name="login">
        </div>
      </form>
    </div>
  </body>
</html>
<?php
    include("database.php");
    

     if(isset($_POST["login"]) && isset($_POST["name"]) && isset($_POST["familyname"]) && isset($_POST["Domaine"]) && isset($_POST["phone"]) && isset($_POST["date"])  && isset($_POST["skills"]) &&isset($_POST["Experience"])  &&( isset($_POST["male"]) || isset($_POST["female"])) && isset($_FILES["image"])){
   

      
     $name=$_POST["name"];
     $familyname=$_POST["familyname"];
     $domaine=$_POST["Domaine"];
     $date=$_POST["date"];
     $phone=$_POST["phone"];
     $wilaya=$_POST["wilaya"];
     $Experience=$_POST["Experience"];
     $skills=$_POST["skills"];
      if(isset($_POST["male"])){
        $gender="male";
      }else{
        $gender= "female";
      }



 
    //image profile
      if($_FILES["image"]["error"] == 4){
        echo
        "<p>image doesnot exist</p>"
        ;
      }
      else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
    
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if ( !in_array($imageExtension, $validImageExtension) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize > 1000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }
        else{
          $newImageName = uniqid();
          $newImageName .= '.' . $imageExtension;
    
          move_uploaded_file($tmpName, 'photos/' . $newImageName);
        }}
      //







      // diplome image or cv
      if($_FILES["diplome"]["error"] == 4){
        echo
        "<p>image doesnot exist</p>"
        ;
      }
      else{
        $fileName2 = $_FILES["diplome"]["name"];
        $fileSize2 = $_FILES["diplome"]["size"];
        $tmpName2 = $_FILES["diplome"]["tmp_name"];
    
        $validImageExtension2 = ['jpg', 'jpeg', 'png','pdf'];
        $imageExtension2 = explode('.', $fileName2);
        $imageExtension2 = strtolower(end($imageExtension2));
        if ( !in_array($imageExtension2, $validImageExtension2) ){
          echo
          "
          <script>
            alert('Invalid Image Extension');
          </script>
          ";
        }
        else if($fileSize2 > 1000000){
          echo
          "
          <script>
            alert('Image Size Is Too Large');
          </script>
          ";
        }
        else{
          $newImageName2 = uniqid();
          $newImageName2 .= '.' . $imageExtension2;
    
          move_uploaded_file($tmpName2, 'photos/' . $newImageName2);
        }}
      //
       $session= uniqid();
     ///////


       $email = $_SESSION['email'];
       try{
        $sql = " SELECT id_profil FROM `users` WHERE email='$email' ";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
         $row = mysqli_fetch_assoc($res);
         $idprofil=$row["id_profil"];   
        }  
    }catch(mysqli_sql_exception $e){
        echo "There is a problem22: " . $e->getMessage();
    }


    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      //insert into profile table
       if(empty($idprofil)) {
       if(!empty($newImageName2)&&  !empty($newImageName)){
      try{
        $sql = "INSERT INTO profile (name,familyname,domain,phone,date,wilaya,skills,experience,image_name,diplome_name,gender,session) 
        VALUES('$name','$familyname','$domaine','$phone',' $date',' $wilaya',' $skills','$Experience','$newImageName','$newImageName2','$gender','$session')";
         mysqli_query($conn,$sql);
        
        }catch(mysqli_sql_exception){
        echo"there is problem";
        }
       
      }

       $id=0;
      // get id from profile table
      try{
        $sql = " SELECT id FROM `profile` WHERE session='$session' ";
        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
         $row = mysqli_fetch_assoc($res);
         $id=$row["id"];   
        }  
    }catch(mysqli_sql_exception $e){
        echo "There is a problem22: " . $e->getMessage();
    }
     //

     //update id_profil in users table 
     $email = $_SESSION['email'];
     $sql = "UPDATE users SET id_profil = '$id' WHERE email = '$email'";
     
     if (mysqli_query($conn, $sql)) {
         
     } else {
         echo "Error updating record: " . mysqli_error($conn);
     }


    }else{
      if(!empty($newImageName2)&&  !empty($newImageName)){
        try{
          $sql = "UPDATE profile
          SET name = '$name', familyname = '$familyname', domain = '$domaine', date = '$date',
              wilaya = '$wilaya', skills = '$skills', experience = '$Experience',
              image_name = '$newImageName', diplome_name = '$newImageName2', gender = '$gender',
              session = '$session'
          WHERE id = $idprofil";
           mysqli_query($conn,$sql);
          
          }catch(mysqli_sql_exception){
          echo"there is problem";
          }
        }
    }
   echo"
     <script>
     window.location.href = 'home.php';
       </script>";

    
   
    }else if(isset($_POST["login"]) && (isset($_POST["name"]) || isset($_POST["familyname"])|| isset($_POST["Domaine"]) || isset($_POST["phone"]) || isset($_POST["date"])  || isset($_POST["skills"]) || isset($_POST["Experience"]) || ( isset($_POST["male"]) || isset($_POST["female"])) && isset($_FILES["image"]) )){
      echo" <script> document.querySelector('#mistake').style.display = 'block'; </script>";
    }
 
  
 mysqli_close($conn);

