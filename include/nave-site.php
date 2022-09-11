<?php
# BY - JONAS
include "header.php";
?>
<header class="p-3 bg-dark text-white">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <h2><i class="bi bi-cup-hot"></i></h2>

            <li><a href="../index.php" class="nav-link px-2 text-warning">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">The COFFE'JOIN</font>
                    </font>
                </a></li>
            <li><a href="./galeriap.php" class="nav-link px-2 text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Itens</font>
                    </font>
                </a></li>
            <li><a href="./" class="nav-link px-2 text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Sobre Cartão</font>
                    </font>
                </a></li>
            <li><a href="#" class="nav-link px-2 text-white">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Perguntas frequentes</font>
                    </font>
                </a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
            <input type="search" class="form-control form-control-dark" style="margin-bottom: 2mm;" placeholder="Procurar..." aria-label="Procurar">
        </form>
        <?php
        if (isset($_SESSION['id_usu']) and $_SESSION['id_usu'] != '') {
            echo '<div class="text-end">
                    <a href="pagina_usuario.php"><i class="bi bi-person-circle login-icon" style="margin-right: 5mm; margin-left: 5mm;"></i></a>
                    <a class="btn btn-outline-light me-2" style="margin-bottom: 6mm;" href="logout.php">Desconectar</a>
                </div>';
        } else {
            echo '<div class="text-end">';
            echo '<a class="btn btn-outline-light" style="margin-bottom: 8px;" href="login-nave.php">Login</a>';
        }
        ?>
    </div>
</header>
<?php
include "footer.php";
?>