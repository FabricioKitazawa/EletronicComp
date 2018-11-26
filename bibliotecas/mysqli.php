<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "eletroniccompbd");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}