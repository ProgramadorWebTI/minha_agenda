<?php

function seleciona_tudo() {
    $sql = "SELECT * FROM agendas";
    $stmt = pdo()->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);
    return $resultado;   
}

