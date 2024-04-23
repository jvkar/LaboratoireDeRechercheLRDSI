<?php
require "config.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nom = $_POST["nom"];
    $nom=strtoupper($nom);
    $fullname=$_POST["fullname"];
    $nom_chef=$_POST["nom_chef"];
    $mission=$_POST["mission"];
    $domaine=$_POST["domaine"];
    if(empty($nom) || empty($fullname) || empty($nom_chef) ){
        $message= "please enter equipe informations";
        header("location:gestionequipe.php?message=$message");
    }else{
        // if chef exists
        $requast="SELECT * FROM equipe WHERE  id_chef=?";
        $statement =$pdo->prepare($requast);
        $statement->execute(array($nom_chef));
        $deja_chef=$statement->rowcount();
        // if equipe exists
        $requast="SELECT * FROM equipe WHERE  nom=?";
        $statement =$pdo->prepare($requast);
        $statement->execute(array($nom));
        $equipe_exists=$statement->rowcount();
        $requast2="SELECT * FROM membre WHERE  id=?";
        $statement2 =$pdo->prepare($requast2);
        $statement2->execute(array($nom_chef));
        $chef=$statement2->fetch();
        if($deja_chef){
            $message= $chef["nom"]." ".$chef["prenom"]." est déja un chef d'equipe";
            header("location:gestionequipe.php?message=$message");
        }if($equipe_exists){
            $message= $nom." est déja un nom d'equipe";
            header("location:gestionequipe.php?message=$message");
        }else{
            $requast="INSERT INTO equipe(nom,fullname,nom_chef,mission,id_chef) VALUES (?,?,?,?,?)";
            $statement =$pdo->prepare($requast);
            $statement->execute(array($nom,$fullname,$chef["nom"]." ".$chef["prenom"],$mission,$chef["id"]));
                $request ="UPDATE membre SET nom_equipe=? WHERE id=?";
                $statement=$pdo->prepare($request);
                $statement->execute(array($nom,$chef["id"]));
        }
            $domains=explode(",",$domaine);
            $requast="INSERT INTO domaine_equipe(domaine,nom_equipe) VALUES (?,?)";
            foreach($domains as $domain){
                $statement =$pdo->prepare($requast);
                $statement->execute(array($domain,$nom));
            }
            header("location:gestionequipe.php");
        
        
    }
}
?>