@extends('layouts.default')
@section('content')
<div class="text-center gradient-blue">
   <h2 data-aos="fade-up"
      data-aos-easing="linear"
      data-aos-duration="1500" class="home-subtitle">
      Bem vindo a sua Agência Digital
   </h2>
   <p data-aos="fade-up"
      data-aos-easing="linear"
      data-aos-duration="1500" class="home-text">
      Aqui podemos tirar do papel o projeto da sua empresa e tranforma-lo em um sistema que lhe atenda com alta performace.
   </p>
   <div class="container-fluid  area-default">
      <div class="row">
         <div class="col-md-3 col-sm-12 home-area" style="z-index: 10">
            <img data-aos="fade-down-right" data-aos-duration="2000" alt="desenvolvimento de app" class="tablet-home-area  d-none d-md-block" src="../public/img/tablet.png">
         </div>
         <div class="col-md-3 col-sm-12 home-area">
            <img data-aos="fade-down-left"   data-aos-duration="2000" alt="desenvolvimento de aplicativo celular" class="screen-home-area  d-none d-md-block" src="../public/img/1-tela.png">
         </div>
         <div class="col-md-3 col-sm-12 home-area">
            <img data-aos="zoom-in-down" data-aos-duration="2000" alt="desenvolvimento de aplicativo web" class="laptop-home-area d-none d-md-block" src="../public/img/note-side.png">
         </div>
         <div class="col-md-3 col-sm-12 home-area">
            <img data-aos="fade-down-left"   data-aos-duration="2000" alt="desenvolvimento de app" class="cell-home-area  d-none d-md-block" src="../public/img/cell-side.png">
         </div>
         <div class="col-sm-12 home-area text-center">
            <img data-aos="zoom-in-down"   data-aos-duration="2000" alt="desenvolvimento de mobile app" class="all-home-area d-sm-block d-md-none" src="../public/img/2-tela.png">
         </div>
      </div>
   </div>
</div>

<div class="container" data-aos="fade-down"
   data-aos-easing="linear"
   data-aos-duration="1500">
   <h1 class="title text-center mt-5">
      O que fazemos
   </h1>
   <a href="/servicos">
   <div class="row">
      <div data-aos="fade-down" data-aos-duration="1000" class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/mobile.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  Mobile
               </h3>
               <p>
                  Nós criamos aplicativos mobile que suportam e aprimoram o seu negócio.
               </p>
            </div>
         </div>
      </div>
      <div data-aos="fade-down" data-aos-duration="2000" class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/pc.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  Aplicação Web
               </h3>
               <p>
                  Nós criamos aplicativos Web para que você resolva problemas dentro da sua empresa.
               </p>
            </div>
         </div>
      </div>
      <div data-aos="fade-down" data-aos-duration="3000" class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/people.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  Experiência do Usuário
               </h3>
               <p>
                  Fazemos a ponte entre pessoas e produtos com nossa experiência em design de User Experience.
               </p>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
      <div data-aos="fade-down" data-aos-duration="1000" class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/www.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  Templates
               </h3>
               <p>
                  Templates de sites para você que não quer gastar muito mas quer uma identidade visual.
               </p>
            </div>
         </div>
      </div>
      <div data-aos="fade-down" data-aos-duration="2000" class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/eco.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  E-commerce
               </h3>
               <p>
                  Criação de plataformas e recursos de E-commerce para ajudar a expandir seus negócios on-line.
               </p>
            </div>
         </div>
      </div>
      <div data-aos="fade-down" data-aos-duration="3000" class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/increase.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  SEO
               </h3>
               <p>
                  Nossa equipe de SEO fornece serviços acessíveis e de alta qualidade para o seu site.
               </p>
            </div>
         </div>
      </div>
   </div>
   </a>
</div>
<br>
<div class="skewed" id="wrapper">
   <div class="layer bottom">
      <div class="content-wrap">
         <div class="content-body-left">
            <h1>Não espere a Inovação</h1>
         </div>
         <img src="../public/img/light-off.png" alt="mask negative">
         <div class="content-body-left">
         </div>
      </div>
   </div>
   <div class="layer top">
      <div class="content-wrap">
         <div class="content-body">
            <h1>Seja a Inovação</h1>
         </div>
         <img src="../public/img/light.png" alt="mask">
         <div class="content-body-right d-none d-lg-block">
            <a class="button-slider" href="/contatos">Faça seu orçamento</a>
         </div>
      </div>
   </div>
   <div class="handle"></div>
</div>
<div class="container text-center">
   <h1 class="title">Processos Simples</h1>
   <div class="row home-arrow">
      <div class="col-md-4 col-sm-12 home-shadow">
         <div class="home-icon-area">
            <div class="pic">
                <img src="../public/img/icons/increase.png">
            </div>
            <h3 class="titles">Conectar</h3>
            <p class="description">
                Nossa empresa ajuda você a se conectar com seu público de maneira empolgante e envolvente. Nós nos concentramos em seu sucesso, definindo suas necessidades e alcançando seus objetivos.
            </p>
         </div>
      </div>
            <div class="col-md-4 col-sm-12 home-shadow">
         <div class="home-icon-area">
            <div class="pic">
                <img src="../public/img/icons/increase.png">
            </div>
            <h3 class="titles">Criar</h3>
            <p class="description">
               Nossa equipe colabora para desenvolver as melhores estratégias e soluções inspiradas para sua marca.
               Nós alavancamos tecnologia à medida que criamos grandes experiências. Assim como toda marca é única, toda iniciativa digital precisa ser uma abordagem personalizada.
            </p>
         </div>
      </div>
            <div class="col-md-4 col-sm-12 home-shadow">
         <div class="home-icon-area">
            <div class="pic">
                <img src="../public/img/icons/increase.png">
            </div>
            <h3 class="titles">Evoluir</h3>
            <p class="description">
               O que importa para nós não é apenas o que fizemos no passado, mas o que faremos a seguir. Acreditamos em olhar para o futuro com nossos clientes.
               Nossa empresa cria designs de sites atraentes e intuitivos para estabelecer sua presença on-line. Nós descobrimos que marcas são como pessoas; eles precisam respirar, crescer e evoluir.
            </p>
         </div>
      </div>
      </div>
   </div>
  <section class="lead">
    <div class="container-fluid">
      <div class="row justify-content-md-center">
         <div class="col-md-6 col-sm-12 text-md-left">
               <h2>
                  Inovação dentro da sua empresa!
               </h2>
               <p>
                  Se você é uma pessoa interessada em INOVAR sua empresa e escalar seus negócios ainda mais, deixe seu contato conosco para saber mais sobre a gente!  
               </p>
         </div>
         <div class="col-md-3 col-sm-12 text-center lead_form">
         <form method="POST" action="{{ route('add_email') }}">
            @csrf
               <input class="lead_form_in" type="email" name="email" placeholder="Adicione seu e-mail" required>
         </div>
         <div class="col-md-1 col-sm-12 text-center lead_form">
            <button type="submit" id="submit" name="submit" value="Enviar" class="btn btn-lead">Quero entrar!</button>
         </div>
         </form>
      </div>
    </div>
  </section>
</div>
@stop

