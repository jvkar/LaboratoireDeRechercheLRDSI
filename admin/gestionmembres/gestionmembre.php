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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <title>Gestion des membres</title>
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
    <form class="fill" action="add_membre.php" method="POST">
      <h1>Ajouter un membre</h1>
    <div class="form-wrapper">
    <div class="form__group">
      <input type="input" class="form__field" placeholder="Nom" name="nom" required="required">
      <label for="name" class="form__label">Nom</label>
  </div>
</div>
  <div class="form-wrapper">
    <div class="form__group">
      <input type="input" class="form__field" placeholder="Prenom" name="prenom" required="required">
      <label for="name" class="form__label">Prenom</label>
  </div>
</div>
<div class="grade-label">
  <label for="">Grade</label><br>
</div>
  <div class="form-wrapper">
    <select name="grade" id="" style="width: 30%;">
      <option value="enseignant chercheur">enseignant chercheur</option>
      <option value="doctorant">doctorant</option>
    </select>
</div>
  <div class="form-wrapper">
    <div class="form__group">
      <input type="email" class="form__field" placeholder="email" name="email" required="required">
      <label for="name" class="form__label">adresse-email</label>
  </div>
  </div>
  <div class="grade-label">
    <label for="equipe" class="placeholder">Equipe</label><br>
  </div>

        <select name="equipe" id="equipe">
            <option value="0">NULL</option>
            <?php
            
                $requast="SELECT * FROM equipe ORDER BY nom";
                $statement =$pdo->prepare($requast);
                $statement->execute(array());
                while($equipe= $statement->fetch()){
                  ?>
                  <option value="<?=$equipe["nom"]?>"><?=$equipe["nom"]?><option>
                  <?php
                    
                }
            ?>
            
        </select>
    
              
              
        <div class="button-wrapper">
    <button type="submit">Ajouter</button>
    </div>
  </div>
        &nbsp;&nbsp;&nbsp;
        <?php
            if(isset($_GET['message'])){
            echo $_GET['message'];
            }
        ?>
      </form>
      <?php
        $request = "SELECT * FROM membre ORDER BY nom";
        $statement = $pdo->prepare($request);
        $statement->execute();
        
        echo "<div class=\"tab-holder\">
        <table>
            <tr class='trow1'>
                <th style='border:1px solid black;'>Nom</th>
                <th style='border:1px solid black;'>Prenom</th>
                <th style='border:1px solid black;'>Grade</th>
                <th style='border:1px solid black;'>Email</th>
                <th style='border:1px solid black;'>equipe</th>
            </tr>";
        while ($membre = $statement->fetch()) {
            echo "<tr class='trow2'>
                <td style='border:1px solid black;'>".$membre["nom"]."</td>
                <td style='border:1px solid black;'>".$membre["prenom"]."</td>
                <td style='border:1px solid black;'>".$membre["grade"]."</td>
                <td style='border:1px solid black;'>".$membre["email"]."</td>
                <td style='border:1px solid black;'>".$membre["nom_equipe"]."</td>
                <td class='up' style='border:1px solid black;'><a href='update_form_membre.php?id=".$membre['id']."'>update</a></td>
                <td class='del' style='border:1px solid black;'><a href='delete_membre.php?id=".$membre['id']."'>delete</a></td>
                </tr>";
        }
        echo"</table> </div>";
      ?>
          <footer class="footer">
        <div class="container">
          <a href="LRDSIPRINCIPAL.html"><img src="../../images/footer logo.png" alt=""  class="logosite" ></a>
          <a href="https://en.univ-blida.dz/"><img src="../../images/univ logo.png" alt="" class="logouniv"></a>
          </div>
            <div class="container2">

          
          <a href="https://www.facebook.com/LRDSI/"><img src="../../images/icons8-facebook-50.png" alt="" class="social-media"></a>
          <a href="https://www.linkedin.com/company/laboratoire-de-recherche-pour-le-d%C3%A9veloppement-des-syst%C3%A8mes-informatiques-lrdsi/"><img src="../../images/icons8-linkedin-50.png" alt="" class="social-media"></a>
        
          
          <p class="footer-text">Â© 2020 LRDSI. All rights reserved </p>
          <p class="footer-text">devlopped by Shark team</p>
        </div>
        </div>
      
      </footer>
      <script>
        var options=document.querySelectorAll ("option");
        options.forEach(remv)
        function remv(ele,i){
          if(!ele.hasAttribute("value")){
            ele.remove();
          }
        }
        <?php
         if(isset($_GET["deleteErr"])){

         
        ?>
        alert("<?=$_GET["deleteErr"]?>");
        <?php
         }
        ?>
      </script>
</body>
</html>
