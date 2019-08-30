<?php
	include_once("conexao.php");
	$result_usuario = "SELECT * FROM jogos";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Kero Games</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
<!-- partial:index.partial.html -->
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Ordem</th>
			<th>Plataforma</th>
			<th>Jogo</th>
			<th>Login</th>
			<th>Senha</th>
			<th>ID</th>
			<th>Acessos</th>
			<th>Telefone</th>
			<th>Venda</th>
			<th>Cliente</th>
			<th>R$</th>
			
			<th style="text-align:center;width:100px;">Adicionar <button type="button" data-func="dt-add" class="btn btn-success btn-xs dt-add" data-toggle="modal" data-target="#addusuario">
					<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
				</button></th>
		</tr>
	</thead>
	<!-- Modal Adicionar -->
<div class="modal fade" id="addusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addusuarioLabel">Cadastrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div class="modal-body">
<form method="POST" action="cadastrar.php" enctype="multipart/form-data">
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Plataforma</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="plataforma" name="plataforma" placeholder="digite a plataforma">
			</div>
	</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Jogo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="jogo" name="jogo" placeholder="digite o jogo">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">login</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="login" name="login" placeholder="digite o login">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">senha</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="senha" name="senha" placeholder="digite a senha">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">id</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="id" name="id" placeholder="digite o id ">
				</div>
			</div>
			<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">acessos</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="acessos" name="acessos" placeholder="digite o acesso">
					</div>
			</div>
			<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">telefone</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Ex : (85)912345678">
					</div>
			</div>
			<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Data da Venda</label>
					<div class="col-sm-10">
						<input type="date" class="form-control" id="ddv" name="ddv" >
					</div>
			</div>
			<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Cliente</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="cliente" name="cliente" placeholder="digite o nome do cliente">
					</div>
			</div>
			<div class="form-group row">
					<label for="inputEmail3" class="col-sm-2 col-form-label">Valor da venda</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="vdv" name="vdv" placeholder=" EX :R$ 20,00">
					</div>
			</div>
			<div class="form-group row">
					<div class="modal-footer">
						<input type="submit" name="caduser" id="caduser" value="cadastrar" class="btn btn-primary">
					</div>
				</div>
</form>
      </div>
    </div>
  </div>
