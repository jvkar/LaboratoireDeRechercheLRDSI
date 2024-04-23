<?php
require "config.php";

if (isset($_GET["id1"])) {
  $id = $_GET["id1"];
  $request = "DELETE FROM document WHERE id=?";
  $statement = $pdo->prepare($request);
  $statement->execute(array($id));
  header("Location:gestionenv.php");
} elseif (isset($_GET["id2"])) {
  $id = $_GET["id2"];
  $request = "DELETE FROM soutenance WHERE titre=?";
  $statement = $pdo->prepare($request);
  $statement->execute(array($id));
  header("Location:gestionenv.php");
} elseif (isset($_GET["id3"])) {
  $id = $_GET["id3"];
  $request = "DELETE FROM event WHERE titre=?";
  $statement = $pdo->prepare($request);
  $statement->execute(array($id));
  header("Location:gestionenv.php");
} else {
  echo "Invalid link ID";
}
?>
