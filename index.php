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
   <!-- <link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'> -->
   <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->
   <!-- <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'> -->


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
                  <li><a href="#mu-informes">INFORMES</a></li>
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
                  <span class="mu-slider-small-title">Seja bem-vindo</span>
                  <h2 class="mu-slider-title">Igreja Presbiteriana</h2>
                  <h2 class="mu-slider-title">Balneário Meia Ponte</h2>
                  <p>Lorem ipsum dolor sit amet. intameItaque voluptatem accusamus non quidem, deleniti optio.</p>
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
                           <p>A Igreja Presbiteriana do Brasil é uma igreja protestante, reformada e de orientação calvinista presbiteriana, ou seja, é governada por um conselho de homens escolhidos pela comunidade dos membros, chamados de “presbíteros”.</p>
                           <p>Os presbiterianos crêem que uma teologia correta, equilibrada e bíblica é essencial para a vida do cristão. Todo crente, mesmo sem o saber, tem concepções teológicas e essas concepções irão influenciar todos os aspectos da sua vida cristã. Os reformados não valorizam a teologia pela teologia, mas como um instrumento para nos proporcionar um melhor conhecimento de Deus e do nosso relacionamento com ele.</p>
                           <p>A fé reformada abraça três categorias de doutrinas:</p>
                           <ul>
                              <li>algumas delas são aceitas por todos os cristãos, como a trindade, o caráter divino-humano de Jesus Cristo, a sua ressurreição, sua morte expiatória, a segunda vinda, etc. – essencialmente, as verdades afirmadas pelos grandes concílios da igreja antiga, nos séculos IV e V;</li>
                              <li>outras doutrinas são as que temos em comum com as demais igrejas protestantes ou evangélicas: as Escrituras como única regra de fé e prática, a suficiência da obra redentora de Cristo, a salvação exclusivamente pela graça mediante a fé, o sacerdócio universal dos crentes, os sacramentos do batismo e da santa ceia, etc.;</li>
                              <li>finalmente, existem aquelas doutrinas e práticas mais específicas dos presbiterianos, como a ênfase na absoluta soberania de Deus, a conseqüente crença na eleição ou predestinação, o batismo por “aspersão” e o batismo infantil, e a forma de governo presbiterial.</li>
                           </ul>
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
   <section id="mu-informes">
      <div class="mu-informes-overlay">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="mu-informes-area">
                     <div class="mu-title">
                        <!-- <span class="mu-subtitle">Discover</span> -->
                        <h2>INFORMES</h2>
                        <!-- <i class="fa fa-spoon"></i> -->
                        <figure class="fa icon-cross"><img src="./src/img/cross-dark.svg" alt=""></figure>
                        <span class="mu-title-bar"></span>
                     </div>
                     <div class="mu-informes-content">
                        <ul class="nav nav-tabs mu-informes">
                           <li class="active"><a href="#programacao" data-toggle="tab">Programação</a></li>
                           <!-- <li><a href="#meals" data-toggle="tab">Eventos</a></li> -->
                           <li><a href="#snacks" data-toggle="tab">Notícias</a></li>
                           <li><a href="#sociedades" data-toggle="tab">Sociedades Interna</a></li>
                           <li><a href="#calendario" data-toggle="tab">Calendário Oficial 2025</a></li>
                        </ul>
   
                        <!-- Tab panes -->
                        <div class="tab-content">
                           <div class="tab-pane fade in active" id="programacao">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-1.jpg" alt="img">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">TERÇA-FEIRA</h4>
                                                      <p>Visita Pastoral e do Ministério de Visitação</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">QUARTA-FEIRA</h4>
                                                      <p><span>20:00h</span> - Estudo Bíblico</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">SEXTA-FEIRA</h4>
                                                      <p><span>20:00h</span> - Reunião de oração</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">SÁBADO</h4>
                                                      <p><span>19:30h</span> - Reunião de Jovens/Adolescentes</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/menu/item-2.jpg" alt="img">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">DOMINGO</h4>
                                                      <p><span>09:00h</span> - Escola Bíblica Dominical</p>
                                                      <p><span>19:00h</span> - Culto de Louvor e Adoração</p>
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
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <!-- <a href="#">
                                                      </a> -->
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ESCOLA BÍBLICA DOMINICAL</h4>
                                                      <p>A Escola Bíblica Dominical (EBD) da Igreja Presbiteriana do Brasil (IPB) tem como objetivo evangelizar, amadurecer a vida cristã e preparar os cristãos para o serviço de Deus. <br/>Todos os <strong>domingos</strong> às <strong>09h</strong>.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <!-- <li>
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
                                             </li> -->
                                             <!-- <li>
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
                                             </li> -->
                                          </ul>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-right">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="https://www.youtube.com/@canalverdadeevida" target="_blank">
                                                         <img class="media-object" src="./src/img/menu/item-02.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">PROGRAMA VERDADE E VIDA</h4>
                                                      <p>Verdade e Vida é um programa da Igreja Presbiteriana do Brasil e tem a missão de adorar a Deus e propagar o Evangelho do nosso Senhor e Salvador Jesus Cristo de forma autêntica e fiel às Escrituras Sagradas. Todos os <strong>sábados</strong>, às <strong>08h</strong>, no canal Verdade e Vida no Youtube. Para acessar <strong>clique na imagem</strong>.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <!-- <li>
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
                                             </li> -->
                                             <!-- <li>
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
                                             </li> -->
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade " id="sociedades">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/sociedades/logo_uph.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">União Presbiteriana de Homens</h4>
                                                      <p><strong>UPH</strong> - União Presbiteriana de Homens tem o objetivo de estimular a comunhão, vida devocional, aprendizados e fortalecer sua atuação na vida mais ampla da Igreja local, contribuindo para o fortalecimento da comunidade. “Confiança em Jesus, entusiasmo na ação, união fraternal.”</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/sociedades/logo_saf.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">Sociedades Auxiliadoras Femininas da IPB</h4>
                                                      <p><strong>SAF</strong> - Sociedade Auxiliadora Feminina é o trabalho feminino que tem por objetivo auxiliar cada igreja, cada congregação, consciente de seu papel de mulher como parte do Corpo de Cristo. “Sejamos verdadeiras auxiliadoras, irrepreensíveis na conduta, incansáveis na luta, firmes na fé e vitoriosas por Cristo Jesus.”</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/sociedades/logo_ump.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">União de Mocidade Presbiteriana</h4>
                                                      <p><strong>UMP</strong> - União de Mocidade Presbiteriana é uma das Sociedades Internas da IPB que abrange jovens entre 18 e 35 anos com o objetivo de atuar no planejamento de atividades e cuidado com os jovens de cada igreja local e entre diferentes igrejas no país. “Alegres na esperança, fortes na fé, dedicados no amor, unidos no trabalho.”</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/sociedades/logo_upa.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">União Presbiteriana de Adolescentes</h4>
                                                      <p><strong>UPA</strong> - União Presbiteriana de Adolescentes engloba adolescentes de 12 a 18 anos e tem por objetivo a organização de atividades que promovam comunhão, crescimento espiritual, além de fortalecer sua identidade em Cristo. “Ao Mestre sejamos fiéis, nas trevas sejamos luz, nas lutas sejamos fortes, servindo ao Senhor Jesus”.</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <div class="media-left">
                                                      <a href="#">
                                                         <img class="media-object" src="./src/img/sociedades/logo_ucp.jpg" alt="img">
                                                      </a>
                                                   </div>
                                                   <div class="media-body">
                                                      <h4 class="media-heading">União de Crianças Presbiterianas</h4>
                                                      <p><strong>UCP</strong> - União de Crianças Presbiterianas, é uma sociedade Interna da IPB que tem a finalidade de unir as crianças de 6 a 11 anos da Igreja proporcionando os meios adequados para que elas cresçam espiritualmente, moralmente, intelectualmente e socialmente. “Batalhando por Cristo, lutando com amor, sou um soldado de nosso Senhor.”</p>
                                                   </div>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade " id="calendario">
                              <div class="mu-tab-content-area">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="mu-tab-content-left">
                                          <ul class="mu-menu-item-nav">
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">JANEIRO</h4>
                                                      <p>05 a 11 – Semana Mundial de Oração (1° domingo do mês a sábado)</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">FEVEREIRO</h4>
                                                      <p>1º domingo - Dia do Homem Presbiteriano</p>
                                                      <p>2º domingo - Dia da Mulher Presbiteriana</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">MARÇO</h4>
                                                      <p>10 - Primeiro Culto Protestante no Brasil</p>
                                                      <p>11 - Dia da Educação Cristã</p>
                                                      <p>27 - Dia da Casa Editora Presbiteriana</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">ABRIL</h4>
                                                      <p>18 - Dia da Paixão de Cristo</p>
                                                      <p>20 - Páscoa</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">MAIO</h4>
                                                      <p>1º domingo - Dia do Músico Presbiteriano</p>
                                                      <p>2º domingo - Dia das Mães</p>
                                                      <p>3º domingo - Dia do Jovem Presbiteriano</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">JUNHO</h4>
                                                      <p>10 - Instalada a Sociedade Bíblica do Brasil</p>
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
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">JULHO</h4>
                                                      <p>01 a 31 - Mês dos Pastores Jubilados e Viúvas de Pastores</p>
                                                      <p>09 - Dia do Diácono Presbiteriano</p>
                                                      <p>4º domingo - Dia do Adolescente Presbiteriano</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">AGOSTO</h4>
                                                      <p>02 - Dia do Doador de Sangue Presbiteriano</p>
                                                      <p>1º domingo - Dia do Presbítero Presbiteriano</p>
                                                      <p>2º domingo - Dia dos Pais</p>
                                                      <p>12 - Dia do Presbiterianismo Nacional e Dia das Missões</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">SETEMBRO</h4>
                                                      <p>Mês de aniversário do Jornal Brasil Presbiteriano</p>
                                                      <p>08 - Dia dos Seminários e Seminaristas</p>
                                                      <p>3º domingo - Dia da Escola Dominical</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">OUTUBRO</h4>
                                                      <p>11 - Dia da SAF em Revista</p>
                                                      <p>12 - Dia das Crianças e Dia Nacional das Crianças Presbiterianas</p>
                                                      <p>31 - Dia da Reforma Protestante</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">NOVEMBRO</h4>
                                                      <p>05 - Circula pela primeira vez o Imprensa Evangélica</p>
                                                      <p>11 - Dia Nacional da SAF</p>
                                                      <p>4ª quinta-feira - Dia Nacional de Ação de Graças</p>
                                                      <p>30 - Dia do Teólogo</p>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="media">
                                                   <!-- <div class="media-left">
                                                         <img class="media-object" src="./src/img/menu/item-01.jpg" alt="img">
                                                      <a href="#">
                                                      </a>
                                                   </div> -->
                                                   <div class="media-body">
                                                      <h4 class="media-heading">DEZEMBRO</h4>
                                                      <p>08 - Dia Nacional da Família</p>
                                                      <p>2º domingo - Dia da Bíblia e Dia da Esposa do Pastor Presbiteriano</p>
                                                      <p>17 - Dia do Pastor Presbiteriano</p>
                                                      <p>25 - Natal</p>
                                                      <p>31 - Ano Novo</p>
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
                           <li class="filter active" data-filter=".igreja">A IGREJA</li>
                           <li class="filter" data-filter=".encontros">ENCONTROS</li>
                           <li class="filter" data-filter=".dessert">EVANGELISMO</li>
                           <li class="filter" data-filter=".restaurant">E.B.F.</li>
                           <!-- <li class="filter" data-filter=".drink">E.BD</li> -->
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
                        <div class="mu-single-gallery col-md-4 mix igreja">
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
                        <div class="mu-single-gallery col-md-4 mix igreja">
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
                        <div class="mu-single-gallery col-md-4 mix igreja">
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
                        <div class="mu-single-gallery col-md-4 mix igreja">
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
                        <div class="mu-single-gallery col-md-4 mix encontros">
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
   <!-- <section id="mu-contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="mu-contact-area">
                  <div class="mu-title">
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
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!-- End Contact section -->

   <!-- Start Map section -->
   <section id="mu-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.910115860897!2d-49.28705722509626!3d-16.62545578413758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef49fd4f69dd5%3A0xdc887dec9bbcf4f1!2sIgreja%20Presbiteriana%20Balne%C3%A1rio%20Meia%20Ponte!5e1!3m2!1spt-BR!2sbr!4v1744120548751!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      
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
                     <a href="#"><span class="fa fa-instagram"></span></a>
                     <a href="https://www.youtube.com/@ipbmp" target="_blank"><span class="fa fa-youtube"></span></a>
                  </div>
                  <div class="mu-footer-copyright">
                     <p>Desenvolvido por Alexandre Damaso</p>
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