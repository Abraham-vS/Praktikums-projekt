<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
            $rezepte = [];

            if(file_exists('recipes.txt')) {
                $text = file_get_contents('recipes.txt', true);
                $rezepte = json_decode($text, true);
            };
            
                foreach ($rezepte as $row) {
                    echo "
                    <div> $row[name] : $row[zutaten] </div>
                    ";
                }
            
    ?> 
</body>
</html>
