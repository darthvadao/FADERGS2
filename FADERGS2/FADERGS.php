<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="icon" href=cumpadi.jpg>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Sabe de nada inocente!!</title>
</head>
<body>
<div>
    <?php
        $nomeuser = $_POST["ffname"];
        $sobrenomeuser = $_POST["llname"];
        $mail = $_POST["eemail"];

        echo "Cadastrado com Sucesso ". $nomeuser. " ".$sobrenomeuser. " ! Foi enviado uma confirmação para o seu e-mail (". $mail.").<br>";

    ?>
</div>
</body>
</html>
 