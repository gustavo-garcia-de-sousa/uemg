<?php
require_once 'header.php';
require_once '../src/config/conexao.php';
?>

<section></section>

<div class="banner">

	<div class="conteudo">
		<br>
		<h3>Bem Vindo ao Painel de Controle</h3>
		<br><br><br>
	</div>

</div>

<div class="banco_dados">

	<?php
	$statement = $conn->prepare("SELECT * FROM usuarios ORDER BY id_usuario DESC");
	$statement->execute();
	$result = $statement->fetchAll();
	?>

	<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="icon/add.png" usuario="Add New Record" style="vertical-align:bottom;" /></a></div>

	<div class="container">

		<table>

			<thead>

				<tr>
					<th>usuário</th>
					<th>e-mail</th>
					<th>senha</th>
					<th>ações</th>
				</tr>

			</thead>

			<tbody id="table-body">

				<?php
				if (!empty($result)) {
					foreach ($result as $row) {
				?>
						<tr>
							<td><?php echo $row["usuario"]; ?></td>
							<td><?php echo $row["email"]; ?></td>
							<td><?php echo $row["senha"]; ?></td>
							<td><a class="ajax-action-links" href='edit.php?id_usuario=<?php echo $row['id_usuario']; ?>'><img src="icon/edit.png" usuario="Edit" /></a> <a class="ajax-action-links" href='delete.php?id_usuario=<?php echo $row['id_usuario']; ?>'><img src="icon/delete.png" usuario="Delete" /></a></td>
						</tr>

				<?php
					}
				}

				?>

			</tbody>

		</table>

	</div>

</div>

<?php require_once 'footer.php'; ?>