<?php

function pdo() {
    $db = new \PDO('mysql:host=127.0.0.1;dbname=minha_agenda;', 'root', '');
    return $db;
}