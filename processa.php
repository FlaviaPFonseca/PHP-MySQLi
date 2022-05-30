<?php
include_once("conexao.php");

$filtro =isset($_GET['filtro'])?$_GET['filtro']:

$sql ="select *from usuarios where profissao like'%$filtro%' order by nome";
$consulta =mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);
?>

$nome =$_POST['nome'];
$email =$_POST['email'];
$profissao =$_POST['profissao'];

$sql = "insert into usuarios (nome, email,profissao) values('$nome','$email','$profissao')";
$salvar =mysqli_query($conexao,$sql);
$linhas= mysqli_affected_rows($conexao);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stilo.css">
    <title>Sistema de Cadastro</title>
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
               <a href="index.php"> <li>Cadastro</li></a>
               <a href="consultas.php"><li>Consulta</li></a> 
            </ul>
        </nav>
        <section>
            <h1>Conformação de Cadastro</h1>
            <hr> <br><br>

            <?php
            if($linhas==1){
                print "Cadastro efetuado com sucesso!"
            }else{
                print"Cadastro não efetuado.<br> Ja existe um usuario com este e-mail!";
            }

            <h1> consultas</h1>
            <hr></hr>
            <form method="get" action="">
                Filtrar por profissão : <input type="text" name="filtro" class="campo" required autofocus>
            <input type="submit" value="Pesquisar" class="btn">
            </form>

            <?php

            print"Resultado da pesquisa com a palavra <strong>$filtro</strong>.<br><br>";

            print "$registros registros encontrados.";
            
            print "<br><br>";

            while($exibirRegistros = mysqli_fetch_array($consulta) ){

            $codigo = $exibirRegistros[0];
            $nome = $exibirRegistros[1]; 
            $email = $exibirRegistros[2];
            $profissão = $exibirRegistros[3];
            
            print "<article>";

            print "$codigo<br>";
            print "$nome<br>";
            print "$email<br>";
            print "$profissão";

            print "</article>";
            }
            mysqli_close($conexao);
            ?>

            </section>
           </div> 
           </body>
           </html>
            