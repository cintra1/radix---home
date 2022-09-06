<?php 
include('php/protectVend.php');
include('php/load.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="widht=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styleAlterarProd.css">
    <link rel="icon" type="image/x-icon" href="assets/img/icon.ico">
    <title>Radix</title>
    
    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
     <!--=============== HEADER ===============-->
     <header class="header" id="header">
        <nav class="nav container">
            <a id = "radix" href="index.html" class="nav__logo"> <i class="fa fa-leaf"></i> Radix </a>
           

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                   
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>

            <a href="app.html" class="button button__header">LOGOUT</a>
        </nav>
    </header>

    <div class="caixa__grande">
        <h2 class="title">Home Vendedor > Editar Produtos > Alterar Produto</h2>
        <form action="#" method="POST" class="alter-form" enctype="multipart/form-data">
            <div class="caixa2">
                <input type="text" id="taskValue" name="idProduto" value="<?php echo $_GET['idProduto']; ?>">
                <h1><i class="uil uil-angle-down"></i></h1>
            </div>
            <div class="caixa">
                <input type="text" id="taskValue" placeholder="Nome Produto" name="nome" value="<?php echo $value['nome']; ?>">
                <input type="text" id="recValue" placeholder="Preço" name="preco" value="<?php echo $value['preco']; ?>">
            </div>
            <div>
                <input type="text" id="reqValue" placeholder="Detalhes Produto" name="detalhe" value="<?php echo $value['detalhe']; ?>">
            </div>
            <div class="baixo__vend"> 
                <input id='img' name="imagem" type="file">
                <label for='img'>ADICIONAR FOTO</label>
                <input type="submit" class="btn3" value="Limpar Campos" name="sub"/>
                <input type="submit" class="btn2" value="Adicionar Produto" name="sub">
            </div>
            <div class="result"></div>
    </form> 
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="assets/js/alterarProd.js"></script>
</body>
</html>