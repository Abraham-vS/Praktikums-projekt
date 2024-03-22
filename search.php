<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipesearch = $_POST["recipesearch"];

 
    try {
        require_once  "includes/dbh.inc.php";
 
         $query = "SELECT * FROM recipes WHERE kategorie = :recipesearch;";
 
         $stmt = $pdo->prepare($query);
        
         $stmt->bindparam(":recipesearch", $recipesearch);

         $stmt->execute();

         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
         $pdo = null;
         $stmt = null;
 
    } catch (PDOException $e) {
          die("Query failded: " .$e->getMessage());
    }
 } else {
     header("Location: ../index.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezepte-anzeigen</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/rezeptuebersicht.css">
</head>
<body>
<div id="HEADER">
        <a href="index.php"><img id="logo" src="Bilder/logo-img.png"></a>
        <div class="search-bar">
                <form action="search.php" method="post">
                   <label for="search">Search for recipe:</label>
                    <input id="search" type="text" name="recipesearch" placeholder="search..." autocomplete="OFF">
                    <button>Search</button>
                </form>
        </div>
        <div class="delete">
            <a href="rezeptLoeschen.php">Delete a recipe</a>
        </div>


    </div>
    <div id="CONTENT">
    <div class='grid-container'>
    <?php

include("includes/dbh.inc.php");

$query = "SELECT * FROM recipes;";
$statement = $pdo->prepare($query);
$statement->execute();


if (empty($results)){
    echo"<div>";
    echo"<p>There was no results!</p>";
    echo"</div>";
    } else {
        foreach($results as $row){
            echo "
        <a href='rezeptDummy.php'>
             <div class='grid-item'><img class='eintrag-img' src='Bilder/cake-img.jpg'> $row[names] </div>
          </a>
          ";
        }
    }
 ?>
  <form action="rezeptÜbersicht.php" method="post">
  <button>View All</button>
  </form>


</body>
</html>