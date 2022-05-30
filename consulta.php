´´<?php
<include_once("conexao.php");

$filtro =isset($_GET['filtro'])?$_GET['filtro']:"";

$sql ="select * from usuarios where profissão like'%$filtro%'order by nome";
$consulta =mysqli_query($conexao,$sql);
$registros=mysqli_num_rows($consulta);


?>

!DOCTYPE html>
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
               <a href="consultas.php"><li>Consulta</li></a> 
            </ul>
        </nav>
        <section>
            <h1> Consultas</h1>
            <hr><br><br>
         <form method = "get" action="">
         Filtrar por profissão : <input type="text" name="filtro" class="campo" required autofocus>
            <input type="submit" value="Pesquisar" class="btn">
            </form>


            <?php
           print=" Resultado da Pesquisa com a palavra <strong>$filtro"</strong>. <br><br>;

           print= "$registros registro(s) encontrado(s)";

           print "<br><br>";

           while( $exibirRegistro = mysqli_fetch_array($consulta)){
            
            $codigo = $exibirRegistros[0];
            $nome = $exibirRegistros[1]; 
            $email = $exibirRegistros[2];
            $profissão = $exibirRegistros[3];

            print"<article>";
           
            print "$codigo<br>";
            print "$nome<br>";
            print "$email<br>";
            print "$profissão";

            print"</article>"
           }
           mysqli_close($conexao);
           ?>

        </section>   
                
        </body>
        </html>
