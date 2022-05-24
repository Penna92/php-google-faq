<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php
include 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,500&display=swap" rel="stylesheet">
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
    <main class="container">
        <section>
            <?php foreach ($faq as $value) {
                echo "{$value['question']} <br>";
                echo "{$value['answer']} ";
            } ?>
        </section>
    </main>
    <footer>
        <nav class="container d-flex justify-content-between align-items-center">
            <ul class="d-flex gap-2">
                <?php foreach ($footerLinks as $link) {
                    echo "<li> $link </li>";
                } ?>
            </ul>
            <select class="form-select">
                <option selected>Italiano</option>
                <?php foreach ($languages_list as $language) {
                    echo "<option>$language</option>";
                } ?>
            </select>
        </nav>
    </footer>
</body>

</html>