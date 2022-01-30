<?php

include('function.php');

if (isset($_POST["action"])) {
	if ($_POST["action"] == 'Add' || $_POST["action"] == 'Update') {
		$output = array();
		$usuario = $_POST["usuario"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];

		if (empty($usuario)) {
			$output['usuario_error'] = 'First Name is Required';
		}

		if (empty($email)) {
			$output['email_error'] = 'Email is Required';
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$output['email_error'] = 'Invalid Email Format';
			}
		}

		if (count($output) > 0) {
			echo json_encode($output);
		} else {
			$data = array(
				':usuario' => $usuario,
				':email' => $email,
				':senha' => $senha
			);

			if ($_POST['action'] == 'Add') {
				$query = "
				INSERT INTO usuarios 
				(usuario, email, senha) 
				VALUES (:usuario, :email, :senha)
				";

				$statement = $connect->prepare($query);

				if ($statement->execute($data)) {
					$output['success'] = '<div class="alert alert-success">New Data Added</div>';

					echo json_encode($output);
				}
			}

			if ($_POST['action'] == 'Update') {
				$query = "
				UPDATE usuarios 
				SET usuario = :usuario, 
				email = :email, 
				senha = :senha 
				WHERE id_usuarios = '" . $_POST["id_usuarios"] . "'
				";

				$statement = $connect->prepare($query);

				if ($statement->execute($data)) {
					$output['success'] = '<div class="alert alert-success">Data Updated</div>';
				}

				echo json_encode($output);
			}
		}
	}

	if ($_POST['action'] == 'fetch') {
		$query = "
		SELECT * FROM usuarios 
		WHERE id_usuarios = '" . $_POST["id_usuarios"] . "'
		";

		$result = $connect->query($query);

		$data = array();

		foreach ($result as $row) {

			$data['usuario'] = $row['usuario'];

			$data['email'] = $row['email'];

			$data['senha'] = $row['senha'];
		}

		echo json_encode($data);
	}

	if ($_POST['action'] == 'delete') {
		$query = "
		DELETE FROM usuarios 
		WHERE id_usuarios = '" . $_POST["id_usuarios"] . "'
		";

		if ($connect->query($query)) {
			$output['success'] = '<div class="alert alert-success">Data Deleted</div>';

			echo json_encode($output);
		}
	}
}
