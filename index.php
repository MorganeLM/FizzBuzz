<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>FizzBuzz en PHP</h1>

    <!-- PHP -->
    <?php
    for($nb = 1; $nb <= 100; $nb++){
        $message = '';
        if($nb % 3 === 0){
            $message .= 'Fizz';
        }
        if($nb % 5 === 0){
            $message .= 'Buzz';
        }
        if($nb % 3 !== 0 && $nb % 5 !== 0){
            $message =+ $nb;
        }
        echo "<p> $message </p>";
    }

// Correction
    for($nombre = 1; $nombre <= 100; $nombre++){
        $texte = '';
        if($nombre % 3 === 0){
            $texte .= 'BIM';
        }
        if($nombre % 5 === 0){
            $texte .= 'BadaBoum';
        }
        // $affichage = ($texte != '') ? $texte : $nombre;
        // opérateur de "coalescence vide" => simplification de ternaire
        $affichage = $texte ?: $nombre;
        echo "<p>$affichage</p>";
    }

    ?>

</body>
</html>