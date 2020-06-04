<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 8 PHP</title>
</head>
<body>

<h1>Exercice 8</h1>

<p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    
    <?php

for($step = 200; $step >= 0; $step-=12){
    echo "Enfin !!!! <br>";
}

    ?>
</body>
</html>