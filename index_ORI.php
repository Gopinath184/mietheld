<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    // header('Location: https://m.mietheld.at/');
    echo "<script type='text/javascript'> window.location.href='https://m.mietheld.at/';</script>";
    exit(0);
}else if($detect->isTablet()){
        // any tablet
   // header('Location: https://m.mietheld.at/');
  echo "<script type='text/javascript'> window.location.href='https://m.mietheld.at/';</script>";
    exit(0);
}else{
  // header('Location: https://mietheld.at/');
    //exit(0);
?>


<!DOCTYPE HTML>
<html lang="en">
  <head>
    <link rel="icon"  href="photo/favicon.png" />
    <title>Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/5516cd139c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput-jquery.min.js" integrity="sha256-s0v2VDVLbAqGy/FEK0588AtGkSz0aOb6ibQCPCkk4Bk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/intlTelInput.js" integrity="sha256-J5cTd51pKg6Pcr2fkY1GNyVn9/nXvogO7WX7z+o2rG8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/js/utils.js" integrity="sha256-271j3cFogB3oRK1PLEHwasgC+sTkKr0f1I37LU9Qkyk=" crossorigin="anonymous"></script>
      <script src="build/js/intlTelInput.js"></script>

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.4/css/intlTelInput.css" integrity="sha256-rTKxJIIHupH7lFo30458ner8uoSSRYciA0gttCkw1JE=" crossorigin="anonymous" />
      <link rel="stylesheet" href="css/desktop-form.css">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TL9ZWCZ');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '215303996265249'); 
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=215303996265249&ev=PageView"/>
</noscript>
<!-- End Facebook Pixel Code -->
  </head>
  <body>
    <style type="text/css">

    html {
  scroll-behavior: smooth;
}

.cardd1{
   
   position: absolute;
   top: 385px;
   left: 35px;
   width: 260px;
   height: 54px;
   background-color: rgba(241, 224, 182, 1);
   margin-left: 127px;  
   border-radius: 10px;  
   text-align: center;
   cursor: pointer !important;
}
.cardd1:hover{
    background-color:#323232;
    outline: 0px;
    border: 0px;
}
.popupp{
  margin-top: 75px;
  margin-left: 222px;
}
#video-popup-container {
  display:none;
  position: fixed;
  z-index: 996;
  width: 60%;
  left: 50%;
  margin-left: -30%;
  top: 13%;
  background-color: #fff;
}

#video-popup-close {
  cursor: pointer;
  position: absolute;
  right: 59px;
/*  top: -9px;*/
  z-index: 998;
  width: 25px;
  height: 25px;
  border-radius: 25px;
  text-align: center;
  font-size: 20px;
  line-height: 25px;
  color: #fff;
}

#video-popup-iframe-container {
  position: absolute;
  z-index: 997;
  width: 99%;
  height: 0%;
  padding-bottom: 56.25%;
/*  border: 2px solid #000;*/
  border-radius: 2px;
/*  background-color: #000;*/
}

#video-popup-iframe {
  z-index: 999;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background-color: #000;
}

#video-popup-overlay {
  display: none;
  position: fixed;
  z-index: 995;
  top: 0;
  background-color: #000;
  opacity: 0.8;
  width: 100%;
  height: 100%;
}

#video-popup-close:hover {
  color: #DE0023;
}



      .front-meitheldform {
          left: 805px;
          bottom: 420px;
      }


      .mietesenkan-form {
    position: absolute;
    top: 580px;
    margin-left: 260px;
    color: rgb(47, 46, 46);
    font-size: 16px;
    line-height: normal;
    letter-spacing: normal;
    font-family: wf_736a916d09a94cd392744ed6a;
}

.front_submit_btn{
    background: linear-gradient(to bottom right, #26A386 0%, #1EC656 100%) !important;
    border: 0px solid #d7dada !important;
    color: rgb(255, 255, 255) !important;
    font-weight: bold !important;
    border-radius: 35em !important;
    font-size: 21.3px !important;
    padding: 5px 0px!important; 
    text-transform: none !important;
    letter-spacing: normal !important;
    margin-left: 198px;
    margin-bottom: 20px;
}
.submit_btn{
  background: linear-gradient(to bottom right, #26A386 0%, #1EC656 100%) !important;
    border: 0px solid #d7dada !important;
    color: rgb(255, 255, 255) !important;
    font-weight: bold !important;
    border-radius: 35em !important;
    font-size: 21.3px !important;
    padding: 5px 0px!important; 
    text-transform: none !important;
    letter-spacing: normal !important;
    margin-left: -22px;
    margin-bottom: 20px;
}
.iti__flag.iti__at{
  margin-left: 27px;
}
.tick_image {
  margin-left: 17px!important;
  margin-bottom: 12px!important;
}
.progress-bar{
  background-color: #AEDBCA!important;
}

.progress {
  width: 39%;
  margin-left: 130px;
  margin-top: 14px;
}
.input_div_check {
  /* margin-left: 222px!important; */
}
.iti__flag.iti__at {
    margin-left: 0px !important;
}

.funktion {
    margin-top: -52px !important;
}

.input-group {
    width: 90%;
}
div#Quadratmeter_required, #Miete_required {
    padding-left: 11px !important;
    margin-left: 63px;
}
.feedback-first{
  margin-bottom:2em;
}
.img-thumbnail{
        transition-duration: 1s;
        transition-timing-function: ease;

}
.img-thumbnail:hover{
  transform: scale(1.2);
}





.popup__overlay {
  display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.9);
  text-align: center;
  z-index: 100;
}

.popup__overlay:after {
  display: inline-block;
  height: 100%;
  width: 0;
  vertical-align: middle;
  content: "";
}

.popup {
  display: inline-block;
  position: relative;
  width: 100%;
  height: 100%;
  max-width: 982px;
  padding: 20px;
/*  border: 1px solid black;
  background: black;*/
  color: white;
  vertical-align: middle;
}

.popup-form__row {
  margin: 1em 0;
}

.popup__close {
  display: block;
    position: absolute;
    top: 1px;
    right: 11px;
    width: 12px;
    height: 12px;
    padding: 8px;
    cursor: pointer;
    text-align: center;
    font-size: 15px;
    line-height: 10px;
    color: white;
    text-decoration: none;
    font-weight: bold;
}

