<?php 
  include '../util/util.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Médica Integral Sur
        </title>
        <link rel="stylesheet" href="<?=$url?>css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$url?>css/main.css">
        <link rel="stylesheet" href="<?=$url?>css/glide-3.4.1/dist/css/glide.core.min.css">
        <link rel="stylesheet" href="<?=$url?>css/glide-3.4.1/dist/css/glide.theme.min.css"> 
        <link rel="stylesheet" href="<?=$url?>css/fontawesome-free-5.12.0-web/css/fontawesome.css">
        <link rel="stylesheet" href="<?=$url?>css/fontawesome-free-5.12.0-web/css/solid.css">
        <link rel="stylesheet" href="<?=$url?>css/fontawesome-free-5.12.0-web/css/brands.css">      
    </head>
    <body>
        <div>
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow half-nav" id="halfNavBar">                
            <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="moveLogo()" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active margin-md-right" id="collapseFirstIndex">
                  <a class="nav-link font-weight-bold" href="<?=$url?>">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active col-md-4 margin-sm-right" id="mision-container">
                  <a class="nav-link font-weight-bold" id="mision" href="<?=$url?>misionvision/">Misión/Visión</a>
                </li>
                <li class="nav-item active margin-md-right">
                  <a class="nav-link font-weight-bold" href="<?=$url?>servicios/">Servicios</a>
                </li>
                <li class="nav-item active margin-md-right">
                  <a class="nav-link font-weight-bold" href="<?=$url?>contacto/">Contacto</a>
                </li>
                <li class="nav-item active hide" id="collapseIcons">
                  <a class="nav-link white fnt-sm margin-sm-right" href="<?=$url?>location/">
                    <!--<i class="fas fa-map-marked-alt"></i>&nbsp;--><span class="font-weight-bold location"></span> 
                  </a>
                </li>
                <li class="nav-item active hide" id="collapseIcons2">
                  <a class="nav-link white fnt-sm" target="blank" href="https://www.facebook.com/MedicaIntegralSur/">
                    <!--<i class="fab fa-facebook-square"></i>&nbsp;--><span class="font-weight-bold facebook"></span> 
                  </a>
                </li>
                <li class="nav-item active hide" id="collapseIcons3">
                  <a class="nav-link white fnt-sm" href="mailto:especialidadesmedicas@gmail.com">
                    <!--<i class="fas fa-envelope"></i>&nbsp;--><span class="font-weight-bold email"></span> 
                  </a>
                </li>
                <li class="nav-item active hide" id="collapseIcons4">
                  <a class="nav-link white fnt-sm" href="https://api.whatsapp.com/send?phone=527341288730">
                    <!--<i class="fab fa-whatsapp" data-toggle="popover" data-placement="bottom" data-content="WhatsApp. 734 34 1 20 62"></i>&nbsp;--><span class="font-weight-bold whatsapp"></span> 
                  </a>
                </li>                                       
              </ul>
            </div>
            <div class="container justify-content-center" id="medicaLogo">
              <a href="<?=$url?>"><img src="<?=$url?>img/logo/LogoMedicaIntegral.jpg" class="d-inline-block align-top logo" alt="" id="logoImg"></a>
            </div>
            <div class="container justify-content-end" id="navbarIcons">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link white fnt-md margin-md-right" href="<?=$url?>location/">
                    <i class="fas fa-map-marked-alt"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link white fnt-md margin-md-right" target="blank" href="https://www.facebook.com/MedicaIntegralSur/">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link white fnt-md margin-md-right" href="mailto:medicaintegralsur@gmail.com">
                    <i class="fas fa-envelope"></i>
                  </a>
                </li>
                <li class="nav-item" >
                  <a class="nav-link white fnt-md margin-md-right" href="https://api.whatsapp.com/send?phone=527341288730">
                    <i class="fab fa-whatsapp"></i>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="container-fluid" id="body">            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.1562891195017!2d-99.19565248510519!3d18.656981387329825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cdd5f44536882b%3A0xb56db69c19855d1b!2sPablo%20Sidar%203%2C%20Centro%2C%2062780%20Zacatepec%20de%20Hidalgo%2C%20Mor.!5e0!3m2!1ses-419!2smx!4v1578980027825!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen="" id="map"></iframe>
        </div>
        <div class="container-fluid" id="footerAbout">
          <div class="row" style="padding-top: 10px;">
            <div class="col-md-6">
              <ul class="list">
                <li><span class="white" style="font-weight: bold;">Info</span></li>
                <li class="nav-item"><i class="fas fa-phone-square-alt blue"></i><span class="white margin-sm-left">Cel. 734 128 87 30</span></li>
                <li class="nav-item"><i class="fas fa-tty blue"></i><span class="white margin-sm-left">Tel. 734 12 0 62</span></li>
                <li class="nav-item"><i class="fas fa-envelope-open-text blue"></i><span class="white margin-sm-left">Email. medicaintegralsur@gmail.com</span></li>
                <li class="nav-item"><i class="fas fa-inbox blue"></i><span class="white margin-sm-left">CP. 62780</span></li>
                <li class="nav-item"><i class="fas fa-map-marker-alt blue"></i><span class="white margin-sm-left">Calle Pablo Sidar # 3 Colonia Centro, Zacatepec Morelos</span></li>
              </ul>
            </div>
            <div class="col-sm" id="footerGap">
              
            </div>
            <div class="col-sm justify-content-end" id="footerSupport">
              <ul class="list">
                <li class="nav-item margin-md-left" id="li1"><span class="white" style="font-weight: bold;">Soporte</span></li>
                <li class="nav-item margin-md-left" id="li2"><i class="fas fa-paper-plane blue"></i><span class="white margin-sm-left">Contacto <a href="<?= $url ?>contacto/">[Aquí]</a></span></li>
                <li class="nav-item margin-md-left" id="li3"><i class="fas fa-medkit blue"></i><span class="white margin-sm-left">Ayuda <a href="">[Aquí]</a></span></li>
                <li class="nav-item margin-md-left" id="li4"><i class="fas fa-calendar-alt blue"></i><span class="white margin-sm-left">Agendar una cita <a href="http://www.google.com/calendar/render?action=TEMPLATE&text=Medica+Integral+Sur&details=Formato+para+cita:+No+olvide+agregar+como+invitado+a+email@example.com&location=Calle+Pablo+Sidar,+Zacatepec,+Morelos&trp=false&sprop=&sprop=name:" target="_blank">[Aquí]</a></span></li>
              </ul>
            </div>              
          </div>
          <div class="row">
            <div class="container text-align">
              <span class="white">2020 Médica Integral Sur - Todos los derechos reservados |<a href="" class="White" style="font-weight: bold;"> Aviso de Privacidad </a>|</span>
              <span class="white">Made with &nbsp;<i class="fas fa-laptop-code"></i>&nbsp;By MarkCraft</span>
            </div>
          </div>
        </div>
    </body>
    <script src="<?=$url?>Js/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=$url?>css/glide-3.4.1/dist/glide.min.js"></script>  
    <script src="<?=$url?>css/bootstrap-4.4.1-dist/js/bootstrap.bundle.js"></script>
    <script>
      /*//////////////// LOGO /////////////////*/
      var moveLogo = ()=>{
        var logoYPosition = $("#medicaLogo").position().top;
        var logoXPosition = 432
        var logoOriginalWidth = 720;                 
        if(logoYPosition > 0){
          $("#medicaLogo").css('position', 'absolute');
          $('#medicaLogo').css('width', '100px');
          $("#medicaLogo").css('top', '0');
          if($(window).width() < 700){
            $("#medicaLogo").css('left', `${logoXPosition - 250}px`);
          }else{
            $("#medicaLogo").css('left', `${logoXPosition}px`);
          }                              
        }else{
          $("#medicaLogo").css('position', 'relative');          
          $('#medicaLogo').css('width', '65%');
          $("#medicaLogo").css('top', '8');
          $("#medicaLogo").css('left', '');
        }
      }
      $(document).ready(()=>{

        var viewportWidth = 0;
        var viewportHeight = 0;
        var appendCounter = 0;

        let removeClass = (elementID, className) =>{
          $(`#${elementID}`).removeClass(className);
        }

        let addClass = (elementID, className) =>{
          $(`#${elementID}`).addClass(className);
        }

        let getViewportValues = ()=>{
          viewportWidth = $(window).width();
          viewportHeight = $(window).height(); 
          console.log('Width', viewportWidth);           
        }
        /*/////////////// TABLETS IPAD /////////////////////*/
        let minResponsive = ()=>{              
          removeClass('navbarNav', 'container');
          removeClass('halfNavBar', 'half-nav');                                              
          removeClass('collapseFirstIndex', 'margin-sm-left');
          removeClass('collapseIcons', 'hide');          
          removeClass('collapseIcons2', 'hide');          
          removeClass('collapseIcons3', 'hide');          
          removeClass('collapseIcons4', 'hide');          
          addClass('navbarIcons', 'hide');
          if(appendCounter == 0){
            $('.location').append("Ubicación");
            $('.whatsapp').append("WhatsApp");
            $('.email').append("Email");
            $('.facebook').append("Facebook");
            appendCounter = 1;
          }
          $('#footerAbout').css('position', 'relative');
          $('#map').css('margin-top', '0%');                                                                           
        }
        /*///////////// PC & LAPTOP //////////////*/
        let maxResponsive = ()=>{                                                    
          addClass('navbarNav', 'container');
          addClass('halfNavBar', 'half-nav');
          addClass('collapseFirstIndex', 'margin-sm-left');
          //addClass('collapseIcons', 'hide');
          //addClass('collapseIcons2', 'hide');
          //addClass('collapseIcons3', 'hide');
          //addClass('collapseIcons4', 'hide');          
          addClass('medicaLogo', 'container');
          removeClass('navbarIcons', 'hide');
          removeClass('medicaLogo', 'responsiveContainer');
          $('#collapseIcons').remove();
          $('#collapseIcons2').remove();
          $('#collapseIcons3').remove();
          $('#collapseIcons4').remove();          
          if(appendCounter == 1){
            $('.location').empty();
            $('.facebook').empty();
            $('.email').empty();
            $('.whatsapp').empty();  
            appendCounter = 0;
          }
          $('#footerAbout').css('position', 'relative');                          
        }
        /*/////////////// SMARTPHONE /////////////////*/
        let smartPhoneResponsive = ()=>{
          minResponsive();
          removeClass('medicaLogo', 'container');
          addClass('medicaLogo', 'responsiveContainer');                                                                      
        }
        /* ///////////////////////// RESPONSIVE ENGINE /////////// */
        let responsiveEngine = () =>{
          getViewportValues();
          if(viewportWidth <= 1450){
            $('.margin-md-right').css('margin-right', '14px');
          }          
          if(viewportWidth < 1575 && viewportWidth > 1515){
            $('.fnt-md').css('font-size', '1.5em');
          }
          if(viewportWidth < 1515){
            $('.fnt-md').css('font-size', '1em');
          }          
          if(viewportWidth <= 1024 && viewportWidth > 800){
            addClass('footerGap', 'col-sm-1'); 
            removeClass('footerGap', 'col-md');            
            removeClass('medicaLogo', 'justify-content-center');
            removeClass('mision-container', 'col-md-4');
            $("#mision").html('Misión/Visión');
            $("#logoImg").css('margin-left','30px');             
          }
          if(viewportWidth < 800 && viewportWidth > 500){
            $('#footerGap').remove();
            removeClass('footerSupport', 'col-md');
            removeClass('mision-container', 'col-md-4');
            addClass('footerSupport', 'col-md-4');
          }
          if(viewportWidth < 500){            
            $('#footerGap').remove();              
            $('body').css('height','100%');
            removeClass('footerSupport', 'justify-content-end');
            removeClass('li1', 'margin-md-left');
            removeClass('li2', 'margin-md-left');
            removeClass('li3', 'margin-md-left');
            removeClass('li4', 'margin-md-left');
            removeClass('mision-container', 'col-md-4');                        
          }
          if(viewportWidth < 400){
                          
          }
          if(viewportWidth < 300){                                         
          }
          if(viewportWidth <= 1000 && viewportWidth > 810){
            minResponsive();
          }else if(viewportWidth <= 810){
            smartPhoneResponsive();                            
          }else{
            maxResponsive();
          }
        }
        /* ///////////////////////// RESPONSIVE ENGINE /////////// */

        responsiveEngine(); /*Setting Home Page Banner*/          
        window.onresize = function(event) {
          responsiveEngine(); /*When rezising is active, we need to set the propper Banner array*/
        };

        /*******BOOTSTRAP POP OVER********/
        $('[data-toggle="popover"]').popover();

        /*//////// GLIDE SWIPER ////////////////*/
        var mySwiper = new Swiper ('.swiper-container', {
              // Optional parameters
              direction: 'horizontal',
              loop: true,
              navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
              }
          });
      });        
  </script>
</html>