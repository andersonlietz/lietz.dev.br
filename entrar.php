<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Roboto + Mono: wght @ 700 & display = swap "rel =" stylesheet ">
<link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon">
<link rel="stylesheet" type="text/css" href="css/login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <span>Lietz <br>Desenvolvimento</span>
<form method="POST">
<h1>Acesse sua conta</h1>
        <img src="imagens/email.png">
        <input type="email" name="email">

        <img src="imagens/cadeado.png">
        <input type="password" name="senha">
        <input type="submit" value="ENTRAR">
        <a href="cadastro.php">Não têm uma conta? Registre-se aqui. </a>
    </form>
</body>
</html>
<?php
if(isset($_POST['email']))
{
    $email=addslashes($_POST['email']);
    $senha=addslashes($_POST['senha']);
    if(!empty($email)&&!empty($senha))
    {
        require_once 'Classes/usuarios.php';
        $us = new Usuario("lietzdev_projeto_comentarios","localhost","lietzdev_lietzdev","kavTg.Q#E^Hw");
       if($us->entrar($email, $senha))
       {
          ?> <script> location.replace("index.php"); </script> <?php
           //header ("location: index.php");
           
       }else{
                echo "Email e/ou senha estão incorretos!";
       }
    }else{
        echo "Preencha todos os campos!";
    }
}











?>