<?php

require_once("varconst.php");



?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $nomeSite ?></title>

   <!-- Favicon -->
   <link rel="shortcut icon" href="./src/img/favicon.ico" type="image/x-icon">

   <!-- Font awesome -->
   <link href="./src/css/font-awesome.css" rel="stylesheet">
   <!-- Bootstrap -->
   <link href="./src/css/bootstrap.css" rel="stylesheet">
   <!-- Slick slider -->
   <link rel="stylesheet" type="text/css" href="./src/css/slick.css">
   <!-- Date Picker -->
   <link rel="stylesheet" type="text/css" href="./src/css/bootstrap-datepicker.css">
   <!-- Fancybox slider -->
   <link rel="stylesheet" href="./src/css/jquery.fancybox.css" type="text/css" media="screen" />
   <!-- Theme color -->
   <link id="switcher" href="./src/css/theme-color/ipbalneario-theme.css" rel="stylesheet">

   <!-- Main style sheet -->
   <link href="style.css" rel="stylesheet">


   <!-- Google Fonts -->
   <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>


   <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
   <!-- Pre Loader -->
   <div id="aa-preloader-area">
      <div class="mu-preloader">
         <img src="./src/img/preloader.gif" alt="Imagem de Carregando Página">
      </div>
   </div>
   <!--START SCROLL TOP BUTTON -->
   <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
      <span>Topo</span>
   </a>
   <!-- END SCROLL TOP BUTTON -->

   <!-- Start header section -->
   <header id="mu-header">
      <nav class="navbar navbar-default mu-main-navbar" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <!-- LOGO -->
               <a class="navbar-brand" href="index.php"><img src="./src/img/logo.png" alt="Logo img"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
               <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
                  <li><a href="#mu-slider">HOME</a></li>
                  <li><a href="#mu-about-us">SOBRE</a></li>
                  <li><a href="#mu-restaurant-menu">INFORMATIVOS</a></li>
                  <!-- <li><a href="#mu-reservation">RESERVAS</a></li> -->
                  <li><a href="#mu-gallery">FOTOS</a></li>
                  <!-- <li><a href="#mu-chef">NOSSA EQUIPE</a></li> -->
                  <!-- <li><a href="#mu-latest-news">BOLETIM</a></li> -->
                  <li><a href="#mu-contact">CONTATO</a></li>
                  <!-- <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="blog-archive.html">PAGE <span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                        <li><a href="blog-archive.html">BLOG</a></li>
                        <li><a href="blog-single.html">BLOG DETAILS</a></li>
                        <li><a href="404.html">404 PAGE</a></li>
                     </ul>
                  </li> -->
               </ul>
            </div><!--/.nav-collapse -->
         </div>
      </nav>
   </header>
   <!-- End header section -->


   <!-- Start slider  -->
   <section id="mu-slider">
      <div class="mu-slider-area">
         <!-- Top slider -->
         <div class="mu-top-slider">
            <!-- Top slider single slide -->
            <div class="mu-top-slider-single">
               <img src="./src/img/slider/1.jpg" alt="img">
               <!-- Top slider content -->
               <div class="mu-top-slider-content">
                  <span class="mu-slider-small-title">Seja bem-vindo a</span>
                  <h2 class="mu-slider-title">Igreja Presbiteriana</h2>
                  <h2 class="mu-slider-title">Balneário Meia Ponte</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p>
                  <!-- <a href="#" class="mu-readmore-btn">READ MORE</a> -->
               </div>
               <!-- / Top slider content -->
            </div>
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <!-- <div class="mu-top-slider-single">
               <img src="./src/img/slider/2.jpg" alt="img"> -->
               <!-- Top slider content -->
               <!-- <div class="mu-top-slider-content">
                  <span class="mu-slider-small-title">The Real</span>
                  <h2 class="mu-slider-title">GREEN FOODS</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p> -->
                  <!-- <a href="#" class="mu-readmore-btn">READ MORE</a> -->
               <!-- </div> -->
               <!-- / Top slider content -->
            <!-- </div> -->
            <!-- / Top slider single slide -->
            <!-- Top slider single slide -->
            <!-- <div class="mu-top-slider-single">
               <img src="./src/img/slider/3.jpg" alt="img"> -->
               <!-- Top slider content -->
               <!-- <div class="mu-top-slider-content">
                  <span class="mu-slider-small-title">Delicious</span>
                  <h2 class="mu-slider-title">SPICY MASALAS</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptatem accusamus non quidem, deleniti optio.</p> -->
                  <!-- <a href="#" class="mu-readmore-btn">READ MORE</a> -->
               <!-- </div> -->
               <!-- / Top slider content -->
            <!-- </div> -->
            <!-- / Top slider single slide -->
         </div>
      </div>
   </section>
   <!-- End slider  -->

   <!-- Start About us -->
   <section id="mu-about-us">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-about-us-area">
                  <div class="mu-title">
                     <!-- <span class="mu-subtitle">Discover</span> -->
                     <h2>SOBRE NÓS</h2>
                     <!-- <i class="fa fa-spoon"></i> -->
                     <!-- <i class="fa-solid fa-cross"></i> -->
                     <figure class="fa icon-cross"><img src="./src/img/cross-light.svg" alt=""></figure>
                     <span class="mu-title-bar"></span>
                  </div>
                  <div class="row">
                     <div class="col-md-6">
                        <div class="mu-about-us-left">
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam minus aliquid, itaque illum assumenda repellendus dolorem, dolore numquam totam saepe, porro delectus, libero enim odio quo. Explicabo ex sapiente sit eligendi, facere voluptatum! Quia vero rerum sunt porro architecto corrupti eaque corporis eum, enim soluta, perferendis dignissimos, repellendus, beatae laboriosam.</p>
                           <ul>
                              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                           </ul>
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque similique molestias est quod reprehenderit, quibusdam nam qui, quam magnam. Ex.</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="mu-about-us-right">
                           <ul class="mu-abtus-slider">
                              <li><img src="./src/img/about-us/abtus-img-1.png" alt="img"></li>
                              <li><img src="./src/img/about-us/abtus-img-2.png" alt="img"></li>
                              <li><img src="./src/img/about-us/abtus-img-6.png" alt="img"></li>
                              <li><img src="./src/img/about-us/abtus-img-4.png" alt="img"></li>
                              <li><img src="./src/img/about-us/abtus-img-5.png" alt="img"></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End About us -->

   <!-- Start Counter Section -->
   <!-- <section id="mu-counter">
      <div class="mu-counter-overlay">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="mu-counter-area">
                     <ul class="mu-counter-nav">
                        <li class="col-md-3 col-sm-3 col-xs-12">
                           <div class="mu-single-counter">
                              <span>Fresh</span>
                              <h3><span class="counter">55</span><sup>+</sup></h3>
                              <p>Breakfast Items</p>
                           </div>
                        </li>
                        <li class="col-md-3 col-sm-3 col-xs-12">
                           <div class="mu-single-counter">
                              <span>Delicious</span>
                              <h3><span class="counter">130</span><sup>+</sup></h3>
                              <p>Lunch Items</p>
                           </div>
                        </li>
                        <li class="col-md-3 col-sm-3 col-xs-12">
                           <div class="mu-single-counter">
                              <span>Hot</span>
                              <h3><span class="counter">35</span><sup>+</sup></h3>
                              <p>Coffee Items</p>
                           </div>
                        </li>
                        <li class="col-md-3 col-sm-3 col-xs-12">
                           <div class="mu-single-counter">
                              <span>Satisfied</span>
                              <h3><span class="counter">3562</span><sup>+</sup></h3>
                              <p>Customers</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Counter Section -->

   <!-- Start Restaurant Menu -->
   <section id="mu-restaurant-menu">
      <div class="mu-restaurant-menu-overlay">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="mu-restaurant-menu-area">
                     <div class="mu-title">
                        <!-- <span class="mu-subtitle">Discover</span> -->
                        <h2>INFORMATIVOS</h2>
                        <!-- <i class="fa fa-spoon"></i> -->
                        <figure class="fa icon-cross"><img src="./src/img/cross-dark.svg" alt=""></figure>
                        <span class="mu-title-bar"></span>
                     </div>
                     <div class="mu-restaurant-menu-content">
                        <ul class="nav nav-tabs mu-restaurant-menu">
                           <li class="active"><a href="#breakfast" data-toggle="tab">Programação</a></li>
                           <!-- <li><a href="#meals" data-toggle="tab">Eventos</a></li> -->
                           <li><a href="#snacks" data-toggle="tab">Projetos</a></li>
                           <li><a href="#desserts" data-toggle="tab">Sociedades Interna</a></li>
                           <!-- <li><a href="#drinks" data-toggle="tab">Drinks</a></li> -->
                        </ul>
   
                        <!-- Tab panes -->
                        <div class="tab-content">
                           <div class="tab-pane fade in active" id="breakfast">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-right">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="tab-pane fade " id="meals">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-right">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div> -->
                           <div class="tab-pane fade " id="snacks">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-right">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade " id="desserts">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-right">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade " id="drinks">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-right">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ENGLISH BREAKFAST</h4>
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere nulla aliquid praesentium dolorem commodi illo.</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Restaurant Menu -->

   <!-- Start Reservation section -->
   <!-- <section id="mu-reservation">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-reservation-area">
                  <div class="mu-title">
                     <span class="mu-subtitle">Make A</span>
                     <h2>Reservation</h2>
                     <i class="fa fa-spoon"></i>
                     <span class="mu-title-bar"></span>
                  </div>
                  <div class="mu-reservation-content">
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quidem autem iusto, perspiciatis, amet, quaerat blanditiis ducimus eius recusandae nisi aut totam alias consectetur et.</p>
                     <form class="mu-reservation-form">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Full Name">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="email" class="form-control" placeholder="Email">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Phone Number">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <select class="form-control">
                                    <option value="0">How Many?</option>
                                    <option value="1 Person">1 Person</option>
                                    <option value="2 People">2 People</option>
                                    <option value="3 People">3 People</option>
                                    <option value="4 People">4 People</option>
                                    <option value="5 People">5 People</option>
                                    <option value="6 People">6 People</option>
                                    <option value="7 People">7 People</option>
                                    <option value="8 People">8 People</option>
                                    <option value="9 People">9 People</option>
                                    <option value="10 People">10 People</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" id="datepicker" placeholder="Date">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" placeholder="Phone No">
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <textarea class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                              </div>
                           </div>
                           <button type="submit" class="mu-readmore-btn">Make Reservation</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Reservation section -->

   <!-- Start Gallery -->
   <section id="mu-gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-gallery-area">
                  <div class="mu-title">
                     <!-- <span class="mu-subtitle">Discover</span> -->
                     <h2>FOTOS</h2>
                     <figure class="fa icon-cross"><img src="./src/img/cross-light.svg" alt=""></figure>
                     <span class="mu-title-bar"></span>
                  </div>
                  <div class="mu-gallery-content">
                     <div class="mu-gallery-top">
                        <!-- Start gallery menu -->
                        <ul>
                           <!-- <li class="filter active" data-filter="all">ALL</li> -->
                           <li class="filter active" data-filter=".igreja">IGREJA</li>
                           <li class="filter" data-filter=".drink">EBD</li>
                           <li class="filter" data-filter=".dinner">ENCONTROS</li>
                           <li class="filter" data-filter=".dessert">EVANGELISMO</li>
                           <li class="filter" data-filter=".restaurant">EBF</li>
                        </ul>
                     </div>
                     <!-- Start gallery image -->
                     <div class="mu-gallery-body" id="mixit-container">
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix igreja">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/1.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/1.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix drink">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/2.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/2.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix restaurant">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/3.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/3.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix dinner">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/4.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/4.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix dinner">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/5.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/5.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix igreja">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/6.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/6.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix drink">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/7.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/7.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix restaurant">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/8.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/8.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                        <!-- start single gallery image -->
                        <div class="mu-single-gallery col-md-4 mix dessert">
                           <div class="mu-single-gallery-item">
                              <figure class="mu-single-gallery-img">
                                 <a href="#"><img alt="img" src="./src/img/gallery/small/9.jpg"></a>
                              </figure>
                              <div class="mu-single-gallery-info">
                                 <a href="./src/img/gallery/big/9.jpg" data-fancybox-group="gallery" class="fancybox">
                                    <img src="./src/img/plus.png" alt="plus icon img">
                                 </a>
                              </div>
                           </div>
                        </div>
                        <!-- End single gallery image -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Gallery -->

   <!-- Start Client Testimonial section -->
   <!-- <section id="mu-client-testimonial">
      <div class="mu-overlay">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="mu-client-testimonial-area">
                     <div class="mu-title">
                        <span class="mu-subtitle">Testimonials</span>
                        <h2>What Customers Say</h2>
                        <i class="fa fa-spoon"></i>
                        <span class="mu-title-bar"></span>
                     </div> -->
   <!-- testimonial content -->
   <!-- <div class="mu-testimonial-content"> -->
   <!-- testimonial slider -->
   <!-- <ul class="mu-testimonial-slider">
                           <li>
                              <div class="mu-testimonial-single">
                                 <div class="mu-testimonial-info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                 </div>
                                 <div class="mu-testimonial-bio">
                                    <p>- David Muller</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="mu-testimonial-single">
                                 <div class="mu-testimonial-info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                 </div>
                                 <div class="mu-testimonial-bio">
                                    <p>- David Muller</p>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="mu-testimonial-single">
                                 <div class="mu-testimonial-info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum nesciunt fuga ab natus, dolorem?</p>
                                 </div>
                                 <div class="mu-testimonial-bio">
                                    <p>- David Muller</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Client Testimonial section -->

   <!-- Start Subscription section -->
   <!-- <section id="mu-subscription">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-subscription-area">
                  <form class="mu-subscription-form">
                     <input type="text" placeholder="Type Your Email Address">
                     <button class="mu-readmore-btn" type="Submit">SUBSCRIBE</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Subscription section -->

   <!-- Start Chef Section -->
   <!-- <section id="mu-chef">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-chef-area">
                  <div class="mu-title">
                     <span class="mu-subtitle">Our Professionals</span>
                     <h2>MASTER CHEFS</h2>
                     <i class="fa fa-spoon"></i>
                     <span class="mu-title-bar"></span>
                  </div>
                  <div class="mu-chef-content">
                     <ul class="mu-chef-nav">
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-6.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Simon Jonson</h4>
                                 <span>Head Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-2.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Kelly Wenzel</h4>
                                 <span>Pizza Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-3.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Greg Hong</h4>
                                 <span>Grill Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-5.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Marty Fukuda</h4>
                                 <span>Burger Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-6.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Simon Jonson</h4>
                                 <span>Head Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-2.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Kelly Wenzel</h4>
                                 <span>Pizza Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-3.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Greg Hong</h4>
                                 <span>Grill Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                        <li>
                           <div class="mu-single-chef">
                              <figure class="mu-single-chef-img">
                                 <img src="./src/img/chef/chef-5.jpg" alt="chef img">
                              </figure>
                              <div class="mu-single-chef-info">
                                 <h4>Marty Fukuda</h4>
                                 <span>Burger Chef</span>
                              </div>
                              <div class="mu-single-chef-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Chef Section -->

   <!-- Start Latest News -->
   <!-- <section id="mu-latest-news">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-latest-news-area">
                  <div class="mu-title">
                     <span class="mu-subtitle">Latest News</span>
                     <h2>FROM OUR BLOG</h2>
                     <i class="fa fa-spoon"></i>
                     <span class="mu-title-bar"></span>
                  </div>
                  <div class="mu-latest-news-content">
                     <div class="row"> -->
                        <!-- start single blog -->
                        <!-- <div class="col-md-6">
                           <article class="mu-news-single">
                              <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h3>
                              <figure class="mu-news-img">
                                 <a href="#"><img src="./src/img/news/1.jpg" alt="img"></a>
                              </figure>
                              <div class="mu-news-single-content">
                                 <ul class="mu-meta-nav">
                                    <li>By Admin</li>
                                    <li>Date: May 10 2016</li>
                                 </ul>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                 <div class="mu-news-single-bottom">
                                    <a href="blog-single.html" class="mu-readmore-btn">Read More</a>
                                 </div>
                              </div>
                           </article>
                        </div> -->
                        <!-- start single blog -->
                        <!-- <div class="col-md-6">
                           <article class="mu-news-single">
                              <h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, distinctio!</a></h3>
                              <figure class="mu-news-img">
                                 <a href="#"><img src="./src/img/news/2.jpg" alt="img"></a>
                              </figure>
                              <div class="mu-news-single-content">
                                 <ul class="mu-meta-nav">
                                    <li>By Admin</li>
                                    <li>Date: May 10 2016</li>
                                 </ul>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio est quaerat magnam exercitationem voluptas, voluptatem sed quam ab laborum voluptatum tempore dolores itaque, molestias vitae.</p>
                                 <div class="mu-news-single-bottom">
                                    <a href="blog-single.html" class="mu-readmore-btn">Read More</a>
                                 </div>
                              </div>
                           </article>
                        </div>
                     </div> -->
                     <!-- Start brows more btn -->
                     <!-- <a href="blog-archive.html" class="mu-browsmore-btn">BROWS MORE</a> -->
                     <!-- End brows more btn -->
                  <!-- </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Latest News -->

   <!-- Start Contact section -->
   <section id="mu-contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-contact-area">
                  <div class="mu-title">
                     <!-- <span class="mu-subtitle">Get In Touch</span> -->
                     <h2>CONTATE-NOS</h2>
                     <i class="fa fa-spoon"></i>
                     <span class="mu-title-bar"></span>
                  </div>
                  <div class="mu-contact-content">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="mu-contact-left">
                              <form class="mu-contact-form">
                                 <div class="form-group">
                                    <label for="name">Seu nome</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nome">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                                 </div>
                                 <div class="form-group">
                                    <label for="subject">Assunto</label>
                                    <input type="text" class="form-control" id="subject" placeholder="Assunto">
                                 </div>
                                 <div class="form-group">
                                    <label for="message">Mensagem</label>
                                    <textarea class="form-control" id="message" cols="30" rows="10" placeholder="Digite a sua mensagem"></textarea>
                                 </div>
                                 <button type="submit" class="mu-send-btn">Enviar Mensagem</button>
                              </form>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="mu-contact-right">
                              <div class="mu-contact-widget">
                                 <h3>Nosso Endereço</h3>
                                 <p>Av. Euríco Viana, 90-144 - Parque das Flores, Goiânia - GO, 74593-590</p>
                                 <address>
                                    <p><i class="fa fa-phone"></i>(62) 3210-8400</p>
                                    <p><i class="fa fa-envelope-o"></i>ipbalneario@gmail.com</p>
                                    <p><i class="fa fa-map-marker"></i>-16.62521, -49.28443</p>
                                 </address>
                              </div>
                              <!-- <div class="mu-contact-widget">
                                 <h3>Open Hours</h3>
                                 <address>
                                    <p><span>Monday - Friday</span> 9.00 am to 12 pm</p>
                                    <p><span>Saturday</span> 9.00 am to 10 pm</p>
                                    <p><span>Sunday</span> 10.00 am to 12 pm</p>
                                 </address>
                              </div> -->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact section -->

   <!-- Start Map section -->
   <section id="mu-map">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9207.358598888495!2d-85.64847801496286!3d30.183918972289003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x2320479d70eb6202!2sDillard&#39;s!5e0!3m2!1sbn!2sbd!4v1462359735720" width="100%" height="100%" frameborder="0" allowfullscreen></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3823.026240852137!2d-49.286303046608026!3d-16.62545215742017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef49fd4f69dd5%3A0xdc887dec9bbcf4f1!2sIgreja%20Presbiteriana%20Balne%C3%A1rio%20Meia%20Ponte!5e0!3m2!1spt-BR!2sbr!4v1743737439635!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
   </section>
   <!-- End Map section -->

   <!-- Start Footer -->
   <footer id="mu-footer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-footer-area">
                  <div class="mu-footer-social">
                     <a href="#"><span class="fa fa-facebook"></span></a>
                     <a href="#"><span class="fa fa-twitter"></span></a>
                     <a href="#"><span class="fa fa-google-plus"></span></a>
                     <a href="#"><span class="fa fa-linkedin"></span></a>
                     <a href="#"><span class="fa fa-youtube"></span></a>
                  </div>
                  <div class="mu-footer-copyright">
                     <p>Designed by <a rel="nofollow" href="#">Alexandre Damaso</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- End Footer -->

   <!-- jQuery library -->
   <script src="./src/js/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="./src/js/bootstrap.js"></script>
   <!-- Slick slider -->
   <script type="text/javascript" src="./src/js/slick.js"></script>
   <!-- Counter -->
   <script type="text/javascript" src="./src/js/waypoints.js"></script>
   <script type="text/javascript" src="./src/js/jquery.counterup.js"></script>
   <!-- Date Picker -->
   <script type="text/javascript" src="./src/js/bootstrap-datepicker.js"></script>
   <!-- Mixit slider -->
   <script type="text/javascript" src="./src/js/jquery.mixitup.js"></script>
   <!-- Add fancyBox -->
   <script type="text/javascript" src="./src/js/jquery.fancybox.pack.js"></script>

   <!-- Custom js -->
   <script src="./src/js/custom.js"></script>

</body>

</html>