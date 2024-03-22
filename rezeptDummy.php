<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezepte-anzeigen</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/rezeptDummy.css">
</head>
<body>
    <div id="HEADER">
        <a href="index.php"><img id="logo" src="Bilder/logo-img.png"></a>
    </div>
    <div id="CONTENT">
    <?php
    
    include("includes/dbh.inc.php");
    $query = "SELECT * FROM recipes WHERE id = '14';";
    
    $statement = $pdo->prepare($query);
    $statement->execute();
    
    $result = $statement->fetchAll(PDO::FETCH_OBJ);
    if($result){
        foreach($result as $row)
           echo "<img class='eintrag-img' src='Bilder/cake-img.jpg'> 
                <div class='name'> $row->names</div>
                <br> 
                <div class='untererText'>
                <h2>Zutaten</h2>
                $row->zutaten
                <br> 
                <h2>Kochanweisung</h2>
                $row->kochanweisung
                </div>
                ";
    } 
     ?>
    </div>

    <img src="Bilder/background-img3.jpg" id="back-img">
</body>
</html>