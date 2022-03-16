<?php
require_once '../../src/config/conexao.php';

if (isset($_POST['deletedata'])) {
   
    $id_usuarios = $_POST['delete_id'];

    $statement = $conn->query("DELETE FROM usuarios WHERE id_usuarios='$id_usuarios'");

    if ($statement->execute()) {
        echo '<script> alert("Data Deleted"); </script>';
        header("Location:usuarios.php");
    } else {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}
