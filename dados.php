<?php
session_start();
if(!isset($_SESSION['id_master']))
{
header("location: index.php");

}
require_once 'Classes/usuarios.php';
$us = new Usuario ("lietzdev_projeto_comentarios","localhost","lietzdev_lietzdev","kavTg.Q#E^Hw");
$dados = $us->buscarTodosUsuarios();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/dados.css">
<link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
<div class="navbar">
       <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>
    <table>
        <tr id="titulo">
            <td>ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>COMENTÁRIOS</td>
        </tr>
     <?php
	 if(count($dados) > 0 )
	 {
		 foreach($dados as $v)
		 {	?>
			 <tr>
            <td><?php echo $v['id']; ?></td>
            <td><?php echo $v['nome']; ?></td>
            <td><?php echo $v['email']; ?></td>
            <td><?php echo $v['quantidade']; ?></td>
        </tr>
        
		<?php }
				}else{
					echo "Ainda não há usuários cadastrados!";
				}
	 
	 
	 ?>
       
        
    </table>



</body>
</html>