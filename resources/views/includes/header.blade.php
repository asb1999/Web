<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
   <div class="container-fluid nav-topper">
      <a class="navbar-brand" href="/"><img class="BrandTech" alt="GOtech logo" src="../public/img/gotech.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link MenuLetter" style="textDecoration:none" href="/">HOME <span class="sr-only">(current)</span></a>
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
<script type="text/javascript">
   window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
  document.body.appendChild(css);
};
</script>
<div class="overlay">
   <h1 class="h11">
     <span style="color: #2895be"
        class="txt-rotate"
        data-period="2000"
        data-rotate='[ "Design", "Tecnologia", "Cuidado", "Agilidade", "Atenção" ]'></span>
   </h1>
   <h1 style="color: #fff">para acelerar sua <span style="color: #2895be">T</span>ransformação <span style="color: #2895be">D</span>igital</h1>
</div>
<div id="carouselExampleControls" class="topperslider carousel slide" data-ride="carousel">
   <div class="carousel-inner">
      <div class="carousel-item active">
         <img class="d-block w-100" src="../public/img/home.jpg"
            alt="First slide">
      </div>
   </div>
   <!--
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      -->
</div>