.popup__close:hover {
  color: #eea200;
}


iframe {
  width: 100%;
  height: 100%;
}



*,::after,::before{box-sizing:border-box;}
nav{display:block;}
[tabindex="-1"]:focus:not(:focus-visible){outline:0!important;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#007bff;text-decoration:none;background-color:transparent;}
a:hover{color:#0056b3;text-decoration:underline;}
img{vertical-align:middle;border-style:none;}
.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center;}
.collapse:not(.show){display:none;}
.nav-link{display:block;padding:.5rem 1rem;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none;}
.navbar-nav .nav-link{padding-right:0;padding-left:0;}
.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center;}
@media (min-width:992px){
.navbar-expand-lg{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start;}
.navbar-expand-lg .navbar-nav{-ms-flex-direction:row;flex-direction:row;}
.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem;}
.navbar-expand-lg .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto;}
}

.navbarr{line-height:inherit;}
.navbarr{background-color:#FFFFFF;height:84px;width:100%;margin-bottom:41px;padding:0px;}
.naav{margin-left:140px;}
.nav-link{margin-top:-1px;}
.img{margin-left:6px;color:#2F2E2E;font-size:16px;font-family:wf_bb0ce061b76644cda03b0b852;}
.img1{margin:0;padding:0;border:0;margin-left:5.5px;color:#2F2E2E;font-size:16px;font-family:wf_bb0ce061b76644cda03b0b852;line-height:0ch;}
.phone{width:17px;height:17px;margin:0;padding:0;border:0;margin-right:1.5px;}
.email{width:17px;height:17px;margin:0;padding:0;border:0;margin-left:22.5px;margin-bottom:4px;}
.logo{margin-left:45px;}
.menu{margin:0;padding:0;border:0;color:#000000;margin-left:163.5px;font-size:14px;font-family:wf_736a916d09a94cd392744ed6a;line-height:0ch;}
.menu1{margin:0;padding:0;border:0;color:#000000;font-size:14px;font-family:wf_736a916d09a94cd392744ed6a;margin-left:12.8px;line-height:0ch;}
.menu2{margin:0;padding:0;border:0;color:#000000;font-size:14px;font-family:wf_736a916d09a94cd392744ed6a;margin-left:12.8px;line-height:0ch;}
.menu3{margin:0;padding:0;border:0;color:#000000;font-size:14px;font-family:wf_736a916d09a94cd392744ed6a;margin-left:11.8px;line-height:0ch;}
.menu4{margin:0;padding:0;border:0;color:#000000;font-size:14px;font-family:wf_736a916d09a94cd392744ed6a;margin-left:12.8px;line-height:0ch;}
.logo{margin:0;padding:0;border:0;width:88px;height:54px;margin-left:43.8px;line-height:0ch;}
.menu:hover{color:#C1FAFE;}
.menu1:hover{color:#C1FAFE;}
.menu2:hover{color:#C1FAFE;}
.menu3:hover{color:#C1FAFE;}
.menu4:hover{color:#C1FAFE;}

@media print{
*,*::before,*::after{text-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
}
*,*::before,*::after{box-sizing:border-box;}
[tabindex="-1"]:focus{outline:none!important;}
ul{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;border-style:none;}
div,span{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:0 0;}
:focus{outline:0;}
/ CSS Used fontfaces /
@font-face{font-family:wf_bb0ce061b76644cda03b0b852;src:url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_bb0ce061b76644cda03b0b852cd1e5bc.woff) format("woff"), url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_bb0ce061b76644cda03b0b852cd1e5bc.woff2) format("woff2"), url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_bb0ce061b76644cda03b0b852cd1e5bc.ttf) format("ttf");}
@font-face{font-family:wf_736a916d09a94cd392744ed6a;src:url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff) format("woff"), url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff2) format("woff2"), url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.ttf) format("ttf");}
@font-face{font-family:wf_736a916d09a94cd392744ed6a;src:url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff) format("woff"), url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff2) format("woff2"), url(https://www.mietheld.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.ttf) format("ttf");}
@font-face{font-family:wf_736a916d09a94cd392744ed6a;src:url(https://www.mietesenken.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff) format("woff"), url(https://www.mietesenken.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff2) format("woff2"), url(https://www.mietesenken.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.ttf) format("ttf");}
@font-face{font-family:wf_736a916d09a94cd392744ed6a;src:url(https://www.mietesenken.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff) format("woff"), url(https://www.mietesenken.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.woff2) format("woff2"), url(https://www.mietesenken.at/fonts/mietheldfonts/ef305b_736a916d09a94cd392744ed6af33990f.ttf) format("ttf");}








    </style>
      
    <!-- menubar starting -->

<style>
              body.prewarmup .hidden-during-prewarmup {
                    visibility: visible !important;
                    top: 15px !important;
                }
                html {
               scroll-behavior: smooth !important;
                }
                i.fa.fa-times-circle-o {
                     cursor: pointer;
                     font-size: 20px;
                     padding-top: 5px;
                  }
                  a:hover{
                    text-decoration: none;
                  }
            </style>

<!-- <div id="notificationDiv" style="background-color: red; height:30px;">
            <p style="text-align: center;vertical-align: middle;font-weight: 700;color: wheat;"><span style="color: white;" href="/unternehmen">Schließung wegen Coronavirus?
               Wir helfen Ihrem Unternehmen, keine Miete zu bezahlen. Alle Informationen <a style="color: white;" href="/unternehmen"><u>hier</u></a>.&emsp;&emsp;</span><i  style="
               position: absolute;" onclick="removeNotification();" id="removeNot" class="fa fa-times-circle-o" aria-hidden="true"></i></p>
         </div> -->

    <div class="navbarr">
      
        <nav class="navbar-expand-lg naav">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="tel:01348030"><img src="photo/phone.png" class="phone"/>  <span class="img">01 34 80 30</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mailto:kontakt@mietheld.at"><img src="photo/email.png" class="email"/><span class="img1"> kontakt@mietheld.at </span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="mietesenken" tabindex="-1" aria-disabled="true"> <span class="menu">Miete senken</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#funktioniert's" tabindex="-1" aria-disabled="true" id="a1"> <span class="menu1">So funktioniert's</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#fragen" tabindex="-1" aria-disabled="true"> <span class="menu2">Fragen</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#kontakt" tabindex="-1" aria-disabled="true"> <span class="menu3">Kontakt</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="update" tabindex="-1" aria-disabled="true"> <span class="menu4">Update</span></a>
                  </li>
                </ul>
              
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="" tabindex="-1" aria-disabled="true"><img src="photo/logo.png" alt="Mietheld" class="logo"/></a>
                </form>
              </div>
          </nav>

    </div>


    <!-- menubar ending -->

    <!-- content starting -->
    <div class="">
      <div class="">
        <div class="content">Miete im Altbau senken</div>
      </div>
      <div class="">
        <div class="">
          <div class="">
              <span class="content1">»Das österreichische Mietrecht legt eine maximale Miete für</span><br>
              <span class="content2">Altbauten fest, die in 4 von 5 Fällen überschritten wird.«</span> 
          </div>
        </div>
      
  </div>
  <!-- content ending -->

  <!-- banner starting -->
  <div class="banner col-md-12">
      <div class="row">
        <img src="photo/banner.png" class="img-fluid" alt="Responsive image">
        <span class="cardd"><a href="mietesenken" style="text-decoration: none;" class="cardanchor cardtxt btn">Miete jetzt senken</a></span>
        <div class="col-md-4 front-meitheldform">
        


          <form id="regForm" action="#" method="POST" autocomplete="on">
  
  <!-- One "tab" for each step in the form: -->
  
  <div class="tab">


    <div class="form-group has-feedback feedback-first ">
    <div class="input-group">
      <input type="number"  class="form-control formrounded" id="Quadratmeter" placeholder="Quadratmeter" required onkeydown="remove_error('Quadratmeter');">
    </div>
<!--     <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
    <div  id="Quadratmeter_required"  class="help-block with-errors text-danger" style="display: none">Bitte f?llen Sie dieses Feld aus</div>
  </div>



    <div class="form-group has-feedback">
    <div class="input-group">
      <input type="number"   class="form-control formrounded" id="Miete" placeholder="Miete" required onkeydown="remove_error('Miete');">
    </div>
<!--     <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
    <div  id="Miete_required" class="help-block with-errors text-danger"  style="display: none">Bitte f?llen Sie dieses Feld aus</div>
  </div>

 <button class="submit_btn front_submit_btn" type="button" style=" cursor: pointer;width: 417px;padding: 7px 0px 7px 0px !important;" value="MIETE JETZT KOSTENLOS ?ERPR?EN" onclick="nextPrev(1,'25')"> MIETE JETZT KOSTENLOS &#220;BERPR&#220;FEN</button>

  </div>
  <!--   <input  class="submit_btn front_submit_btn" type="button" value="MIETE JETZT KOSTENLOS ?ERPR?EN" onclick="nextPrev(1,'25')"> -->
 
  <div class="tab">



          <div class="full_div_check row">

            <div class="input_div_check col-xs-12">

              <label class="label_check">
                      <img src="img/form/formimg1.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100">
                      <input type="radio" name="second_step_checkbox" class="but image_inside_checkbox second_step_checkbox" autocomplete="off" onclick="nextPrev(1,'40')" value="altbau">
              </label>
              <label class="label_check">
                      <img src="img/form/formimg2.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100">
                      <input type="radio" name="second_step_checkbox" class="image_inside_checkbox second_step_checkbox" autocomplete="off" onclick="nextPrev(1,'40')" value="neubau">
              </label>    

            </div>


            <div class="input_div_check col-xs-12">

              <label class="label_check">
                      <img src="img/form/formimg3.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" >
                      <input type="radio" name="second_step_checkbox"  class="image_inside_checkbox second_step_checkbox" autocomplete="off" onclick="nextPrev(1,'40')" value="gemeindebau">
            </label>
            <label class="label_check">
                      <img src="img/form/formimg4.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" >
                      <input type="radio"  name="second_step_checkbox" class="image_inside_checkbox second_step_checkbox" autocomplete="off" onclick="nextPrev(1,'40')" value="unbekannt">
            </label>
            </div>

      </div>



 </div>
<!-- One "tab" for each step in the form: -->


<div class="tab">


   <div class="full_div_check row">

            <div class="input_div_check col-xs-12">
    <label class="label_check">

      <img src="img/form/form_2_img1.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" >
      <input type="radio" name="third_step_checkbox" class="image_inside_checkbox third_step_checkbox" autocomplete="off" onclick="nextPrev(1,'60')" value="befristeter">
    </label>


    <label class="label_check">
        <img src="img/form/form_2_img2.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" >
        <input type="radio" name="third_step_checkbox"  class="image_inside_checkbox third_step_checkbox" autocomplete="off" onclick="nextPrev(1,'60')" value="unbefristeter">
     </label>


  </div>




</div>


</div>




<div class="tab">

   <div class="full_div_check row">

            <div class="input_div_check col-xs-12">
    <label class="label_check">
     <img src="img/form/form3_img_1.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" >
    <input type="radio" name="fouth_step_checkbox"  class="image_inside_checkbox fouth_step_checkbox" autocomplete="off" onclick="nextPrev(1,'80')" value="weniger">
  </label>

    <label class="label_check">
        <img src="img/form/form3_img_2.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" >
        <input type="radio" name="fouth_step_checkbox" class="image_inside_checkbox fouth_step_checkbox" autocomplete="off" onclick="nextPrev(1,'80')" value="länger">
  </label>

  </div>




</div>

       

</div>





<div class="tab">
 <div class="form-group has-feedback">
      <div class="text-center">
        <input id="phone" name="phone" type="tel" class="formrounded input-block-level phone-input"  required onkeydown="remove_error_for_num('phone');" value="+43">
      </div>
  <!--     <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
      <div  id="phone_required"  class="help-block with-errors text-danger " style="display: none; font-size:18px; margin-left: 46px; font-family: wf_736a916d09a94cd392744ed6a;" align="center">Bitte gib' eine gültige Telefonnummer ein</div>
    </div>


<script>
    var phoneInput = $(".phone-input"),
    // phoneForm = phoneInput.closest("form"),
    phoneEnterArrow = $(".phone-enter-arrow"),
    phoneError = $(".phone-error"),
    phoneSuccess = $(".phone-success"),
    phonePreventKeyup = false;

phoneInput.intlTelInput({
  initialCountry: "at",
  geoIpLookup: function(callback) {
    $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "+43";
      callback(countryCode);
    });
  },
  nationalMode: false,
  autoPlaceholder: false,
  utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
})
//.done(function() {
 // phoneInput.focus();
//});

function resetInput() {
  phoneEnterArrow.addClass("hide");
  phoneError.addClass("hide");
  phoneSuccess.addClass("hide");
  phoneInput.removeClass("valid invalid");
}

phoneInput.on("keyup", function() {
  //console.log("keyup");
  if (phonePreventKeyup) {
    phonePreventKeyup = false;
  } else {
    resetInput();
    if (phoneInput.val() && phoneInput.intlTelInput("isValidNumber")) {
      phoneInput.addClass("valid");
      phoneEnterArrow.removeClass("hide");
      phoneSuccess.removeClass("hide");
    }
  }
});

function errorCheck() {
  var isError = (phoneInput.val() && !phoneInput.intlTelInput("isValidNumber"));
  if (isError) {
    phoneInput.addClass("invalid");
    phoneError.removeClass("hide");
  }
  return isError;
}

phoneInput.on("blur", function() {
  //console.log("blur");
  errorCheck();
});

// phoneForm.on("submit", function(e) {
//   //console.log("submit");
//   resetInput();
//   var isError = errorCheck();
//   if (isError) {
//     e.preventDefault();
//     phonePreventKeyup = true;
//   }
// });


</script>

     <input class="submit_btn" id="front_form_submit" type="button" value="KOSTENLOSE AUSWERTUNG PER SMS ERHALTEN">
  </div>

<div class="final_tick_image">

<img id="" alt="" src="img/final-tick.png" class="tick_image" style="cursor: auto;">


</div>


  <div style="overflow:auto;">
    <div style="float:right;">
    </div>
  </div>


  <!-- Circles which indicates the steps of the form: -->
  <div style="display: none;">
    <span class="step first_step finish" ></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step last_step"></span>
  </div>



    <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">

    </div>
  </div>


</form>

        </div>
    </div></div>

    
    <div class="banner1" id="bannerr1">
        <span id="banner1-left">Bekannt aus:</span>
       <div class="allImages">
        <img src="photo/orf.png" alt="orf" class="orf">
        <img src="photo/blatt.png" alt="blatt" class="blatt">
        <img src="photo/wiener.png" alt="wiener" class="wiener">
        <img src="photo/immob.png" alt="immob" class="immob">
        <img src="photo/der.png" alt="der" class="der">
        <img src="photo/profil.png" alt="profil" class="profil">
        <img src="photo/vienna.png" alt="vienna" class="vienna">  
      </div> 
      </div></div>
  <!-- banner ending -->
  
      <!-- So funktioniert's starting -->
      <div class="funktion">
          <a name="funktioniert's"></a>
          <div class="row">
              
            <div class="col-md-7">
                
              <div class="sofunktion">
                  So funktioniert's
              </div>
              <!-- <div class="sofunction1">
                  1 ‣ Füll' unser kostenloses Formular aus und wir überprüfen, ob wir deine<br> Miete gesetzlich senken lassen können. Wenn Du im Altbau wohnst, sind die<br> Chancen hoch.
              </div> -->
              <div class="sofunction1">
                1 ‣ Füll' unser kostenloses Formular aus und wir überprüfen, ob wir dein<br/>
                Mietsenkungsverfahren finanzieren können. Wenn Du im Altbau wohnst, sind die<br/>
                Chancen hoch.
              </div>

              <div class="sofunction2">
                  2 ‣ Anschließend finanzieren wir ein Verfahren, damit Du weniger Miete<br> zahlst und zu viel bezahlte Miete zurückerhältst. 
              </div>
              <div class="sofunction3">
                  3 ‣ Wir übernehmen alle Kosten und erhalten nur im Erfolgsfall eine<br> Provision auf deine Mietrückerstattung. 
              </div>
              <div>
                  <span class="card1"><a href="mietesenken" style="text-decoration: none;" class="cardanchor1 cardtxt1 btn">Miete jetzt senken</a></span>
<!-- class="cardanchor2 cardtxt2 btn vpop" -->
                  <span class="card2"><a style="text-decoration: none;" class="cardanchor2 cardtxt2 btn" id="popup__toggle">‣ Erklärvideo</a></span>
              </div>
              
              <div id="video-popup-overlay"></div>

<!-- <div id="video-popup-container">
  <div id="video-popup-close" class="">&#10006;</div>
  <div id="video-popup-iframe-container">
      <iframe width="763px" height="430" src="https://www.youtube.com/embed/L9e49RRkVSI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <span class="cardd1 popupp"><a href="mietesenken.html" target="_blank" style="text-decoration: none;" class="cardanchor1 cardtxt1 btn" style="margin: 70px;">Miete jetzt überprüfen</a></span>
  </div>
</div> -->


<div class="popup__overlay">
  <div class="popup" id="popupVid">
    <a href="#" class="popup__close">X</a>
    <!-- <iframe width="640" height="480" src="https://www.youtube.com/embed/TRGoy0XLrUA?showinfo=0&rel=0" frameborder="0" allowfullscreen></iframe> -->
    <iframe src="https://www.youtube.com/embed/L9e49RRkVSI?showinfo=0&rel=0&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
  </div>
</div>


              </div>

              <div class="col-md-5">
                <img src="photo/tree2.jpg" class="tree" alt="tree">
              </div>
            </div>
            
      </div>
     
      <div class="row" style="max-width: 1344px !important;left: 0px !important;margin-left: 0px;">
      <div class="so-down col-md-12">
        <span class="so-down1">
            € 1.056.526,08
        </span>
        <span class="so-down2">
            bereits zurückgezahlt
        </span>

        <span class="so-down3">
            12.476-fach
        </span>
        <span class="so-down4">
            genutzter Service
        </span>

        <span class="so-down5">
            % 93,4
        </span>
        <span class="so-down6">
            Erfolgsquote
        </span>

        <span class="so-down7">
            <img src="photo/facebook.png" alt="facebook">
        </span>

        <span class="so-down8">
            <img src="photo/ssl.png" alt="ssl">
        </span>
      </div></div>
      <!-- So funktioniert's ending -->

      <div class="col-md-12 du">
          <div class="row">
          <span class="du1">
              Du kannst nur gewinnen
          </span>
          <span class="du2">
              <img src="photo/tick.png" alt="tick" class="tick">
          </span>
  
          <span class="du3">
              ‣ Kein Kostenrisiko
          </span>
          <!-- <span class="du3-content">
            Nach einer erfolgreichen Mietsenkung erhältst Du eine<br>
            Einmalzahlung der bereits zu viel bezahlten Miete. Nur wenn wir<br>
             Erfolg haben, gibst Du davon einen vorher vereinbarten Teil ab.
          </span> -->

          <span class="du3-content">
          Nach einer erfolgreichen Mietsenkung erhältst Du eine<br>
Einmalzahlung der bereits zu viel bezahlten Miete. Nur im <br>Erfolgsfall gibst Du davon einen
vorher vereinbarten Teil ab.
</span>
  
          <span class="du4">
              ‣ Kein Kündigungsgrund
          </span>
          <span class="du4-content">
              Keine Sorge, die Kündigung des Mietvertrags ist in Österreich<br> 
              gesetzlich geregelt. Wenn Du Mietheld beauftragst, kann dir dein<br>
               Vermieter deswegen nicht kündigen.
  
          </span>
  
          <span class="du5">
              ‣ Kein Aufwand
          </span>
          <span class="du5-content">
              Lehn Dich zurück, während Dein Mietsenkungsverfahren von<br> 
              Experten bearbeitet wird. Wir halten dich immer am Laufenden.
          </span>

        </div>
      </div>


       <!-- slider starting -->

       <div class="container">
          <a name="fragen"></a>
        <div class="row">
          <div class="">
            <div>
            <span class="imm">
            <img src="photo/ban1.jpg" alt="banner1" class="image">
            <div class="overlay">
                <div class="text"><i class="far fa-heart heartt"></i></div>
              </div>
            </span>
            
            <span class="imm1">
            <img src="photo/ban2.jpg" alt="banner2" class="image1">
            <div class="overlay1">
                <div class="text1"><i class="far fa-heart heartt1">&nbsp;&nbsp;8</i></div>
              </div>
          </span>
          <div>
          <span class="imm2">
              <img src="photo/ban3.jpg" alt="banner3" class="image2">
              <div class="overlay2">
                  <div class="text2"><i class="far fa-heart heartt2"></i></div>
                </div>
              </span>
              <span class="imm3">
                  <img src="photo/ban4.jpg" alt="banner4" class="image3">
                  <div class="overlay3">
                  <div class="text3"><i class="far fa-heart heartt3"></i></div>
            </div>
          </span>

            <div>
              <span class="imm4">
              <img src="photo/ban5.jpg" alt="banner5" class="image4">
              <div class="overlay4">
                  <div class="text4"><i class="far fa-heart heartt4">&nbsp;&nbsp;8</i></div>
                </div>
              </span>
              
              <span class="imm5">
              <img src="photo/ban6.jpg" alt="banner6" class="image5">
              <div class="overlay5">
                  <div class="text5"><i class="far fa-heart heartt5"></i></div>
                </div>
            </span>
            <div>

                <div>
                    <span class="imm6">
                    <img src="photo/ban7.jpg" alt="banner7" class="image6">
                    <div class="overlay6">
                        <div class="text6"><i class="far fa-heart heartt6">&nbsp;&nbsp;5</i></div>
                      </div>
                    </span>
                    
                    <span class="imm7">
                    <img src="photo/ban8.jpg" alt="banner8" class="image7">
                    <div class="overlay7">
                        <div class="text7"><i class="far fa-heart heartt7"></i></div>
                      </div>
                  </span>
                  <div>
                    <!-- accordion starting -->
                    <div class="clicker">
                      <span class="clicker-heading">Fragen & Antworten</span>
                      
                      <div class="jquery_accordion_wrapper">
                        <div class="jquery_accordion_item">
                          <div class="jquery_accordion_title">
                            Ist Mietheld wirklich kostenlos?
                          </div>
                          
                          <div class="jquery_accordion_content">
                            
                            <p>Die Benutzung unseres Mietenrechners sowie anschließende<br> Informationsgespräche sind vollständig kostenlos. Erst und nur wenn deine<br> Miete gesenkt wird, erhalten wir einen vorher vereinbarten Teil auf die<br> Einmalzahlung der bereits zu viel bezahlten Miete, die Du überwiesen<br> bekommst. Das garantiert, dass wir unser Bestes geben, und dass Du im<br> schlechtesten Fall die gleiche Miete zahlst, im besten Fall Miete sparst und<br> Geld zurückbekommst</p>
                          </div>
                        </div>
                      
                        <div class="jquery_accordion_item">
                          <div class="jquery_accordion_title">
                            Wie funktioniert der Service von Mietheld?
                              </div>
                          <!-- <div class="jquery_accordion_content">
                            <p>Nachdem Du unseren kostenlosen Mietenrechner benutzt hast, treten wir<br> mit dir in Kontakt und teilen dir mit, ob wir deine Mietsenkung organisieren<br> können, oder nicht. Dies hängt davon ab, ob deine Wohnung unter den<br> Vollanwendungsbereich des österreichischen Mietrechtsgesetz fällt. Falls ja,<br> finanzieren wir Rechtsanwälte oder Vereine für deinen Fall. Diese arbeiten in<br> Kooperation mit deinem Vermieter, Behörden und notfalls vor Gericht an<br> deiner Mietsenkung. Wenn dein Fall abgeschlossen ist, erhälst du zusätzlich<br> zur gesenkten Miete eine Mietrückerstattung abzgl. unserer Erfolgsprovision.</p>
                          </div> -->

                          <div class="jquery_accordion_content">
                            <p>Nachdem Du unseren kostenlosen Mietenrechner benutzt hast, treten wir<br>
                              mit dir in Kontakt und teilen dir mit, ob wir dein Verfahren zur Mietsenkung finanzieren
                              können, oder nicht. Dies hängt davon ab, ob deine Wohnung unter den
                              Vollanwendungsbereich des österreichischen Mietrechtsgesetz fällt. Falls ja,
                              finanzieren wir Rechtsanwälte oder Mietrechtsvereine zur Durchsetzung deiner Ansprüche.
                              Diese arbeiten in Kooperation mit deinem Vermieter, Behörden und notfalls vor Gericht an
                              deiner Mietsenkung. Wenn dein Fall abgeschlossen ist, erhältst du zusätzlich
                              zur gesenkten Miete eine Mietrückerstattung abzgl. unserer Erfolgsprovision.</p>
                          </div>

                        </div>
                      
                        <div class="jquery_accordion_item">
                          <div class="jquery_accordion_title">
                            Was kann mein Vermieter dagegen tun?
                             </div>
                          <div class="jquery_accordion_content">
                            <p> Keine Sorge, dein Vermieter kann deinen Mietvertrag nicht kündigen bzw.<br> auflösen. Falls Du einen befristeten Mietvertrag hast, kann sich dein<br> Vermieter höchstens NACH dem Befristungsablauf einen neuen Mieter<br> suchen.</p>
                          </div>
                        </div>


                        <div class="jquery_accordion_item">
                            <div class="jquery_accordion_title">
                                Wie lange dauert es, bis die Miete gesenkt wird?
                                </div>
                            <!-- <div class="jquery_accordion_content">
                              <p>Aufgrund langer Wartezeiten dauert ein Verfahren im Schnitt 3 bis 12<br> Monate. Dabei hängt es vorallem davon ab, wie kooperativ dein Vermieter ist.<br> Wir wollen selbstverständlich das beste Ergebnis für dich erreichen. Dafür<br> lohnt es zu warten.</p>
                            </div> -->

                            <div class="jquery_accordion_content">
                              <p>Aufgrund langer Wartezeiten dauert ein Verfahren im Schnitt 3 bis 12<br/>
                                Monate. Dabei hängt es vor allem davon ab, wie kooperativ dein Vermieter ist.
                                Selbstverständlich wird das beste Ergebnis für dich erzielt werden. Dafür
                                lohnt es zu warten.</p>
                            </div>



                          </div>

                          <div class="jquery_accordion_item">
                              <div class="jquery_accordion_title">
                                  Gilt das nur für Wien?
                                  </div>
                              <div class="jquery_accordion_content">
                                <p>Nein, solange Du im Altbau wohnst, versuchen wir österreichweit zu helfen.</p>
                              </div>
                            </div>
                            

                            <div class="jquery_accordion_item">
                                <div class="jquery_accordion_title">
                                    Funktioniert das auch, nachdem man ausgezogen ist?
                                    </div>
                                <div class="jquery_accordion_content">
                                  <p>Bei befristeten Mietverträgen: Ja, bis zu 6 Monaten nachdem Du ausgezogen<br> bist, hast Du einen potentiellen Anspruch auf eine Rückerstattung der bereits<br> zu viel bezahlten Miete. Danach präkludiert dein Anspruch.<br><br>

                                      Bei unbefristeten Mietverträgen: Leider nicht.</p>
                                </div>
                              </div>

                      </div>
                    </div>
                    
        </div>

        <!-- accordion ending -->

      <!-- slider ending -->

      
      
        <!-- client area starting -->
        <div class="client">
            <a name="kontakt"></a>
          <div class="client-message">
              <span>
                  
                <img src="photo/message.png" class="img-fluid" alt="message">
              </span>
              <span class="client-text">
                  Kontaktiere uns,
                </span><br>

                  <span class="client-text1" >
                     wir sind für Dich da.
                     </span>
                     <span class="client-link">
                      <span class="client-link-messanger">
                      <a  href="http://m.me/mietheld" style="color:#646666;" >‣ Facebook Messenger</a>
                      
                    </span>
                    <span class="client-link-email">
                      <a  href="mailto:kontakt@mietheld.at?subject=Homepage Anfrage" target="_self"  content="kontakt@mietheld.at" style="color:#646666;"><span class="client-span-email">‣ Email kontakt@mietheld.at</span>
                          </a>
                    </span>
                    <span class="client-link-phone">
                      <a href="tel:01348030" target="_self" style="color:#646666;" >‣ Telefon: 01 34 80 30</a>
                    </span>
                     </span>

                     <div class="client-frame">

                         <iframe name="f1ab809e644a0f8" width="280px" height="214px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;app_id=304553036307597&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df2ce56ba13aa3c%26domain%3Dwww.mietheld.at%26origin%3Dhttps%253A%252F%252Fwww.mietheld.at%252Ff1bd980796356c4%26relation%3Dparent.parent&amp;container_width=280&amp;height=214&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Fmietheld&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=280" style="border: none; visibility: visible; width: 280px; height: 181px;" class=""></iframe>
                      </div>
            </div>
        </div><br><br>
        <!-- client area ending -->





        <!-- footer starting -->
        
            <div class="container footer">
                 

Die gesetzlich erlaubte maximale Miete in einem österreichischem Altbau (Baujahr vor 1945) ist durch das österreichische Mietrechtsgesetz (MRG) §16 (Vereinbarungen über die Höhe des Hauptmietzinses) reglementiert. Je nach Größe, Art, Beschaffenheit, Lage, Ausstattungs- und Erhaltungszustand der Altbauwohnung ergibt sich ein sogenannter Richtwertmietzins bzw. Richtwert, der sich berechnen lässt. Zahlt ein Mieter zu hohe bzw. zu viel Miete, kann er unter gewissen Vorraussetzungen der Wohnung die Miete senken bzw. reduzieren, sowie bereits zu viel bezahlte Miete zurückfordern und möglicherweise zurückholen. Eine Mietsenkung (bzw. Mietreduktion, Mietminderung, Mietzinsreduktion, Mietzinssenkung) fällt nicht unter die im Mietrechtsgesetz definierten wichtigen Kündigungsgründe. DMietheld leistet keine Rechtsauskunft, Rechtsberatung oder sonstige rechtliche Dienstleistungen, sondern organisiert die Finanzierung spezialisierter Rechtsanwälte und Juristen insbesondere im Standort Wien. Dabei werden sämtliche anfallende Kosten für den Mieter übernommen und ausschließlich im Erfolgsfall der Mietsenkung eine Provision auf die Rückerstattung der bereits zu viel bezahlten Altbaumiete fällig. Der Mieter trägt somit kein zusätzliches Kostenrisiko. Der kostenlose Mietenrechner (bzw. Mietencheck, Mietzinsrechner, Mietpreisrechner) und dessen Auswertung stellt keine rechtliche Auskunft dar, sondern dient ausschließlich zur unverbindlichen Ersteinschätzung hinsichtlich der Annehmbarkeit einer potentiellen Finanzierungsanfrage.<br><br><br>

<a href="impressum" target="_self" class="footer-link">Impressum</a>
            </div>

        <!-- footer ending -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
          $('.jquery_accordion_title').click(function() {
      $(this).closest('.jquery_accordion_item').siblings().removeClass('active').find('.jquery_accordion_content').slideUp(400);
      $(this).closest('.jquery_accordion_item').toggleClass('active').find('.jquery_accordion_content').slideToggle(400);
      return false;
    });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



        <script type="text/javascript">
        $(document).ready(function() {
  $('.collapse.in').prev('.panel-heading').addClass('active');
  $('#accordion, #bs-collapse')
    .on('show.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').addClass('active');
    })
    .on('hide.bs.collapse', function(a) {
      $(a.target).prev('.panel-heading').removeClass('active');
    });
});
    </script>
    

    
        <script type="text/javascript">
            $('li a').on('click', function (e) {
                var targetSec = $(this).attr('href');
                var targetSecSplit =targetSec.split("#");
                console.log(targetSecSplit);
                $('html, body').animate({
                    scrollTop: $('#' + targetSecSplit[1]).offset().top
                }, 1000);
            });
        </script>



        <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
   // document.getElementById("prevBtn").style.display = "none";
  } else {
    //document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
   // document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    //document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n,progressBar) {




console.log(n);
var setTimeoutValue= 1000; 
if(n==1){
setTimeoutValue=500;
}

 setTimeout(
    function() {





  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:


      console.log(progressBar);
  $('.progress-bar').css("width", progressBar+"%");



  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);






    }, setTimeoutValue);



}


function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      var getplaceholder = y[i].placeholder;
      //y[i].after("This field is required.");
      //console.log( getplaceholder);
      document.getElementById(getplaceholder+"_required").style.display = "inline";

      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {

  // This function removes the "active" class of all steps...

  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  //x[n].className += " active";
}
 $(document).ready(function(e){
        $(".img-check").click(function(){
        $(this).toggleClass("check");
      });
  });


 function remove_error(val){
    console.log(val);
    $("#"+val+"_required").hide();
    $("#"+val).css('background',"white");
 }

 function remove_error_for_num(val){
    console.log(val);
    $("#"+val+"_required").hide();
    $("#"+val).css('background',"white");
 }




$("#front_form_submit").click(function(){

      console.log("test");


      var quadratmeter = $("#Quadratmeter").val();
      var miete = $("#Miete").val();
      var deart = $("input:radio[name=second_step_checkbox]:checked").val();
      var mietvertrag = $("input:radio[name=third_step_checkbox]:checked").val();
      var jahre = $("input:radio[name=fouth_step_checkbox]:checked").val();
      //3_jahre
      var telefonnummer = $("#phone").val();
      var client_ip ='';
      console.log("Quadrameter - "+quadratmeter);
      console.log("miete - "+miete);
      console.log("deart - "+deart);
      console.log("mietvertrag - "+mietvertrag);
      console.log("jahre - "+jahre);

      console.log("tele"+telefonnummer);
      console.log(telefonnummer.length);
      var telefonnummerLength = telefonnummer.length;
      if( !(telefonnummerLength > 8 )) {
       document.getElementById("phone_required").style.display = "inline";
       return;
      }

     // $.getJSON('http://gd.geobytes.com/GetCityDetails?callback=?', function(data) {
      //console.log(JSON.stringify(data, null, 2));
      //console.log(data.geobytesipaddress);
     // client_ip = data.geobytesipaddress;
   // });

$.getJSON('https://json.geoiplookup.io/api?callback=?', function(data) {
  //console.log(JSON.stringify(data, null, 2));
  client_ip = data.ip;
});

    var form = new FormData();
    form.append("quadratmeter", quadratmeter);
    form.append("miete", miete);
    form.append("deart", deart);
    form.append("mietvertrag", mietvertrag);
    form.append("3_jahre", jahre);
    form.append("telefonnummer", telefonnummer);
    form.append("client_ip", client_ip);

// console.table(form);
    // var settings = {
    //   "async": true,
    //   "crossDomain": true,
    //   "url": "https://hooks.zapier.com/hooks/catch/1043893/o6en6ng/",
    //   "method": "POST",
    //   "timeout": 0,
    //   "headers": {
    //     'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8',
    //     'Access-Control-Allow-Origin' : '*',
    //     "Access-Control-Allow-Methods " : " GET, POST, OPTIONS, PUT, DELETE",
    //     "Access-Control-Allow-Headers": "Content-Type, Access-Control-Allow-Headers, X-Requested-With",
    //     "Authorization": "Bearer wWBSaGawwjleadX345FormeQL5SToqKI+41272",
    //     "User-Agent": "PostmanRuntime/7.18.0",
    //     "Accept": "*/*",
    //     "Cache-Control": "no-cache",
    //     "Host": "hooks.zapier.com",
    //     "Authorization": "Bearer wWBSaGawwjleadX345FormeQL5SToqKI+41272",
    //     "Content-Type": "multipart/form-data; boundary=--------------------------091867509312688440249752",
    //     "Content-Length": "886",
    //     "Connection": "keep-alive",
    //     "cache-control": "no-cache"
    //   },
    //   "processData": false,
    //   "mimeType": "multipart/form-data",
    //   "contentType": false,
    //   "data": form
    // };

    // $.ajax({
    //     url: 'https://hooks.zapier.com/hooks/catch/1043893/o6en6ng/',
    //     data : form,
    //     type : "POST",
    //     complete: function (response) {
    //         console.log(response);
    //         $('#post').html(response.responseText);
    //     },
    //     error: function (jqXHR, exception) {
    //         getErrorMessage(jqXHR, exception);
    //     },
    // });


var myKeyVals = { "quadratmeter" : quadratmeter, 
                    "miete": miete,
                    "gebäudeart": deart, "mietvertrag" : mietvertrag, 
                    "3_jahre" : jahre, 
                    "telefonnummer" : telefonnummer,"client_ip" : client_ip
                  };
console.log("-------------------------------");
console.table(myKeyVals);

var saveData = $.ajax({
      type: 'POST',
      url: "https://hooks.zapier.com/hooks/catch/1043893/o6en6ng/",
      data: myKeyVals,
      dataType: "text",
      success: function(resultData) { 
        var obj = JSON.parse(resultData);
        if(obj.status == 'success'){
                  $('.progress-bar').css("width", "100%");
                  $(".final_tick_image").css("display","inline");
                  $(".tab").css("display","none");
                  console.log("success");
        }else{
                $('.progress-bar').css("width", "100%");
                $(".final_tick_image").css("display","inline");
                $(".tab").css("display","none");
                console.log("something went wrong");
        
        }

       }
});
saveData.error(function() { alert("Something went wrong"); });



    // $.ajax(settings).done(function (response) {
    //   console.log("test");
    //   console.log(response);
    //   console.log(response.status);
      
    //  // if(response.status ==  "success"){
  
    //     //console.log(Quadratmeter+Miete+second_step_checkbox+third_step_checkbox+fouth_step_checkbox+phone);
    //   //}

    // });
})





 $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});


</script>
<script type="text/javascript">

//  function myFunction(x) {
//  x.classList.toggle("fa-thumbs-down");
//   $(this).toggleClass("fa-heart fa-heart-o");
//}

$(".heart.fa").click(function() {
  $(this).toggleClass("fa-heart fa-heart-o");
});
</script>
<script type="text/javascript">
//   $(document).ready(function(){
//     var owl = $(".owl-carousel");
//     owl.owlCarousel({
//         items: 1,
//         autoplay: true,
//         autoPlaySpeed: 1000,
//         autoPlayTimeout: 1000,
//         autoplayHoverPause: true
//     });
// });


//$(document).ready(function() {
 
 // $("#owl-demo-first").owlCarousel({
 
    //  autoPlay: 3000, //Set AutoPlay to 3 seconds
 
    //  items : 4,
      // itemsDesktop : [1199,3],
      // itemsDesktopSmall : [979,3]
 
 // });
 
//
// var owl = $("#owl-demo-first"); 

// owl.owlCarousel({
//     items:5,
//     loop:true,
//     merge:true,
//     center:true,
//     responsiveClass:true,
//     mouseDrag:true,
//     touchDrag:true,
//     pullDrag:true,
//     freeDrag:false,
//     //margin:5,
//     callbacks:true,
//     navigation:true,
//     URLhashListener:true,
//     dots:false,
//     //autoplayHoverPause:true,
//     startPosition: 'URLHash'
// });



$(window).on('load resize', function() {

  var check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  //return check;
  if(check){
    window.location.href="https://m.mietheld.at/";
  }
   // console.log('All assets are loaded')
})



</script>

<script>
$(".vpop").on('click', function(e) {
  e.preventDefault();
  $("#video-popup-overlay,#video-popup-iframe-container,#video-popup-container,#video-popup-close").show();
  
  var srchref='',autoplay='',id=$(this).data('id');
  if($(this).data('type') == 'vimeo') var srchref="//player.vimeo.com/video/";
  else if($(this).data('type') == 'youtube') var srchref="https://www.youtube.com/embed/";
  
  if($(this).data('autoplay') == true) autoplay = '?autoplay=1';
  
  $("#video-popup-iframe").attr('src', srchref+id+autoplay);
  
  $("#video-popup-iframe").on('load', function() {
    $("#video-popup-container").show();
  });
});


$("#video-popup-close, #video-popup-overlay").on('click', function(e) {
  $("#video-popup-iframe-container,#video-popup-container,#video-popup-close,#video-popup-overlay").hide();
  $("#video-popup-iframe").attr('src', '');
var stopVideos = function () {
  var videos = document.querySelectorAll('iframe, video');
  Array.prototype.forEach.call(videos, function (video) {
    if (video.tagName.toLowerCase() === 'video') {
      video.pause();
    } else {
      var src = video.src;
      video.src = src;
    }
  });
};
});


var videos = document.getElementsByTagName("iframe"), fraction = 0.8;
var videos = document.getElementsByTagName("video"), fraction = 0.8;




var p = $(".popup__overlay");

$("#popup__toggle").click(function() {
  p.css("display", "block");
});
p.click(function(event) {
  e = event || window.event;
  if (e.target == this) {
    $(p).css("display", "none");
  }
});
$(".popup__close").click(function() {
  p.css("display", "none");
});

//video popup
function toggleVideo(state) {
  // if state == 'hide', hide. Else: show video
  var div = document.getElementById("popupVid");
  var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
  //div.style.display = state == 'hide' ? 'none' : '';
  func = state == "hide" ? "pauseVideo" : "playVideo";
  iframe.postMessage(
    '{"event":"command","func":"' + func + '","args":""}',
    "*"
  );
}

$("#popup__toggle").click(function() {
  p.css("visibility", "visible").css("opacity", "1");
});

p.click(function(event) {
  e = event || window.event;
  if (e.target == this) {
    $(p)
      .css("visibility", "hidden")
      .css("opacity", "0");
    toggleVideo("hide");
  }
});

$(".popup__close").click(function() {
  p.css("visibility", "hidden").css("opacity", "0");
  toggleVideo("hide");
});



function isIE() {
  ua = navigator.userAgent;

  var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
  
  return is_ie; 
}

if (isIE()){
  $('.image_inside_checkbox').css('display','inline-block');
}

</script>

<script>
function fadeOutEffect() {
    var fadeTarget = document.getElementById("notificationDiv");
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
        }
        if (fadeTarget.style.opacity > 0) {
            fadeTarget.style.opacity -= 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 70);
    fadeTarget.parentNode.removeChild(fadeTarget);
}



  function removeNotification(){
     
   document.getElementById("removeNot").addEventListener('click', fadeOutEffect);
   document.getElementById('bannerr1').style.position = 'absolute';
  document.getElementById('bannerr1').style.top = '879px';
   }

if(document.getElementById('notificationDiv')){
  document.getElementById('bannerr1').style.position = 'absolute';
  document.getElementById('bannerr1').style.top = '910px';
}

   </script>

  </body>
</html>


<?php
}
?>




