<?php
session_start();

require_once '../src/config/conexao.php';

if ((isset($_POST['email'])) && (isset($_POST['senha']))) {

    $email = $_POST['email'];
    $senha = md5(md5($_POST['senha']));

    $statement = $conn->query("SELECT * FROM usuarios WHERE email = '$email' && senha = '$senha'");  
    $statement->execute();
    $select = $statement->fetchAll(PDO::FETCH_ASSOC);

    if (isset($select)) {

        $_SESSION['copy_id_usuario'] = $select['id_usuario'];
        $_SESSION['copy_usuario'] = $select['usuario'];
        $_SESSION['copy_email'] = $select['email'];
        $_SESSION['copy_niveis_acesso'] = $select['niveis_acesso'];

        if ($_SESSION['copy_niveis_acesso'] == 0) {
            header("Location: nao_encontrada.php");
        } elseif ($_SESSION['copy_niveis_acesso'] == 1) {
            header("Location: welcome.php");
        } else {
            header("Location: ../index.php");
        }
    
    } else {

        $error[] = 'e-mail ou senha incorretos.';
    }
} else {
    $error[] = 'e-mail ou senha incorretos.';
}
