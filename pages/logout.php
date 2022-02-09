<?php
require_once '../src/config/conexao.php';

session_start();
session_unset($_COOKIE['niveis_acesso']);
session_destroy($_COOKIE['niveis_acesso']);
header('location:../index.php');

?>