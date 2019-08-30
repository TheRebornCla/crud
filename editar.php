<?php
include_once("conexao.php");

$ordem = mysqli_real_escape_string($conn, $_POST['ordem']);   
$plataforma = mysqli_real_escape_string($conn, $_POST['plataforma']);
$jogo = mysqli_real_escape_string($conn, $_POST['jogo']);
$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$id = mysqli_real_escape_string($conn, $_POST['id']);
$acessos = mysqli_real_escape_string($conn, $_POST['acessos']);
$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
$ddv = mysqli_real_escape_string($conn, $_POST['ddv']);
$cliente = mysqli_real_escape_string($conn, $_POST['cliente']);
$vdv = mysqli_real_escape_string($conn, $_POST['vdv']);

$result_cursos = "UPDATE jogos SET  plataforma='$plataforma', jogo='$jogo', login ='$login', senha= '$senha', id='$id', acessos= '$acessos', telefone='$telefone', ddv = '$ddv', cliente = '$cliente', vdv= '$vdv' WHERE ordem='$ordem'";
$resultado_cursos = mysqli_query($conn, $result_cursos);


?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ds/crud/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ds/crud/index.php'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
