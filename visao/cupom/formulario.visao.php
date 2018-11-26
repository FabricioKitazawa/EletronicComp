<form action="<?=@$acao?>" method="POST">
    Nome: <input type="text" name="nome" value="<?=@$cupom['nome']?>">
    Desconto: <input type="text" name="desconto" value="<?=@$cupom['desconto']?>">
    <button type="submit">Enviar</button>
</form>
