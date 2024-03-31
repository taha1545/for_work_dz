<?php
 session_start();
?>
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <title>edit profile</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
      <link rel="icon" href="photos/dz.png" type="image/x-icon">
      <link rel="stylesheet" href="styles\editprofile.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <body>      
    <div class="container">

    

      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data">

      <div class="upload">
        <img src="photos\editeprofile.jpg" width = 100 >
        <div class="round">
          <input type="file" name="image">
          <i class = "fa fa-camera"></i>
        </div>

      </div>
        <div class="main-user-info">  
          <div class="user-input-box">
            <label for="Nom">Name</label>
            <input type="text"
                    id="Nom"
                    name="name"
                    placeholder="Entrez Nom"/>
          </div>
          <div class="user-input-box">
            <label for="Prenom">Family name</label>
            <input type="text"
                    id="username"
                    name="familyname"
                    placeholder="Entrez Prenom"/>
          </div>
          <div class="user-input-box">
            <label for="Domaine">Domaine</label>
            <input type="Domaine"
                    id="Domaine"
                    name="Domaine"
                    placeholder="informatique"/>
          </div>
          <div class="user-input-box">
            <label for="Téléphone">phone</label>
            <input type="text"
                    id="Téléphone"
                    name="phone"
                    placeholder="+213567-567-567"/>
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
                    placeholder="compétences"/>
          </div>
          
          <div class="user-input-box">
            <label for="Experience">Experience</label>
            <input type="text"
                    id="Experience"
                    name="Experience"
                    placeholder="Experience"/>
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




    }
  
 mysqli_close($conn);

?>
