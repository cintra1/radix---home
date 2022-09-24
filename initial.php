<?php
   include("php/conexao.php");
   require('php/connection.php');
   include('php/protect.php');
   include('php/loadItem.php');
   
   if (isset($_POST['sub'])) {
   header("Location: carrinho.php");
}
   $_SESSION['dados'] = array();
   $idCliente = $_SESSION['idCliente']; 

   $consulta = "SELECT * FROM tblProduto WHERE statusProduto <> 0  ORDER BY RAND() LIMIT 8";

   $con = $pdo->query($consulta) or die($mysqli->error);
   $conn = $mysqli->query($consulta) or die($mysqli->error);

   $consulta2 = "SELECT * from tblItem as i inner join tblProduto as p on i.idProduto = p.idProduto
    inner join tblVendedor as v on p.idVendedor = v.idVendedor where idCliente = $idCliente and statusItem <> 0";

    $con2 = $pdo->query($consulta2) or die($mysqli->error);
    $conn2 = $mysqli->query($consulta2) or die($mysqli->error);

    $consulta3 = "SELECT * FROM tblProduto WHERE statusProduto <> 0 ORDER BY RAND() LIMIT 8";

    $con3 = $pdo->query($consulta3) or die($mysqli->error);
    $conn3 = $mysqli->query($consulta3) or die($mysqli->error);

   $soma = "SELECT SUM(p.preco*i.qtde) AS total FROM tblProduto as p inner join tblItem as i on p.idProduto = i.idProduto where statusItem <> 0";
   $s = $mysqli->query($soma) or die($mysqli->error);

    $sql = $pdo->query("SELECT * from tblItem as i inner join tblProduto as p on i.idProduto = p.idProduto
     inner join tblVendedor as v on p.idVendedor = v.idVendedor where idCliente = $idCliente and statusItem <> 0;");
    if($sql->rowCount() > 0){
    foreach($sql->fetchAll() as $value){
        array_push(
            $_SESSION['dados'],
            array(
                'idCliente' =>  $value['idCliente'],
                'idItem' =>  $value['idItem'],
                'idVendedor' =>  $value2['idVendedor'],
                'qtde' => $value['qtde'],
                'preco' => $value['preco'],
                'nomeProd' => $value['nomeProd']
            )
        );
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/icon.ico">
    <!--<link rel="icon" type="imagem/png" href="assets/img/leafg (1).png">-->
    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/stylesInitials.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



    <title>Radix</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav nav__container">

            <nav class="navbar naves">
                <a href="initial.php">Home</a>
                <a href="#packages">Produtores</a>
                <a href="#services">Frutas</a>
                <a href="#pricing">Vegetais</a>
                <a href="#review">Especiarias</a>
            </nav>

            <a href="initial.html" class="nav__logo first"> <i class="fa fa-leaf"></i>Radix</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list__initial">
                <div></div>
                    <form action="" class="search-form">
                        <input id="enter" type="search" placeholder="busque por produtor ou item..." id="search-box">
                        <a href="search.html">
                            <label for="search-box" class="fas fa-search"></label></a>
                    </form>

                    <div class="nav__icon">
                        
                        <div class="fas fa-search" id="search-btn" style="display: none"></div>
                        
                        <li class="nav__item">
                            <div id="cart-btn" class="uil uil-shopping-bag nav__link"></div>
                        </li>

                        <li class="nav__item">
                            <a href="login.php" class="fas fa-user nav__link"></a>
                        </li>

                        <li class="nav__item">
                            <a href="php/logout.php" class="uil uil-signout nav__link"  style="font-size: 1.2rem !important"></a>
                        </li>
                        <li class="nav__item">
                            <div class="fas fa-bars nav__link" id="menu-btn"></div>
                        </li>
                    </div>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>
        </nav>



        <div class="shopping-cart cartes">
        <?php if($con2->rowCount() > 0){ ?>
        <form action="#" method="POST" enctype="multipart/form-data">
        <div class="box__maior" style=" overflow-y: scroll;height: 18rem;">
            <?php while($dado2 = $conn2->fetch_array()){   ?>
             <div class="box">
                <i class="fas fa-times"></i>
                <img src="upload/<?php echo $dado2["foto"]; ?>" alt="">
                <div class="content">
                    <h3><?php echo $dado2["nomeProd"]; ?></h3>
                    <span class="quantity"><?php echo $dado2["qtde"]; ?></span>
                    <span class="multiply">x</span>
                    <span class="price">R$ <?php echo number_format($dado2["preco"], 2, ",", "."); ?></span>
                </div>
                </div>
            <?php } ?>
            </div>
            <h3 class="total"> Total : <?php while ($dado = $s->fetch_array()) {
                                                        echo number_format($dado['total'], 2, ",", "."); ?></h3> <?php } ?> </h3>
            <input class="btn" type="submit" name="sub" value="Finalizar Compra">

            </div>
            <?php } else {?>
                <div class="box">
                <img src="assets/img/carrinho-vazio.svg" alt="" class="carrinho__img">
            </div>
            <h3 class="total2"> Seu carrinho está vazio. Clique no botão abaixo para começar a comprar.  </h3>
            <a href="produtores.php" class="btn">Começar a comprar</a>
            <?php }?>
        </form>
    </header>

    <main class="main initial__home">

        <!--=============== HOME ===============-->
        <section class="home" id="home">
            <div class="svg">
                <div class="initial__container grid">
                    <div class="content">
                        <h3><span>orgânicos frescos<br></span>  na sua mão com até<br> 50% de economia</h3>
                        <p>Nós levamos seu orgânico com qualidade radix que você já conhece, sem <br>
                            taxa de adesão e com frete grátis. Incrível, não?</p>
                        
                    </div>
                    <div class="boxin">
                        <select name="" id="">
                            <option value="">Escolha uma cesta...</option>
                            <option value="">Cesta Júnior</option>
                            <option value="">Cesta Normal</option>
                            <option value="">Cesta Jumbo</option>
                        </select>
                        <a href="" class="button3">Faça sua cesta</a>
                        </div>
                </div>
            </div>
        </section>

        <div class="invisivel">
                <div class="box__inv">
                    <div class="content2">
                        <h3><span>orgânicos frescos<br></span>  na sua mão com até<br> 50% de economia</h3>
                        <p>Nós levamos seu orgânico com qualidade radix que você já conhece, sem <br>
                            taxa de adesão e com frete grátis. Incrível, não?</p>
                    </div>
                <a href="" class="button3">Faça sua cesta</a>
                </div>
        </div>

        <section class="feature section-p1">
            <div class="f__box">
                <img src="assets/img/solo.png" style="width: 150px;" alt="">
                <p>Cesta Júnior</p>
                <h6>Ideal para uma pessoa.</h6>
            </div>

            <div class="f__box">
                <img src="assets/img/casal.png" style="width: 150px;" alt="">
                <p>Cesta Normal</p>
                <h6>Ideal para um casal.</h6>
            </div>

            <div class="f__box">
                <img src="assets/img/family.png" style="width: 150px;" alt="">
                <p>Cesta Jumbo</p>
                <h6>Ideal para uma família.</h6>
            </div>

            
            </div>
        </section>

        <section class="produtos1 section-p1">
            <h2>Produtos em Destaques</h2>
            <p>Itens mais amados entre nossos clientes</p>
            <div class="prod__container">
            <?php
             
            while($dado = $conn->fetch_array()){   

            $idProduto = $dado["idProduto"];
            $consultaVend = "SELECT nome as nomeVend FROM tblVendedor as v inner join tblProduto as p on v.idVendedor = p.idVendedor where idProduto = $idProduto";

            $connVend = $mysqli->query($consultaVend) or die($mysqli->error);
            ?>
                <div class="prod">
                    <img src="upload/<?php echo $dado["foto"]; ?>" alt="">
                    <div class="des">
                        <span>Produtor: <?php while ($dado2 = $connVend->fetch_array()) {
                                                        echo $dado2['nomeVend']; ?></span>
                        <h5><?php echo $dado["nomeProd"]; ?></h5><?php } ?></h2>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>R$ <?php echo number_format($dado["preco"], 2, ",", "."); ?></h4>
                    </div>
                    <a href="sproduto.php?idProduto=<?php echo $dado["idProduto"]; ?>"><i class="fas fa-shopping-cart"></i></a>
                </div>
            <?php } ?>
            </div>
        </section>

        <section class="banner section-m1">
            <h4>qualidade radix</h4>
            <h2>Diversidade de frutas e vegetais <span> orgânicos </span> direto do campo toda semana </h2>
            <span>Nossos vendedores são produtores conectados diretamente a você.</span>
            <a href="sobre.html"><button class="normal">Conheça mais</button></a>
        </section>

        <section class="produtos1 section-p1">
            <h2>Novos produtos</h2>
            <p>Seja o primeiro a experimentar esses produtos</p>
            <div class="prod__container">
            <?php
             
            while($dado3 = $conn3->fetch_array()){   

            $idProduto = $dado3["idProduto"];
            $consultaVend2 = "SELECT nome as nomeVend FROM tblVendedor as v inner join tblProduto as p on v.idVendedor = p.idVendedor where idProduto = $idProduto";

            $connVend2 = $mysqli->query($consultaVend2) or die($mysqli->error);
            ?>
                <div class="prod">
                    <img src="upload/<?php echo $dado3["foto"]; ?>" alt="">
                    <div class="des">
                        <span>Produtor: <?php while ($dado4 = $connVend2->fetch_array()) {
                                                        echo $dado4['nomeVend']; ?></span>
                        <h5><?php echo $dado3["nomeProd"]; ?></h5><?php } ?></h2>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>R$ <?php echo number_format($dado3["preco"], 2, ",", "."); ?></h4>
                    </div>
                    <a href="sproduto.php?idProduto=<?php echo $dado3["idProduto"]; ?>"><i class="fas fa-shopping-cart"></i></a>
                </div>
            <?php } ?>
            </div>
        </section>

        <section class="sm section-p1">
            <div class="banner__box">
                <h4>confiança radix</h4>
                <h2>produtos frescos e maduros</h2>
                <span>qualidade radix como você já conhece</span>
                <a href="sobre.html"><button class="white">Saiba mais</button></a>
            </div>

            <div class="banner__box b2">
                <h4>produtores ativos</h4>
                <h2>novos produtos todos os dias</h2>
                <span>os melhores produtores da sua região em nosso aplicativo</span>
                <a href="sobre.html"><button class="white">Saiba mais</button></a>
            </div>
        </section>

        <section class="banner3">
            <div class="banner__box">
                <h2>DESCONTOS DE INVERNO</h2>
                <h3>Só no inverno - 50% off</h3>
            </div>

            <div class="banner__box b2">
                <h2>CONSUMO CONSCIENTE</h2>
                <h3>Compre produtos<br> conforme seu consumo.</h3>
            </div>

            <div class="banner__box b3">
                <h2>Qualidade e Rapidez</h2>
                <h3>Somente na radix.</h3>
            </div>
        </section>

        <div class="alinhar"><div id="linha-horizontal"></div></div>

        <!--=============== FOOTER ===============-->
        <footer class="section-p1">
            <div class="col">
                <a href="index.html" class="nav__logo logo"> <i class="fa fa-leaf" style="color: #70C28D;"></i> Radix </a>
                <h4>Contato</h4>
                <p><strong>Endereço:</strong> Rua ABC, 300</p>
                <p><strong>Telefone:</strong> +55 (11) 91111-5555</p>
                <p><strong>Horas:</strong> 10:00 - 18:00, Segunda a Sexta</p>
                <div class="follow">
                    <h4>Nos siga</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-pinterest-p"></i>
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>

            <div class="col">
                <h4>Sobre</h4>
                <a href="#">Sobre nós</a>
                <a href="#">Informações sobre entrega</a>
                <a href="#">Política de privacidade</a>
            </div>

            <div class="col">
                <h4>Minha Conta</h4>
                <a href="#">Fazer Login</a>
                <a href="#">Carrinho</a>
                <a href="#">Ajuda</a>
            </div>

            <div class="col install">
                <h4>Baixar App</h4>
                <p>Baixar da App Store ou Google Play</p>
                <div class="row">
                    <img src="assets/img/pay/app.jpg" alt="">
                    <img src="assets/img/pay/play.jpg" alt="">
                </div>  
                <p>Gateways de Pagamento Seguros</p>  
                <img src="assets/img/pay/pay.png" alt="">
            </div>

            <div class="copyright">
                <p>© Copyright 2021 - Radix - Todos os direitos reservados Radix com Agência de Restaurantes Online S.A.</p>
            </div>
        </footer>
        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script src="assets/js/mainInitial.js"></script>

    <?php

    //verificar se a pessoa clicou no btnCadastrar
    
    if (isset($_POST['sub'])) {
        foreach($_SESSION['dados'] as $produtos){
            $insert = $pdo->prepare("
            INSERT INTO tblPedido (idCliente,idItem,idVendedor) VALUES (?,?,?)");
            $insert->bindParam(1,$produtos['idCliente']);
            $insert->bindParam(2,$produtos['idItem']);
            $insert->bindParam(3,$produtos['idVendedor']);
            $insert->execute();
            $bol=true;
        }
    } 


    ?>
</body>
</html>