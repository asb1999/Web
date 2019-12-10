<!doctype html>
<html lang="pt">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145673813-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-145673813-1');
    </script>
    @include('includes.head')
    @include('cookieConsent::index')
</head>
<body>
    <header>
        @include('includes.header')
    </header>
    <div class="loader" ><img src="../public/img/icons/spinner.gif"></div>
    <button onclick="scrollToTop(1000);" id="topo_btn" title="topo"><img class="up" src="../public/img/icons/up.png"></button>
    <body>
        @yield('content')
    </body>
    <footer class="page-footer font-small unique-color-dark ">
        @include('includes.footer')
    </footer>
  <!-- SCRIPTS -->
<script>
    setTimeout(function(){ $('.loader').fadeOut('slow'); }, 2000);
</script>
<script type="text/javascript" src="../public/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../public/js/mdb.min.js"></script>
<script type="text/javascript" src="../public/js/style.min.js"></script>
<script src="../public/js/fade.min.js"></script>
<script src="../public/js/parallax/parallax.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>