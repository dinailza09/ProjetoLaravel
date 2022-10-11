<!DOCTYPE html>
<html>
<head>
<title>Villa Pet</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
</head>
<body class="w3-content" style="max-width:1200px">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Início</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar</a>
                    @endif
                @endauth
            </div>
        @endif
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Villa Pet</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Cachorros</a>
    <a href="#" class="w3-bar-item w3-button">Gatos</a>
    <a href="#" class="w3-bar-item w3-button">Peixes</a>
    <a href="#" class="w3-bar-item w3-button">Binquedos</a>
  </div>
  <a href="#footer" class="w3-bar-item w3-button w3-padding">Contato</a> 
  <a href="{{ route('login') }}"  class="w3-bar-item w3-button w3-padding">Login</a>
  <a href="{{ route('register') }}"class="w3-bar-item w3-button w3-padding">Registrar</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Ração</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right"></i>
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="https://static1.patasdacasa.com.br/articles/0/38/30/@/15896-o-dia-mundial-dos-animais-e-comemorado-n-articles_media_mobile-2.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-hide-small">Cachorros</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">Confira aqui</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwBtpECEM0CR_Pj1TJ9ZZP-ciGzTHJs_W4PA&usqp=CAU" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="https://www.petlove.com.br/images/products/261669/large/Ra%C3%A7%C3%A3o_Seca_PremieR_Pet_Golden_Formula_C%C3%A3es_Adultos_Frango_e_Arroz_-_15_Kg_31019053-2_3.jpg?1662032251" style="width:100%">
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="https://terrazoo-ecommerce-images.s3.amazonaws.com/uploads/2017/08/Screenshot_23.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
      <div class="w3-container">
        <img src="https://petcamp.vtexassets.com/arquivos/ids/156124/7896029064344-png.png?v=637993472846830000" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="https://www.petlove.com.br/images/products/212969/large/Ra%C3%A7%C3%A3o_Premier_Golden_Formula_C%C3%A3es_Adultos_Light_Mini_Bits_Frango_e_Arroz_31023578_3kg.jpg?1627683940" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="https://www.petshopagroaves.com.br/uploads/petshopagroaves/produtos_imagens/racao-para-aves--passaro-forte-favorito-500g15950114261447872823.png" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="data:image/jpeg;base64,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"
        ><p>Vintage Skinny Jeans<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="data:image/jpeg;base64,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">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
    </div>
  </div>

  <!-- Subscribe section -->
  <div class="w3-container w3-black w3-padding-32">
    <h1>Informações</h1>
    <p>Para obter ofertas especiais e tratamento VIP:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Inscreva-se</button>
  </div>
  
  <!-- Footer -->
  <footer class="w3-padding-64 w3-light-grey w3-small w3-center" id="footer">
    <div class="w3-row-padding">
      <div class="w3-col s4">
        <h4>Contato</h4>
        <p>Tire suas dúvidas.</p>
        <form action="/action_page.php" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Nome" name="Name" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Título" name="Subject" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Descrição" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Enviar</button>
        </form>
      </div>

      <div class="w3-col s4">
        <h4>Sobre</h4>
        <p><a href="#">Cachorros</a></p>
        <p><a href="#">Gatos</a></p>
        <p><a href="#">Peixes</a></p>
        <p><a href="#">Brinquedos</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Contato</h4>
        <p><i class="fa fa-fw fa-map-marker"></i>Rua Antunes Ribas</p>
        <p><i class="fa fa-fw fa-phone"></i>(55)99874-5823</p>
        <p><i class="fa fa-fw fa-envelope"></i> villapet@gmail.com</p>
        <h4>Nós aceitamos</h4>
        <p><i class="fa-brands fa-pix"></i>Pix</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Cartão de Crédito</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Cartão de Débito</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
      </div>
    </div>
  </footer>

  <div class="w3-black w3-center w3-padding-24">Copyright© 2022 Villa Pet - Todos os direitos reservados</div>

  <!-- End page content -->
</div>

<!-- Newsletter Modal -->
<div id="newsletter" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('newsletter').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">NEWSLETTER</h2>
      <p>Join our mailing list to receive updates on new arrivals and special offers.</p>
      <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail"></p>
      <button type="button" class="w3-button w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('newsletter').style.display='none'">Subscribe</button>
    </div>
  </div>
</div>

<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
