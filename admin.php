<?php require_once './template/header.php'; ?>
<?php
esta_logado();
?>

<div class="container">
    <div class="row">
        <a class="btn btn-primary btn=-sm" href="<?= base_url('formulario_contato.php');?>">Novo contato</a>
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Numero:</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (seleciona_agenda(ID_USER) as $v): ?>
                    <tr>
                        <td><?= $v->nome_agenda ?></td>
                        <td><?= $v->numero_agenda ?></td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>


<?php require_once './template/footer.php'; ?>
