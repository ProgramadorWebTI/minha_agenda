<?php

function pdo() {
    $db = new \PDO('mysql:host=127.0.0.1;dbname=minha_agenda;charset=utf8', 'root', '', array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    return $db;
}