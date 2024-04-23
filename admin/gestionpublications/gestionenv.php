<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin-nav-footer-form.css">
  <link rel="stylesheet" href="gestionenv.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

  <title>gestion evenement</title>
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

  <div class="fill_holder">
    <div class="Topics">
      <h1 align="center">Faire des modification</h1>
      <p style="color:#fff; font-size: 20px; " align="center"> choisir un Topic pour fiare des modification</p>
      <h3 onclick="showDropdown(0)">Gestion de Publication et communication</h3>
      <h3 onclick="showDropdown(1)">Gestion Theses et Memoires</h3>
      <h3 onclick="showDropdown(2)">Gestions Evenements Scientifiques</h3>
    </div>
    <div class="fill show ">
      <form method="post" action="addmmbr.php">
        <h2 align="center">Gestion de Publication et communication</h2>

        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="Nom" name="titre" required="required">
            <label for="titre" class="form__label">Titre</label>
          </div>
        </div>
        <div class="grade-label">
          <label for="">type</label><br>
        </div>
        <div class="form-wrapper">
          <select name="type" id="" style="width: 30%;">
            <option value="national">national</option>
            <option value="international">international</option>
          </select>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="Nom" name="Auteur" required="required">
            <label for="titre" class="form__label">auteur</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="url" class="form__field" placeholder="Nom" name="link" required="required">
            <label for="titre" class="form__label">Link</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="date" class="form__field" name="date" required="required">
            <label for="date" class="form__label">date</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="  " name="nom_pub" required="required">
            <label for="titre" class="form__label">Nom de Journal</label>
          </div>
        </div>
        <div class="button-wrapper">
          <button type="submit" name="button1" value="button1">Ajouter</button>
        </div>
      </form>


    </div>

    <div class="fill ">
      <form method="post" action="addmmbr.php">

        <h2 align="center">Gestion Theses et Memoires</h2>

        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="titre" name="nom" required="required">
            <label for="titre" class="form__label">Nom</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="titre" name="prenom" required="required">
            <label for="titre" class="form__label">Prenom</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="titre" name="titre" required="required">
            <label for="titre" class="form__label">titre</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="date" class="form__field" name="date" required="required">
            <label for="date" class="form__label">Date</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="  " name="lieu" required="required">
            <label for="titre" class="form__label">lieu</label>
          </div>
        </div>
        <div class="button-wrapper">
          <button type="submit" name="button2" value="button2">Ajouter</button>
        </div>
      </form>


    </div>
    <div class="fill ">
      <form method="post" action="addmmbr.php">

        <h2 align="center">Gestions Evenements Scientifiques</h2>

        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="titre" name="titre" required="required">
            <label for="titre" class="form__label">titre</label>
          </div>
        </div>
        <div class="grade-label">
          <label for="">type</label><br>
        </div>
        <div class="form-wrapper">
          <select name="type" id="" style="width: 30%;">
            <option value="national">national</option>
            <option value="international">international</option>
          </select>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="date" class="form__field" name="date" required="required">
            <label for="date" class="form__label">Date</label>
          </div>
        </div>
        <div class="form-wrapper">
          <div class="form__group">
            <input type="text" class="form__field" placeholder="  " name="lieu" required="required">
            <label for="titre" class="form__label">lieu</label>
          </div>
        </div>
        <div class="button-wrapper">
          <button type="submit" name="button3" value="button3">Ajouter</button>
        </div>
      </form>

    </div>
  </div>


  <div class="tabale_wrapper">
    
    <div class="tab-holder"> 
    <h1>Gestion de Publication et communication</h1>
      <table>
        <tr>
          <th>Titre</th>
          <th>type</th>
          <th>Auteur</th>
          <th>LA DATE DE PROJET</th>
          <th>Nom de Journal ou de Conferece</th>

          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
        require "config.php";
        $request = "SELECT * FROM document";
        $statement = $pdo->prepare($request);
        $statement->execute();
        while ($projet = $statement->fetch()) {
          echo "<tr>";
          echo "<td>" . $projet["titre"] . "</td>";
          echo "<td>" . $projet["type"] . "</td>";
          echo "<td>" . $projet["Auteur"] . "</td>";
          echo "<td>" . $projet["date"] . "</td>";
          echo "<td>" . $projet["nom_pub"] . "</td>";

          echo "<td><a href='updategestpub.php?id1=" . $projet["id"] . "'>Update</a></td>";
          echo "<td><a href='deletegestionenv.php?id1=" . $projet["id"] . "'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>

    <div class="tab-holder">
    <h1>Gestion Theses et Memoires</h1>
      <table>
        <tr>
          <th>Nom</th>
          <th>Prenom</th>
          <th>Titre</th>
          <th>DATE</th>
          <th>Lieu</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
        require "config.php";
        $request = "SELECT * FROM soutenance";
        $statement = $pdo->prepare($request);
        $statement->execute();
        while ($projet = $statement->fetch()) {
          echo "<tr>";
          echo "<td>" . $projet["nom"] . "</td>";
          echo "<td>" . $projet["prenom"] . "</td>";
          echo "<td>" . $projet["titre"] . "</td>";
          echo "<td>" . $projet["date"] . "</td>";
          echo "<td>" . $projet["lieu"] . "</td>";
          echo "<td><a href='updategesthese.php?id2=" . $projet["titre"] . "'>Update</a></td>";
          echo "<td><a href='deletegestionenv.php?id2=" . $projet["titre"] . "'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>

    <div class="tab-holder">
    <h1>Gestions Evenements Scientifiques</h1>
      <table>
        <tr>
          <th>Titre</th>
          <th>type</th>
          <th>DATE</th>
          <th>Lieu</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
        <?php
        require "config.php";
        $request = "SELECT * FROM event";
        $statement = $pdo->prepare($request);
        $statement->execute();
        while ($projet = $statement->fetch()) {
          echo "<tr>";
          echo "<td>" . $projet["titre"] . "</td>";
          echo "<td>" . $projet["type"] . "</td>";
          echo "<td>" . $projet["date"] . "</td>";
          echo "<td>" . $projet["lieu"] . "</td>";
          echo "<td><a href='updategesevent.php?id3=" . $projet["titre"] . "'>Update</a></td>";
          echo "<td><a href='deletegestionenv.php?id3=" . $projet["titre"] . "'>Delete</a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>

  </div>

  

  <footer class="footer">
    <div class="container">
      <a href="LRDSIPRINCIPAL.html"><img src="../../images/footer logo.png" alt="" class="logosite"></a>
      <a href="https://en.univ-blida.dz/"><img src="../../images/univ logo.png" alt=""  class="logouniv"></a>
    </div>
    <div class="container2">


      <a href="https://www.facebook.com/LRDSI/"><img src="../../images/icons8-facebook-50.png" alt="" class="social-media"></a>
      <a href="https://www.linkedin.com/company/laboratoire-de-recherche-pour-le-d%C3%A9veloppement-des-syst%C3%A8mes-informatiques-lrdsi/"><img src="../../images/icons8-linkedin-50.png" alt="" class="social-media"></a>


      <p class="footer-text">© 2020 LRDSI. All rights reserved </p>
      <p class="footer-text">devlopped by Shark team</p>
    </div>
    </div>

  </footer>

  <script src="gestionenv.js"></script> 
</body>

</html>