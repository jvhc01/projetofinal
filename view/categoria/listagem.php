<div class="container mt-2">
    <h1>Listagem de Categorias</h1>
    <hr>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Açôes</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td><?= $categoria['nome']?></td>
                <td>
                    <a href="http://"
                    class="btn btn-danger">
                    <i class="fa-solid fa-trash-can"></i>
                </a>

                <a href="http://"
                    class="btn btn-primary title=editar">
                    <i class="fa-solid fa-pencil"></i>
                </a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>