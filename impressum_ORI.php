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


<style>
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


  </head>
  <body>
      
    <!-- menubar starting -->
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


          <!-- impressum starting -->
          <div class="container impressum">
            <span class="impressum-heading">
                    Mietheld GmbH<br>
                    Eßlinggasse 4/6a<br>
                    1010 Wien<br>
                    495405 m<br>
            </span>

            <div class="impressum-text">

                    <div class="">Inhalt der Website</div>
                  
                               <p> Die auf dieser Website dargestellten Materialien, Beispiele, Inhalte und angebotenen Leistungen stellen keine Rechtsberatung dar und sind eine reine unverbindliche Informationsleistung von der GMBH. Insbesondere stellen sämtliche Informationen und Inhalte auf dieser Website kein Angebot für eine beratende oder treuhänderische Leistung dar.<br/>
                               
                                Die GMBH weist ausdrücklich darauf hin, dass für rechtliche Auskünfte stets ein Rechtsanwalt aufzusuchen ist.<br/>
                    
                                Die GMBH übernimmt keine Gewähr für die Aktualität, Qualität, Richtigkeit und Vollständigkeit der gemachten Angaben. Insbesondere übernimmt die GMBH keine Haftung für Schäden gleich welcher Art (materielle bzw ideelle Schäden), die durch die Nutzung der Website oder durch die Verwendung der auf der Website angebotenen Informationen resultieren könnten.<br/>
                  
                                Alle Angebote sind unverbindlich. Die GMBH behält es sich ausdrücklich vor, Inhalte der Website oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern oder zu löschen bzw die Veröffentlichung zeitweise oder endgültig einzustellen.</p>
                  
                                  <br/>
                  
                                <p>Verweise und Verknüpfungen („Hyperlinks“)<br/>
                  
                  Direkte und indirekte Verweise bzw Verknüpfungen auf externe Websites („Hyperlinks“) stellen lediglich einen Hinweis auf weitere Informationsmöglichkeiten dar. Sämtliche Inhalte dieser externen Websites unterliegen nicht der Verantwortung bzw der Kontrolle von der GMBH. Die GMBH übernimmt daher keine Verantwortung für die Aktualität, Qualität, Richtigkeit und Vollständigkeit der Inhalte sämtlicher verlinkten bzw verknüpften externen Websites und schließt jegliche Haftung für eventuelle Schäden gleich welcher Art (materielle bzw ideelle Schäden), die aus der Nutzung solcherart dargebotener Informationen entstehen.<br/>
                  
                  Urheberrechte<br/>
                  
                  Sämtliche auf dieser Website dargestellten Bilder, Logos, Grafiken, Texte und sonstige Materialien sind Eigentum der GMBH bzw wurden bei fotolia.de angekauft. Die GMBH behält sich diesbezüglich alle Rechte vor.<br/>
                  Eine Vervielfältigung, Verbreitung und/oder Verwendung des Inhalts dieser Website in anderen elektronischen oder gedruckten Publikationen bedarf bei sonstiger Rechtswidrigkeit der vorherigen schriftlichen Zustimmung der GMBH.<br/>
                  Datenschutz: Cookies<br/>
                  
                  Auf unserer Webseite werden sogenannte Cookies verwendet. Cookies sind kleine Textdateien, die an den Browser des jeweiligen Besuchers geschickt und auf dessen Computer/Smartphone abgelegt werden, um sie dort als eine anonyme Kennung zu speichern. Durch die Verwendung von Cookies kann der Besucher während der Dauer seiner Nutzung unserer Website als Nutzer identifiziert werden. Dies ist notwendig, um z. B. ein Inserat bearbeiten/löschen bzw. verlängern zu können. Persönliche Daten werden nicht von Cookies erfasst. Eine Ausspähung der Festplatte durch einen Cookie ist nicht möglich.<br/>
                  
                  Weiters werden von unseren Dienstleistern und Werbepartnern Cookies eingesetzt (Bsp.: für das Werbe-, bzw. Analysenetzwerk). Diese Textdateien ermöglichen die anonymisierte Wiedererkennung von Nutzern.<br/>
                  
                  Generell können Sie das Speichern von Cookies auf Ihrer Festplatte verhindern, indem Sie in Ihren Browser-Einstellungen „keine Cookies akzeptieren“ wählen. Sie können Ihren Browser auch so einstellen, dass dieser Sie vor dem Setzen von Cookies fragt, ob Sie einverstanden sind. Schließlich können Sie auch einmal gesetzte Cookies jederzeit wieder löschen. Wie dies im Einzelnen funktioniert, entnehmen Sie bitte der Anleitung Ihres Browser-Herstellers. Wenn Sie keine Cookies akzeptieren, kann dies im Einzelfall zu gewissen Funktionseinschränkungen der Webseite führen.<br/>
                  
                  Datenschutz: Verwendung von Social Plugins<br/>
                  
                  Facebook:<br/>
                  
                  Dieses Angebot verwendet Social Plugins („Plugins“) des sozialen Netzwerkes facebook.com, welches von der Facebook Ireland Ltd., 4 Grand Canal Square, Grand Canal Harbour, Dublin 2, Irland betrieben wird („Facebook“). Die Plugins sind an einem der Facebook Logos erkennbar (weißes „f“ auf blauer Kachel, den Begriffen „Like“, „Gefällt mir“ oder einem „Daumen hoch“-Zeichen) oder sind mit dem Zusatz „Facebook Social Plugin“ gekennzeichnet. Die Liste und das Aussehen der Facebook Social Plugins kann hier eingesehen werden: <br/>
                  
                  Wenn ein Nutzer eine Webseite dieses Angebots aufruft, die ein solches Plugin enthält, baut sein Browser eine direkte Verbindung mit den Servern von Facebook auf. Der Inhalt des Plugins wird von Facebook direkt an Ihren Browser übermittelt und von diesem in die Webseite eingebunden. Der Anbieter hat daher keinen Einfluss auf den Umfang der Daten, die Facebook mit Hilfe dieses Plugins erhebt und informiert die Nutzer daher entsprechend seinem Kenntnisstand. Durch die Einbindung der Plugins erhält Facebook die Information, dass ein Nutzer die entsprechende Seite des Angebots aufgerufen hat. Ist der Nutzer bei Facebook eingeloggt, kann Facebook den Besuch seinem Facebook-Konto zuordnen.<br/>
                  
                  Wenn Nutzer mit den Plugins interagieren, zum Beispiel den Like Button betätigen oder einen Kommentar abgeben, wird die entsprechende Information von Ihrem Browser direkt an Facebook übermittelt und dort gespeichert. Falls ein Nutzer kein Mitglied von Facebook ist, besteht trotzdem die Möglichkeit, dass Facebook seine IP-Adresse in Erfahrung bringt und speichert. Laut Facebook wird in Deutschland nur eine anonymisierte IP-Adresse gespeichert.<br/>
                  
                  Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie die diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz der Privatsphäre der Nutzer, können diese den Datenschutzhinweisen von Facebook entnehmen: https://www.facebook.com/about/privacy/.<br/>
                  
                  Wenn ein Nutzer Facebookmitglied ist und nicht möchte, dass Facebook über dieses Angebot Daten über ihn sammelt und mit seinen bei Facebook gespeicherten Mitgliedsdaten verknüpft, muss er sich vor dem Besuch des Internetauftritts bei Facebook ausloggen.<br/>
                  
                  +1 Schaltfläche von Google+:<br/>
                  
                  Dieses Angebot verwendet die „+1″-Schaltfläche des sozialen Netzwerkes Google Plus, welches von der Google Inc., 1600 Amphitheatre Parkway, Mountain View, CA 94043, United States betrieben wird („Google“). Der Button ist an dem Zeichen „+1″ auf weißem oder farbigen Hintergrund erkennbar.<br/>
                  
                  Wenn ein Nutzer eine Webseite dieses Angebotes aufruft, die eine solche Schaltfläche enthält, baut der Browser eine direkte Verbindung mit den Servern von Google auf. Der Inhalt der „+1″-Schaltfläche wird von Google direkt an seinen Browser übermittelt und von diesem in die Webseite eingebunden. der Anbieter hat daher keinen Einfluss auf den Umfang der Daten, die Google mit der Schaltfläche erhebt. Laut Google werden ohne einen Klick auf die Schaltfläche keine personenbezogenen Daten erhoben. Nur bei eingeloggten Mitgliedern, werden solche Daten, unter anderem die IP-Adresse, erhoben und verarbeitet.<br/>
                  
                  Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Google sowie Ihre diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre können die Nutzer Googles Datenschutzhinweisen zu der „+1″-Schaltfläche entnehmen: <br/>
                  
                  Datenschutz: Google Analytics<br/>
                  
                  Dieses Angebot benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Computer der Nutzer gespeichert werden und die eine Analyse der Benutzung der Website durch sie ermöglichen. Die durch den Cookie erzeugten Informationen über Benutzung dieser Website durch die Nutzer werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert.<br/>
                  
                  Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite, wird die IP-Adresse der Nutzer von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Die IP-Anonymisierung ist auf dieser Website aktiv. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um die Nutzung der Website durch die Nutzer auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen.<br/>
                  
                  Dieses Angebot weist die Nutzer jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Die Nutzer können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: http://tools.google.com/dlpage/gaoptout?hl=de.</p>
                  
                  <div>
                        <a href="impressum" target="_self" class="update-footer-link-impressum">Impressum</a>
                </div>
                                 </div>
                              
            <!-- impressum ending -->
            





          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
