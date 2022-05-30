<?php
<include_once("_inc/conexao.php");

$sql ="select * from usuarios";
$consulta =mysqli_query($conexao,$sql);
$registros=mysqli_num_rows($consulta);
$linhas =mysqli_num_rows($consulta);

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
                        <a href="index.php">
                        <li>Cad.Usuarios</li>
                        <li>Cad.Serviços</li>
                        <li>Consultas</li>
                        <li>Sair</li>
                    <</ul>
                </nav>
            </div> 
        <section> 
            <h1>Consultas</h1>
            <hr><br>
            <from method="get" action ="">
                Filtrar por profissão: <input type="text" name="filtro" class="campo" required autofocus>
                <input type= "submit" value="Pesquisar" class="btn">
            </from>
            <?php
           
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
