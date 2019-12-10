@extends('layouts.sub-pages')
@section('content')
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
   <div class="container-fluid nav-topper">
      <a class="navbar-brand" href="/"><img class="BrandTech" src="../public/img/gotech.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
               <a class="nav-link MenuLetter" href="/">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link MenuLetter" href="/servicos">SERVIÇOS</a>
            </li>
            <li class="nav-item">
               <a class="nav-link MenuLetter" href="/sobre">SOBRE NÓS</a>
            </li>
            <li class="nav-item">
               <a class="nav-link MenuLetter" href="/contatos">CONTATOS</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!--Carousel Wrapper-->
<div class="d-none d-md-block parallax-window text-center device-block" data-parallax="scroll" data-image-src="../public/img/services2.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
   <h2 data-aos="fade-up"
      data-aos-easing="linear"
      data-aos-duration="1500" class="head-title uppercase">
      soluções móveis com tecnologia de ponta
   </h2>
   <p class="head-subtitle">Fazemos várias tecnologias funcionarem juntas para resolver seus problemas</p>
</div>

<div class="container text-center" style="margin-top: 100px;">
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12" >
         <img src="../public/img/cell.jpg" class="services-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left services-area">
         <h2 class="mt0 services-subtitle">Desenvolvimento Mobile</h2>
         <p class="services-text">Seja para empresas iniciantes ou para empresas bem estabelecidas, ajudamos empresas de todas as esferas a expandir seu alcance, levando seus aplicativos baseados na Web ou corporativos para uma plataforma móvel. Nossa equipe de designers profissionais e especialistas em UI trabalham em estreita colaboração com nossos clientes para projetar e desenvolver aplicativos que sejam intuitivos, atraentes e esteticamente atraentes. Definitivamente, você pode contar conosco para serviços de desenvolvimento de aplicativos móveis.</p>

      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 d-lg-none d-md-block" >
         <img src="../public/img/pc.jpg" class="services-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left services-area">
         <h2 class="mt0 services-subtitle">Aplicação Web</h2>
         <p class="services-text">Aplicativos personalizados que podem estar em servidores operados pelo cliente ou baseados na nuvem, com suporte para todos os principais sistemas operacionais e plataformas. Fale conosco para criar seu próprio aplicativo web.</p>
         <p>Capacitamos você com uma equipe técnica qualificada que pode ajudá-lo a identificar, desenvolver e implantar seu aplicativos para plataformas web em sua empresa podendo assim tornar seu plano em realidade.</p>
      </div>
      <div class="col-sm-12 col-lg-4 col-md-12 d-none d-lg-block" >
         <img src="../public/img/pc.jpg" class="services-img">
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12" >
         <img src="../public/img/seo.jpg" class="services-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left services-area">
         <h2 class="mt0 services-subtitle">SEO</h2>
         <p class="services-text">A otimização do mecanismo de pesquisa ou SEO ajuda a aumentar a visibilidade da classificação do seu site nas listagens de mecanismos de pesquisa com o objetivo de aparecer na 1ª página do Google. Em resumo, é o jogo entre o "pesquisador" e os "mecanismos de pesquisa". Sua empresa gira em torno dessas palavras-chave. Quando otimizado corretamente, o mecanismo de pesquisa começará a exibir seu site para seus clientes em potencial.</p>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 d-md-block d-lg-none" >
         <img src="../public/img/ux.jpg" class="services-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left services-area">
         <h2 class="mt0 services-subtitle">Experiencia do Usuário</h2>
         <p class="services-text">Nossa equipe de analistas e designers de interface do usuário trabalham com você para transformar idéias em histórias de usuários significativas. As disculções e alinhamentos são feitas através de várias técnicas para visualizar uma solução para a Web e dispositivos móveis para produzir um escopo do produto digital que ajuda a validar o conceito antes que ele esteja pronto para o desenvolvimento.</p>
      </div>
      <div class="col-sm-12 col-lg-4 col-md-12 d-none d-lg-block" >
         <img src="../public/img/ux.jpg" class="services-img">
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12" >
         <img src="../public/img/eco.jpg" class="services-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left services-area">
         <h2 class="mt0 services-subtitle">E-commerce</h2>
         <p class="services-text">Quando se trata de implementar as melhores soluções de comércio eletrônico para suas necessidades de negócios on-line, podemos oferecer designers e desenvolvedores web dedicados totalmente em sintonia com as últimas tendências de comércio eletrônico.</p>
         <p>Procurando criar designs de e-commerce compatíveis com dispositivos móveis com recursos robustos, como gerenciamento de conteúdo, gerenciamento de produtos, integração de marketing por email, fácil atendimento de pedidos e relatórios, não precisa mais procurar. Contate-nos hoje!</p>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 d-sm-block d-lg-none" >
         <img src="../public/img/templates.jpg" class="services-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left services-area">
         <h2 class="mt0 services-subtitle">Templates</h2>
         <p class="services-text">Esta proposta tem o intuito de baixar os custos altos do desenvolvimento de páginas Web e atender aos novos empreendedores que não podem gastar muito. Nossa equipe desenvolveu várias páginas Web pra sua empresa aproveitar e começar a expor seus produtos e serviços online. Entendemos que sua identidade virtual deve existir desde-os primeiros passos de sua empresa, sendo assim, os templates são produtos acessiveis para todas as empresas.  </p>
      </div>
      <div class="col-sm-12 col-lg-4 col-md-12 d-none d-lg-block" >
         <img src="../public/img/templates.jpg" class="services-img">
      </div>
   </div>
</div>
@stop