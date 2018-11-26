<?php if($_SESSION["auth"]["role"] == "admin"){

?>
<h2> Listar Produtos </h2>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>MARCA</th>
            <th>NOME</th>
            <th>PRECO</th>
            <th>QUANTIDADE</th>
            <TH>COR</TH>
        </tr>
    </thead>
    <?php foreach ($produtos as $produto){ ?>
    <tr>
        <td><?=$produto['id']?></td>
        <td><?=$produto['imagem']?></td>
        <td><?=$produto['marca']?></td>
        <td><?=$produto['nome']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['quantidade']?></td>
        <td><?=$produto['cor']?></td>
        <td><a href="./produto/visualizar/<?=$produto['id']?>" class="btn btn-secondary">view</a></td>
        <td><a href="./produto/editar/<?=$produto['id']?>" class="btn btn-info">edit</a></td>
        <td><a href="./produto/deletar/<?=$produto['id']?>" class="btn btn-danger">del</a></td>
    </tr>
    <?php } ?>
</table>


<a href="./produto/adicionar" class="btn btn-primary">Adicionar novo Produto</a>
<?php }else{
?>
<div>
    

<?php

foreach ($produtos as $produto){ ?>        
<table class="table">
    <tbody>
        <tr>
            <td><center><?=$produto['nome']?></center></td>
        </tr>
        <tr>
            <td><center><?=$produto['preco']?></center></td>
        </tr>
        <tr>
            <td><center><a href="./carrinho/adicionar/<?=$produto['id']?>"class="btn btn-info">Adicionar ao carrinho</center></td>
        </tr>
    </tbody>
</table>
<br>
        <?php

      }?>
</div><?php 
    } 
?>