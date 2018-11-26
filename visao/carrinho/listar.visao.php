<?php if(empty($produtos)):?>
    <h1>Seu carrinho esta vazio</h1><br>
    <?php else : ?>
      <table class="table table-condensed">
        <thead>
            <tr class="cart_menu">
                <td >Item</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>quantidade</td>
                <td>Deletar</td>
            </tr>

        </thead>
        <tbody>
            <?php 
            $total = 0;
            $total_produtos = 0;                                     
            foreach ($produtos as $produto): 

                foreach ($_SESSION["carrinho"] as $quant) {
                    if ($produto["id"] == $quant["id"]) {
                        $quantidade = $quant["quantidade"];
                        $total_produtos += $quantidade;         
                    }
                }
                ?>

                <tr>
                    <td><?=$produto['id']?></td>
                    <td><?=$produto['nome']?></td>
                    <td>R$ <?=$produto['preco'];?></td>
                    <td>
                        <?php if(isset($quantidade)) {

                            echo $quantidade; ?>
                        </td> 
                    
                        <td><a href="./carrinho/deletar/<?=$produto['id']?>" class="btn btn-info">del</a></td>
                    
                        <?php $total = $total + ($quantidade * $produto["preco"]);
                    }?>

                </tr> 
            <?php endforeach; ?>
        </tbody>
    </table> 

    <h3>Total da Compra: <i>R$<?=$total?></i></h3>


</section> 
<?php endif; ?>