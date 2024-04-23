<?php require "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../profil/admin-nav-footer-form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Profil</title>
</head>
<body>
<div class="head-page">
    <a href="adminprincipal.html"><img src="../../images/LEDSI.png" alt="" id="logo"></a>
  <div class="right-panel">
      <a href="../profil/profil.php"><button class="profil-btn">Profil</button></a>
      <form action="../logout/logout.php" method="post" >
        <button  type="submit" name="logout" value="deconnexion" class="deconnexion-btn">deconnexion</button>
        </form>
      </div>
      </div>
 
      <nav class="navbar" id="navbar">
        <ul class="nav-menu">
          <li class="home" id="hm"><a href="../principal/adminprincipal.html"><img src="../../images/icons8-home-32.png" alt=""></a></li>
          <li class="nav-item" id="pr"><a href="../gestionmembres/gestionmembre.php">Gestion des membres</a></li>
          <li class="nav-item" id="er"><a href="../gestionequipes/gestionequipe.php">Gestion des Equipes</a></li>
          <li class="nav-item" id="pe"><a href="../gestionpublications/gestionenv.php">Gestion des Publications et Evenements Scientifiques</a>
          <ul  class="Publication-et-Evenements">
            <li class="Subnav-item" id="pc"><a href="../gestionpublications/gestionenv.php">Gestion de Publication et communication</a></li>
            <li class="Subnav-item" id="tm"><a href="../gestionpublications/gestionenv.php">Gestion Theses et Memoires</a></li>
            <li class="Subnav-item" id="es"><a href="../gestionpublications/gestionenv.php">Gestions Evenements Scientifiques</a></li>
          </ul>
          </li>
          <li class="nav-item" id="pj"><a href="../gestionprojets/gestionprojet.php">Gestion des Projets</a>
          <ul class="Projets">
            <li class="Subnav-item" id="na"><a href="../gestionprojets/gestionprojet.php">Gestion des Projets Nationaux</a></li>
            <li class="Subnav-item" id="in"><a href="../gestionprojets/gestionprojet.php">Gestion des Projets Internationaux</a></li>
          </ul>
          </li>
        </ul>
      </nav>
     
      <div class="profil">
        <img src="../../images/user.png" height="120px" width="120px" alt="">
      <form action="updateadmin.php" method="POST">
      <div class="form-wrapper">
       <div class="form__group">
      <input type="input" class="form__field"  name="username" required="required">
      <label for="titre" class="form__label">Username</label>
       </div>
     </div>
     <div class="form-wrapper">
       <div class="form__group">
      <input type="password" class="form__field" name="mdps-courant" required="required">
      <label  for="titre" class="form__label">courant</label>
       </div>
     </div>
     <div class="form-wrapper">
       <div class="form__group">
      <input type="password" class="form__field" placeholder="Nom" name="nouveau" required="required">
      <label  for="titre" class="form__label">nouveau </label>
       </div>
     </div>
     <div class="button-wrapper">
    <button type="submit" name="change" value="change">changer le mot de pass</button>
    </div>
      </form>
      </div>
      <footer class="footer">
      <div class="container">
      <a href="LRDSIPRINCIPAL.html"><img src="../../images/footer logo.png" alt="" class="logosite"></a>
      <a href="https://en.univ-blida.dz/"><img src="../../images/univ logo.png" alt="" class="logouniv"></a>
    </div>
            <div class="container2">

          
          <a href="https://www.facebook.com/LRDSI/"><img src="../../images/icons8-facebook-50.png" alt="" class="social-media"></a>
          <a href="https://www.linkedin.com/company/laboratoire-de-recherche-pour-le-d%C3%A9veloppement-des-syst%C3%A8mes-informatiques-lrdsi/"><img src="../../images/icons8-linkedin-50.png" alt="" class="social-media"></a>
        
          
          <p class="footer-text">© 2020 LRDSI. All rights reserved </p>
          <p class="footer-text">devlopped by Shark team</p>
        </div>
        </div>
      
      </footer>
</body>
</html>