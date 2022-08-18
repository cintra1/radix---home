<?php
   include('php/protect.php');
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
    <link rel="stylesheet" href="assets/css/stylesInitial.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--==================== UNICONS ====================-->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    

    <title>Radix</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav nav__container">
            <a href="initial.html" class="nav__logo first"> <i class="fa fa-leaf"></i>Radix</a>
            

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list__initial">

                    <li class="nav__item">
                        <a href="#produtores" class="nav__link"><?php echo $_SESSION['nome']; ?> </a>
                    </li>

                    <li class="nav__item"> 
                        <a href="#frutas" class="nav__link">Frutas</a>
                    </li>
                    
                    <li class="nav__item">
                        <a href="#vegetais" class="nav__link">Vegetais</a>
                    </li>

                    <li class="nav__item">
                        <a href="#espec" class="nav__link">Especiarias</a>
                    </li>

                   

                    <form action="" class="search-form">
                        <a href="search.html">
                        <label for="search-box" class="fas fa-search" ></label></a>
                        <input id="enter" type="search" placeholder="Busque por produtor ou item" id="search-box">
                    </form>

                    <li class="nav__item endereco">
                        <a href="#app" class="nav__link__endereco">Seu endereço, 123 <i class="uil uil-angle-down"></i></a>
                    </li>
                    
                    <li class="nav__item">
                        <div id="cart-btn" class="uil uil-shopping-bag nav__link"></div>
                    </li>

                    <li class="nav__item">
                        <a href="login.php" class="fas fa-user nav__link"></a>
                        <!--<div id="login-btn" class="fas fa-user nav__link"></div>-->
                    </li>
                    <li class="nav__item">  
                        <a href="php/logout.php" class="uil uil-signout nav__link"></a>
                    </li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-grid-alt'></i>
            </div>

            
        </nav>

        

        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="assets/img/cart-1.jpg" alt="">
                <div class="content">
                    <h3>Brócolis</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">x</span>
                    <span class="price">R$2.50</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="assets/img/cart-2.jpg" alt="">
                <div class="content">
                    <h3>Leite - 0 lactose</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">x</span>
                    <span class="price">R$6.99</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-times"></i>
                <img src="assets/img/cart-3.jpg" alt="">
                <div class="content">
                    <h3>Trigo</h3>
                    <span class="quantity">1</span>
                    <span class="multiply">x</span>
                    <span class="price">R$15.00</span>
                </div>
            </div>
            <h3 class="total"> Total : <span>56.97</span> </h3>
            <a href="#" class="btn">Finalizar Compra</a>
        </div>


        <form action="" class="login-form">
            <h3>login</h3>
            <input type="email" placeholder="E-mail ou usuário" class="box">
            <input type="password" placeholder="Digite sua senha" class="box">
            <div class="remember">
                <input type="checkbox" name="" id="remember-me">
                <label for="remember-me">Lembrar-me</label>
            </div>
            <input type="submit" value="ENTRAR" class="btn button">
            <p class="senha">Esqueceu a senha? <a href="#">Clique aqui</a></p>
            <p class="conta">Não tem uma conta? <a href="#">Crie uma</a></p>
        </form>
    </header>

    <main class="main initial__home">

        <!--=============== HOME ===============-->
        <section class="home" id="home">
            <div class="svg">
                <div class="initial__container grid">
                    <div class="content">
                        <h3>Produtos frescos e <span>orgânicos</span> para o você</h3>
                        <p>A Radix é o seu app de delivery orgânico e saudável, que conecta você ao pequeno
                            produtor.<br> Com entrega rápida e otimizada para melhor aproveitamento do aplicativo.</p>
                        <a href="#products" class="btn">Comprar agora</a>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== PRODUCTS ===============-->
        <section class="products container" id="products">

            <h1 class="heading"> Nossos <span>Produtos</span> </h1>

            <div class="swiper product-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="assets/img/product-1.png" alt="">
                        <h3>fresh orange</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="assets/img/product-2.png" alt="">
                        <h3>fresh onion</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="assets/img/product-3.png" alt="">
                        <h3>fresh meat</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="assets/img/product-4.png" alt="">
                        <h3>fresh cabbage</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                </div>

            </div>

            <div class="swiper product-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide box">
                        <img src="assets/img/product-5.png" alt="">
                        <h3>fresh potato</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="assets/img/product-6.png" alt="">
                        <h3>fresh avocado</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="assets/img/product-7.png" alt="">
                        <h3>fresh carrot</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                    <div class="swiper-slide box">
                        <img src="assets/img/product-8.png" alt="">
                        <h3>green lemon</h3>
                        <div class="price"> $4.99/- - 10.99/- </div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <a href="#" class="btn">add to cart</a>
                    </div>

                </div>

            </div>


        </section>

        <!--=============== CATEGORY ===============-->
        <section class="category container">

            <h1 class="heading"> Categorias</h1>

            <div class="box-container">

                <a href="#" class="box">
                    <img src="assets/img/cat-1.png" alt="">
                    <h3>Frutas Frescas</h3>
                </a>

                <a href="#" class="box">
                    <img src="assets/img/cat-2.png" alt="">
                    <h3>Vegetais</h3>
                </a>

                <a href="#" class="box">
                    <img src="assets/img/cat-3.png" alt="">
                    <h3>Especiarias Orgânicas</h3>
                </a>

                <a href="#" class="box">
                    <img src="assets/img/cat-4.png" alt="">
                    <h3>Carne Fresca</h3>
                </a>

                <a href="#" class="box">
                    <img src="assets/img/cat-5.png" alt="">
                    <h3>Trigo Orgânico</h3>
                </a>

            </div>

        </section>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content1">
                    <a href="index.html" class="nav__logo"> <i class="fa fa-leaf"></i> Radix </a>

                </div>

                <div class="footer__content">
                    <a href="#" class="footer__logo">EMPRESA</a>
                    <p class="footer__description">A Radix é o seu supermercado orgânico e saudável, que conecta você ao
                        pequeno produtor. Com entrega rápida e otimizada.</p>
                </div>

                <div class="footer__content">
                    <h1 class="footer__title">INTEGRANTES</h1>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link">Mateus Cintra </a></li>
                        <li><a href="#" class="footer__link">Diego Carvalho</a></li>
                        <li><a href="#" class="footer__link">Felipe Kurt</a></li>
                        <li><a href="#" class="footer__link">Bruna Amorin</a></li>
                        <li><a href="#" class="footer__link">Leonardo Moura</a></li>
                    </ul>
                </div>



                <div class="footer__content">
                    <h3 class="footer__title"></h3>
                    <ul class="footer__links">
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                        <li><a href="#" class="footer__link"></a></li>
                    </ul>
                </div>

                <div class="footer__social">
                    <a href="#" class="footer__social-link"><i class='bx bxl-facebook-circle '></i></a>
                    <a href="#" class="footer__social-link"><i class='bx bxl-twitter'></i></a>
                    <a href="#" class="footer__social-link"><i class='bx bxl-instagram-alt'></i></a>
                </div>
            </div>

        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-up-arrow-alt scrollup__icon'></i>
        </a>

        <!--=============== MAIN JS ===============-->
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <script src="assets/js/mainInitial.js"></script>
</body>

</html>