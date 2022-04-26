<?php
require_once 'Classes/usuarios.php';
session_start();
if(isset($_SESSION['id_usuario']))
{
    $us = new Usuario("lietzdev_projeto_comentarios","localhost","lietzdev_lietzdev","kavTg.Q#E^Hw");
   $informacoes=$us->buscarDadosUser($_SESSION['id_usuario']);
}elseif(isset($_SESSION['id_master']))
{
    $us = new Usuario("lietzdev_projeto_comentarios","localhost","lietzdev_lietzdev","kavTg.Q#E^Hw");
  $informacoes = $us->buscarDadosUser($_SESSION['id_master']);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"content="Porfólio de desenvolvimento web, com artigos jogos e contribuições para desenvolvimento web.">
    <meta property="og:site_name" content="Lietz Desenvolvimento" />
    <meta property="og:url" content="https://lietz.dev.br" />
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="https://lietz.dev.br" />
    <meta name="author" content="Anderson Lietz">
    <meta property="og:type" content="website" />

    <title>Lietz Desenvolvimento</title>
</head>
<body>
   <header> 
   <h1 id="principal">Lietz Desenvolvimento</h1>
       <details>
           <summary>&#9776;</summary>
           <nav>
       <ul>
           <?php
                if(isset($_SESSION['id_master']))
                { ?>
                        <li><a rel="nofollow" href="dados.php">Dados</a></li>
             <?php   }
           ?>
        <li><a href="game.php">Game</a></li>
        <?php
            if(isset($informacoes))//se a pessoa estiver logada
            { ?>
                <li><a rel="nofollow" href="sair.php">Sair</a></li>
           <?php }else{ ?>
                <li><a rel="nofollow" href="entrar.php">Entrar</a></li>
           <?php }
        ?>
        <li><a href="blog.php">Blog</a></li>
    </ul>
           </nav>
           </details>
   </header>
   <main>
<div id="bio">
   
   <?php
   if(isset($_SESSION['id_master']) || isset($_SESSION['id_usuario']))
   {
       ?>
   <h2>
    <?php 
    echo "Olá ";
    echo $informacoes['nome'];
    echo ", seja bem vindo(a)!"
    ?>

   </h2>
   <?php

   }
   ?>
    

    <img src="imagens/perfil.jpg" class="imagem"/>
    
        <p>Fico feliz que tenha acessado o meu site!</p>
		<p>Me chamo Anderson Lietz e criei este site para aprimorar meus conhecimentos de linguagens e desenvolvimento web.</p>
		<p>Na área "Game" do menu, pretendo criar jogos em JavaScript, PHP, etc.
		No momento há apenas um "Jogo da Velha", desenvolvido em JavaScript com a ajuda de um tutorial, 
		o qual ainda apresenta algumas falhas e vou aprimorar.
		<p>Em "Blog", atualmente vazia, vou postar alguns artigos sobre programação, trazendo dicas e soluções, conforme minha evolução na área.</p>
		<p> Outro site pessoal que já venho desenvolvendo a uns meses e que possui mais conteúdo,
		é o <a rel= "dofollow" href="https://vacilouviroucronica.com">Vacilou, virou Crônica!</a>, onde posto algumas crônicas autorais.</p>
		<p> Em ambos os sites tenho a intenção de fazer em breve, em PHP e MySQL, uma área de comentários abaixo dos posts.</p>
		<p>Dúvidas, sugestões, possíveis parcerias ou oferta de trabalho, entre em contato comigo pelo email abaixo.</p> 
		
		</p>
        
</div>
<aside>
    <h2>Destaques</h2>


    <div class="post">
  
  <a rel="nofollow" href="importancia-do-texto.php">A importância do texto.</a>
</div>

  <div class="post">
  <a rel="dofollow" href="meu-primeiro-css.php" >Meu primeiro arquivo CSS</a>
</div>

<div class="post">
  
  <a rel="nofollow" href="paleta-hexa.php">Paleta de cores em Hexadecimal</a>
</div>





</aside>
</main>

<div id="footer">
<div id="gmail"><p><a href="mailto:contato@lietz.dev.br">contato@lietz.dev.br</a></p>

</div>
<div id="copy">&copy; 2021-2022 lietz.dev.br </div>
<p>Desde 16/10/2021.</p>
</div>


</body>
</html>












