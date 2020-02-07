<?php 
  include '../util/util.php';
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Especialidades Médicas y Medicina General
        </title>
        <link rel="stylesheet" href="<?=$url?>css/bootstrap-4.4.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=$url?>css/main.css">
        <link rel="stylesheet" href="<?=$url?>css/glide-3.4.1/dist/css/glide.core.min.css">
        <link rel="stylesheet" href="<?=$url?>css/glide-3.4.1/dist/css/glide.theme.min.css"> 
        <link rel="stylesheet" href="<?=$url?>css/fontawesome-free-5.12.0-web/css/fontawesome.css">
        <link rel="stylesheet" href="<?=$url?>css/fontawesome-free-5.12.0-web/css/solid.css">
        <link rel="stylesheet" href="<?=$url?>css/fontawesome-free-5.12.0-web/css/brands.css">      
    </head>
    <body id="BodyContact">
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary half-nav" id="halfNavBar">                
                <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="moveLogo()" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="container collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active margin-md-right" id="collapseFirstIndex">
                      <a class="nav-link font-weight-bold" href="<?= $url ?>">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active margin-md-right">
                      <a class="nav-link font-weight-bold" href="<?= $url ?>acerca/">Acerca</a>
                    </li>
                    <li class="nav-item active margin-md-right">
                      <a class="nav-link font-weight-bold" href="<?= $url ?>noticias/">Noticias</a>
                    </li>
                    <li class="nav-item active margin-md-right">
                      <a class="nav-link font-weight-bold" href="<?= $url ?>contacto/">Contacto</a>
                    </li>
                    <li class="nav-item active hide" id="collapseIcons">
                      <a class="nav-link white fnt-sm margin-sm-right" href="<?= $url ?>/location/">
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
                      <a class="nav-link white fnt-sm" href="#">
                        <!--<i class="fab fa-whatsapp" data-toggle="popover" data-placement="bottom" data-content="WhatsApp. 734 34 1 20 62"></i>&nbsp;--><span class="font-weight-bold whatsapp"></span> 
                      </a>
                    </li>                                       
                  </ul>
                </div>
                <div class="container justify-content-center" id="medicaLogo">
                  <a href="<?= $url ?>"><img src="../img/logo/LogoMedicaIntegral.png" class="d-inline-block align-top logo" alt="" id="logoImg"></a>
                </div>
                <div class="container justify-content-end" id="navbarIcons">
                  <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link white fnt-md margin-md-right" href="<?= $url ?>location/">
                        <i class="fas fa-map-marked-alt"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link white fnt-md margin-md-right" target="blank" href="https://www.facebook.com/MedicaIntegralSur/">
                        <i class="fab fa-facebook-square"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link white fnt-md margin-md-right" href="mailto:especialidadesmedicas@gmail.com">
                        <i class="fas fa-envelope"></i>
                      </a>
                    </li>
                    <li class="nav-item" >
                      <a class="nav-link white fnt-md margin-md-right" href="#">
                        <i class="fab fa-whatsapp" data-toggle="popover" data-placement="bottom" data-content="WhatsApp. 734 34 1 20 62"></i>
                      </a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid contact">
            <div class="container-fluid contact">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="jumbo"><i class="fas fa-ambulance"></i></h1>
                    </div>
                    <div class="col-md-4 card-plane"> 
                        <form id="contactForm">
                            <div class="form-group">
                                <label for="contactName">Nombre completo</label>
                                <input type="text" class="form-control" id="contactName" aria-describedby="emailHelp">                                
                            </div>
                            <div class="form-group">
                                <label for="contactMail">Correo electrónico</label>
                                <input type="email" class="form-control" id="contactMail" aria-describedby="emailHelp">
                                
                            </div>
                            <div class="form-group">
                                <label for="contactTel">Teléfono</label>
                                <input type="text" class="form-control" id="contactTel">
                            </div>
                            <div class="form-group">
                                <label for="contactMsg">Dudas / Comentarios</label>
                                <textarea class="form-control" id="contactMsg" rows="3"></textarea>
                                <small id="help" class="form-text text-muted">No compartiremos tu información personal.</small>
                            </div>                            
                            <button type="submit" class="btn btn-primary">Enviar</button>                            
                            <br>
                            <br>
                            <div class="alert alert-danger hide" role="alert">
                                Uno o varios campos estan vacíos. Por favor, completa todos.
                            </div>    
                        </form>                 
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="footer">
            <div class="row" style="padding-top: 10px;">
              <div class="col-sm">
                <ul class="list">
                  <li><span class="white" style="font-weight: bold;">Info</span></li>
                  <li class="nav-item"><i class="fas fa-phone-square-alt blue"></i><span class="white margin-sm-left">Cel. 734 128 87 30</span></li>
                  <li class="nav-item"><i class="fas fa-tty blue"></i><span class="white margin-sm-left">Tel. 734 12 0 62</span></li>
                  <li class="nav-item"><i class="fas fa-envelope-open-text blue"></i><span class="white margin-sm-left">Email.</span></li>                  
                  <li class="nav-item"><i class="fas fa-inbox blue"></i><span class="white margin-sm-left">CP. 62780</span></li>
                  <li class="nav-item"><i class="fas fa-map-marker-alt blue"></i><span class="white margin-sm-left">Calle Pablo Sidar # 3 Colonia Centro, Zacatepec Morelos</span></li>
                </ul>
              </div>
              <div class="col-md" id="footerGap">
                
              </div>
              <div class="col-sm justify-content-end" id="footerSupport">
                <ul class="list">
                  <li class="nav-item margin-md-left" id="li1"><span class="white" style="font-weight: bold;">Soporte</span></li>
                  <li class="nav-item margin-md-left" id="li2"><i class="fas fa-paper-plane blue"></i><span class="white margin-sm-left">Contacto <a href="">[Aquí]</a></span></li>
                  <li class="nav-item margin-md-left" id="li3"><i class="fas fa-medkit blue"></i><span class="white margin-sm-left">Ayuda <a href="">[Aquí]</a></span></li>
                  <li class="nav-item margin-md-left" id="li4"><i class="fas fa-calendar-alt blue"></i><span class="white margin-sm-left">Agendar una cita</span></li>
                </ul>
              </div>              
            </div>
        </div>
    </body>
    <script src="<?=$url?>Js/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?=$url?>css/glide-3.4.1/dist/glide.min.js"></script>  
    <script src="<?=$url?>css/bootstrap-4.4.1-dist/js/bootstrap.bundle.js"></script>    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>   
    <script>
    /*//////////////////////LOGO ///////////////////////////////// */
      var moveLogo = ()=>{
        var logoYPosition = $("#medicaLogo").position().top;
        var logoXPosition = 432
        var logoOriginalWidth = 720;
        console.log(logoOriginalWidth);        
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
      /*** //////////////// APPLY CHANGES WHEN DOCUMENT READY ///////////////////////////*/
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
        }
        /*//////////TABLETS///////////////// */
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
            $('.location').append("Location");
            $('.whatsapp').append("WhatsApp");
            $('.email').append("Email");
            $('.facebook').append("Facebook");
            appendCounter = 1;
          }
          $('#footer').css('position', 'relative');
        }
        /*////////////////PC & LAPTOP///////////////////////////////////// */
        let maxResponsive = ()=>{ 
          addClass('navbarNav', 'container');
          addClass('halfNavBar', 'half-nav');
          addClass('collapseFirstIndex', 'margin-sm-left');
          addClass('collapseIcons', 'hide');
          addClass('collapseIcons2', 'hide');
          addClass('collapseIcons3', 'hide');
          addClass('collapseIcons4', 'hide');          
          addClass('medicaLogo', 'container');
          removeClass('navbarIcons', 'hide');
          removeClass('medicaLogo', 'responsiveContainer');
          if(appendCounter == 1){
            $('.location').empty();
            $('.facebook').empty();
            $('.email').empty();
            $('.whatsapp').empty();  
            appendCounter = 0;
          }
          $('#footer').css('position', 'fixed');    
        }
        /**///////////////// SMARTPHONES /////////////////// */
        let smartPhoneResponsive = ()=>{
          minResponsive();
          removeClass('medicaLogo', 'container');
          addClass('medicaLogo', 'responsiveContainer');
        }
        /**////////////////////////RESPONSIVE ENGINE ///////////////////// */
        let responsiveEngine = () =>{
          getViewportValues();
          if(viewportWidth <= 1024 && viewportWidth > 800){
            removeClass('footerGap', 'col-md');
            addClass('footerGap', 'col-sm-1');
          }
          if(viewportWidth < 800 && viewportWidth > 500){
            $('#footerGap').remove();
            removeClass('footerSupport', 'col-md');
            addClass('footerSupport', 'col-md-4');
          }
          if(viewportWidth < 500){            
            $('#footerGap').remove();
            $('#bodyIndex').css('height','63%');
            removeClass('footerSupport', 'justify-content-end');
            removeClass('li1', 'margin-md-left');
            removeClass('li2', 'margin-md-left');
            removeClass('li3', 'margin-md-left');
            removeClass('li4', 'margin-md-left');                        
          }
          if(viewportWidth < 400){
            $('#bodyIndex').css('height','56%');
          }
          if(viewportWidth < 300){
            $('#bodyIndex').css('height','50%');
          }
          if(viewportWidth <= 1000 && viewportWidth > 810){
            minResponsive();
          }else if(viewportWidth <= 810){
            smartPhoneResponsive();
          }else{
            maxResponsive();
          }
        }
        responsiveEngine(); /*Setting Home Page Banner*/
        window.onresize = function(event) {
          responsiveEngine(); /*When rezising is active, we need to set the propper Banner array*/
        };

        /**//////////////VALIDATOR ////////////// */
        let validator = data =>{
          let pass = true;
          let nombre;
          let tel;
          let email;
          let msg;

          ({nombre, email, tel, msg} = data);

          if(nombre == "")
            pass = false;
          if(email == "")
            pass = false;
          if(tel == "")
            pass = false;
          if(msg == "")
            pass = false;
          
          return pass;
            
        }
        /**//////////////AJAX////////////////// */

        $("#contactForm").submit(function(e){                             
          e.preventDefault();
          data = {
            nombre: $("#contactName").val(),
            email: $("#contactMail").val(),
            tel: $("#contactTel").val(),
            msg: $("#contactMsg").val()
          };

          if(validator(data)){
            $(".alert").css('visibility', 'hidden');
            $("#contactName").val('');
            $("#contactMail").val('');
            $("#contactTel").val('');
            $("#contactMsg").val('');
              $.ajax({
              type: "POST",
              url: "http://www.medicaintegralsur.com/util/mail.php",
              data: $(this).serialize(),
              success: function(response){
                var jsonData = JSON.parse(response);              
                if(jsonData.success == 1){                
                  Swal.fire(
                    '!El correo se ha enviado!',
                    'Nos pondremos en contacto lo más pronto posible.',
                    'success'
                  );
                }else{
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                    footer: '<a href>Why do I have this issue?</a>'
                  })
                }
              }
            });
          }else{
            $(".alert").css('visibility', 'visible');
          }

        });

        /*******BOOTSTRAP POP OVER********/
        $('[data-toggle="popover"]').popover()
      });
      
    </script>
</html>