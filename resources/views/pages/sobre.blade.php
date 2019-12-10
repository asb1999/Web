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
   Crescer além dos limites
   </h2>
   <p class="head-subtitle">A Go Tech fornece soluções de software que realmente funcionam para os clientes, tornando seus negócios mais fáceis e lucrativos. Nossos valores nos ajudam a fornecer os melhores serviços no mercado.</p>
</div>
<div class="container text-center" style="margin-top: 100px;">
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12" >
         <img src="../public/img/valor.png" class="about-img">
      </div>
      <div class="col-sm-12 col-lg-4 col-md-12 p-4 text-left about-area">
            <h2 class="mt0 services-subtitle">Valores</h2>
            <p class="services-text"><b>Crescimento:</b> Não só nascemos para crescer, mas também para fazer nossos clientes crescerem.</p>
            <p class="services-text"><b>Qualidade:</b> Acreditamos que são nos detalhes que se constrói algo excelente!
            </p>
         </div>
         <div class="col-sm-12 col-lg-4 col-md-12 p-4 text-left about-area-margin">
            <p class="services-text"><b>Transparência:</b> Assim como em uma relação entre duas pessoas, a relação entre empresas deve ser transparente, proporcionando confiança entre as partes.
            </p>
         </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12 d-md-block d-lg-none" >
         <img src="../public/img/mission.png" class="about-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left about-area">
         <h2 class="mt0 services-subtitle">Missão</h2>
         <p class="services-text">Desenvolver soluções TI para micro, pequenas e médias empresas com o propósito de alavancar a competitividade e lucratividade dessas organizações</p>
      </div>
      <div class="col-sm-12 col-lg-4 col-md-12 d-none d-lg-block" >
         <img src="../public/img/mission.png" class="about-img">
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-4 col-md-12" >
         <img src="../public/img/vision.png" class="about-img">
      </div>
      <div class="col-sm-12 col-lg-8 col-md-12 p-4 text-left about-area">
         <h2 class="mt0 services-subtitle">Visão</h2>
         <p class="services-text">Tornar nossos clientes mais competitivos em seus respectivos mercados</p>
      </div>
   </div>
   <div class="row">
      <div class="col-sm-12 col-lg-6 col-md-12 d-md-block d-lg-none" >
         <img src="../public/img/hills.png" class="about-img">
      </div>
      <div class="col-sm-12 col-lg-6 col-md-12 p-4 text-left about-area">
         <h2 class="mt0 services-subtitle">O que é GOtech</h2>
         <p class="services-text">A GOtech Desenvolvedora de Sistemas nasce em 2019, de uma ideia em
         comum de duas pessoas diferentes, um sócio formado em tecnologia da informação
         e outro sócio formado em administração, a ideia é tornar as ferramentas de TI
         acessíveis para empresas que não tem acesso a esses instrumentos. </p>
          <p class="services-text">Os
         sócios acreditam que estão iniciando uma mudança de mentalidade e percepção
         sobre o tema na cidade de São José dos Pinhais (cidade sede) e
         consequentemente no Paraná e no Brasil.</p>
      </div>
      <div class="col-sm-12 col-lg-6 col-md-12 d-none d-lg-block" >
         <img src="../public/img/hills.png" class="about-img">
      </div>
   </div>
