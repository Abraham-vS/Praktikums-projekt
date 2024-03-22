<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $zutaten = $_POST["zutaten"];
   $kochanweisung = $_POST["kochanweisung"];
   $kategorie = $_POST["kategorie"];

   include "dbh.inc.php";

   try {
       

        $query = "DELETE FROM recipes WHERE names = :names ";

        $stmt = $pdo->prepare($query);

        $stmt->bindparam(":names",$name);

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../rezeptErstellung.php");

        die();
   } catch (PDOException $e) {
         die("Query failded: " .$e->getMessage());
   }
} else {
    header("Location: ../index.php");
}