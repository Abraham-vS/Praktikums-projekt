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
                    <input id="search" type="text" name="recipesearch" placeholder="type in category..." autocomplete="OFF">
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

$result = $statement->fetchAll(PDO::FETCH_OBJ);
if($result){
    foreach($result as $row)
    {
        include "Components/card.php";
    }
} 
 ?>
</body>

</html>