<h2> Listar Cupons </h2>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>DESCONTO</th>
        </tr>
    </thead>
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['id']?></td>
        <td><?=$cupom['nome']?></td>
        <td><?=$cupom['desconto']?></td>

        <td><a href="./cupom/editar/<?=$cupom['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./cupom/deletar/<?=$cupom['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php endforeach; ?>
</table>


<a href="./cupom/adicionar" class="btn btn-primary">Adicionar novo cupom</a>
