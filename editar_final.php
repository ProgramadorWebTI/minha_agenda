<?php
require_once 'vendor/autoload.php';

if (isset($_POST['nome_agenda'])) {
	echo "<pre>";
	print_r($_POST);
	$nome = trim($_POST['nome_agenda']);
	$tipo = trim($_POST['tipo_agenda']);
	$numero = trim($_POST['numero_agenda']);
	$id = trim($_POST['id_agenda']);

	$resultado = edita($nome, $tipo, $numero, $id);

	if ($resultado) {
		$_SESSION['menssagem'] = ' <p class="alert alert-success text-center"> Editado com sucesso! </p>';
		header("location: admin.php");
		die();
	} else {
		$_SESSION['menssagem'] = '<p class="alert alert-danger text-center">Erro, não foi possivel editar!</p>';
		header("location: admin.php");
		die();
	}

}

?>
