<?php
try {
    $conexao = new \PDO('mysql:host=127.0.0.1;dbname=clube_recanto', 'root', 'Hz31%9598x0K');
    $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    //echo "Conectado com sucesso";
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
