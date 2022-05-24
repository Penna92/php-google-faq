<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
$headerLinks = ['Introduzione', 'Norme sulla privacy', 'Termini di servizio', 'Tecnologie', 'Domande frequenti'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>php-google-faq</title>
</head>

<body>
    <header>
        <div id="logo" class="d-flex align-items-center gap-1">
            <img class="img-fluid" src="img/download.png" alt="">
            <h3>Privacy e Termini</h3>
        </div>
        <nav>
            <ul class="d-flex gap-5">
                <?php foreach ($headerLinks as $link) {
                    echo "<li> $link </li>";
                } ?>
            </ul>
        </nav>
    </header>
    <main>

    </main>
    <footer>

    </footer>
</body>

</html>