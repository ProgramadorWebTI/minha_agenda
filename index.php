<?php require_once './template/header.php';?>
<div class="container" style="margin: 6% auto;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form method="post" action="">
			<div class="form-group">
				<input type="text" name="txtEmail" class="form-control" autocomplete="off">
			</div>
			<div class="form-group">
				<input type="password" name="txtSena" class="form-control" autocomplete="off">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary">logar</button>
			</div>
		</form>
		</div>
	</div>
</div>

<?php

if (isset($_POST['txtEmail'])) {
	print_r($_POST);
}

?>

<?php require_once './template/footer.php';?>