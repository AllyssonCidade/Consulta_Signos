<?php include('layouts/header.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Consulta de Signo</title>
 
</head>
<body  style="background-image: url('assets/imgs/bg.jpg')" >
    <div class="container  w-60  mt-5" style="background-color: rgba(0, 0, 0, 0.2); border-radius: 20px; padding: 20px">
        <h2  class="text-light" text-info>Descubra o seu Signo</h2>
        <form id="signo-form" method="POST" action="show_zodiac_sign.php" class="form-inline">
            <div class="form-group mb-3">
                <label class="text-light " for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control " required>
            </div>  
            <button type="submit" class="btn btn-primary">Consultar Signo</button>
        </form>
    </div>
</body>
</html>
