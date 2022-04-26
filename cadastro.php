<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Roboto + Mono: wght @ 700 & display = swap "rel =" stylesheet ">
<link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon">
<link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
<form method="POST">
<h1>CADASTRE-SE</h1>
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" maxlength="40">
        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" maxlength="40">

        <label for="senha">SENHA</label>
        <input type="password" name="senha" id="senha">

        <label for="confSenha">CONFIRMAR SENHA</label>
        <input type="password" name="confSenha" id="confSenha">

        <input type="submit" value="CADASTRAR">
       
    </form>
    <h3> Ao se cadastrar você concorda com a nossa <a href="">Política de Privacidade</a> e nossos<a href="">Termos de uso</a>.</h3>
</body>
</html>
<!---------------PHP------------------->
<?php
// 1- VERIFICAR SE ELA APERTOU O BOTÃO CADASTRAR
// 2 - GUARDAR DADOS DENTRO DAS VARIAVEIS
// 3- ENVIAR DADOS PARA CLASSE, FUNÇAO CADASTRAR
// 4- VERIFICAR O RETORNO FALSE OU TRUE
if(isset($_POST['nome']))
{
    $nome=addslashes($_POST['nome']);
    $email=addslashes($_POST['email']);
    $senha=addslashes($_POST['senha']);
    $confSenha=addslashes($_POST['confSenha']);

    if(!empty($nome)&&!empty($email)&&!empty($senha)&&!empty($confSenha))
{
    if($senha==$confSenha)
    {
        require_once 'Classes/usuarios.php';
    $us=new Usuario("lietzdev_projeto_comentarios","localhost","lietzdev_lietzdev","kavTg.Q#E^Hw");
   if($us->cadastrar($nome, $email, $senha))
   { ?>
        <p class="mensagens">Cadastrado com sucesso!<a href="entrar.php">Acesse já!</a></p>
  <?php }else{
      ?>
            <p class="mensagens">O email inserido já está cadastrado!</p>
 <?php  }
    }else{ ?>
        <p  class="mensagens">Senhas não correspondem!</p>
  <?php  }
    
}else{ ?>

    <p class="mensagens">Preencha todos os campos!</p>
<?php }
}









?>