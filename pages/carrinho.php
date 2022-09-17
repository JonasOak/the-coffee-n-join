<?php
session_start();
$title = 'Carrinho';
include "../include/database.php";
include '../include/header.php';
include '../include/nave-site.php';
//-------------------alimentos------------------------------------
$consulta = "SELECT * FROM `carrinho` 
join item_de_carrinho on item_de_carrinho.fk_id_carrinho = carrinho.id_carrinho 
join info_alimento on info_alimento.id_info_alimento = item_de_carrinho.fk_id_info_produto
 join produto on produto.id_produto = info_alimento.fk_id_produto 
join galeria on galeria.fk_id_produto = produto.id_produto
WHERE item_de_carrinho.categoria ='alimento' 
and carrinho.fk_id_pessoa = {$_SESSION['id_pessoa']}";
$query = mysqli_query($con, $consulta);
$alimento = mysqli_fetch_all($query , MYSQLI_ASSOC);
//var_dump($consulta);
//echo "<pre>";
//var_dump($alimento);
//echo "</pre>";
//-------------------roupas------------------------------------
$consulta = "SELECT * FROM `carrinho` 
join item_de_carrinho on item_de_carrinho.fk_id_carrinho = carrinho.id_carrinho 
join info_roupa on info_roupa.id_info_roupa = item_de_carrinho.fk_id_info_produto 
join produto on produto.id_produto = info_roupa.fk_id_produto  
join galeria on galeria.fk_id_produto = produto.id_produto
WHERE item_de_carrinho.categoria ='roupa' 
and carrinho.fk_id_pessoa = {$_SESSION['id_pessoa']}";
$query = mysqli_query($con, $consulta);
$roupa = mysqli_fetch_all($query , MYSQLI_ASSOC);
//var_dump($consulta);
//echo "<pre>";
//var_dump($roupa);
//echo "</pre>";
?>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col">
            <div class="card">
                <div class="card-body p-4">
                    <div class="row ">
                        <div class="col">
                            <!---Titulo-->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h5 class="mb-1">Carrinho <i class="bi bi-cart3"></i></h5>
                                </div>
                            </div> 
<!---Primeiro produto-->      
	<?php
    $bia=0;
		$anterior = 0; 
		foreach($roupa as $vestido ){
			$atual = $vestido['fk_id_info_produto']; 
			if ($atual != $anterior){ 
				$subtotal = $vestido['quantidade'] * $vestido['preco'];
				echo"
                <div class='card mb-3' style='box-shadow: 10px 5px 5px ;'>
					<div class='card-body'>
						<div class='d-flex justify-content-between'>
							<div class='d-flex flex-row align-items-center'>
								<div>
									<img src = '../imagens/{$vestido['endereco']}' class='img-fluid rounded-3' alt='Shopping item' style='width: 65px;'>
								</div>
                                <div class=' ms-3 '>
                                    <h5>{$vestido['nome_produto']}</h5>
                                </div>
                            </div>
							<div class='d-flex flex-row align-items-center'>
								<button onclick=\"quant('roup{$bia}', 'add', 'pr{$bia}')\" type='button' class='mr-2 btn btn-dark'>+</button>
								<button onclick=\"quant('roup{$bia}', 'sub', 'pr{$bia}')\" type='button' class='ms-4 btn btn-dark'>-</button>
							</div>
							<div class='d-flex flex-row align-items-center'>
								<div style='width: 80px;'>
									<h5 id='roup{$bia}' class='fw-normal mb-0' data-quantidade='{$vestido['quantidade']}' data-preco='{$vestido['preco']}'>{$vestido['quantidade']}</h5>
								</div>
								<div style='width: 90px;'>
									<h5 id='pr{$bia}' class='mb-0'>R$ {$subtotal}</h5>
								</div>
								<div style='width: 60px;'>
									<a><i class='ms-2 bi bi-trash3-fill'></i></a>
								</div>
							</div>            
						</div>
					</div>
				</div>";
			}
			$anterior = $atual; 
            $bia++;
		}

         $bi=0;
        $anterior = 0; 
		foreach($alimento as $cafe ){
			$atual = $cafe['fk_id_info_produto']; 
			if ($atual != $anterior){ 
				$subtotal = $cafe['quantidade'] * $cafe['preco'];
				echo"
                <div class='card mb-3' style='box-shadow: 10px 5px 5px ;'>
					<div class='card-body'>
						<div class='d-flex justify-content-between'>
							<div class='d-flex flex-row align-items-center'>
								<div>
									<img src = '../imagens/{$cafe['endereco']}' class='img-fluid rounded-3' alt='Shopping item' style='width: 65px;'>
								</div>
                                <div class=' ms-3 '>
                                    <h5>{$cafe['sabor']}</h5>
                                </div>
                            </div>
							<div class='d-flex flex-row align-items-center'>
								<button onclick=\"quant('comida{$bi}', 'add', 'vu{$bi}')\" type='button' class='mr-2 btn btn-dark'>+</button>
								<button onclick=\"quant('comida{$bi}', 'sub', 'vu{$bi}')\" type='button' class='ms-4 btn btn-dark'>-</button>
							</div>
							<div class='d-flex flex-row align-items-center'>
								<div style='width: 80px;'>
									<h5 id='comida{$bi}' class='fw-normal mb-0' data-quantidade='{$cafe['quantidade']}' data-preco='{$cafe['preco']}'>{$cafe['quantidade']}</h5>
								</div>
								<div style='width: 90px;'>
									<h5 id='vu{$bi}' class='mb-0'>R$ {$subtotal}</h5>
								</div>
								<div style='width: 60px;'>
									<a><i class='ms-2 bi bi-trash3-fill'></i></a>
								</div>
							</div>            
						</div>
					</div>
				</div>";
			}
			$anterior = $atual; 
            $bi++;
		}
                                    
        ?>
		<div class="d-flex justify-content-between">
			<p class="mt-4 mb-2" >Total</p>
			<p class="mt-4 mb-2" id='total' >0</p>
		</div>
<script>
	soma()
	function quant(ide, fun, prod) {
		let imprime = document.getElementById(ide)
		let imprimeQnt = imprime.dataset.quantidade
		let preco = imprime.dataset.preco
		let dinheiro = document.getElementById(prod)
		if (fun == 'add') {
			imprimeQnt++
		}
		if (fun == 'sub') {
			imprimeQnt--
			if (imprimeQnt <= 0) {
				imprimeQnt = 0
			}
		}
		let precoNovo = imprimeQnt * preco
		dinheiro.innerHTML = 'R$ ' + precoNovo
		imprime.innerHTML = imprimeQnt
		imprime.dataset.quantidade = imprimeQnt
		soma()
	}
	function soma(){
		//quantidade de itens
		//	>roupas
		//	>alimento
		let valor = document.getElementById('comida{$bi}') //pega o valor novo
		let valor2 = document.getElementById('roup{$bia}')
		let quantidade = valor.dataset.length
		console.log(quantidade)
		let aux;
		let juli;
		//	>roupas
		for (let i = 1; i <= quantidade; i++) {
			aux=document.getElementById('comida'+i)
			juli= valor * quantidade;
			
		} 
		//	>alimento
		for (let i = 1; i <= quantidade; i++) {
			aux=document.getElementById('roupa'+i)
			//quant*preço

		} 
		//total total
		//imprime o total total
	}
	
</script>
                            <button type="button" class="btn btn-info btn-block btn-lg" onclick="document.location= 'checkoutpage.php'">
                                <span>Checkout</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../include/footer.php';
?>