<?php
ob_start();
session_start();
require_once 'Classes/usuarios.php';
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
                        <hr>
             <?php   }
           ?>
           <hr>
        <li><a href="game.php">Game</a></li>
        <hr>
        <?php
            if(isset($informacoes))//se a pessoa estiver logada
            { ?>
                <li><a rel="nofollow" href="sair.php">Sair</a></li>
                <hr>
           <?php }else{ ?>
                <li><a rel="nofollow" href="entrar.php">Entrar</a></li>
                <hr>
           <?php }
        ?>
        <li><a href="#blog">Blog</a></li>
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
    <h2>Buscando estágio remoto:</h2>

    <img src="imagens/radar.gif" class="imagem"/>
    <div id="js_timer">
      <div id="timer">
        00:00
  </div>
   </div>
    <h2>Atuação:</h2>
    <div class="post">
  
  <a rel="nofollow" href="#">PHP</a>
</div>

  <div class="post">
  <a rel="dofollow" href="#" >Cpanel</a>
</div>

<div class="post">
  
  <a rel="nofollow" href="#">MySQL</a>
</div>





</aside>
<section id="blog">

<h2>Artigos</h2>


<div class="post">

<a href="cadeadinho-do-site-nao-aparece.php">Site alerta como “Não Seguro”: como exibir  o certificado SSL ("cadeadinho") forçando o protocolo HTTPS</a>
</div>

<div class="post">
<a rel="dofollow" href="meu-primeiro-css.php" >Meu primeiro arquivo CSS</a>
</div>

<div class="post">

<a rel="nofollow" href="paleta-hexa.php">Paleta de cores em Hexadecimal</a>
</div>


  </section>
</main>

<footer>
<div id="gmail"><p><a href="mailto:contato@lietz.dev.br">contato@lietz.dev.br</a></p>

</div>
<div id="copy">&copy; 2021-2022 lietz.dev.br </div>
<p>Desde 16/10/2021.</p>
  </footer>

<script type="text/javascript" charset="utf-8">

function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;
        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}
window.onload = function () {
    var duration = 40 * 1; // Converter para segundos
        display = document.querySelector('#timer'); // selecionando o timer
    startTimer(duration, display); // iniciando o timer
};

</script>
</body>
</html>












