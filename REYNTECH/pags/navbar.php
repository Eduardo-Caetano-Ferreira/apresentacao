<link rel="stylesheet" href="css/estilo.css">

<style>
    .navbar {
        background-color: rgba(0,0,0,0.2) !important;
    }

    a {
        color: black !important;
    }
    svg{
        text-align: right;
    }
</style>    

<div class="fundo-home">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid px-5">
                <a class="navbar-brand" href="../index.php" class="nav-msgarden">M&S Garden</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-10" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pag_produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="categorias.php">Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="curiosidades.php">Curiosidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="conta.php">Conta</a>
                        </li>
                    </ul>
                </div>
                <div class="col-2">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- USUARIO -->
                        <li class="nav-item">
                        <a href="login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                            </svg>  
                        </a>
                        </li>

                        <!-- CARRINHO -->
                        <li class="nav-item">
                        <a href="carrinho.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
