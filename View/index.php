<!DOCTYPE html>
<html>
<head>
	<title>Equipamentos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row mt-3">
			<div class="col">
				<h1>Equipamentos</h1>
			</div>
			<div class="col text-right">
				<a href="index.php?action=create" class="btn btn-primary">Novo Equipamento</a>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tipo</th>
							<th>Nome</th>
							<th>Marca</th>
							<th>Modelo</th>
							<th>Número de Série</th>
							<th>Data de Aquisição</th>
							<th>Projeto</th>
							<th>Departamento Responsável</th>
							<th>Localização Atual</th>
							<th>Status</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($equipamentos as $equipamento): ?>
							<tr>
								<td><?= $equipamento['id'] ?></td>
								<td><?= $equipamento['tipo'] ?></td>
								<td><?= $equipamento['nome'] ?></td>
								 <td><?= $equipamento['marca'] ?></td>
								<td><?= $equipamento['modelo'] ?></td>
								<td><?= $equipamento['numero_serie'] ?></td>
								<td><?= $equipamento['data_aquisicao'] ?></td>
								<td><?= $equipamento['projeto'] ?></td>
								<td><?= $equipamento['departamento_responsavel'] ?></td>
								<td><?= $equipamento['localizacao_atual'] ?></td>
								<td><?= $equipamento['status'] ?></td>
								<td>
									<a href="index.php?action=show&id=<?= $equipamento['id'] ?>" class="btn btn-sm btn-info">Detalhes</a>
									<a href="index.php?action=edit&id=<?= $equipamento['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
									<a href="index.php?action=delete&id=<?= $equipamento['id'] ?>" class="btn btn-sm btn-danger">Excluir</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
