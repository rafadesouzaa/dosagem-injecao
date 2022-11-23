<?php


$tempociclo = $_POST['tempociclo'];




$tempoReqFina = $tempociclo * 0.05;
$tempoRefrigFina = $tempociclo * 0.75;

$tempoReqGrossa = $tempociclo * 0.1;
$tempoRefrigGrossa = $tempociclo * 0.6;

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dosagem e Tempo</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />


</head>

<body>
    <div class="container">
        <div id="calc-container">
            <h2>Resultado dos Tempos</h2>


            <form id="formulario">





                <div class="fontcolor">
                    <div class="form-control">
                        <label for="tempoRecalque">Parede Fina:</label>
                    </div>

                    <div class="form-control">
                        <label for="tempoRecalque">Tempo de Recalque: <?php echo number_format($tempoReqFina, 2); ?> s</label>
                    </div>
                    <div class="form-control">
                        <label for="tempoRefrigFina">Tempo de Refrigeração: <?php echo number_format($tempoRefrigFina, 2); ?> s</label>
                    </div>
                </div>
                <br>

                <div class="fontcolor">
                    <div class="form-control">
                        <label for="tempoRecalque">Parede Grossa:</label>
                    </div>
                    <div class="form-control">
                        <label for="tempoRecalque">Tempo de Recalque: <?php echo number_format($tempoReqGrossa, 2); ?> s</label>
                    </div>


                    <div class="form-control">
                        <label for="tempoRefrigGrossa">Tempo de Refrigeração: <?php echo number_format($tempoRefrigGrossa, 2); ?> s</label>

                    </div>

                </div>

            </form>


            <br>

            <div class="lado">
                <div class="center">
                    <a href="tempo.html"><button class="button1">voltar</button></a>
                </div>
            </div>

        </div>



        <br>

        <div class="fontcolor">
            <label for="">Rafael de Souza (Desenvolvimento)</label><br>
            <label for="">Roberto Cabral de Oliveira (Suporte Técnico)</label><br>
            <label for="">TIGRE - CORC - Injeção</label><br>

        </div>

    </div>
    </div>
</body>

</html>