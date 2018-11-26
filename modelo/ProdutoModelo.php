<?php
function pegarTodosProdutos() {
    $sql = "SELECT * FROM produto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}
/*nome marca preco imagem quantidade cor**/
function pegarProdutoPorId($id) {
    $sql = "SELECT * FROM produto WHERE id= $id";
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_array($resultado);
    return $produto;
}

function adicionarProduto($nome, $marca, $preco, $imagem, $quantidade, $cor) {
    $sql = "INSERT INTO produto (nome, marca, preco, imagem, quantidade, cor) 
			VALUES ('$nome', '$marca', '$preco','$imagem','$quantidade','$cor')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar produto' . mysqli_error($cnx)); }
    return 'Produto cadastrado com sucesso!';
}

function editarProduto($id,$nome, $marca, $preco, $imagem, $quantidade, $cor) {
    $sql = "UPDATE produto SET nome = '$nome', marca = '$marca', preco = '$preco', imagem = '$imagem', quantidade = '$quantidade', cor = '$cor' WHERE id = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar produto' . mysqli_error($cnx)); }
    return 'Produto alterado com sucesso!';
}

function deletarProduto($id) {
    $sql = "DELETE FROM produto WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar produto' . mysqli_error($cnx)); }
    return 'Produto deletado com sucesso!';
}
function CarrinhoProdutos($ProdutosCarrinho){
    for ($i=0; $i < count($ProdutosCarrinho)-1; $i++) { 
        $idc = $carrinhoProdutos[$i]["id"];
        $sql = "SELECT * FROM produto WHERE id = '$idc'";
        $query = mysqli_query($cnx = conn(), $sql);
        $produtoc = mysqli_fetch_assoc($querry);
        $produtoc["quantidade"] = $carrinhoProdutos[$i]["quantidade"];
        $produtosc[] = $produtoc;
    }
}
?>