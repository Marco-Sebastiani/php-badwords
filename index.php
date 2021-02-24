<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->
<?php
$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus esse nemo dolor.';
$textLength = strlen($text);
$badwords = $_GET['badwords'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>

<p> <?php echo $text; ?></p>
<p> <?php echo 'La stringa è lunga: ' .$textLength .' caratteri.'; ?> </p>
<p> <?php echo str_replace($badwords,'***',$text); ?> </p>

<!-- str_replace(porzioneDaModificare, conCosa, stringa) - cambierà il valore di
una porzione della stringa in un altro
strlen(stringa) - ritorna la lunghezza di -->
</body>
</html>



