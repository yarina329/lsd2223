<style>
    .imgPrincipal{
        display: none;
    }
</style>

<?php
    if(!isset($_SESSION['id_Cliente']))
    {
        header('location:Index2.php');
    }
    else
    {
        $idCliente = $_SESSION['id_Cliente'];
        //$idProduto = $_SESSION['id_Produto'];
        $query_a_executar = "select * from produtos
        inner join carrinhos on fk_idProduto = idProduto
        inner join clientes on fk_idCliente = idCliente
        where fk_idCliente = ".$idCliente;
        
        $resultadoP = mysqli_query($ligacao,$query_a_executar);

        $detalhes_produtos = mysqli_fetch_assoc($resultadoP);

        ?>
        <div class="row">
            <div class="col-8">
        <div class="tabela-carrinho">
            <table class="table efect-table">
                <thead class="cabec-tabela">
                    <tr>
                        <th>Nome Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><img src="imagens/Produtos/<?php echo $detalhes_produtos['foto_produto'];?>" title="<?php echo $detalhes_produtos['nome_produto'];?>"><?php echo $detalhes_produtos['nome_produto'];?></th>
                        <th><h4><?php echo $detalhes_produtos['preco_produto'];?></h4><h4>€</h4></th>
                        <th>
                            <button id="minus" class="botao-quantidade">&#10134;</button>
                            <a id="qtd" class="quantidade">0</a>
                            <button id="plus" class="botao-quantidade">&#10133;</button>
                        </th>
                        <th id="total">
                            
                        </th>
                        <th><a href=""><i class="fa-solid fa-trash-can"></i></a></th>
                    </tr>
                </tbody>
            </table>
        </div></div>

        <div class="col-4">
            <div class="totalCart">
                <h4>Total do Pedido</h4>
                <div class="barra-cart"></div>
            </div>
            <div>
                <p>Total</p>
                <p id="totl"></p>
            </div>
        </div>
    </div>
    
<script>

function remover(){
    let el = document.getElementById("qtd")
    let valor = parseInt(el.text)
    valor -= 1
    el.text = valor
    atualizarTotal()
}

function adicionar(){
    let el = document.getElementById("qtd")
    let valor = parseInt(el.text)
    valor += 1
    el.text = valor
    atualizarTotal()
}

function atualizarTotal(){
    let total = 0
    let el = document.getElementById("qtd")
    let valor = parseInt(el.text)
    let preco = parseInt(<?php echo $detalhes_produtos['preco_produto'];?>)
    total = valor * preco
    document.getElementById("total").textContent = total
}
elementplus = document.getElementById("plus")
elementplus.addEventListener("click", adicionar); 

elementminus = document.getElementById("minus")
elementminus.addEventListener("click", remover); 

</script>

<?php
    }
    ?>