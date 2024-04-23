<?php
require "config.php";
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $request = "DELETE FROM projet WHERE id=?";
  $statement = $pdo->prepare($request);
  $statement->execute(array($id));
  header("Location:gestionprojet.php");
}
?>
