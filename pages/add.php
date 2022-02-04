<?php

require_once 'header.php';

session_start();

if (isset($_POST['submit'])) {
}

if (!empty($_POST["add_usuario"])) {

	require_once '../src/config/conexao.php';

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5(md5($_POST['senha']));
	$confirm_senha = md5(md5($_POST['confirm_senha']));

	/*métodos utilizados para evitar SQl INJECTION*/
	$statement = $conn->prepare("INSERT INTO usuarios (usuario, email, senha) VALUES (:usuario, :email, :senha);");
	$statement->bindValue(':usuario', $usuario);
	$statement->bindValue(':email', $email);
	$statement->bindValue(':senha', $senha);
	/*métodos utilizados para evitar SQl INJECTION*/

	$count = $statement->rowCount();

	if (!$count < 0) {

		$error[] = 'Este usuário já está cadastrado!';
	} else {
		if ($senha != $confirm_senha) {

			$error[] = 'As senhas não são iguais!';
		} else {

			$result = $statement->execute(array(':usuario' => $usuario, ':email' => $email, ':senha' => $senha));
			if (!empty($result)) {
				header('location:index.php');
			}
		}
	}
}
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

		<input type="txt" name="usuario" placeholder="digite o seu nome" class="box" maxlength="40" required>

		<input type="email" name="email" placeholder="digite o seu melhor em-mail" class="box" maxlength="40" required>

		<input type="password" name="senha" placeholder="cadastre uma senha" class="box" maxlength="20" required>

		<input type="password" name="confirm_senha" placeholder="confirme sua senha" class="box" maxlength="20" required>

		<input type="submit" value="cadastrar usuário" class="form-btn" name="add_usuario">

	</form>
</div>