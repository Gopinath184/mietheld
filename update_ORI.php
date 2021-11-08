<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: https://m.mietheld.at/');
    exit(0);
}else if($detect->isTablet()){
        // any tablet
   header('Location: https://m.mietheld.at/');
    exit(0);
}else{
  //header('Location: mietheld.html');
    //exit(0);
}
?>
<!doctype html>
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

      <style type="text/css">
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
.container-fluid {

     padding-right: 0px !important; 
     padding-left: 0px !important;
}
        iframe {
    border: none;
}
.update-form{
  height: 940px;
  width: 100%;
  /* background: linear-gradient(90deg, rgba(254,241,202,1) 0%, rgba(255,234,183,1) 35%, rgba(237,217,167,1) 100%)!important; */
  background: url("photo/background.webp") no-repeat center fixed;
  background-size: cover;
}
@media (min-width: 1200px) {
  .container {
    width: 50% !important;
  }
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

        <!-- menubar starting -->
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
          </nav>
    </div>
          <!-- menubar ending -->

          <!-- update form starting -->
          <div class="update-form">
<div class="container" style="margin-top: 0px !important;">
  <div class="row">
    <div class="col-md-12 off-set-3" style="    height: 551px !important;margin-top: 29px;">
      <iframe width="100%" height="100%" name="htmlComp-iframe" scrolling="auto" src="https://www-mietheld-at.filesusr.com/html/ef305b_dd8985314c535aea38dc5f07070815d9.html"></iframe>
    </div>
  </div>
</div>
              <!--  <div class="container update-form1"> -->
   
             <!--    </div> -->
    
                <div>
                        <a href="impressum" target="_self" class="update-footer-link col-sm">Impressum</a>
                </div>


                <!--  <div class="update-main-form"> -->
                     
                
                
                
                
                
              <!--       </div>
                <div class="update-form2">
                    <span class="update-form2-text ">Update zu Deinem Fall</span>
                </div> -->
                
            </div>
            
        </div>
   


    


        
           
        <!-- update form ending -->

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


