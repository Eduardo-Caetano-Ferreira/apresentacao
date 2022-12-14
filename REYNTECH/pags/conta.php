<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>M&S Garden</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>

<style>
  body {
      overflow-x: hidden !important;
  }
</style>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid top-bar bg-dark text-light px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Produtos</a></li>
                    <li class="breadcrumb-item"><a class="small text-light" href="#">Curiosidades</a></li>
                </ol>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn-lg-square text-primary border-end rounded-0" href=""><i class="fab fa-whatsapp"></i></a>
                    <a class="btn-lg-square text-primary pe-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">M&S Garden</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <a href="../index.php" class="nav-item nav-link active">Home</a>
                <a href="produtos.php" class="nav-item nav-link">Produtos</a>
                <a href="categorias.php" class="nav-item nav-link">Categorias</a>
                <a href="curiosidades.php" class="nav-item nav-link">Curiosidades</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Outros</a>
                    <div class="dropdown-menu m-0">
                        <a href="contato.php" class="dropdown-item">Fale Conosco</a>
                        <a href="#" class="dropdown-item">Conta</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <a href="login.php"><i class="bi bi-person-fill text-primary"></i></a>
                </div>
                <div class="ps-3">
                    <small class="text-primary mb-0"><?php?></small>
                    <p class="text-light fs-5 mb-0"><?php?></p>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-6 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center pt-5 pb-3">
            <h1 class="display-4 text-white animated slideInDown mb-3">Conta</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-primary" href="#">P??ginas</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Sobre</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    

	<form method="POST">

    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 mb-4">Bem-Vindo</h1>
            </div>
            <div class="row g-0 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="email_a" placeholder="Alterar Email">
                                    <label for="name">Alterar Email</label>
                                </div>
                                <div class="col-12 text-center mt-2">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" name="c_gmail" onclick="Alterar_email($email, $email_a)" type="submit">Alterar Email</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Adicionar Email de Recupera????o">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-12 text-center mt-2">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" name="add_email" onclick="Add_email($email, $email_add)" type="submit">Adicionar Email</button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="alter_senha" name="senha" placeholder="Senha atual">
                                    <label for="alter_senha">Assunto</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="a_senha" placeholder="Nova senha">
                                    <label for="message">Mensagem</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="con_senha" placeholder="Confirmar senha">
                                    <label for="message">Mensagem</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Alterar Senha</button>
                            </div>
                            <p>
        <a href="../php/logout.php">Sair</a>
    </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
<?php

    //ALTERAR E-MAIL
        if(isset($_POST["c_gmail"])){
            Alterar_email($_SESSION['email'], $_SESSION['email_a']);
        }
    
    //ADD E-MAIL
        if (isset($_POST["add_email"])) {
            Add_email($_SESSION['email'], $_POST['email_add']); 
        }
    
    //ALTERAR SENHA
        if (isset($_POST["c_pass"])) {
            Alterar_senha($_SESSION['email'], $_POST['a_senha'], $_POST['senha'], $_POST['con_senha']); 
        }
    ?>

<?php include('footer2.php'); ?>