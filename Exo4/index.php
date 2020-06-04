<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 PHP</title>
</head>
<body>

<h1>Exercice 4</h1>

<p>Créer une variable et l'initialiser à 1.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur</p>
    
    <?php
 $firstvar = 1;
while($firstvar <= 10){
    echo $firstvar, "<br>";
    $firstvar = $firstvar + ($firstvar/2);
}

    ?>
</body>
</html>