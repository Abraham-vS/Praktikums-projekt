<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = $_POST["name"];
   $zutaten = $_POST["zutaten"];
   $kochanweisung = $_POST["kochanweisung"];

   include "dbh.inc.php";

   try {
       

        $query = "INSERT INTO recipes (names, zutaten, kochanweisung) VALUES
        ( ?, ?, ?)";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$name, $zutaten, $kochanweisung]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
   } catch (PDOException $e) {
         die("Query failded: " .$e->getMessage());
   }
} else {
    header("Location: ../index.php");
}