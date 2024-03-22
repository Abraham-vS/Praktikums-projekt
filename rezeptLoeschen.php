 <!DOCTYPE html>
 <html lang="en">

 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/rezeptLoeschen.css">
 </head>

 <body>
    <div>
       <div id="HEADER">
          <a href="index.php"><img id="logo" src="Bilder/logo-img.png"></a>
          <h3>Delete Recipe</h3>
       </div>
       <div id="CONTENT">
         <div class="liste">
          <?php

            include("includes/dbh.inc.php");

            $query = "SELECT * FROM recipes;";
            $statement = $pdo->prepare($query);
            $statement->execute();
            $i=0;
            $result = $statement->fetchAll(PDO::FETCH_OBJ);
            if ($result) {
               foreach ($result as $row) {
                  $i++;
                  echo "$i." . $row->names . "<br>";
               }
            }
            ?>
            </div>
            <div class="loeschLeiste">
          <form action="includes/recipedelete.inc.php" method="post">
             <input type="text" name="name" placeholder="type in a recipe name" autocomplete="OFF">
             <button class='hinzufügen'>Delete</button>
          </form>
            </div>
       </div>
 </body>

 </html>