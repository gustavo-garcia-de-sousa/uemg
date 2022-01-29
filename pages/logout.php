<?php
require_once '../src/config/conexao.php';
require_once '../includes/header.php';

session_start();
session_unset();
session_destroy();

header('location:login_form.php');

?>