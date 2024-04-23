<?php
    require "config.php";

    
    $documentQuery = "SELECT * FROM document";
    $documentStmt = $pdo->query($documentQuery);
    $documents = $documentStmt->fetchAll(PDO::FETCH_ASSOC);

   
    $soutenanceQuery = "SELECT * FROM soutenance";
    $soutenanceStmt = $pdo->query($soutenanceQuery);
    $soutenances = $soutenanceStmt->fetchAll(PDO::FETCH_ASSOC);

    
    $eventQuery = "SELECT * FROM event";
    $eventStmt = $pdo->query($eventQuery);
    $events = $eventStmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publication-et-Evenements</title>
    <link rel="stylesheet" href="navandfooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="publication.css"> 
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=rdKkA-J_iTPtGPCSnYIKKZI3aZnMbluYMOZZi3iwwNXbKBhqYdYw_csUZECAEgjj4xUNWDzI9HNxusvXQCITnz5N0q5uGHQ6oDXefoSdPnb6ymJp_hqLjn3vInaRVsyE6yykEtFbN4ij-ILSgJQlS5SCUJ-TGA2NSZ4ae98O74w" charset="UTF-8"></script></head>
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

       <div class="pub_container"> 
           <div class="discription"> 
               <div class="title">
                 <h1>PUBLICATION ET EVENEMENT</h1> 
                 <p>Au cours de notre parcours, nous avons accompli de nombreuses réalisations dans différents domaines <br>Nous avons travaillé dur pour atteindre nos objectifs,  Nous avons réussi à obtenir de bons résultats académiques,<br>  nous avons pu développer notre créativité, notre capacité à travailler en équipe et notre <br> Nous sommes fiers de ces réalisations et nous sommes déterminés <br> à continuer à travailler dur pour atteindre de nouveaux objectifs:</p>        
               </div>
               <div class="photooo"> 
                  <img src="../../images/1.-BUSINESS-BUSINESS-ANALYSIS-01-1536x1196.png" alt="">
               </div>
           </div>
          

    <div class="allcountainers">
    <div class="sec_container" id="sec_container"> 
    <h1>publication-et-communication</h1>
    <div class="card_holder">
    <?php foreach ($documents as $document): ?>
    <div class="card" >
        <div class="first-content"><span> <h1 class="first-content-text"><?php echo $document['titre']; ?></h1> <p><?php echo $document['date']; ?></p></span></div>
            <div class="second-content">
            <p><b>Type:</b> <?php echo $document['type']; ?></p>
            <p><b>Auteur:</b> <?php echo $document['Auteur']; ?></p>
          
            <p><b>nom publication: </b><?php echo $document['nom_pub']; ?></p>
            <p><b>link: </b><?php echo '<a href="'.$document['link'].'">acceder</a>'; ?></p>
        </div>


        </div>
    <?php endforeach; ?>

</div>


<div class="third_container" id="third_container"> 
    <h1>These et Mémoire</h1>
    <div class="card_holder"> 
    <?php foreach ($soutenances as $soutenance): ?>
    <div class="card">
        <div class="first-content"><span><b> <h1 class="first-content-text"><?php echo $soutenance['nom'].' ' . $soutenance['prenom']; ?></h1></b></span></div>
        <div class="second-content">
            <p><b>Titre:</b> <?php echo $soutenance['titre']; ?></b></p>
            <p><b>prenom: <?php echo $soutenance['prenom']; ?></b></p>
            <p><b>Lieu: <?php echo $soutenance['lieu']; ?></b></p>
        </div>

        </div>
        <?php endforeach; ?>
      </div>
        


<div class="fourth_container" id="fourth_container"> 
<h1>Evenment Scientifiques</h1>
   
        
        <div class="card_holder"> 
        <?php foreach ($events as $event): ?>
    <div class="card">
        <div class="first-content"><span><b> <h1 class="first-content-text"><?php echo $event['titre']; ?></h1></b></span></div>
        <div class="second-content">
            <p><b>Type: <?php echo $event['type']; ?></b></p>
            <p><b>lieu: <?php echo $event['lieu']; ?></b></p>
            <p><b>Date: <?php echo $event['date']; ?></b></p>

    </div>

  </div>
    <?php endforeach; ?>
        </div>
   


            
<footer class="footer">
        <div class="container">
          <a href="LRDSIPRINCIPAL.html"><img src="../../images/footer logo.png" alt="" height="64px" class="logosite" ></a>
          <a href="https://en.univ-blida.dz/"><img src="../../images/univ logo.png" alt="" height="64px" style="float: right; margin: 35px;"></a>
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
    
     
      
       <script src="jquery-3.7.0.min.js"></script>
       <script src="publication.js"></script>
       <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</body>
<script>
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
</html>