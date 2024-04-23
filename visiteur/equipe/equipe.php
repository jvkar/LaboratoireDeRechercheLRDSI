<?php require "config.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="equipe.css">
     <link rel="stylesheet" href="navandfooter.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
  <!-- debut -->
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
        <li class="nav-item" id="pj"><a href="../projets/projet.php">Projets</a>
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
      <!-- fin -->
      <div class="page-1">
        <img src="../../images/header-img-equipe.png" alt="" height="50%" width="50%">
        <h1>Dans cette Section <br> vous trouverez tout
          nos equipes</h1>
         <a href="#eqp"> <button class="btn-equipe">
              Voir nos equipes
          </button>
        </a>
      </div>
      <div class="page-2" id="eqp">
        
      <div class="search-container">
        <input type="text" id="searchInput" class="search-input" placeholder="Chercher selon l'abreviation">
      </div>
      <br><br><br><br>
      <?php
        $requast="SELECT * FROM equipe";
        $statement =$pdo->prepare($requast);
        $statement->execute(array());
        $i=1;
        while($equipe= $statement->fetch()){
            echo '<div class="card" id="'.$equipe["nom"].'">
            <div class="first-content">
            <span><h1>'.$equipe["fullname"].'</span>
            </div>
             <div class="second-content">
              <span><p> LA MISSION : <br>
                '.$equipe["mission"].'
                 </p>
                 </span>
                 <button class="mmbr-btn" data-target="membres-'.$i.'">Les membres</button>

              <div class="membres membres-'.$i.'">

                <h1>les membres de '.$equipe["nom"].' :</h1>
                <h5>le chef d equipe est : '.$equipe["nom_chef"].'</h5>';
                
              $i++;
              $requast2="SELECT * FROM membre WHERE nom_equipe=? AND id!=?";
              $statement2 =$pdo->prepare($requast2);
              $statement2->execute(array($equipe["nom"],$equipe["id_chef"]));
              echo ' 
              <table cellspacing=0 cellpadding="0px" >
              <tr>
                <th>nom et prenom</th>
                <th>Grade</th>
                <th>email</th>
              </tr>
             
              ';
              while($membre= $statement2->fetch()){
                
                echo '<tr><td>'.$membre['nom'].' '.$membre['prenom'].'</td> <td>'.$membre['grade'].'</td><td>'.$membre['email'].'</td>';
              
              echo ' </tr>';
              }
              echo '</table><button class="close-btn">ferme</button>

              </div>
           
            
           </div>
          </div>';
        }

      ?>
      

      </div>
    
   <a href="#top" class="go-up"> <img src="../../images/icons8-scroll-up-48.png" alt="" class="scrollup"></a>
            <!--hna hathot les evenements li rahom f databse -->
            <footer class="footer">
        <div class="container">
          <a href="LRDSIPRINCIPAL.html"><img src="../../images/footer logo.png" alt="" height="64px" class="logosite"></a>
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

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  document.getElementById('searchInput').addEventListener('keyup', function() {
    var searchName = document.getElementById('searchInput').value.toUpperCase();
    var cards=document.querySelectorAll('.card')
    for( i=0;i<cards.length;i++){
      if(!cards[i].id.includes(searchName)){
        cards[i].style.display="none";
      }else{
        cards[i].style.display="";
      }
    }
    
  });
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


</script>
<script>
const myButtons = document.querySelectorAll(".mmbr-btn");
const myWindows = document.querySelectorAll(".membres");

myButtons.forEach(button => {
  button.addEventListener('click', () => {
    const target = button.getAttribute('data-target');
    const targetWindow = document.querySelector(`.${target}`);
    targetWindow.classList.add('show');
  });
});

myWindows.forEach(window => {
  window.addEventListener('click', () => {
    window.classList.remove('show');
  });
});

 


window.addEventListener("scroll", function() {
    var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
    var screenHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight || 0;
    var myItem = document.querySelector(".scrollup");
  
    if (scrollPos > screenHeight * 0.5) { 
      myItem.classList.add("show-scrollup");
    } else {
      myItem.classList.remove("show-scrollup");
    }
  });
</script>

</html>