<?php
    require "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $currentPassword = $_POST["mdps-courant"];
        $newPassword = $_POST["nouveau"];
        
        if (empty($username) || empty($currentPassword) || empty($newPassword)) {
            echo "Veuillez remplir tous les champs.";
            header('Refresh:1;URL=profil.php');
        } else {
            $request = "SELECT * FROM admin WHERE username=?";
            $statement = $pdo->prepare($request);
            $statement->execute(array($username));
            $user = $statement->fetch();

            if (!$user) {
                echo "Nom d'utilisateur invalide.";
            } else {
                if ($user["password"] == $currentPassword) {
                    $updateQuery = "UPDATE admin SET password=? WHERE username=?";
                    $updateStatement = $pdo->prepare($updateQuery);
                    $updateResult = $updateStatement->execute(array($newPassword, $username));

                    if ($updateResult) {
                        echo "Le nom d'utilisateur et le mot de passe ont été mis à jour avec succès!";
                        header('Refresh:1;URL=../principale/adminprincipal.html');
                    } else {
                        echo "Erreur lors de la mise à jour du nom d'utilisateur et du mot de passe.";
                        header('Refresh:1;URL=profil.php');
                    }
                } else {
                    echo "Le mot de passe actuel est incorrect.";
                    header('Refresh:1;URL=profil.php');
                }
            }
        }
    }
?>
