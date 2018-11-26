<?php 
require "modelo/CarrinhoModelo.php";
function index(){
    $dados["carrinho"] = getProducts();
    exibir("carrinho/listar", $dados);
}

if(!isset($_SESSION['carrinho'])) {
	$_SESSION['carrinho'] = array();
}

function addCart($id, $quantity) {
	if(!isset($_SESSION['carrinho'][$id])){ 
		$_SESSION['carrinho'][$id] = $quantity; 
	}
}

function deleteCart($id) {
	if(isset($_SESSION['carrinho'][$id])){ 
		unset($_SESSION['carrinho'][$id]); 
	} 
}

function updateCart($id, $quantity) {
	if(isset($_SESSION['carrinho'][$id])){ 
		if($quantity > 0) {
			$_SESSION['carrinho'][$id] = $quantity;
		} else {
		 	deleteCart($id);
		}
	}
}

function getContentCart($pdo) {
	$results = array();
	if($_SESSION['carrinho']) {
		
		$carrinho = $_SESSION['carrinho'];
		$produtos =  getProductsByIds($pdo, implode(',', array_keys($cart)));

		foreach($produtos as $produto) {

			$results[] = array(
							  'id' => $produto['id'],
							  'name' => $produto['nome'],
							  'price' => $produto['preco'],
							  'quantity' => $carrinho[$produto['id']],
							  'subtotal' => $carrinho[$produto['id']] * $produto['preco'],
						);
		}
	}
	return $results;
}

function getTotalCart($pdo) {
	
	$total = 0;

	foreach(getContentCart($pdo) as $product) {
		$total += $product['subtotal'];
	} 
	return $total;
}
