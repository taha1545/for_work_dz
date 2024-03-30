<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>      
    <div class="container">

      <div class="upload">
        <img src="ProfileIMG.png" width = 100 >
        <div class="round">
          <input type="file">
          <i class = "fa fa-camera"></i>
        </div>
      </div>

      <form action="#">
        <div class="main-user-info">  
          <div class="user-input-box">
            <label for="Nom">Nom</label>
            <input type="text"
                    id="Nom"
                    name="Nom"
                    placeholder="Entrez Nom"/>
          </div>
          <div class="user-input-box">
            <label for="Prenom">Prènom</label>
            <input type="text"
                    id="username"
                    name="username"
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
            <label for="Téléphone">Téléphone</label>
            <input type="text"
                    id="Téléphone"
                    name="Téléphone"
                    placeholder="+213567-567-567"/>
          </div>
          <div class="user-input-box">
            <label for="Date de naissance">date de naissance</label>
            <input type="date"
                    id="date de naissance"
                    name="date de naissance"/>
          </div>
          <div class="user-input-box">
            <label for="Wilaya">Wilaya</label>
            <select>
              <option value="Adrar" >Adrar</option>
              <option value="Chlef" >Chlef</option>
              <option value="Laghouat" >Laghouat</option>
              <option value="Oum El Bouaghi" >Oum El Bouaghi</option>
              <option value=" Batna " >Batna</option>
              <option value="Bejaïa" >Bejaïa</option>
              <option value="Biskra " >Biskra</option>
              <option value="Béchar" >Béchar</option>
              <option value="Blida" >Blida</option>
              <option value="Bouira" >Bouira</option>
              <option value="Tamanrasset" >Tamanrasset</option>
              <option value="Tebessa" >Tebessa</option>
              <option value="Telemcen" >Telemcen</option>
              <option value="Tiaret" >Tiaret</option>
              <option value="Tizi ouzou" >Tizi ouzou</option>
              <option value="Alger" >Alger</option>
              <option value="Djelfa" >Djelfa</option>
              <option value="Djijel" >Djijel</option>
              <option value="Setif" >Setif</option>
              <option value="Saida" >Saida</option>
              <option value="Skikda" >Skikda</option>
              <option value="Sidi Bel Abbes" >Sidi Bel Abbes</option>
              <option value="Annaba" >Annaba</option>
              <option value="Guelma" >Guelma</option>
              <option value="Constantine" >Constantine</option>
              <option value="Médéa" >Médéa</option>
              <option value="Mostaganem" >Mostaganem</option>
              <option value="M'Sila " >M'Sila</option>
              <option value="Mascara" >Mascara</option>>
              <option value="Ouargla" >Ouargla</option>
              <option value="Oran" >Oran</option>
              <option value="EL Bayadh" >EL Bayadh</option>
              <option value="Ilizi" >Ilizi</option>
              <option value="Bordj Bou Arreridj " >Bordj Bou Arreridj</option>
              <option value="Boumerdès " >Boumerdès</option>
              <option value="El Tarf" >El Tarf</option>
              <option value="Tindouf " >Tindouf</option>
              <option value="Tissemsilt " >Tissemsilt</option>
              <option value="El Oued " >El Oued</option>
              <option value="Khenchela " >Khenchela</option>
              <option value=" Souk Ahras " >Souk Ahras</option>
              <option value="Tipaza " >Tipaza</option>
              <option value="Mila" >Mila</option>
              <option value="Aïn Defla" >Aïn Defla</option>
              <option value="Naâma" >Naâma</option>
              <option value="Aïn Témouchent" >Aïn Témouchent</option>
              <option value="Ghardaia " >Ghardaia</option>
              <option value="Relizane " >Relizane</option>
            </select>
          </div>
          <div class="user-input-box">
            <label for="compétences">compétences</label>
            <input type="text"
                    id="compétences"
                    name="compétences"
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
              <input type="file">
            </button>
          </div>

        </div>
        <div class="gender-details-box">
          <span class="gender-title">Sex</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="Homme">Homme</label>
            <input type="radio" name="gender" id="female">
            <label for="Femme">Femme</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </body>
</html>
