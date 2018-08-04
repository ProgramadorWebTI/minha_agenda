<?php require_once './template/header.php';
esta_logado();

if (isset($_GET['id']) && !empty($_GET['id'])) {
	$id = $_GET['id'];
	$agenda = select_id($id);

} else {
	header("location: admin.php");
}

?>

<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <form action="editar_final.php" method="post">
                <div class="form-group">
                	<input type="hidden" name="id_agenda" value="<?php echo $agenda->id_agenda; ?>">
                    <label for="nome_agenda">Nome:</label>
                    <input value="<?php echo $agenda->nome_agenda; ?>" type="text" name="nome_agenda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="tipo_agenda">Tipo:</label>
                    <select name="tipo_agenda" class="form-control">
                        <option value="0" <?php echo ($agenda->tipo_agenda == 0) ? 'selected' : ''; ?> >Celular</option>
                        <option value="1" <?php echo ($agenda->tipo_agenda == 1) ? 'selected' : ''; ?> >Telefone Fixo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="numero_agenda">Numero:</label>
                    <input value="<?php echo $agenda->numero_agenda; ?>" type="text" name="numero_agenda" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once './template/footer.php';?>