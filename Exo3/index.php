<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 PHP</title>
</head>
<body>

<h1>Exercice 3</h1>

<p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  
Tant que la première variable n'est pas inférieure ou égale à 10 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- décrémenter la première variable</p>
    
    <?php
$firstvar = 100;
$secondvar = 7;

while($firstvar >= 10){
echo $firstvar * $secondvar, "<br>";
$firstvar--;
}
    ?>
</body>
</html>