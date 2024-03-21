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
        <select id="Kategorien-dropdown">
            <option value="bilder">Lorem </option-value>
            <option value="bilder">Loremn </option-value>
            <option value="bilder">Loremm </option-value>
        </select>
        <input type="search" id="search-bar">
        <h1>Rezept-suche</h1>
    </div>
    <div id="CONTAINER">
    <div class='grid-container'>
    <?php
    $rezepte = [];

    if (file_exists('recipes.txt')) {
        $text = file_get_contents('recipes.txt', true);
        $rezepte = json_decode($text, true);
    };
    $id = 0;
    foreach ($rezepte as $row) {
        include 'Components/card.php';
    }
    ?>
    </div>
    </div>
</body>

</html>