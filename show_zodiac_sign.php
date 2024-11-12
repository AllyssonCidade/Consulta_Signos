<?php include('layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado do Signo</title>
</head>
<body style="background-image: url('assets/imgs/bg.jpg')">
    <div class="container w-60 mt-5 " style="background-color: rgba(0, 0, 0, 0.2); border-radius: 20px; padding: 20px" >
        <h2 class="text-light">Resultado do Signo</h2>

        <?php
        $data_nascimento = $_POST['data_nascimento'];
        $signos = simplexml_load_file("signos.xml");

        // Extrair dia e mês da data de nascimento
        $data = new DateTime($data_nascimento);
        $dia = $data->format('d');
        $mes = $data->format('m');

        $signo_encontrado = null;

        foreach ($signos->signo as $signo) {
            list($inicio_dia, $inicio_mes) = explode('/', $signo->dataInicio);
            list($fim_dia, $fim_mes) = explode('/', $signo->dataFim);

            if (($mes == $inicio_mes && $dia >= $inicio_dia) || ($mes == $fim_mes && $dia <= $fim_dia)) {
                $signo_encontrado = $signo;
                break;
            }
        }

        if ($signo_encontrado) {
            echo "<h3 class='text-light'>{$signo_encontrado->signoNome}</h3>";
            echo "<p class='text-light'>{$signo_encontrado->descricao}</p>";
        } else {
            echo "<p class='text-light'>Não foi possível identificar o seu signo.</p>";
        }
        ?>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>
