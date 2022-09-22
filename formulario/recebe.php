<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "seja bem vindo" . $_POST['nomeUsuario'] . "!";

    echo "voce tem {$_POST['idadeUsuario']}";
    
    echo "cpf: {$_POST['cpfUsuario']}<br>";

    echo "e o periodo escolhido foi o {$_POST['periodoUsuario']}";
    
    $nome = $_POST['nomeUsuario'];
    $idade = $_POST['idadeUsuario'];
    $cpf = $_POST['cpfUsuario'];
    $periodo = $_POST['periodoUsuario'];

    $arquivo = fopen('alunos.csv' , 'a');//abro o arquivo para append
    fwrite($arquivo, "$nome;$idade;$cpf;$periodo\r\n");
    fclose($arquivo);
    ?>
</body>
</html>