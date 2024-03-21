<?php
$id++;
echo "
        <a href='rezeptDummy.php'>
             <div class='grid-item' id='$id'><img class='eintrag-img' src='Bilder/cake-img.jpg'> $row[name] : $row[zutaten] </div>
          </a>
          ";
?>