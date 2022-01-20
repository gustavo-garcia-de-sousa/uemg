<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = 'Hz31%9598x0K';
$database = 'clube_recanto';

try {
    $connect = new \PDO("mysql:host={$hostname};dbname={$database}", $username, $password);
    $connect->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso ao Banco de Dados: {$database}";
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
