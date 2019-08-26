<?php
include_once("conexao.php");

$plataforma = mysqli_real_escape_string($conn, $_POST['plataforma']);
$jogo = mysqli_real_escape_string($conn, $_POST['jogo']);
$login =  mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$id = mysqli_real_escape_string($conn, $_POST['id']);
$acessos = mysqli_real_escape_string($conn, $_POST['acessos']);
$telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
$ddv = mysqli_real_escape_string($conn, $_POST['ddv']);
$cliente = mysqli_real_escape_string($conn, $_POST['cliente']);
$vdv = mysqli_real_escape_string($conn, $_POST['vdv']);

$result_usuario = "INSERT INTO games (plataforma, jogo, login, senha, id, acessos, telefone, ddv, cliente, vdv) VALUES ('$plataforma', '$jogo', '$login', '$senha', '$id', '$acessos', '$telefone', '$ddv', '$cliente', '$vdv')";
$resultado_usuario = mysqli_query($conn, $result_usuario);	

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conn) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ds/crud/'>
				<script type=\"text/javascript\">
					alert(\"Curso Cadastrado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/ds/crud/'>
				<script type=\"text/javascript\">
					alert(\"Curso não foi cadastrado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conn->close(); ?>