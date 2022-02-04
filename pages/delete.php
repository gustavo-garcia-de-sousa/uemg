<?php
require_once("../src/config/conexao.php");
$statement=$conn->prepare("DELETE FROM usuarios where id_usuario=" . $_GET['id_usuario']);
$statement->execute();
header('location:index.php');
?>