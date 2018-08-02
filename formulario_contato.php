<?php
require_once './template/header.php';
esta_logado();
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="formulario_contato.php" method="post">
                <div class="form-group">
                    <label for="nome_agenda">Nome:</label>
                    <input type="text" name="nome_agenda" class="form-control">
                </div>

                <div class="form-group">
                    <label for="tipo_agenda">Tipo:</label>
                    <select name="tipo_agenda" class="form-control">
                        <option value="0">Celular</option>
                        <option value="1">Telefone Fixo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="numero_agenda">Numero:</label>
                    <input type="text" name="numero_agenda" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">cadastrar</button>
                </div>
                <?php
                if (isset($_GET['p']) == 'ok') {
                    echo "Cadastrado com sucesso!";
                } else if (isset($_GET['p']) == 'erro') {
                    echo "Erro, não foi possivel cadastrar!";
                }
                ?>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['nome_agenda']) && !empty($_POST['nome_agenda'])) {
    $id = ID_USER;
    $nome_agenda = trim($_POST['nome_agenda']);
    $tipo_agenda = trim($_POST['tipo_agenda']);
    $numero_agenda = trim($_POST['numero_agenda']);

    $resultado = inserir_novo_contato($id, $nome_agenda, $tipo_agenda, $numero_agenda);
    if ($resultado) {
        header("location: formulario_contato.php?p=ok");
    } else {
        header("location: formulario_contato.php?p=erro");
    }
}




require_once './template/footer.php';
?>