<?php
	require "modelo/ProdutoModelo.php";
function index() {
    $dados["produtos"] = pegarTodosProdutos();
    exibir("produto/listar", $dados);
}

/*nome marca preco imagem quantidade cor**/
function adicionar(){
    if (ehPost()) {
        extract($_POST);
        alert(adicionarProduto($nome, $marca, $preco, $imagem, $quantidade, $cor));
        redirecionar("produto/index");
    } else {
        exibir("produto/formulario");
    }

}
function deletar($id){
    alert(deletarProduto($id));
    redirecionar("produto/index");
}

function editar($id){
    if (ehPost()) {
        $nome = $_POST["nome"];
        $marca = $_POST["marca"];
        $preco = $_POST["preco"];
        $imagem = $_POST["imagem"];
        $quantidade = $_POST["quantidade"];
        $cor = $_POST["cor"];
        alert(editarProduto($id, $nome, $marca,$preco,$imagem,$quantidade,$cor));
        redirecionar("produto/index");
    } else {
        $dados['produto'] = pegarProdutoPorId($id);
        $dados['acao'] = "./produto/editar/$id";
        exibir("produto/formulario", $dados);
    }
}
function visualizar($id) {
    $dados['produto'] = pegarProdutoPorId($id);
    exibir("produto/visualizar", $dados);
}

?>