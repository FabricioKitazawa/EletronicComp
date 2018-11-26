<?php

require "modelo/CupomModelo.php";

function index() {
	$dados["cupons"] = PegarTodosCupons();
    exibir("cupom/listar", $dados);
}

function adicionar(){
    if (ehPost()) {
        extract($_POST);
        alert(adicionarCupom($nome, $desconto));
        redirecionar("cupom/index");
    } else {
        exibir("cupom/formulario");
    }
}
function editar($id){
    if (ehPost()) {
        $nome = $_POST["nome"];
        $desconto = $_POST["desconto"];
        alert(editarCupom($nome, $desconto,$id));
        redirecionar("cupom/index");
    } else {
        $dados['cupom'] = pegarCupomPorId($id);
        $dados['acao'] = "./cupom/editar/$id";
        exibir("cupom/formulario", $dados);
    }
}
function deletar($id){
    alert(deletarCupom($id));
    redirecionar("cupom/index");
}


?>