<div class="container">
    <h2>Autor</h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Novo
    </button>
    <!-- Tabela de autores -->
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listaAutores as $autor) : ?>
                <tr>
                    <td><?=$autor['id']?></td>
                    <td>
                        <?=anchor("autor/editar/".$autor['id'],$autor['nome'])?>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("autor/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Novo Autor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="titulo">Nome</label>
                    <input class='form-control' type="text" id='nome' name='nome'>
                </div>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>