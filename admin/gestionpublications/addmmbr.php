<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["button1"])) {
        $titre = $_POST["titre"];
        $Auteur = $_POST["Auteur"];
        $nom_pub = $_POST["nom_pub"];
        $date = $_POST["date"];
        $type = $_POST["type"];
        $link =$_POST["link"];

        if (empty($titre) || empty($Auteur) || empty($nom_pub) || empty($date) || empty($type) || empty($link)) {
            echo "Please enter all required information";
            header("Location:gestionenv.php");
        } else {
            $request = "SELECT * FROM document WHERE titre=?";
            $statement = $pdo->prepare($request);
            $statement->execute(array($titre));
            $existe_titre = $statement->rowCount();

            if ($existe_titre == 0) {
                $request = "INSERT INTO document(titre, type, Auteur, nom_pub, date,link) VALUES (?, ?, ?, ?, ?,?)";
                $statement = $pdo->prepare($request);
                $statement->execute(array($titre, $type, $Auteur, $nom_pub, $date,$link));
              
                header("Location:gestionenv.php");
            } else {
                echo "Title already exists in the database";
                header("Location:gestionenv.php");
            }
        }
    } elseif (isset($_POST["button2"])) {
        $titre = $_POST["titre"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $date = $_POST["date"];
        $lieu = $_POST["lieu"];
     

        if (empty($titre) || empty($nom) || empty($prenom) || empty($date) || empty($lieu)) {
            echo "Please enter all required information";
            header("Location:gestionenv.php");
        } else {
            $request = "SELECT * FROM soutenance WHERE titre=?";
            $statement = $pdo->prepare($request);
            $statement->execute(array($titre));
            $existe_titre = $statement->rowCount();

            if ($existe_titre == 0) {
                $request = "INSERT INTO soutenance(titre, lieu, nom, prenom, date) VALUES (?, ?, ?, ?, ?)";
                $statement = $pdo->prepare($request);
                $statement->execute(array($titre, $lieu, $nom, $prenom, $date));
               
                header("Location:gestionenv.php");
            } else {
                echo "Title already exists in the database";
                header("Location:gestionenv.php");
            }
        }
    } elseif (isset($_POST["button3"])) {
        $titre = $_POST["titre"];
        $lieu = $_POST["lieu"];
        $date = $_POST["date"];
        $type = $_POST["type"];

        if (empty($titre) || empty($lieu) || empty($date) || empty($type)) {
            echo "Please enter all required information";
            header("Location:gestionenv.php");
        } else {
            $request = "SELECT * FROM event WHERE titre=?";
            $statement = $pdo->prepare($request); 
            $statement->execute(array($titre));
            $existe_titre = $statement->rowCount();

            if ($existe_titre == 0) {
                $request = "INSERT INTO event(titre, lieu, date, type) VALUES (?, ?, ?, ?)";
                $statement = $pdo->prepare($request);
                $statement->execute(array($titre, $lieu, $date, $type));
               
                header("Location:gestionenv.php");
            } else {
                echo "Title already exists in the database";
                header("Location:gestionenv.php");
            }
        }
    }
}
?>
