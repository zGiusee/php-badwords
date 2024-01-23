<?php
// Variabile del paragrafo inserito dall'utente
$paragrafo = $_GET['paragrafo'];
// Parola che l'utente desidera censurare
$bad_word = $_GET['bad_word'];

// Operazione che mi consente di ricevere la lunghezza del paragrafo
$lunghezza_paragrafo = strlen($paragrafo);

// Operazione che mi consente rimpiazzare tuttle le bad_word con degli asterischi
$paragrafo_censurato = str_replace($bad_word, '***', $paragrafo);

// Operazione che mi consente di ricevere la lunghezza del paragrafo censurato
$lunghezza_paragrafo_censurato = strlen($paragrafo_censurato);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>php-badwords</title>
</head>

<body>
    <div class="vh-100 my_bg_black">
        <div class="container">
            <div class="row">

                <!-- BASE PARAGRAPH -->
                <div class="col-12 py-5">
                    <h2 class="text-white py-2"> Paragrafo senza censura: </h2>
                    <div>
                        <p class="text-white"> <?php echo $paragrafo ?></p>
                    </div>

                    <p class="text-white">Lungezza del paragrafo: <?php echo $lunghezza_paragrafo ?></p>

                </div>

                <!-- CENSURED PARAGRAPH -->
                <div class="col-12 py-5">
                    <h2 class="text-white py-2"> Paragrafo con censura: </h2>
                    <div>
                        <p class="text-white"> <?php echo $paragrafo_censurato ?></p>
                    </div>

                    <p class="text-white">Lungezza del paragrafo: <?php echo $lunghezza_paragrafo_censurato ?></p>

                </div>

            </div>
        </div>
    </div>
</body>

</html>