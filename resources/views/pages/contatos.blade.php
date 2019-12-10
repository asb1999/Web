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
      data-aos-duration="1500" class="head-title">
      ENTRE EM CONTATO
   </h2>

</div>
<div class="container text-center" style="margin-top: 100px;">
   <div class="row">
   </div>
   <div class="row text-center">
      <a href="mailto:contato@gotechconsultoria.com">
      <div class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/email-contato.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  Email
               </h3>
               <a href="mailto:contato@gotechconsultoria.com">
               contato@gotechconsultoria.com
               </a>
            </div>
         </div>
      </div>
      </a>
      <a href="tel:+5541987500708">
      <div class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/cell-contato.png" class="feature-icon-inner">
               </div>
            </div>
            <div>
               <h3>
                  Phone
               </h3>
               <a href="tel:+5541987500708">
               (41) 99666-3546
               </a>
            </div>
         </div>
      </div>
      </a>
      <a target="_blank" href="https://www.google.com.br/maps/place/R.+Sezinando+Martinato+da+Cruz,+288+-+Afonso+Pena,+São+José+dos+Pinhais">
      <div class="feature-col col-lg-4 col-xs-12">
         <div class="feat-conf card-block text-center">
            <div>
               <div class="feature-icon">
                  <img src="../public/img/icons/place-contato.png" class="feature-icon-inner">
               </div>
            </div>
            <h3>
               Endereço
            </h3>
            <a target="_blank" href="https://www.google.com.br/maps/place/R.+Sezinando+Martinato+da+Cruz,+288+-+Afonso+Pena,+São+José+dos+Pinhais">
            R. Sezinando Martinato da Cruz, 288 - Afonso Pena - SJP
            </a>
            <div>
            </div>
         </div>
      </div>
      </a>
   </div>
</div>
   <div class="container-fluid contato-chamado">
      <div class="row">
         <div class="col-md-6 col-sm-12 contato-suporte">
         </div>
         <div class="col-md-6 col-sm-12 contato-suporte-r text-center" >
            <div class="align-h">
               <h1>Suporte Técnico</h1>
               <a href="mailto:suporte@gotechconsultoria.com">suporte@gotechconsultoria.com</a>
            </div>
         </div>
      </div>
   </div>
<div class="container text-center">
   <div class="row form-design">
      <div class="col-md-12">
         @include('flash::message')
         <form method="POST" action="{{ route('send_contato') }}" class="contato-form">
              {{ csrf_field() }}
            <div class="row">
               <div class="col-md-12">
                  <h1 class="form-title">Conte-nos mais sobre seu projeto!</h1>
               </div>
               <div class="col-md-6">
                  <div class="form-group text-left">
                     <label for="name">Nome Completo</label>
                     <input type="text" class="form-control" id="name" name="name" required="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="form-group text-left">
                     <label for="tel">Telefone</label>
                     <input type="text" class="form-control" id="tel" name="tel" required="">
                  </div>
               </div>
            </div>
            <div class="form-group text-left">
               <label for="email">Email</label>
               <input type="email" class="form-control" id="email" name="email" required="">
            </div>
            <div class="form-group text-left">
               <label for="message">Mensagem</label>
               <textarea cols="30" rows="10" class="form-control" id="message" name="message" required=""  maxlength="255" placeholder="*Máximo de 255 caracteres*"></textarea>
            </div>
            <div class="form-group">
               <input type="submit" class="btn button-slider" id="submit" name="submit" value="Enviar">
            </div>
         </form>
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