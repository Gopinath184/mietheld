 <?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();
if ($detect->isMobile()) {
  echo "<script>window.location.href='https://m.mietheld.at/mietesenken'</script>";
    header('Location: https://m.mietheld.at/mietesenken');
    exit(0);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <link rel="icon"  href="photo/favicon.png" />
    <title>Mietheld-Miete im Altbau berechen,Senken,Zuruckholen</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

      <style type="text/css">

.mietesenken{
  height: 1050px;
  width: 100%;
/* background: linear-gradient(90deg, rgba(254,241,202,1) 0%, rgba(255,234,183,1) 35%, rgba(237,217,167,1) 100%)!important; */
  background: url("photo/background.webp") no-repeat center fixed;
  background-size: cover;
}

    .mietesenkan-form {
    position: absolute;
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
    margin-left: 0px;
    margin-bottom: 20px;
}
.iti__flag.iti__at{
  margin-left: 0px;
}
.tick_image {
  margin-left: -10px!important;
  margin-bottom: 12px!important;
}
.progress-bar{
  background-color: #AEDBCA!important;
}

.progress {
  margin-top: 25px;
  /*margin-left: 280px; */
}
.input_div_check {
  /*margin-left: 222px!important;*/
      /*display: grid;
    position: relative;
    left: 135px;*/
}
.full_div_check {

display:grid!important;
}
.footer-mietesenkan{
  position: absolute;
  top: 1077px;
  color: #323232;
  text-align: center;
  line-height: normal;
  letter-spacing: normal;
  font: normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;
  font-family:wf_736a916d09a94cd392744ed6a;
}

.footer-link-mietesenkan{

  text-decoration: underline;
  color: #323232;
  font: normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;
  font-family:wf_736a916d09a94cd392744ed6a;
}

.footer-mietesenkan a:hover{
  color: #323232;
}

.img-thumbnail{
        transition-duration: 1s;
        transition-timing-function: ease;

}
.img-thumbnail:hover{
  transform: scale(1.2);
}
.phoneNumberField{
  margin-left: 25px;
}
body{
  width: 100% !important;
  margin: auto !important;
}
.navBarWithFlex{
    margin: auto;
    text-align: center;
    display: flex;
    justify-content: center;
}


.mietesenken{
      text-align: center !important;
}

.mietesenkan-form {
      position: relative;
    top: 570px !important;
    margin-left: 0px !important;
    color: rgb(47, 46, 46);
    display: flex;
    font-size: 16px;
    line-height: normal;
    letter-spacing: normal;
    font-family: wf_736a916d09a94cd392744ed6a;
    justify-content: center;
}

.container-fluid {

     padding-right: 0px !important; 
     padding-left: 0px !important;
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







.mietesenken {
    height: 1050px;
    width: 100%;
    background-image: linear-gradient(to bottom right, #FBE9B4, #FBE9B4);
}

.mietesenken {
    height: 1050px;
    width: 100%;
    /* background: linear-gradient(90deg, rgba(254,241,202,1) 0%, rgba(255,234,183,1) 35%, rgba(237,217,167,1) 100%)!important; */
    background: url(photo/background.webp) no-repeat center fixed;
    background-size: cover;
}

.mietesenken {
    text-align: center !important;
}

.mietesenken {
    height: 1050px;
    width: 100%;
    /* background: linear-gradient(90deg, rgba(254,241,202,1) 0%, rgba(255,234,183,1) 35%, rgba(237,217,167,1) 100%)!important; */
    background: url(photo/background.webp) no-repeat center fixed;
    background-size: cover;
}

.mietesenken {
    height: 1050px;
    width: 100%;
    background-image: linear-gradient(to bottom right, #FBE9B4, #FBE9B4);
    background-color: ;
}

div {
    display: block;
}

div, span {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: 0 0;
}

div, span {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: 0 0;
}

div, span {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: 0 0;
}

div, span {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    vertical-align: baseline;
    background: 0 0;
}

*, *::before, *::after {
    box-sizing: border-box;
    // 1: ;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}

:root {
    --blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px;
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
}

html {
    font-family: sans-serif;
    line-height: 1.15;
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
}

*, *::before, *::after {
    box-sizing: border-box;
    // 1: ;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
    // 1: ;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, *::before, *::after {
    box-sizing: border-box;
}

*, ::after, ::before {
    box-sizing: border-box;
}
*, *::before, *::after {
    box-sizing: border-box;
}
*, ::after, ::before {
    box-sizing: border-box;
}



      </style>

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
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=215303996265249&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

  </head>
  <body>
    <div class="container-fluid navBarWithFlex">
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
                    <a class="nav-link" href="/#funktioniert's" tabindex="-1" aria-disabled="true" id="a1"> <span class="menu1">So funktioniert's</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/#fragen" tabindex="-1" aria-disabled="true"> <span class="menu2">Fragen</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/#kontakt" tabindex="-1" aria-disabled="true"> <span class="menu3">Kontakt</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="update" tabindex="-1" aria-disabled="true"> <span class="menu4">Update</span></a>
                  </li>
                </ul>
              
                <form class="form-inline my-2 my-lg-0">
                    <a class="nav-link" href="https://www.mietheld.at/" tabindex="-1" aria-disabled="true"><img src="photo/logo.png" alt="Mietheld" class="logo"/></a>
                </form>
              </div>
          </nav><br>
   
    </div>
       <div class="container-fluid">
    <!-- menubar starting -->
    <div class="navbarr">
      
       
          <!-- menubar ending -->



          <!-- miete senken starting  -->

          <div class="mietesenken">
          	<div class="mieteesenken col-sm">
            <p class="mietesenkan-heading1">1. Formular ausfüllen</p>
            <span class="mietesenkan-content1">Füll' bitte unser kostenloses Formular aus, damit wir notwendige<br></span>
            <div class="mietesenkan-content1-down">Daten zu Deiner Wohnung erhalten.</div><br>


            <p class="mietesenkan-heading2">2.  Telefongespräch führen</p>
            <div class="mietesenkan-content2">​
                    Nachdem wir uns Deine Daten angeschaut haben, rufen wir dich <br></div>
            <div class="mietesenkan-content2-down">kostenlos an, um zu besprechen, wie Mietheld Dir helfen kann.</div><br>

            <p class="mietesenkan-heading3">​
                    3. Mietheld beauftragen</p>
            <div class="mietesenkan-content3">​
                    Sollte eine Mietsenkung in Deinem Fall rechtlich möglich sein, kannst <br></div>
            <div class="mietesenkan-content3-down">Du uns damit beauftragen, ein Mietsenkungsverfahren zu finanzieren.</div>
        </div>
            <div class="mietesenkan-form">




                      <form id="regForm" action="#" method="POST" autocomplete="on">
                        
                        <!-- One "tab" for each step in the form: -->
                        
                        <div class="tab">


                          <div class="form-group has-feedback">
                          <div class="input-group">
                            <input type="number" style="width: 770px; margin-left: 20px; background-color: white;" class="form-control formrounded" id="Quadratmeter" placeholder="Quadratmeter" required onkeydown="remove_error('Quadratmeter');">
                          </div>
                      <!--     <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                          <div  id="Quadratmeter_required"  class="help-block with-errors text-danger" style="display: none">Bitte f?llen Sie dieses Feld aus</div>
                        </div>



                          <div class="form-group has-feedback">
                          <div class="input-group">
                            <input type="number"   style="width: 300px; margin-left: 20px; background-color: white;" class="form-control formrounded" id="Miete" placeholder="Miete" required onkeydown="remove_error('Miete');">
                          </div>
                      <!--     <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
                          <div  id="Miete_required" class="help-block with-errors text-danger"  style="display: none">Bitte f?llen Sie dieses Feld aus</div>
                        </div>

                       <button class="submit_btn front_submit_btn" style=" cursor: pointer; width: 444px;" type="button" value="MIETE JETZT KOSTENLOS ?ERPR?EN" onclick="nextPrev(1,'25')"> MIETE JETZT KOSTENLOS &#220;BERPR&#220;FEN</button>

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
                      <input type="radio" name="second_step_checkbox" class="image_inside_checkbox second_step_checkbox" autocomplete="off" onclick="nextPrev(1,'40')" value="unbekannt">
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
        <img src="img/form/form_2_img2.jpg" alt="..." class="img-thumbnail img-check" width="100" height="100" style="margin-left: 15px;">
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
 <div class="form-group has-feedback phoneNumberField">
      <div class="text-center">
        <input id="phone" name="phone" size="70" style="" type="tel" class="formrounded input-block-level phone-input"  required onkeydown="remove_error_for_num('phone');" value="+43">
      </div>
  <!--     <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
      <div  id="phone_required"  class="help-block with-errors text-danger " style="display: none; font-size:21px; margin-left: -27px; font-family: wf_736a916d09a94cd392744ed6a;">Bitte gib' eine gültige Telefonnummer ein</div>
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
                                                            <img id="" alt="" src="photo/1sDamef.png" class="tick_image" style="cursor: auto;margin-bottom: 10px!important;">
                                                                  <small style="color: black!important;font-size:12px;
                                                                  font-family: auto !important;
                                                                  font-weight: 400;"><b><span style="margin-left:-337px!important;position: absolute;
    top: 126px;">Vielen Dank! Du bekommst in Kürze eine Auswertung.</span><br>
                                                                        <span style="margin-left:10px!important;">Schau dir in der Zwischenzeit unsere Homepage an.</span></b></small>
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



    <div class="progress text-center"  style="width:250px;">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">

    </div>
  </div>


</form>









            </div>
                </div>



                <div class="" style="background: #fbe9b4; max-width:1344px;">
                  <div class="row">
                    <div class="col-md-5 offset-4 text-center " >












                    </div>
                  
                </div>

                <!-- footer starting -->
              <div class="footer-mietesenkan col-sm">
                <a href="impressum" target="_self" class="footer-link-mietesenkan">Impressum</a>
              </div>
              <!-- footer ending -->
  
            </div>

            <!-- miete senken ending -->
</div>
              
            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <!--    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script> -->
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

    

    // var settings = {
    //   "async": true,
    //   "crossDomain": true,
    //   "url": "https://hooks.zapier.com/hooks/catch/1043893/l8tpsh/",
    //   "method": "POST",
    //   "headers": {
    //     'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8',
    //     //'Access-Control-Allow-Origin' : '*',
    //     //"Access-Control-Allow-Methods " : " GET, POST, OPTIONS, PUT, DELETE",
    //     "Access-Control-Allow-Headers": "Content-Type, Access-Control-Allow-Headers, X-Requested-With",
    //     "Authorization": "Bearer wWBSaGawwjleadX345FormeQL5SToqKI+41272",
    //     "User-Agent": "PostmanRuntime/7.18.0",
    //     "Accept": "*/*",
    //     "Cache-Control": "no-cache",
    //     "Postman-Token": "f33380e0-8c01-475b-8f3a-c4b68cd8f9f1,2e99ddd3-0ef7-467c-b251-c5f2245fdf41",
    //     "Host": "hooks.zapier.com",
    //     "Content-Type": "multipart/form-data; boundary=--------------------------093463760980959760670775",
    //     "Accept-Encoding": "gzip, deflate",
    //     "Content-Length": "886",
    //     "Connection": "keep-alive",
    //     "cache-control": "no-cache"
    //   },
    //   "processData": false,
    //   "contentType": false,
    //   "mimeType": "multipart/form-data",
    //   "data": form
    // }


   var myKeyVals = { "quadratmeter" : quadratmeter, 
                    "miete": miete,
                    "gebäudeart": deart, "mietvertrag" : mietvertrag, 
                    "3_jahre" : jahre, 
                    "telefonnummer" : telefonnummer,"client_ip" : client_ip
                  };
// console.log("-------------------------------");
// console.table(myKeyVals);


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


        // $('.progress-bar').css("width", "100%");
        // $(".final_tick_image").css("display","inline");
        // $(".tab").css("display","none");
        
        
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
var owl = $("#owl-demo-first"); 

owl.owlCarousel({
    items:5,
    loop:true,
    merge:true,
    center:true,
    responsiveClass:true,
    mouseDrag:true,
    touchDrag:true,
    pullDrag:true,
    freeDrag:false,
    //margin:5,
    callbacks:true,
    navigation:true,
    URLhashListener:true,
    dots:false,
    //autoplayHoverPause:true,
    startPosition: 'URLHash'
});

</script>

<script type="text/javascript">
  
           $(window).on('load resize', function() {

var check = false;
(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
//return check;
if(check){
    window.location.href="https://m.mietheld.at/mietesenken";
}
 // console.log('All assets are loaded')
})


</script>



</body>
</html>
