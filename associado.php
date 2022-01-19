<?php
try {
    $con = new \PDO('mysql:host=localhost;dbname=sakila', 'root', '@Mysql:127.0.0.1');
    $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso";
} catch (\PDOException $ex) {
    echo $ex->getMessage();
}
