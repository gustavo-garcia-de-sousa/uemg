<?php
require_once '../../includes/access/header.php';
require_once '../../src/config/conexao.php';

if (isset($_POST['updatedata'])) {
    $id = $_POST['update_id'];

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $statement = $conn->query("UPDATE usuarios SET usuario='$usuario', email='$email', senha=' $senha' WHERE id_usuarios='$id'");

    if ($statement->execute()) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location:usuarios.php");
    } else {
        echo '<script> alert("Data Not Updated"); </script>';
    }
}
