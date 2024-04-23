<?php
    require "config.php";
    if(isset($_GET["nom"])){
        $equipe_nom=$_GET["nom"];
        $requast="SELECT * FROM equipe WHERE id_chef=?";
        $statement =$pdo->prepare($requast);
        $statement->execute(array($_POST["nom_chef"]));
        $existe_chef=$statement->rowcount();
        if(!$existe_chef){
            $requast="SELECT * FROM membre WHERE id=?";
            $statement =$pdo->prepare($requast);
            $statement->execute(array($_POST["nom_chef"]));
            $chef=$statement->fetch();
            if(isset($_POST["fullname"]) && isset($_POST["mission"]) && isset($_POST["nom_chef"])){
                $request ="UPDATE equipe SET fullname=?,mission=?,nom_chef=?,id_chef=? WHERE nom=?";
                $statement=$pdo->prepare($request);
                $statement->execute(array($_POST["fullname"],$_POST["mission"],$chef["nom"].' '.$chef["prenom"],$chef["id"],$equipe_nom));
                $request ="UPDATE membre SET nom_equipe=? WHERE id=?";
                $statement=$pdo->prepare($request);
                $statement->execute(array($equipe_nom,$chef["id"]));
                header("location:gestionequipe.php");
                
        }
        }else{
            $requast="SELECT * FROM equipe WHERE nom=?";
            $statement =$pdo->prepare($requast);
            $statement->execute(array($equipe_nom));
            $chef=$statement->fetch();
            if($_POST["nom_chef"]!=$chef["id_chef"]){
                $message=" tu peut pas changer un chef d'autre equipe"; 
            }
            if(isset($_POST["fullname"]) && isset($_POST["mission"])){
                $request ="UPDATE equipe SET fullname=?,mission=? WHERE nom=?";
                $statement=$pdo->prepare($request);
                $statement->execute(array($_POST["fullname"],$_POST["mission"],$equipe_nom));
                header("location:gestionequipe.php");
        }
        }
    }
    if(isset($message)){
        header("location:gestionequipe.php?message=$message");
    }else{
        header("location:gestionequipe.php");
    }
    
?>