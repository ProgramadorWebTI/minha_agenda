<?php require_once './template/header.php';

if (isset($_SESSION['usuario_logado'])) {
	header("location: ./admin.php");
}

?>
<div class="container" style="margin: 6% auto;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form method="post" action="">
			<div class="form-group">
				<input type="text" name="txtEmail" class="form-control" autocomplete="off">
			</div>
			<div class="form-group">
				<input type="password" name="txtSenha" class="form-control" autocomplete="off">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">logar</button>
			</div>
		</form>
		</div>
	</div>
</div>

<?php

if (isset($_POST['txtEmail']) && !empty($_POST['txtEmail'])) {
	$email = trim($_POST['txtEmail']);
	$senha = trim($_POST['txtSenha']);
	if (login($email, $senha)) {
		$_SESSION['usuario_logado'] = login($email, $senha);
		header("location: ./admin.php");
	} else {
		echo "erro ao logar";
	}
}

?>

<?php require_once './template/footer.php';?>