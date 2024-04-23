<?php
require "config.php";
@$id = $_GET['id2'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titre = $_POST["titre"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $date = $_POST["date"];
    $lieu = $_POST["lieu"];
    $request = "UPDATE soutenance SET titre=?, nom=?, prenom=?, lieu=?, date=? WHERE titre=?";
    $statement = $pdo->prepare($request);
    $statement->execute(array($titre, $nom, $prenom, $lieu, $date, $id));

    header('Location:gestionenv.php');
    exit();
} else {
    $request = "SELECT * FROM soutenance WHERE titre=?";
    $statement = $pdo->prepare($request);
    $statement->execute(array($id));
    $soutenance = $statement->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../gestionprojets/admin-nav-footer-form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Gestion des evenement</title>
</head>
<body>

<div class="head-page">
    <a href="adminprincipal.html"><img src="../../images/LEDSI.png" alt="" id="logo"></a>
  <div class="right-panel">
      <a href=""><button class="profil-btn">Profil</button></a>
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

      <form class="fill" method="POST">
      <h1>Modifier une these</h1>
    <div class="form-wrapper">
    <div class="form__group">
      <input type="text" class="form__field" placeholder="Nom" placeholder="<?php echo $soutenance['titre']; ?>" name="titre" required="required">
      <label for="name" class="form__label">titre</label>
  </div>
</div>
  <div class="form-wrapper">
    <div class="form__group">
      <input type="input" class="form__field" placeholder="Prenom" name="nom" placeholder="<?php echo $soutenance['nom']; ?>" required="required">
      <label for="name" class="form__label">nom</label>
  </div>
</div>
<div class="form-wrapper">
    <div class="form__group">
      <input type="input" class="form__field" placeholder="Prenom" name="prenom"placeholder="<?php echo $soutenance['prenom']; ?>" required="required">
      <label for="name" class="form__label">Prenom</label>
  </div>
</div>
<div class="form-wrapper">
    <div class="form__group">
      <input type="input" class="form__field" placeholder="lieu" name="lieu" placeholder="<?php echo $soutenance['lieu']; ?>" required="required">
      <label for="name" class="form__label">lieu</label>
  </div>
</div>
  <div class="form-wrapper">
    <div class="form__group">
      <input type="date" class="form__field" placeholder="date" name="date"placeholder="<?php echo $soutenance['date']; ?>" required="required">
      <label for="name" class="form__label">date</label>
  </div>
</div>
<div class="button-wrapper">
    <button>Update</button>
  </div>
</form>
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