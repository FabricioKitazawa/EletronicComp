<?php

function PegarTodosCupons (){
	$sql = "SELECT * FROM CUPOM";
	$resultado = mysqli_query(conn(), $sql);
	$cupons = array();
	while ($linha = mysqli_fetch_array($resultado)) {
		$cupons[] = $linha;
	}
	return $cupons;
}
function PegarCupomPorID($id){
	$sql = "SELECT * FROM cupom WHERE id= $id";
	$resultado = mysqli_query(conn(), $sql);
	$cupom = mysqli_fetch_array($resultado);
	return $cupom;
}
function adicionarCupom($nome, $desconto) {
	$sql = "INSERT INTO cupom (nome, desconto) 
	VALUES ('$nome', '$desconto')";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao cadastrar cupom' . mysqli_error($cnx)); }
	return 'Cupom cadastrado com sucesso!';
}

function editarCupom ($nome, $desconto,$id){
	$sql = "UPDATE cupom SET nome = '$nome', desconto = '$desconto' WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar usuário' . mysqli_error($cnx)); }
    return 'Cupom alterado com sucesso!';
}
function deletarCupom ($id){
    $sql = "DELETE FROM cupom WHERE id = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar cupom' . mysqli_error($cnx)); }
    return 'Cupom deletado com sucesso!';
}
?>