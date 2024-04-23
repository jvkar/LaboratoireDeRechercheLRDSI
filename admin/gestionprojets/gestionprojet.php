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
    <!-- <link rel="stylesheet" href="projetad.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">

    <title>projet</title>
    <style>
    .search-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .search-input {
      padding: 15px;
      border: none;
      border-radius: 4px;
      margin-right: 10px;
      width: 400px;
      font-size: 18px;
    }

    .search-button {
      padding: 15px 30px;
      background-color: #2196F3;
      border: none;
      border-radius: 4px;
      color: #fff;
      cursor: pointer;
      font-size: 18px;
    }
    </style>
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
      <!-- ---------------------------------------------------------------------------------------- -->
      <form class="fill" action="addprojet.php" method="POST">
  <h1>Ajouter un projet</h1>
  <div class="form-wrapper">
    <div class="form__group">
      <input type="input" class="form__field" placeholder="Nom" name="titre" required="required">
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

  <div class="placeholder">
    <label for="equipe" class="placeholder">responsable</label><br>
  </div>
  <div class="form-wrapper">
    <select name="responsable" id="membre" class="membre" style="width: 30%;">
      <?php
      $request = "SELECT * FROM membre";
      $statement = $pdo->prepare($request);
      $statement->execute();
      while ($membre = $statement->fetch()) {
        echo "<option value=\"" . $membre["id"] . "\">" . $membre["nom"] . " " . $membre["prenom"] . "</option>";
      }
      ?>
    </select>
  </div>
  <div class="form-wrapper">
    <div class="form__group">
      <textarea id="" class="form__field" cols="30" rows="5" name="mission"></textarea>
      <label for="name" class="form__label">la Mission</label>
    </div>
  </div>
  <div class="form-wrapper">
    <div class="form__group">
      <input type="text" class="form__field" name="date" required="required">
      <label for="date" class="form__label">date du projet</label>
    </div>
  </div>

  <div class="button-wrapper">
    <button type="submit" name="add" value="add">Ajouter</button>
  </div>
</form>

<div class="search-container">
  <input type="text" id="searchInput" class="search-input" placeholder="Search...">
  <button id="searchButton" class="search-button">Search</button>
</div>
<div class="tab-holder"> 
<table id="dataTable">
  <thead>
    <tr>
      <th>Titre</th>
      <th>Type</th>
      <th>Responsable</th>
      <th>Mission</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody> 
    <?php
  $request = "SELECT projet.*,membre.nom AS nom_membre,membre.prenom AS prenom_membre FROM projet JOIN membre ON projet.responsable = membre.id";
      $statement = $pdo->prepare($request);
      $statement->execute();
      while ($projet = $statement->fetch()) {
        echo "<tr>";
        echo "<td>" . $projet["titre"] . "</td>";
        echo "<td>" . $projet["type"] . "</td>";
        echo "<td>" . $projet["nom_membre"]." ".$projet["prenom_membre"]. "</td>";
        echo "<td>" . $projet["mission"] . "</td>";
        echo "<td>" . $projet["date"] . "</td>";
        echo "<td><a href='updateprojet.php?id=" . $projet["id"] . "'>Update</a></td>";
        echo "<td><a href='deleteprojet.php?id=" . $projet["id"] . "'>Delete</a></td>";
        echo "</tr>";
      }
  
    ?>
  </tbody>
</table>
</div>

<script>
  document.getElementById('searchButton').addEventListener('click', function() {
    var input = document.getElementById('searchInput').value.toLowerCase();
    var table = document.getElementById('dataTable');
    var rows = table.getElementsByTagName('tr');

    for (var i = 0; i < rows.length; i++) {
      var rowData = rows[i].getElementsByTagName('td');
      var found = false;

      for (var j = 0; j < rowData.length; j++) {
        if (rowData[j].innerHTML.toLowerCase().indexOf(input) > -1) {
          found = true;
          break;
        }
      }

      if (found) {
        rows[i].style.display = '';
      } else {
        rows[i].style.display = 'none';
      }
    }
  });
</script>

      <!-- --------------------------------------------------------------------------------------------- -->
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