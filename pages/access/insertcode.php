<?php

require_once '../../includes/access/header.php';
require_once '../../src/config/conexao.php';

if (isset($_POST['insertdata'])) {
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

    if ($senha != $confirm_senha) {
        $error[] = 'As senhas não são iguais!';
    } else {

        try {
            $statement->execute();
            echo '<script> alert("Data Saved"); </script>';
            header('Location: usuarios.php');
        } catch (PDOException $error) {
        }
    }
}
