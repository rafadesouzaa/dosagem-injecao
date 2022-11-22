<?php
$capmaq = $_POST['capmaq'];
$pesopeca = $_POST['pesopeca'];
$pesocanal = $_POST['pesocanal'];
$cav = $_POST['cav'];
$capdos = $_POST['capdos'];




$dos = ($pesopeca + $pesocanal) * 1000 * $cav * $capdos / $capmaq;
$iniciolenta = $dos + 4 - ($pesocanal * $cav * 1000 * $capdos) / $capmaq;
$terminolenta = $dos - 1 - ($pesocanal * $cav * 1000 * $capdos) / $capmaq;



?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculadora de Dosagem</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />


</head>

<body>
    <div class="container">
        <div id="calc-container">
            <h2>Resultado do perfil</h2>


            <form id="formulario">







                <div class="form-control">
                    <label for="dos">Dosagem: <?php echo number_format($dos, 2); ?></label>

                </div>


                <div class="form-control">
                    <label for="iniciolenta">Início da Lenta: <?php echo number_format($iniciolenta, 2); ?>
                </div>

                <div class="form-control">
                    <label for="terminolenta">Término da Lenta: <?php echo number_format($terminolenta, 2); ?></label>
                </div>

               



            </form>
            <a href="index.html"><button class="button3">Voltar</button></a>


            <br>
            <br>
            <label for="">Participações:</label><br>
            <label for="">Rafael de Souza (Desenvolvimento)</label><br>
            <label for="">Roberto Cabral de Oliveira (Suporte Técnico)</label><br>
            <label for="">TIGRE - CORC - Injeção</label><br>



        </div>

    </div>
    </div>
</body>

</html>