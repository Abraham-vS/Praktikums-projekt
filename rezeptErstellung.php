<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rezept-hinzufügen</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/rezeptErstellung.css">
</head>
<body>
    <div id="HEADER">
        <a href="index.php"><img id="logo" src="Bilder/logo-img.png"></a>
        <h1 id="überschrift">Erstelle dein Rezept</h1>
    </div>

    <img id="back-img" src="Bilder/background-img2.jpg">

    <div class='CONTENT'>

    <h3>Add RECIPE</h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input class="emptyFields" type="text" name="name" placeholder="Name" autocomplete='off'>
        <textarea class="emptyFields" name="zutaten" placeholder="Zutaten" autocomplete='off'></textarea>
        <textarea class="emptyFields" name="kochanweisung" placeholder="Kochanweisung" autocomplete='off'></textarea>
        <input class="emptyFields" type="text" name="kategorie" placeholder="Kategorie" autocomplete='off'>
        <button class='hinzufügen'>add</button>
    </form>
    </div>
</body>
</html>