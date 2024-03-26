<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Responsive Registration Form</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
        <div class="drop-down">
            <button class="button">Parametre De Compte</button>
            <div class="content">
                <a href="">User Name</a>
                <a href="">Favorite</a>
                <a href="">Parametre</a>
                <a href="">Help</a>
                <a href="">Traduction</a>
                <a href="">Deconecte</a>
            </div>
        </div>
        <div class="ProfileIMG">
            <img src="ProfileIMG.png" height="100">
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
            <label for="Prenom">Prenom</label>
            <input type="text"
                    id="username"
                    name="username"
                    placeholder="Entrez Prenom"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="ForWork@gmail.com"/>
          </div>
          <div class="user-input-box">
            <label for="Téléphone">Téléphone</label>
            <input type="text"
                    id="Téléphone"
                    name="Téléphone"
                    placeholder="+213567-567-567"/>
          </div>
          <div class="user-input-box">
            <label for="date de naissance">date de naissance</label>
            <input type="date"
                    id="date de naissance"
                    name="date de naissance"
                    placeholder="Enter Password"/>
          </div>
          <div class="user-input-box">
            <label for="LieuDeNaissance">LieuDeNaissance</label>
            <input type="text"
                    id="LieuDeNaissance"
                    name="LieuDeNaissance"
                    placeholder="LieuDeNaissance"/>
          </div>
          <div class="user-input-box">
            <label for="compétences">compétences</label>
            <input type="text"
                    id="compétences"
                    name="compétences"
                    placeholder="compétences"/>
          </div>
          <div class="user-input-box">
            <label for="éducation">Education</label>
            <input type="text"
                    id="éducation"
                    name="éducation"
                    placeholder="éducation"/>
          </div>
          <div class="user-input-box">
            <label for="Intérêts">Intérêts</label>
            <input type="text"
                    id="Intérêts"
                    name="Intérêts"
                    placeholder="Intérêts"/>
          </div>
          <div class="user-input-box">
            <label for="Experience">Experience</label>
            <input type="text"
                    id="Experience"
                    name="Experience"
                    placeholder="Experience"/>
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
