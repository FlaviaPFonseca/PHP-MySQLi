<?php
<include_once("_inc/conexao.php");

$sql ="select * from funcionarios";
$consulta =mysqli_query($conexao,$sql);
$linhas =mysqli_num_rows($consulta);

mysqli_close($conexao);

?>

<DOCTYPE html>
    <html lang="pt-br">
        <header>
            <meta charset ="utf-8">
            <title>Cadastro</title>
            <link rel="stylesheet" href="_css/estilo.css">
        </header>
        <body>
            <div class="container">
                <nav>
                    <ul class="menu">
                        <a href="index.php"><li>Cad.Funcionários</li></a>
                        <li>Cad.Funcionários</li>
                        <li>Cad.Clientes</li>
                        <li>Cad.Serviços</li>
                        <li>Consultas</li>
                        <li>Sair</li>
                    <</ul>
                </nav>
        <section> 
            <h1>Consultas</h1>
            <hr>
            <br>
            <?php
           
           print= "$linhas registro(s) encontrado(s)"";
             
           ?>

        </section>   
        </div>         
        </body>
