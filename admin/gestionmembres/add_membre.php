<?php
    require "config.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nom = $_POST["nom"];
        $prenom=$_POST["prenom"];
        $grade=$_POST["grade"];
        $email=$_POST["email"];
        $equipe=$_POST["equipe"];
        if(empty($nom) || empty($prenom) || empty($grade) || empty($email)){
            $message= "please enter your informations";
            header("location:gestionmembre.php?message=$message");
            exit();
        }
        if($equipe==0){
                $requast="INSERT INTO membre(nom,prenom,grade,email) VALUES (?,?,?,?)";
                $statement =$pdo->prepare($requast);
                $statement->execute(array($nom,$prenom,$grade,$email));
                header("location:gestionmembre.php");
            
        }else{
                $requast="INSERT INTO membre(nom,prenom,grade,email,nom_equipe) VALUES (?,?,?,?,?)";
                $statement =$pdo->prepare($requast);
                $statement->execute(array($nom,$prenom,$grade,$email,$equipe));
                header("location:gestionmembre.php");
            }}
?>