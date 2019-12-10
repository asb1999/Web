<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="icon" href="../public/img/icons/go.ico"/>
<title>GO Tech</title>
<!-- Bootstrap core CSS -->
<link href="../public/css/bootstrap.min.css" rel="stylesheet">
<link href="../public/css/mdb.min.css" rel="stylesheet">
<link href="../public/css/responsive.css" rel="stylesheet">
<link href="../public/css/style.css" rel="stylesheet">
<script src="../public/js/jquery-3.4.1.min.js"></script>
 <style type="text/css">
   body {
    background-image: linear-gradient(to bottom, #2895be, #409dc3, #53a6c8, #64aece, #74b7d3, #74b7d3, #74b7d3, #74b7d3, #64aece, #53a6c8, #409dc3, #2895be);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color:#fff;
    background-color:#2895be;
    font-family: 'Open Sans',Arial,Helvetica,Sans-Serif;
}
 </style>
 <body>
    <a href="/"><img class="logo-go-white" src="public/img/go-white.png"></a>
          <div class="col-md-12">
              <h3 class="text-center about-subtitle-wt pt-4">Qual produto você precisa?</h3>
          </div>
        <div class="go-caption mt-5">
           <div class="row">
              <div class="col-md-8 offset-md-2">
                 @include('flash::message')
                 <form method="POST" action="{{ route('send_contato') }}" class="contato-form">
                      {{ csrf_field() }}
                    <div class="row">
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
                       <textarea cols="30" rows="10" class="form-control" id="message" name="message" required=""></textarea>
                    </div>
                    <div class="form-group">
                       <input type="submit" class="btn button-slider" id="submit" name="submit" value="Enviar">
                    </div>
                 </form>
              </div>
           </div>
        </div>
</body>

