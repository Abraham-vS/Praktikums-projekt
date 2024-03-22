<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $zutaten = $_POST["zutaten"];
   $kochanweisung = $_POST["kochanweisung"];
   $kategorie = $_POST["kategorie"];

   include "dbh.inc.php";

   try {
       

        $query = "INSERT INTO recipes (names, zutaten, kochanweisung, kategorie) VALUES
        ( ?, ?, ?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $zutaten, $kochanweisung, $kategorie]);

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