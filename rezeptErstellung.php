<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezept-hinzufügen</title>
    <link rel="stylesheet" href="rezeptErstellung.css">
</head>
<body>
    <div id="HEADER">
        <a href="index.php"><img id="logo" src="Bilder/logo-img.png"></a>
        <h1 id="überschrift">Erstelle dein Rezept</h1>
    </div>
    <img id="back-img" src="Bilder/background-img2.jpg">
    <?php
    
    $rezepte = [];

    if(file_exists('recipes.txt')) {
        $text = file_get_contents('recipes.txt', true);
        $rezepte = json_decode($text, true);
    }

    if($rezepte == NULL ){
        $rezepte = [];
    }

    if(isset($_POST['name']) && isset($_POST['zutaten']) && ($_POST['name']) != '' && ($_POST['zutaten']) != ''){
        echo 'Rezept ' . $_POST['name'] . ' wurde hinzugefügt';
        $rezepte[$_POST['id']] = [
           'id'=> $_POST['id'],
           'name' => $_POST['name'],
           'zutaten' => $_POST['zutaten']
        ];
        file_put_contents('recipes.txt',json_encode($rezepte , JSON_PRETTY_PRINT));
    };

    echo "
    <form method='POST'>
    <input type='hidden' value=\"".uniqid() ."\" name='id'>
    <div class='CONTENT'>
        <div>
            <input class='namensfeld' placeholder='name' name='name' autocomplete='off'>
       </div>
       <div>
          <textarea class='Zutatenfeld' placeholder='zutaten' name='zutaten'></textarea>
          <form onsubmit='add()'>
          <button class='neueZutat' type='submit'>weitere Zutat</button>
          </form>
          </div>
        <button class='hinzufügen' type='submit'>hinzufügen</button>
    </div>
    </form>
    ";

    ?>
    <script>
        function add(){
            
        }
    </script>
</body>
</html>