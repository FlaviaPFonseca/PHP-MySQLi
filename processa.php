<?php

include_once("conexao.php");

$nome = $_GET['nome'];
$email = $_GET['email'];
$profissão = $_GET['profissão'];

$sql = "insert into usuarios (nome, email,profissão) values('$nome','$email','$profissão')";
$salvar = mysqli_query($conexao,$sql);
$linhas= mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilo.css">
    <title>Sistema de Cadastro</title>

</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
               <a href="index.php"> <li>Cadastro</li></a>
               <a href="consulta.php"><li>Consulta</li></a> 
            </ul>
        </nav>
        <section>
            <h1> Cofirmação de Cadastro</h1>
            <hr><br><br>
          <?php
           if($linhas == 1){
            print "Cadastro efetuado com sucesso!";
        }else{
            print"Cadastro não efetuado.<br> Ja existe um usuario com este e-mail!";
        }
?>
        </section>
    </div>
</body>
</html>