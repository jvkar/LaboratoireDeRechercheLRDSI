<?php
require "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titre = $_POST["titre"];
    $responsable = $_POST["responsable"];
    $mission = $_POST["mission"];
    $date = $_POST["date"];
    $type = $_POST["type"];

    if(empty($titre) || empty($responsable) || empty($mission) || empty($date) || empty($type)){
        echo "Please enter all required information";
        header("Location:projet.php");
    } else {
        $request = "SELECT * FROM projet WHERE titre=?";
        $statement = $pdo->prepare($request);
        $statement->execute(array($titre));
        $existe_titre = $statement->rowCount();

        if($existe_titre == 0){
            $request = "INSERT INTO projet(titre, type, responsable, mission, date) VALUES (?, ?, ?, ?, ?)";
            $statement = $pdo->prepare($request);
            $statement->execute(array($titre, $type, $responsable, $mission, $date));
            $id = $pdo->lastInsertId(); 
            echo "Project added successfully with ID: $id";
            header("Location:projet.php");
        } else {
            echo "Title already exists in the database";
            header("Location:projet.php");
        }
    }
} else {
    echo "You can't access this page";
    header("Location:projet.php");
}
?>

