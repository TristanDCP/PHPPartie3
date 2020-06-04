<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 PHP</title>
</head>
<body>

<h1>Exercice 1</h1>

<p>Créer une variable et l'initialiser à 0.  
Tant que cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer</p>
    <?php

    $i = 0;
while($i <= 10){
   echo $i++;
}

    ?>
</body>
</html>