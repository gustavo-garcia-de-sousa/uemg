<?php

require_once("../src/config/conexao.php");
require_once 'header.php';

if (!empty($_POST["save_record"])) {
	$statement = $conn->prepare("UPDATE usuarios SET usuario='" . $_POST['usuario'] . "', email='" . $_POST['email'] . "' WHERE id_usuario=" . $_GET["id_usuario"]);
	$statement->bindValue(':usuario', $usuario);
	$statement->bindValue(':email', $email);

	$result = $statement->execute();
	if ($result) {
		header('location:index.php');
	}
}
$statement = $conn->prepare("SELECT * FROM usuarios where id_usuario=" . $_GET["id_usuario"]);
$statement->execute();
$result = $statement->fetchAll();
?>

<section></section>

<div style="padding: 5rem 2rem;"></div>

<div class="form-container">

	<form action="" method="post">

		<?php
		if (isset($error)) {
			foreach ($error as $error) {
				echo '<span class="alerta error">' . $error . '</span>';
			}
		}
		?>
		<span>Nome de usuário</span>
		<input type="txt" name="usuario" value="<?php echo $result[0]['usuario']; ?>" class="box" required>

		<span>E-mail</span>
		<input type="email" name="email" value="<?php echo $result[0]['email']; ?>" class="box" required>

		<input type="submit" value="atualizar cadastro" class="form-btn" name="save_record">

	</form>
</div>

<?php require_once 'footer.php'; ?>