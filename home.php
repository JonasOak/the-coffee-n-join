<?php
$title = 'The COFFE\'N\'JOIN';
include './include/header.php';
?>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <h2><i class="bi bi-cup-hot"></i> </h2>

                <li><a href="#" class="nav-link px-2 text-warning">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">The COFFE'JOIN</font>
                        </font>
                    </a></li>
                <li><a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Mais Sabores</font>
                        </font>
                    </a></li>
                <li><a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Preços</font>
                        </font>
                    </a></li>
                <li><a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Perguntas frequentes</font>
                        </font>
                    </a></li>
                <li><a href="#" class="nav-link px-2 text-white">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Sobre</font>
                        </font>
                    </a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">

                <input type="search" class="form-control form-control-dark" placeholder="Procurar..." aria-label="Procurar">
            </form>
            <?php
            if (isset($_SESSION['id_usu']) and  $_SESSION['id_usu'] != '') {
                echo '<div class="text-end">';
                echo '<a class="btn btn-outline-light me-2" href="pages/logout.php"> Sair</a>';
            } else {
                echo '<div class="text-end">';
                echo '<a class="btn btn-outline-light me-2" href="pages/login.php">Login</a>';
            }
            ?>
        </div>
    </header>











    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="col" style="background-color:#AA6C39;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Imagens/cofe2.png" style="height:500px;" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Imagens/coffe1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Imagens/cofe3.png" style="height:500px;" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div class="row justify-content-evenly">
        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="Imagens/xicaraleit.jpeg" heigth=''>
                <div class="card-body">
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h2 class="text-center">Grão de café PREMIUM</h2>
                            </font>
                            <font style="vertical-align: inherit;">
                                <h6>Maior seletividade de grãos, sabor acentuado com notas de uma torra de qualidade tendo sua humidade e sabor prezervados.</h6>
                            </font>
                        </font>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" id='alvo' onclick='rodinhas(1)' class="btn btn-sm btn-warning">Adicionar ao carrinho</button>
                        </div>
                        <small class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">COFFE'JOIN</font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="Imagens/xicaraleit.jpeg" heigth="">
                <div class="card-body">
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h2 class="text-center">Caramelo Cremoso </h2>
                            </font>
                            <font style="vertical-align: inherit;">
                                <h6>Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
                            </font>
                        </font>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">

                            <button type="button" class="btn btn-sm btn-outline-secondary">

                                <font style="vertical-align: inherit;">Mais</font>
                                </font>
                            </button>
                        </div>
                        <small class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">COFFE'JOIN</font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm">
                <img src="Imagens/xicaraleit.jpeg" heigth="">
                <div class="card-body">
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h2 class="text-center">Cafeteira Delux</h2>
                            </font>
                            <font style="vertical-align: inherit;">
                                <h6>Procura menos gastos de energia e maior eficiencia quando falamos de cafeteira? Então vocè achou a Cafeteira Delux COFFE'JOIN te entrega tudo isso e mais um pouco, atribuindo o processador de grãos e a cabine para capsulas de café.</h6>
                            </font>
                        </font>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mais</font>
                                </font>
                            </button>
                        </div>
                        <small class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">COFFE'JOIN</font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="Imagens/xicaraleit.jpeg" heigth=''>
                <div class="card-body">
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h2 class="text-center">Grão de café PREMIUM</h2>
                            </font>
                            <font style="vertical-align: inherit;">
                                <h6>Maior seletividade de grãos, sabor acentuado com notas de uma torra de qualidade tendo sua humidade e sabor prezervados.</h6>
                            </font>
                        </font>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">


                            <button type="button" class="btn btn-sm btn-outline-secondary">

                                <font style="vertical-align: inherit;">Mais</font>
                                </font>
                            </button>
                        </div>
                        <small class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">COFFE'JOIN</font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="Imagens/xicaraleit.jpeg" heigth="">
                <div class="card-body">
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h2 class="text-center">Caramelo Cremoso </h2>
                            </font>
                            <font style="vertical-align: inherit;">
                                <h6>Nossa mais nova capsula Caramelo Cremoso, uma explosão de sabores com a doçura na medida certa. Com notas de baunilha com canela e o nosso mais refinado caramelo.</h6>
                            </font>
                        </font>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">

                            <button type="button" class="btn btn-sm btn-outline-secondary">

                                <font style="vertical-align: inherit;">Mais</font>
                                </font>
                            </button>
                        </div>
                        <small class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">COFFE'JOIN</font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm">
                <img src="Imagens/xicaraleit.jpeg" heigth="">
                <div class="card-body">
                    <p class="card-text">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                                <h2 class="text-center">Cafeteira Delux</h2>
                            </font>
                            <font style="vertical-align: inherit;">
                                <h6>Procura menos gastos de energia e maior eficiencia quando falamos de cafeteira? Então vocè achou a Cafeteira Delux COFFE'JOIN te entrega tudo isso e mais um pouco, atribuindo o processador de grãos e a cabine para capsulas de café.</h6>
                            </font>
                        </font>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mais</font>
                                </font>
                            </button>
                        </div>
                        <small class="text-muted">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">COFFE'JOIN</font>
                            </font>
                        </small>
                    </div>
                </div>
            </div>
        </div>






        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    <svg class="bi" width="30" height="24">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <span class="mb-3 mb-md-0 text-muted">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">© 2022 Company, Inc</font>
                    </font>
                </span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#twitter"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#instagram"></use>
                        </svg></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
                            <use xlink:href="#facebook"></use>
                        </svg></a></li>
            </ul>
        </footer>

        <?php

        include './include/footer.php';

        ?>
</body>

</html>