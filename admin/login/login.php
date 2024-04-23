<?php
    require "config.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username = $_POST["username"];
        $password=$_POST["password"];
        if(empty($username) or empty($password)){
           $message2 = "entrez vos informations";
        }else{
            $requast="SELECT * FROM admin WHERE username=?";
            $statement =$pdo->prepare($requast);
            $statement->execute(array($username));
            $existe_username=$statement->rowcount();
            if($existe_username==0){
                $message = "Nom d'utilisateur ou mot de passe invalide";
               
            }else{
                $user = $statement->fetch();
                if($user["password"]==$password){
                    header("Location:../principal/adminprincipal.html");
                    exit();
                }else{
                    $message = "Nom d'utilisateur ou mot de passe invalide";
                   
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <h2>Binevenue</h2>
     <div class="box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    </div>

    <div class="login-box">
 
        <form method="post">
          <div class="user-box">
            <input type="text" name="username">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password">
            <label>Mot de pass</label>
          </div>
          <button class="connect-btn">
              Connecte
          </button>
          <span></span>
        </form>
        <?php
        if(isset($message)) {
        echo "<div style='color: red; font-weight: bold;font-family: 'Roboto Slab', serif;margin-top:30px'>$message</div>";
        } else if(isset($message2)) {
        echo "<div style='color: white; font-weight: bold;font-family: 'Roboto Slab', serif;margin-top:30px'>$message2</div>";
        }
        ?>

      </div>
      <div id="image">
        <a id="map-part" href="C:\Users\MSI\OneDrive\Bureau\devweb\LEDSI.png"></a>
    </div>
</body>
</html>