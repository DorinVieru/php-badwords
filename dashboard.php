<?php

// VARIABILI PER RECUPERARE I VALORI DAL FORM
$paragrafo = $_GET["paragrafo"];
$bad_word = $_GET["bad-word"];

// VARIABILI PER SOSTITUIRE LE PAROLE CATTIVE CON NUOVE PAROLE E SCRIVERE UN NUOVO PARAGRAFO
$new_word = '***';
$new_paragrafo = str_replace($bad_word, $new_word, $paragrafo)

?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Badwords - Dashboard</title>
</head>

<body>
    <!-- PRINT ON HTML -->
    <div class="container py-5">
        <div class="row">
            <div class="col-12">
                <h1>Ecco il tuo paragrafo <span class="text-danger">malizioso</span></h1>
                <p> <?php echo $paragrafo ?> </p>
                <p>La lunghezza del tuo paragrafo <span class="text-danger">malizioso</span> è pari a <strong><?php echo strlen($paragrafo) ?> caratteri</strong>, complimenti! </p>
            </div>
            <div class="col-12">
                <h1>Ecco il tuo paragrafo <span class="text-success">senza impurità</span> mondane </h1>
                <p> <?php echo $new_paragrafo ?> </p>
                <p>La lunghezza del tuo paragrafo <span class="text-success">senza impurità</span> mondane è pari a <strong><?php echo strlen($new_paragrafo) ?> caratteri</strong>, complimenti! </p>
            </div>
        </div>
    </div>

</body>

</html>