</div>

   <div class="parallax-window about-faixa mt-5" data-jarallax='{"speed": 0.2}' style='background-color: #2895be;'>
      <div class='container'>
          <div class="row text-center">
              <div class="col-md-12">
                  <h3 class="text-center about-subtitle-wt">Como nós trabalhamos?</h3>
                  <p class="text-center about-text-wt">  
                  Nossos desenvolvedores seguem um fluxo de trabalho focado ao desenvolvimento ágil:
              </div>
               <div class="col go-tri">
                  <img class="go-icon" src="../public/img/icons/puzzle.png">
                  <div>
                  <h5 class="about-subtitle-faixa-wt">Pesquisa e Descoberta</h5>
                  <p class="about-text-faixa-wt">Preparamos o roteiro completo da aplicação</p>
                  </div>
               </div>
              <div class="col go-tri">
                  <img class="go-icon" src="../public/img/icons/user.png">
                  <div>
                  <h5 class="about-subtitle-faixa-wt">UX - Experiência do Usuário</h5>
                  <p class="about-text-faixa-wt">Discutimos as melhores experiências</p>
                  </div>
              </div>
              <div class="col go-tri">
                  <img class="go-icon" src="../public/img/icons/dev.png">
                  <div>
                  <h5 class="about-subtitle-faixa-wt">Fase de Desenvolvimento</h5>
                  <p class="about-text-faixa-wt">Código minimalista com arquitetura flexível</p>
                  </div>
              </div>
              <div class="col go-tri">
                  <img class="go-icon" src="../public/img/icons/search.png">
                  <div>
                  <h5 class="about-subtitle-faixa-wt">Fase de Validação</h5>
                  <p class="about-text-faixa-wt">Testamos os desempenhos do app</p>
                  </div>
              </div>
              <div class="col go-tri">
                  <img class="go-icon" src="../public/img/icons/refresh.png">
                  <div>
                  <h5 class="about-subtitle-faixa-wt">Hora da Interação</h5>
                  <p class="about-text-faixa-wt">Hora de tornar o aplicativo ainda melhor</p>
                  </div>
              </div>
          </div>
      </div>
   </div>
   <div class="container">
      <h1 class="about-main-subtitle text-center">
         Alguns diferenciais
      </h1>
      <div class="row">
         <div class="col-md-4 col-sm-12 go-about-skills skills-bottom text-center">
            <img class="go-icon-skills" src="../public/img/icons/partner.png">
            <h5 class="go-title-skills">Parceiros técnicos</h5>
            <p class="go-text-skills">Contamos com necessidades comerciais específicas de nossos clientes e as apoiamos durante todo o processo: desde uma ideia até sua implementação.</p>
         </div>
         <div class="col-md-4 col-sm-12 go-about-skills skills-bottom skills-sides text-center">
            <img class="go-icon-skills" src="../public/img/icons/searchdoc.png">
            <h5 class="go-title-skills">Transparência total</h5>
            <p class="go-text-skills">Utilizamos sistemas de gerenciamento de projetos, oferecendo aos nossos clientes a possibilidade de acompanhar o desenvolvimento on-line em tempo real 24/7</p>
         </div>
         <div class="col-md-4 col-sm-12 go-about-skills skills-bottom text-center">
            <img class="go-icon-skills" src="../public/img/icons/connect.png">
            <h5 class="go-title-skills">Comunicação fácil</h5>
            <p class="go-text-skills">O contato constante com os gerentes de projeto e a transparência total ajudam a resolver rapidamente problemas emergentes e a tomar decisões</p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 col-sm-12 go-about-skills text-center">
            <img class="go-icon-skills" src="../public/img/icons/scrum.png">
            <h5 class="go-title-skills">Metodologia ágil</h5>
            <p class="go-text-skills">Seguimos as melhores práticas e processos de gerenciamento de projetos, como a metodologia Agile, usando Scrum e Kanban, que nos permitem concluir projetos dentro do prazo e do orçamento</p>
         </div>
         <div class="col-md-4 col-sm-12 go-about-skills skills-sides text-center">
            <img class="go-icon-skills" src="../public/img/icons/certificate.png">
            <h5 class="go-title-skills">Seguro e de qualidade</h5>
            <p class="go-text-skills">Nossos desenvolvedores sênior e CTO sempre participam do processo de revisão de código, independentemente do tamanho do projeto, para garantir a qualidade do código</p>
         </div>
         <div class="col-md-4 col-sm-12 go-about-skills text-center">
            <img class="go-icon-skills" src="../public/img/icons/support.png">
            <h5 class="go-title-skills">Suporte pós-lançamento</h5>
            <p class="go-text-skills">Após a conclusão do projeto, ajudamos a desenvolvê-lo ainda mais e estamos sempre prontos para prestar assistência. Respondemos prontamente a qualquer pergunta e fornecemos suporte abrangente a nossos clientes</p>
         </div>
      </div>
   </div>

<script type="text/javascript" src="../public/js/jquery.mask.js"></script>
<script type="text/javascript">
   $('input[name="tel"]').mask('(00)00000-0000');
</script>
<script>
   $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@stop