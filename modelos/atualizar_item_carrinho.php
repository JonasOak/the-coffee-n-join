<?php
//autor: Bianca Nogueira
include'../include/header.php';
$title="Atualizar item de carrinho";
include'../include/database.php';
$id=$_GET['var'];

if(isset($_GET['submit']) and $_GET['submit']=='send'){
    $consulta = "UPDATE item_de_carrinho SET   id_produto = '{$_GET['fk_id_info_produto']}', carrinho={$_GET['fk_id_carrinho']}, 
    quantidade = '{$_GET['quantidade']}' Join  produto On id_produto =fk_id_info_produto    WHERE id_item_carrinho = {$id}";
    echo $consulta;
    $query=mysqli_query ($con, $consulta);
      if($query){
      echo "Sucesso!!";
      }else{
        echo "Fracasso";
      }
    }

    $consulta2="Select * From item_de_carrinho where id_item_carrinho = {$id}";
   // var_dump($consulta);
    $query=mysqli_query($con, $consulta2);
    $result = mysqli_fetch_assoc($query);

?>


<body>

<form action="" method="get">
        <h1 class="text-center" style="margin-top: 1cm;" >Atualização de Item de Carrinho</h1>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="col-12">
                            <div class="form-floating" style="margin-top: 1cm;">
                            <input type="text" class="form-control" name='id_produto' value="<?php echo $result['fk_id_info_produto'];?>">
                             <label for="exampleFormControlInput1" class="form-label"><strong>ID do produto </strong></label>
                            </div>
                            
                            <div class="form-floating">
                            <input type="text" class="form-control" name='carrinho' value="<?php echo $result['fk_id_carrinho'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>ID do carrinho</strong></label>
                            </div>
                            <div class="form-floating" style="margin-bottom: 5mm;">
                                 <input type="text" class="form-control" name='quantidade' value="<?php echo $result['quantidade'];?>">
                                <label for="exampleFormControlInput1" class="form-label"><strong>Quantidade</strong></label>
                            </div>

                            <input type="hidden" name="var" value="<?php echo $_GET['var'];?>" />
                            <div class="row">
                                <div class="col-6">
                                    <a class="w-100 btn btn-lg btn-secondary" href="cadastro_item_de_carrinho.php">Voltar</a>
                         </div>
                            <div class="col-6">
                                <button type="submit" name='submit' value='send' class="w-100 btn btn-lg btn-primary">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

<?php
include'../include/footer.php';
?>