<?php
		$title ='The COFFE\'N\'JOIN';
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
				
				<input type="search" class="form-control form-control-dark" placeholder="Procurar..."
					aria-label="Procurar">
			</form>
			<?php
			if(isset($_SESSION['id_usu']) and  $_SESSION['id_usu'] != '' ){
			   echo'<div class="text-end">';
				echo'<a class="btn btn-outline-light me-2" href="pages/logout.php"> Sair</a>';
			}else{
				echo'<div class="text-end">';
			   echo'<a class="btn btn-outline-light me-2" href="pages/login.php">Login</a>';
			}
			?>
			</div>
	</header> 
   
    <div>
                <div id="cafeb" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Imagens/cafe1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imagens/choa.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="Imagens/cofe3.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#cafeb" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#cafeb" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="container">
    <div class="row">























    </div>    
    </div>  
      

</body>


<?php
  include './include/footer.php';
?>