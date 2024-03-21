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
            $rezepte = [];

            if (file_exists('recipes.txt')) {
                $text = file_get_contents('recipes.txt', true);
                $rezepte = json_decode($text, true);
            };
            $i = -1;
            
            $id = file_get_contents('test.txt', true);
            $id = json_decode($id, true);

            foreach ($rezepte as $row){
                $i++;
                if ($id > $i){
                $name = $row['name'];
                $zutaten = $row['zutaten']
                ;}
            ;}
        echo"
        <h1 class='name'>$name</h1>
        <img class='cake-img' src='Bilder/cake-img.jpg'>
        <div class='Zutaten'>$zutaten</div>
        <div class='Kochanweisung'>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident sint accusantium ducimus minima, quidem nostrum! Aspernatur aliquam eius animi, sint illo quam assumenda dolore nihil voluptatum voluptate non saepe sit.</div>
        
        "
        ?>
    </div>
    <img src="Bilder/background-img3.jpg" id="back-img">
</body>
</html>