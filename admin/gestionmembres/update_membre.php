<?php
    require "config.php";
    if(isset($_GET["id"])){
        $membre_id=$_GET["id"];
        $requast="SELECT * FROM equipe WHERE id_chef=?";
        $statement =$pdo->prepare($requast);
        $statement->execute(array($membre_id));
        $existe_chef=$statement->rowcount();
        if(!$existe_chef){
            if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["grade"]) && isset($_POST["email"]) && isset($_POST["equipe"])){
                $request ="UPDATE membre SET nom=?,prenom=?,grade=?,email=?,nom_equipe=? WHERE id=?";
                $statement=$pdo->prepare($request);
                $statement->execute(array($_POST["nom"],$_POST["prenom"],$_POST["grade"],$_POST["email"],$_POST["equipe"],$membre_id));
                header("location:gestionmembre.php");
        }
        }else{
            if($_POST["equipe"]!=$statement->fetch()["nom"]){
                $message= "tu peut pas changer l'equipe d'un chef"; 
            }
            if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["grade"]) && isset($_POST["email"])){
                    $request ="UPDATE membre SET nom=?,prenom=?,grade=?,email=? WHERE id=?";
                    $statement=$pdo->prepare($request);
                    $statement->execute(array($_POST["nom"],$_POST["prenom"],$_POST["grade"],$_POST["email"],$membre_id));
                    $request ="UPDATE equipe SET nom_chef=? WHERE id_chef=?";
                    $statement=$pdo->prepare($request);
                    $statement->execute(array($_POST["nom"].' '.$_POST["prenom"],$membre_id));
                    
            }
            if(isset($message)){
                header("location:gestionmembre.php?message=$message");
            }else{
                header("location:gestionmembre.php");
            }
        }
    }
?>