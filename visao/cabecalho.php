<?php if($_SESSION["auth"]["role"] == "admin"){

?>
<nav>
  <ul>
    <li><a href="./">Principal</a></li>
    <li><a href="./usuario">Usuario</a></li>
    <li><a href="./produto">Produtos</a></li>
    <li><a href="./cupom">Cupom</a></li>
    <li><a href="./carrinho">Carrinho</a></li>
    <li><a href="./login/logout">Logout</a></li>

  </ul>
</nav>
<?php }else{ ?>
<nav>
  <ul>
    <li><a href="./">Principal</a></li>
    <li><a href="./produto">Produtos</a></li>
    <li><a href="./usuario">Meu Usuario</a></li>
    <li><a href="./carrinho">Carrinho</a></li>
    <li><a href="./login/logout">Logout</a></li>

    <li><a href="./login/logout">Logout</a></li>
  </ul>
</nav>
<?php
}
?>