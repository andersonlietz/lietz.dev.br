<?php
require_once 'Classes/comentarios.php';
ob_start();
session_start();

$c = new Comentarios("lietzdev_projeto_comentarios","localhost","lietzdev_lietzdev","kavTg.Q#E^Hw");
$coments = $c->buscarComentarios();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Roboto + Mono: wght @ 700 & display = swap "rel =" stylesheet ">
<link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/artigo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anderson Lietz">
    <meta name="keywords" content="Artigos, Blogs, Escrita, Leitura, Redação, Copywriting">
    <title>A importância do Conteúdo Escrito.</title>
</head>
<body>
   <header>
   <div class="navbar">
       <ul>
       <li><a href="index.php">Início</a></li>
       <?php
        if (isset($_SESSION['id_master']))
        { ?>
          <li><a href="dados.php">Dados</a></li>
       
      <?php  } 
       if (isset($_SESSION['id_usuario']) || isset($_SESSION['id_master']))
       {  ?>
        <li><a href="sair.php">Sair</a></li>
      <?php   }else{  ?>
        <li><a href="entrar.php">Entre</a></li>
       
     <?php  }
       ?>
        
    </ul>

   </header>
    <div class="artigo">
    <h1>A importância do texto.</h1>

    
    <p>
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
 consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
 adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
 dolore magnam aliquam aliquam quaerat volupt. ,
  quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? 
  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
  vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? "
</p>
<p>
"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
 consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
 Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
 adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
 dolore magnam aliquam aliquam quaerat volupt. ,
  quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? 
  Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
  vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? "
</p>
<?php
if(!isset($_SESSION['id_usuario']))
{   ?>
  <h2>Comentários:</h2>
   <?php       }else{   ?>
        <h2>Deixe seu comentário:</h2>
   <?php  }

if(isset($_SESSION['id_usuario']))
{     ?>
  <form method="POST">
  <img src="imagens/usuario.png"/>
  <textarea name="texto" placeholder="Digite aqui..." maxlength="400"></textarea>
  <input type="submit" value="PUBLICAR COMENTÁRIO">
  </form>
    <?php }
 
if (count($coments) > 0)//se tiver comentarios no bd
{
  foreach ($coments as $v) {
   ?> <div class="area-comentario">
<img src="imagens/usuario.png">
<h3><?php echo $v['nome_pessoa'] ?></h3>
<h4>
  <?php  $data = new DateTime($v['dia']);
  echo $data->format('d/M/Y'); 
  echo " - ";
  echo $v['horario'];

  if(isset($_SESSION['id_usuario']))
  {
    //verificando se o comentário realmente é dele
    if($_SESSION['id_usuario'] == $v['fk_id_usuario'])
    {   ?>
      <a href="importancia-do-texto.php?id_exc=<?php echo $v ['id'];?>">Excluir</a>
  <?php          }
  }elseif(isset($_SESSION['id_master']))
  {     ?>
    <a href="importancia-do-texto.php?id_exc=<?php echo $v ['id'];?>">Excluir</a>
    <?php
  }
  ?>
 
</h4>
<p> <?php echo $v['comentarios']; ?> </p>
</div>


<?php  }
}else{
  ?>
  <p>
    Seja o primeiro a comentar neste post!
</p>
<?php
}
//pegar id de exclusao
if (isset($_GET['id_exc']))
{
  $id_e = addslashes($_GET['id_exc']);
  if (isset($_SESSION['id_master']))
  {
    $c->excluirComentario($id_e, $_SESSION['id_master']);
  }elseif(isset($_SESSION['id_usuario']))
  {
    $c->excluirComentario($id_e, $_SESSION['id_usuario']);
  }
  header("location: importancia-do-texto.php");
}
if(isset($_POST['texto']))
{
$texto = addslashes($_POST['texto']);
if(isset($_SESSION['id_master']))
{
  $c->inserirComentario($_SESSION['id_master'], $texto);
}elseif(isset($_SESSION['id_usuario']))
{
  $c->inserirComentario($_SESSION['id_usuario'], $texto);
}
header("location: importancia-do-texto.php");
}
?>
</div><!--fim da div artigo-->
</body>
</html>