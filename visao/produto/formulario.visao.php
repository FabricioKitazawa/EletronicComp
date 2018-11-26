<form action="<?=@$acao?>" method="POST">
    Marca: <input type="text" name="marca" value="<?=@$produto['marca']?>">
    Nome: <input type="text" name="nome" value="<?=@$produto['nome']?>">
    Preco: <input type="text" name="preco" value="<?=@$produto['preco']?>">
    Quantidade: <input type="text" name="quantidade" value="<?=@$produto['quantidade']?>">
    Imagem: <input type="text" name="imagem" value="<?=@$produto['imagem']?>">
    Cor: <input type="text" name="cor" value="<?=@$produto['cor']?>">
    <button type="submit">Enviar</button>
</form>