</div>

	<tbody>
	<?php while($rows_cursos = mysqli_fetch_assoc($resultado_usuario)){ ?>
								<tr>
									<td><?php echo $rows_cursos['ordem']; ?></td>
									<td><?php echo $rows_cursos['plataforma']; ?></td>
									<td><?php echo $rows_cursos['jogo']; ?></td>
									<td><?php echo $rows_cursos['login']; ?></td>
									<td><?php echo $rows_cursos['senha']; ?></td>
									<td><?php echo $rows_cursos['id']; ?></td>
									<td><?php echo $rows_cursos['acessos']; ?></td>
									<td><?php echo $rows_cursos['telefone']; ?></td>
									<td><?php echo $rows_cursos['ddv']; ?></td>
									<td><?php echo $rows_cursos['cliente']; ?></td>
									<td><?php echo $rows_cursos['vdv']; ?></td>
									<td>
									<button type="button" class="btn btn-primary btn-xs dt-edit" data-toggle="modal" data-target="#exampleModal"  data-whatever="<?php echo $rows_cursos['ordem']; ?>" data-whateverplat="<?php echo $rows_cursos['plataforma']; ?>" 
									data-whateverjogo="<?php echo $rows_cursos['jogo']; ?>" data-whateverlogin="<?php echo $rows_cursos['login']; ?>" data-whateversenha="<?php echo $rows_cursos['senha']; ?>" 
									data-whateverid="<?php echo $rows_cursos['id']; ?>" data-whateveracessos="<?php echo $rows_cursos['acessos']; ?>" data-whateverfone="<?php echo $rows_cursos['telefone']; ?>"
									data-whateverddv="<?php echo $rows_cursos['ddv']; ?>" data-whatevercliente="<?php echo $rows_cursos['cliente']; ?>" data-whatevervdv="<?php echo $rows_cursos['vdv']; ?>" style="margin-right:16px;" >
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<!-- <button type="button" class="btn btn-danger btn-xs dt-delete" data-toggle="modal" data-target="#deletarusuario" id="">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button> -->
									<a href="deletar.php?ordem=<?php echo $rows_cursos['ordem']; ?>" data-confirm="Tem certeza de que deseja excluir o item selecionado?">
									<button type="button" class="btn btn-danger btn-xs dt-delete" >
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</a>
									</button>
									</td>
								</tr>
								<?php } ?>
	</tbody>
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method= "POST" action="http://localhost/ds/crud/editar.php" enctype="multipart/form-data">
		  <div class="form-group">
            <label for="recipient-plat" class="col-form-label">Plataforma:</label>
            <input type="text"  name="plataforma" class="form-control" id="recipient-plat">
          </div>
		  <div class="form-group">
            <label for="recipient-jogo" class="col-form-label">Jogo:</label>
            <input type="text" name="jogo" class="form-control" id="recipient-jogo">
          </div>
		  <div class="form-group">
            <label for="recipient-login" class="col-form-label">Login:</label>
            <input type="text"  name="login" class="form-control" id="recipient-login">
          </div>
		  <div class="form-group">
            <label for="recipient-senha" class="col-form-label">Senha:</label>
            <input type="text" name="senha" class="form-control" id="recipient-senha">
          </div>
		  <div class="form-group">
            <label for="recipient-id" class="col-form-label">Id:</label>
            <input type="text" name="id" class="form-control" id="recipient-id">
          </div>
		  <div class="form-group">
            <label for="recipient-acessos" class="col-form-label">Acessos:</label>
            <input type="text" name="acessos" class="form-control" id="recipient-acessos">
          </div>
		  <div class="form-group">
            <label for="recipient-telefone" class="col-form-label">Telefone:</label>
            <input type="text" name="telefone" class="form-control" id="recipient-telefone">
          </div>
		  <div class="form-group">
            <label for="recipient-ddv" class="col-form-label">Data de Venda:</label>
            <input type="text" name="ddv" class="form-control" id="recipient-ddv">
          </div>
		  <div class="form-group">
            <label for="recipient-cliente" class="col-form-label">Cliente:</label>
            <input type="text" name="cliente" class="form-control" id="recipient-cliente">
          </div>
		  <div class="form-group">
            <label for="recipient-vdv" class="col-form-label">Valor da Venda:</label>
            <input type="text" name="vdv" class="form-control" id="recipient-vdv">
		  </div>
		  <input type="hidden"  name="ordem" class="form-control" id="ordem" value="" >
		  	<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
				<button type="submit" class="btn btn-danger">Alterar</button>
      		</div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script  src="script.js"></script>
<script src="personalizado.js"></script>
<script type="text/javascript">
$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Botão que acionou o modal
  var recipient = button.data('whatever') 
  var recipientplat = button.data('whateverplat') // Extrai informação dos atributos data-*
  var recipientjogo = button.data('whateverjogo')
  var recipientlogin = button.data('whateverlogin')
  var recipientsenha = button.data('whateversenha')
  var recipientid = button.data('whateverid')
  var recipientacessos = button.data('whateveracessos')
  var recipientfone = button.data('whateverfone')
  var recipientddv = button.data('whateverddv')
  var recipientcliente = button.data('whatevercliente')
  var recipientvdv = button.data('whatevervdv')

  // Se necessário, você pode iniciar uma requisição AJAX aqui e, então, fazer a atualização em um callback.
  // Atualiza o conteúdo do modal. Nós vamos usar jQuery, aqui. No entanto, você poderia usar uma biblioteca de data binding ou outros métodos.
  var modal = $(this)
  modal.find('.modal-title').text('Alterar Dados' + recipient)
  modal.find('#ordem').val(recipient)
  modal.find('#recipient-plat').val(recipientplat)
  modal.find('#recipient-jogo').val(recipientjogo)
  modal.find('#recipient-login').val(recipientlogin)
  modal.find('#recipient-senha').val(recipientsenha)
  modal.find('#recipient-id').val(recipientid)
  modal.find('#recipient-acessos').val(recipientacessos)
  modal.find('#recipient-fone').val(recipientfone)
  modal.find('#recipient-ddv').val(recipientddv)
  modal.find('#recipient-cliente').val(recipientcliente)
  modal.find('#recipient-vdv').val(recipientvdv)
  

})
</script>

</body>
</html>