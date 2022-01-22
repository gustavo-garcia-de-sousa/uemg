<?php
/*
https://www.phptutorial.net/php-pdo/pdo-connecting-to-mysql/
https://dev.mysql.com/doc/workbench/en/
https://www.php.net/manual
*/

/*-------- CONFIGURAÇÕES DO SERVIDOR -------- */
$hostname = '127.0.0.1';
$username = 'root';
$password = 'Hz31%9598x0K';
$database = 'clube_recanto';
$sql = "mysql:host={$hostname};dbname={$database};";
$dsn_options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
/*-------- CONFIGURAÇÕES DO SERVIDOR -------- */

try {
    $pdo = new \PDO($sql, $username, $password, $dsn_options);
    /*echo "conexão com {$database} realizada com sucesso!";*/
} catch (PDOException $error) {
    echo 'erro na conexão: ' . $error->getMessage();
}
