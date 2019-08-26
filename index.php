<?php
	include_once("conexao.php");
	$result_usuario = "SELECT * FROM games";
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
			<th>Data da Venda</th>
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
							<input type="email" class="form-control" id="plataforma" name="plataforma" placeholder="Email">
							</div>
							</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">Jogo</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="jogo" name="jogo" placeholder="Email">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">login</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="login" name="login" placeholder="Email">
									</div>
								</div>
								<div class="form-group row">
									<label for="inputEmail3" class="col-sm-2 col-form-label">senha</label>
									<div class="col-sm-10">
										<input type="email" class="form-control" id="senha" name="senha" placeholder="Email">
									</div>
									</div>
									<div class="form-group row">
										<label for="inputEmail3" class="col-sm-2 col-form-label">id</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="id" name="id" placeholder="Email">
										</div>
									</div>
									<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">acessos</label>
											<div class="col-sm-10">
												<input type="email" class="form-control" id="acessos" name="acessos" placeholder="Email">
											</div>
										</div>
										<div class="form-group row">
												<label for="inputEmail3" class="col-sm-2 col-form-label">telefone</label>
												<div class="col-sm-10">
													<input type="email" class="form-control" id="telefone" name="telefone" placeholder="Email">
												</div>
											</div>
											<div class="form-group row">
													<label for="inputEmail3" class="col-sm-2 col-form-label">Data da Venda</label>
													<div class="col-sm-10">
														<input type="email" class="form-control" id="ddv" name="ddv" placeholder="Email">
													</div>
												</div>
												<div class="form-group row">
														<label for="inputEmail3" class="col-sm-2 col-form-label">Cliente</label>
														<div class="col-sm-10">
															<input type="email" class="form-control" id="cliente" name="cliente" placeholder="Email">
														</div>
													</div>
													<div class="form-group row">
															<label for="inputEmail3" class="col-sm-2 col-form-label">Valor da venda</label>
															<div class="col-sm-10">
																<input type="email" class="form-control" id="vdv" name="vdv" placeholder="Email">
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
									<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;" >
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</button>
									<button type="button" class="btn btn-danger btn-xs dt-delete" data-toggle="modal" data-target="#deletarusuario">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button>
									</td>
									
								</tr>
								<?php } ?>
								<div class="modal fade" id="deletarusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="deletarusuarioLabel">deletar usuario</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
									
								
									<span>Tem ctz que dejesa excluir o usuario?</span>
								
									
									</div>
								</div>
								</div>		
	</tbody>
</table>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Row information</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
<script  src="./script.js"></script>

</body>
</html>