<?php require "config.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projet.css">
    <link rel="stylesheet" href="navandfooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    
    <title>Projet</title>
</head>
<body> 
  <a href="" id="top"></a>
  <a href="LRDSIPRINCIPAL.html"><img src="../../images/LEDSI.png" alt=""height="80rem" id="logo"></a>
      <nav class="navbar" id="navbar">
      <ul class="nav-menu">
        <li class="home" id="hm"><a href="../principal/LRDSIPRINCIPAL.html"><img src="../../images/icons8-home-32.png" alt=""></a></li>
        <li class="nav-item" id="pr"><a href="../presentation/Presentation.html">Presentation</a></li>
        <li class="nav-item" id="er"><a href="../equipe/equipe.php">Equipe de Recherche</a></li>
        <li class="nav-item" id="pe"><a href="../publications/publication.php">Publication et Evenements</a>
        <ul  class="Publication-et-Evenements">
          <li class="Subnav-item" id="pc"><a href="../publications/publication.php">Publication et communication</a></li>
          <li class="Subnav-item" id="tm"><a href="../publications/publication.php">Theses et Memoires</a></li>
          <li class="Subnav-item" id="es"><a href="../publications/publication.php">Evenements Scientifiques</a></li>
        </ul>
        </li>
        <li class="nav-item" id="pj"><a href="../projets/projet.html">Projets</a>
        <ul class="Projets">
          <li class="Subnav-item" id="na"><a href="../projets/projet.php">Projets Nationaux</a></li>
          <li class="Subnav-item" id="in"><a href="../projets/projet.php">Projets Internationaux</a></li>
        </ul>
        </li>
        <li class="nav-item" id="cn"><a href="../contact/contact.html">Contact</a></li>
      </ul>
      </nav>      
      
      <div class="breadcrumb" id="breadcrumb">
        <ul>
          <li id="breadcrumb-home"><a href="#hm">Acceuil</a></li>
          <li id="breadcrumb-presentation"><a href="#pr">Presentation</a></li>
          <li id="breadcrumb-equipe"><a href="#er">Equipe de Recherche</a></li>
          <li id="breadcrumb-publication"><a href="#pe">Publication et Evenements</a></li>
          <li id="breadcrumb-communication"><a href="#pc">Publication et communication</a></li>
          <li id="breadcrumb-theses"><a href="#tm">Theses et Memoires</a></li>
          <li id="breadcrumb-evenements"><a href="#es">Evenements Scientifiques</a></li>
          <li id="breadcrumb-projets"><a href="#pj">Projets</a></li>
          <li id="breadcrumb-nationaux"><a href="#na">Projets Nationaux</a></li>
          <li id="breadcrumb-internationaux"><a href="#in">Projets Internationaux</a></li>
          <li id="breadcrumb-contact"><a href="#cn">Contact</a></li>
          <li>Current Page</li>
        </ul>
      </div>
    <section class="section">
      <div class="head1">
        <img src="../../images/project-background.jpg" alt="" height="565px" width="640px" style="float: right; padding-top: 0px; padding-right: 0px;">
        <div class="title">
        <h1>Les Projets</h1>
        </div>
        <div class="header-text">
        <p>Au cours de notre parcours, nous avons accompli de nombreuses réalisations dans différents domainesNous avons travaillé dur pour atteindre nos objectifs,  Nous avons réussi à obtenir de bons résultats académiques  nous avons pu développer notre créativité, notre capacité à travailler en équipe et notre Nous sommes fiers de ces réalisations et nous sommes déterminés à continuer à travailler dur pour atteindre de nouveaux objectifs:</p>        
      </div>
      <a href="#Nationaux"><button class="header-btn"> Nos projets Nationaux </button></a>
      <a href="#Internationaux"><button class="header-btn"> Nos projets Internationaux</button></a>
    </div>
  

  <div class="head3">
      <div class="wrapper" id="Nationaux">
        <h1> NOS PROJETS NATIONAUX</h1>
      </div>
        <div class="group1">
          <?php 
            $request="SELECT * FROM projet WHERE type='national'";
            $statement =$pdo->prepare($request);
            $statement->execute(array());
            while($projet= $statement->fetch()){
              $request="SELECT * FROM membre  WHERE id=?";
              $statement2 =$pdo->prepare($request);
              $statement2->execute(array($projet["responsable"]));
              $membre= $statement2->fetch();
              
                echo '<div class="card" >
                  <div class="first-content">
                  <h1>L\'encadreur: Pr. '.$membre["nom"].' '.$membre["prenom"].'</h1> 
                  </div>
                  <div class="second-content">
                  <p>Contenue:en '.$projet["date"].' Pr. '.$membre["nom"].' '.$membre["prenom"].' a decouvert PNR12_u09_4216 > '.$projet["mission"].'</p>
                  </div>
                  </div>';
            }
          ?>
          </div>

       <div class="wrapper" id="Internationaux">
         <h1>PROJETS INTERNATIONAUX</h1>
       </div>
      
     
      <div class="group1">

            <?php 
              $request="SELECT * FROM projet WHERE type='international'";
              $statement =$pdo->prepare($request);
              $statement->execute(array());
              while($projet= $statement->fetch()){
                $request="SELECT * FROM membre  WHERE id=?";
                $statement2 =$pdo->prepare($request);
                $statement2->execute(array($projet["responsable"]));
                $membre= $statement2->fetch();
              
                  echo '<div class="card" >
                    <div class="first-content">
                    <h1>L\'encadreur: Pr. '.$membre["nom"].' '.$membre["prenom"].'</h1> 
                    </div>
                    <div class="second-content">
                    <p><b>Contenue:</b>en '.$projet["date"].' Pr. '.$membre["nom"].' '.$membre["prenom"].' a decouvert PNR12_u09_4216 > '.$projet["mission"].'</p>
                    </div>
                    </div>';
              }
            ?>
        </div>

    </section> 
    <footer class="footer">
      <div class="container">
        <a href="LRDSIPRINCIPAL.html"><img src="../../images/footer logo.png" alt="" height="64px" class="logosite" ></a>
        <a href="https://en.univ-blida.dz/"><img src="../../images/univ logo.png" alt="" height="64px" style="float: right; padding: 35px;"></a>
        <h2 style="color: white;">Liens:</h2>
        <table cellspacing="0" cellpadding="5" >
           <tr>
            <td class="itemm" ><a href="/visiteur/presentation/Presentation.html"><h4> Presentation </h4></a></td>
            <td class="itemm"><a href="../equipe/equipe.php"><h4>Equipe de recherche</h4></a></td>
            <td class="itemm"><a href="../publication/publication.php"><h4> Publication et communication</h4></a></td>
            <td class="itemm"><a href="../publication/publication.php"><h4> Theses et Memoires</h4></a></td>
           </tr>
           <tr>
            <td class="itemm"><a href="../publication/publication.php"><h4>Evenements Scientifiques</h4></a></td>
            <td class="itemm"><a href="../projet/index.html"><h4>Projets Nationaux</h4</a></td>
            <td class="itemm"><a href="../projet/index.html"><h4> Projets Interationaux</h4></a></td>
            <td class="itemm"><a href="../projet/index.html"><h4>Contact</h4></a></td>
           </tr>
          </table>
        </div>
          <div class="container2">
           <hr id="footer-line">
        
        <a href="https://www.facebook.com/LRDSI/"><img src="../../images/icons8-facebook-50.png" alt="" class="social-media"></a>
        <a href="https://www.linkedin.com/company/laboratoire-de-recherche-pour-le-d%C3%A9veloppement-des-syst%C3%A8mes-informatiques-lrdsi/"><img src="../../images/icons8-linkedin-50.png" alt="" class="social-media"></a>
      
        
        <p class="footer-text">© 2020 LRDSI. All rights reserved </p>
        <p class="footer-text">devlopped by Shark team</p>
      </div>
      </div>
    
    </footer>
     <script src="js/jquery-3.7.0.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {

    
    if (this.hash !== "") {
     
      event.preventDefault();

      var hash = this.hash;

    
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        
        window.location.hash = hash;
      });
    }
  });
});
$(document).ready(function() {

$('.second-content').hide();

$('.card').each(function() {
  var card = $(this);
  var readMoreButton = $('<button class="read-more">Voir plus</button>');
  card.append(readMoreButton);

  readMoreButton.click(function() {

    card.find('.second-content').slideToggle();
    var content = $(this).prev('.second-content');
    $(this).text(content.is(':visible') ? 'Voir moins' : 'Voir plus');

  });
});
});
    </script>
</body>
</html>