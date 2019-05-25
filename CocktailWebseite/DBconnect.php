<?php
    //$server = 'mysql:dbname=fi2017_jn_mybar;host=localhost';
    //$user = 'fi11';

    $server = 'mysql:dbname=mybar;host=localhost';
    $user = 'root';
    $password = '';
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
    try
    {
        $pdo = new PDO($server, $user, '', $options);
    }
    catch(PDOExeption $e)
    {
        die("Keine Verbindung zum Server: ".$e->getMessage());
    }
 ?>