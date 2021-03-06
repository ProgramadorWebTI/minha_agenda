<?php

function edita($nome, $tipo, $numero, $id) {
	$sql = "UPDATE agendas SET nome_agenda = ?, tipo_agenda=?, numero_agenda=? WHERE id_agenda = ? ";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $nome);
	$stmt->bindValue(2, $tipo);
	$stmt->bindValue(3, $numero);
	$stmt->bindValue(4, $id);
	if ($stmt->execute()) {
		return true;
	} else {
		return false;
	}
}

function select_id($id) {
	$sql = "SELECT * FROM agendas WHERE id_agenda = ?";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $id);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		return $stmt->fetch(\PDO::FETCH_OBJ);
	} else {
		return false;
	}
}

function delete($id) {
	$sql = "DELETE FROM agendas WHERE id_agenda = ?";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $id);
	$stmt->execute();
}

function inserir_novo_contato($id, $nome_agenda, $tipo_agenda, $numero_agenda) {
	$sql = "INSERT INTO agendas (usuario_id,nome_agenda,tipo_agenda,numero_agenda) VALUES(?,?,?,?)";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $id);
	$stmt->bindValue(2, $nome_agenda);
	$stmt->bindValue(3, $tipo_agenda);
	$stmt->bindValue(4, $numero_agenda);
	$stmt->execute();
	if ($stmt->rowCount()) {
		$_SESSION['menssagem'] = ' <p class="alert alert-success text-center"> Cadastrado com sucesso! </p>';
	} else {
		$_SESSION['menssagem'] = '<p class="alert alert-danger text-center">Erro, não foi possivel cadastrar!</p>';
	}
}

function seleciona_tudo() {
	$sql = "SELECT * FROM agendas";
	$stmt = pdo()->prepare($sql);
	$stmt->execute();
	$resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);
	return $resultado;
}

function seleciona_agenda($idUser) {
	$sql = "SELECT * FROM agendas join usuarios on usuarios.id_usuario = agendas.usuario_id  WHERE id_usuario =? ";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $idUser);
	$stmt->execute();
	$resultado = $stmt->fetchAll(\PDO::FETCH_OBJ);
	return $resultado;
}

function login($email, $senha) {
	$sql = "SELECT * FROM usuarios WHERE email_usuario=? AND senha_usuario=?";
	$stmt = pdo()->prepare($sql);
	$stmt->bindValue(1, $email);
	$stmt->bindValue(2, $senha);
	$stmt->execute();
	$resultado = $stmt->fetch(\PDO::FETCH_OBJ);
	return $resultado;
}
