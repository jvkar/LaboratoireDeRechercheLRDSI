<?php
    require "config.php";
    $membre_id=$_GET['id'];
    $requast="SELECT * FROM equipe WHERE id_chef=?";
    $statement =$pdo->prepare($requast);
    $statement->execute(array($membre_id));
    $existe_chef=$statement->rowcount();
    if(!$existe_chef){
        $request ="DELETE FROM membre WHERE id=?";
        $statement =$pdo->prepare($request);
        $statement->execute(array($membre_id));
        header("location:gestionmembre.php");
    }else{
        header("location:gestionmembre.php?deleteErr=you cen't delete a chef");
    }
?>