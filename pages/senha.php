<?php

require_once("../src/config/conexao.php");
require_once 'header.php';

$senha = $_POST['senha_nova'];
$confirmacao = $_POST['confirmacao'];

if($senha == $confirmacao){
$mudar = mysql_query("UPDATE usuarios SET senha = '$senha' WHERE id = '$id'");
echo "senha alterada";
}else{
echo "As senhas estão diferentes";
}

if (!empty($_POST["save_record"])) {
	$statement = $conn->prepare("UPDATE usuarios SET usuario='" . $usuario . "', email='" . $email . "' where id_usuario=" . $_GET["id_usuario"]);
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

		<input type="submit" value="atualizar cadastro" class="form-btn" name="add_usuario">

	</form>
</div>

<?php require_once 'footer.php'; ?>