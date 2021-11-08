<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: https://www.mietheld.at/unternehmen/mobile.html');
    echo "<script type='text/javascript'> window.location.href='https://www.mietheld.at/unternehmen/mobile.html';</script>";
    exit(0);
}else if($detect->isTablet()){
        // any tablet
header('Location: https://www.mietheld.at/unternehmen/mobile.html');
  echo "<script type='text/javascript'> window.location.href='https://www.mietheld.at/unternehmen/mobile.html';</script>";
    exit(0);
}else{
  // header('Location: https://mietheld.at/');
    //exit(0);
}
?>

<!DOCTYPE html>
<html lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
      <meta charset="utf-8"/>
      <link rel="icon"  href="../photo/favicon.png" />
      <!-- <meta name="generator" content="Wix.com Website Builder"/>
      <link rel="shortcut icon" href="https://static.parastorage.com/client/pfavico.ico" type="image/x-icon"/>
      <link rel="apple-touch-icon" href="https://static.parastorage.com/client/pfavico.ico" type="image/x-icon"/>
      <meta http-equiv="X-Wix-Meta-Site-Id" content="9dbf2c97-73ab-407f-85cb-0755ae22f697"/>
      <meta http-equiv="X-Wix-Application-Instance-Id" content="cae906a0-e812-49a5-9528-b847479b2fe9"/>
      <meta http-equiv="X-Wix-Published-Version" content="120"/>
      <meta name = "format-detection" content = "telephone=no"/>
      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE"/>
      <meta id="wixMobileViewport" name="viewport" content="width=980, user-scalable=yes"/> -->
      <!-- META DATA -->

      <!-- DATA -->

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

      <script>
         window.messageBuffer = [];
         window.messageHandler = function(event) {messageBuffer.push(event)};
         window.addEventListener('message', window.messageHandler, false);
      </script>
      <script id="sentry">(function(c,t,u,n,p,l,y,z,v){function e(b){if(!w){w=!0;var d=t.getElementsByTagName(u)[0],a=t.createElement(u);a.src=z;a.crossorigin="anonymous";a.addEventListener("load",function(){try{c[n]=q;c[p]=r;var a=c[l],d=a.init;a.init=function(a){for(var b in a)Object.prototype.hasOwnProperty.call(a,b)&&(v[b]=a[b]);d(v)};B(b,a)}catch(A){console.error(A)}});d.parentNode.insertBefore(a,d)}}function B(b,d){try{for(var a=0;a<b.length;a++)if("function"===typeof b[a])b[a]();var f=m.data,g=!1,h=!1;for(a=0;a<f.length;a++)if(f[a].f){h=
         !0;var e=f[a];!1===g&&"init"!==e.f&&d.init();g=!0;d[e.f].apply(d,e.a)}!1===h&&d.init();var k=c[n],l=c[p];for(a=0;a<f.length;a++)f[a].e&&k?k.apply(c,f[a].e):f[a].p&&l&&l.apply(c,[f[a].p])}catch(C){console.error(C)}}for(var g=!0,x=!1,k=0;k<document.scripts.length;k++)if(-1<document.scripts[k].src.indexOf(y)){g="no"!==document.scripts[k].getAttribute("data-lazy");break}var w=!1,h=[],m=function(b){(b.e||b.p||b.f&&-1<b.f.indexOf("capture")||b.f&&-1<b.f.indexOf("showReportDialog"))&&g&&e(h);m.data.push(b)};
         m.data=[];c[l]={onLoad:function(b){h.push(b);g&&!x||e(h)},forceLoad:function(){x=!0;g&&setTimeout(function(){e(h)})}};"init addBreadcrumb captureMessage captureException captureEvent configureScope withScope showReportDialog".split(" ").forEach(function(b){c[l][b]=function(){m({f:b,a:arguments})}});var q=c[n];c[n]=function(b,d,a,f,e){m({e:[].slice.call(arguments)});q&&q.apply(c,arguments)};var r=c[p];c[p]=function(b){m({p:b.reason});r&&r.apply(c,arguments)};g||setTimeout(function(){e(h)})})(window,document,
         "script","onerror","onunhandledrejection","Sentry","8b4e078a51d04e0e9efdf470027f0ec1","../browser.sentry-cdn.com/4.6.2/bundle.min.js",{"dsn":"https://8b4e078a51d04e0e9efdf470027f0ec1@sentry.wixpress.com/3"});
      </script>
      <script src="unpkg/core-js-bundle%403.2.1/minified.js"></script>
      <script src="unpkg/whatwg-fetch%403.0.0/dist/fetch.umd.js"></script>
      <script async src="services/wix-bolt/1.5312.0/bolt-main/app/bolt-custom-elements.min.js" crossorigin="anonymous"></script>
      <!-- <script>
         if (rendererModel.runningExperiments['bv_dynamicModelRequest'] === 'new') {
             window.dynamicModel = new Promise(function (resolve, reject) {
                 var start = Date.now()
                 fetch(publicModel.dynamicModelUrl)
                     .then(function (res) {
                         res.json().then(resolve)
                         var extra = '&ita=1&pn=' + Date.now() - start
                         wixBiSession.sendBeat(44, 'Dynamic Model Request', extra)
                     })
                     .catch(function (e) {
                         var extra = '&ita=0&pn=' + Date.now() - start
                         wixBiSession.sendBeat(44, 'Dynamic Model Request', extra)
                         reject(e)
                     })
             })
         }
      </script> -->
      <!-- <script async data-main="https://static.parastorage.com/services/wix-bolt/1.5312.0/bolt-main/app/main-r.min.js" src="unpkg/requirejs-bolt%402.3.6/requirejs.min.js"></script> -->
      <style id="viewerMainStyle">
         a,abbr,acronym,address,applet,b,big,blockquote,body,button,caption,center,cite,code,dd,del,dfn,div,dl,dt,em,fieldset,font,footer,form,h1,h2,h3,h4,h5,h6,header,html,i,iframe,img,ins,kbd,label,legend,li,nav,object,ol,p,pre,q,s,samp,section,small,span,strike,strong,sub,sup,table,tbody,td,tfoot,th,thead,title,tr,tt,u,ul,var,wix-iframe{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:0 0}wix-iframe{display:block}body{font-size:10px;font-family:Arial,Helvetica,sans-serif}input,select,textarea{font-family:Helvetica,Arial,sans-serif;box-sizing:border-box}ol,ul{list-style:none}blockquote,q{quotes:none}ins{text-decoration:none}del{text-decoration:line-through}table{border-collapse:collapse;border-spacing:0}a{cursor:pointer;text-decoration:none}body,html{height:100%}body{overflow-x:auto;overflow-y:scroll}body.overflowHidden{overflow:hidden}.testStyles{overflow-y:hidden}.reset-button{background:0 0;border:0;outline:0;color:inherit;font:inherit;line-height:normal;overflow:visible;padding:0;-webkit-appearance:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none}:focus{outline:0}.wixSiteProperties{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.SITE_ROOT{min-height:100%;position:relative;margin:0 auto}.POPUPS_ROOT{left:0;top:0;width:100vw;height:100%;overflow-x:auto;overflow-y:scroll;position:fixed;z-index:99999}.POPUPS_ROOT.mobile{z-index:1005;-webkit-overflow-scrolling:touch}.POPUPS_ROOT.responsive .POPUPS_WRAPPER{position:absolute;top:0;left:0;width:100%;height:100%}.POPUPS_ROOT:not(.responsive) .POPUPS_WRAPPER{position:relative;overflow:auto}.POPUPS_ROOT:not(.responsive) .POPUPS_WRAPPER>div{margin:0 auto}.auto-generated-link{color:inherit}.warmup .hidden-on-warmup{visibility:hidden}body:not([data-js-loaded]) [data-hide-prejs]{visibility:hidden}html.device-phone body{overflow-y:auto}html.device-mobile-optimized.device-android{margin-bottom:1px}html.device-mobile-optimized.blockSiteScrolling>body{position:fixed;width:100%}html.device-mobile-optimized.media-zoom-mode>body{touch-action:manipulation}html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER{height:100%;overflow:hidden}html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER>.noop{height:100%}html.device-mobile-optimized.media-zoom-mode>body>#SITE_CONTAINER>.noop>.siteAspectsContainer{height:100%;z-index:1005}.siteAspectsContainer{position:absolute;top:0;margin:0 auto;left:0;right:0}body.prewarmup #SITE_ROOT{overflow-x:hidden;overflow-y:hidden}body.device-mobile-optimized{overflow-x:hidden;overflow-y:scroll}body.device-mobile-optimized.qa-mode{overflow-y:auto}body.device-mobile-optimized #SITE_CONTAINER{width:320px;overflow-x:visible;margin:0 auto;position:relative}body.device-mobile-optimized>*{max-width:100%!important}body.device-mobile-optimized .SITE_ROOT{overflow-x:hidden;overflow-y:hidden}body.device-mobile-non-optimized #SITE_CONTAINER>:not(.mobile-non-optimized-overflow) .SITE_ROOT{overflow-x:hidden;overflow-y:auto}body.device-mobile-non-optimized.fullScreenMode{background-color:#5f6360}body.device-mobile-non-optimized.fullScreenMode #MOBILE_ACTIONS_MENU,body.device-mobile-non-optimized.fullScreenMode #SITE_BACKGROUND,body.device-mobile-non-optimized.fullScreenMode .SITE_ROOT{visibility:hidden}body.fullScreenMode{overflow-x:hidden!important;overflow-y:hidden!important}body.fullScreenMode.device-mobile-optimized #TINY_MENU{opacity:0;pointer-events:none}body.fullScreenMode-scrollable.device-mobile-optimized{overflow-x:hidden!important;overflow-y:auto!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage,body.fullScreenMode-scrollable.device-mobile-optimized .SITE_ROOT{overflow-x:hidden!important;overflow-y:hidden!important}body.fullScreenMode-scrollable.device-mobile-optimized #SITE_BACKGROUND,body.fullScreenMode-scrollable.device-mobile-optimized #masterPage{height:auto!important}body.fullScreenMode-scrollable.device-mobile-optimized #masterPage.mesh-layout{height:0!important}.fullScreenOverlay{z-index:1005;position:fixed;left:0;top:-60px;right:0;bottom:0;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;justify-content:center;overflow-y:hidden}.fullScreenOverlay>.fullScreenOverlayContent{margin:0 auto;position:absolute;right:0;top:60px;left:0;bottom:0;overflow:hidden;-webkit-transform:translateZ(0);transform:translateZ(0)}.mobile-actions-menu-wrapper{z-index:1000}body[contenteditable]{overflow-x:auto;overflow-y:auto}.bold{font-weight:700}.italic{font-style:italic}.underline{text-decoration:underline}.lineThrough{text-decoration:line-through}.singleLineText{white-space:nowrap;text-overflow:ellipsis}.alignLeft{text-align:left}.alignCenter{text-align:center}.alignRight{text-align:right}.alignJustify{text-align:justify}ol.font_100,ul.font_100{color:#080808;font-family:'Arial, Helvetica, sans-serif',serif;font-size:10px;font-style:normal;font-variant:normal;font-weight:400;margin:0;text-decoration:none;line-height:normal;letter-spacing:normal}ol.font_100 li,ul.font_100 li{margin-bottom:12px}letter{position:relative;display:inline-block}word{display:inline-block;white-space:nowrap}letter.space,word.space{display:inline}ol.wix-list-text-align,ul.wix-list-text-align{list-style-position:inside}ol.wix-list-text-align h1,ol.wix-list-text-align h2,ol.wix-list-text-align h3,ol.wix-list-text-align h4,ol.wix-list-text-align h5,ol.wix-list-text-align h6,ol.wix-list-text-align p,ul.wix-list-text-align h1,ul.wix-list-text-align h2,ul.wix-list-text-align h3,ul.wix-list-text-align h4,ul.wix-list-text-align h5,ul.wix-list-text-align h6,ul.wix-list-text-align p{display:inline}#popoverLayer{z-index:100}.wixapps-less-spacers-align.ltr{text-align:left}.wixapps-less-spacers-align.center{text-align:center}.wixapps-less-spacers-align.rtl{text-align:right}.wixapps-less-spacers-align>a,.wixapps-less-spacers-align>div{display:inline-block!important}.flex_display{display:-webkit-box;display:-webkit-flex;display:flex}.flex_vbox{box-sizing:border-box;padding-top:.01em;padding-bottom:.01em}a.wixAppsLink img{cursor:pointer}.singleLine{white-space:nowrap;display:block;overflow:hidden;text-overflow:ellipsis;word-wrap:normal}[data-z-counter]{z-index:0}[data-z-counter="0"]{z-index:auto}.circle-preloader{-webkit-animation:semi-rotate 1s 1ms linear infinite;animation:semi-rotate 1s 1ms linear infinite;height:30px;left:50%;margin-left:-15px;margin-top:-15px;overflow:hidden;position:absolute;top:50%;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;width:15px}.circle-preloader::before{content:'';top:0;left:0;right:-100%;bottom:0;border:3px solid currentColor;border-color:currentColor transparent transparent currentColor;border-radius:50%;position:absolute;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:inner-rotate .5s 1ms linear infinite alternate;animation:inner-rotate .5s 1ms linear infinite alternate;color:#7fccf7}.circle-preloader::after{content:'';top:0;left:0;right:-100%;bottom:0;border:3px solid currentColor;border-color:currentColor transparent transparent currentColor;border-radius:50%;position:absolute;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:inner-rotate .5s 1ms linear infinite alternate;animation:inner-rotate .5s 1ms linear infinite alternate;color:#3899ec;opacity:0}.circle-preloader.white::before{color:#f0f0f0}.circle-preloader.white::after{color:#dcdcdc}@-webkit-keyframes inner-rotate{to{opacity:1;-webkit-transform:rotate(115deg);transform:rotate(115deg)}}@keyframes inner-rotate{to{opacity:1;-webkit-transform:rotate(115deg);transform:rotate(115deg)}}@-webkit-keyframes semi-rotate{from{-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;-webkit-transform:rotate(180deg);transform:rotate(180deg)}45%{-webkit-transform:rotate(198deg);transform:rotate(198deg)}55%{-webkit-transform:rotate(234deg);transform:rotate(234deg)}to{-webkit-transform:rotate(540deg);transform:rotate(540deg)}}@keyframes semi-rotate{from{-webkit-animation-timing-function:ease-out;animation-timing-function:ease-out;-webkit-transform:rotate(180deg);transform:rotate(180deg)}45%{-webkit-transform:rotate(198deg);transform:rotate(198deg)}55%{-webkit-transform:rotate(234deg);transform:rotate(234deg)}to{-webkit-transform:rotate(540deg);transform:rotate(540deg)}}.hidden-comp-ghost-mode{opacity:.5}.collapsed-comp-mode::after{position:absolute;top:0;bottom:0;left:0;right:0;content:'';background:-webkit-repeating-linear-gradient(135deg,transparent,transparent 49%,#2b5672 40%,#2b5672 40%,transparent 51%);background:repeating-linear-gradient(-45deg,transparent,transparent 49%,#2b5672 40%,#2b5672 40%,transparent 51%);background-size:6px 6px;background-repeat:repeat}.g-transparent-a:link,.g-transparent-a:visited{border-color:transparent}.transitioning-comp *{transition:inherit!important;-webkit-transition:inherit!important}.selectionSharerContainer{position:absolute;background-color:#fff;box-shadow:0 4px 10px 0 rgba(57,86,113,.24);width:142px;height:45px;border-radius:100px;text-align:center}.selectionSharerContainer:after{content:"";position:absolute;bottom:-10px;left:42%;border-width:10px 10px 0;border-style:solid;border-color:#fff transparent;display:block;width:0}.selectionSharerContainer .selectionSharerOption{display:inline-block;cursor:pointer;vertical-align:top;padding:13px 11px 11px 13px;margin:1px;z-index:-1}.selectionSharerContainer .selectionSharerVerticalSeparator{margin-top:9px;margin-bottom:18px;background-color:#eaf7ff;height:26px;width:1px;display:inline-block}.visual-focus-on .focus-ring:not(.has-custom-focus):focus,.visual-focus-on .focus-ring:not(.has-custom-focus):focus~.wixSdkShowFocusOnSibling{box-shadow:0 0 0 1px #fff,0 0 0 3px #116dff;z-index:999}body.prewarmup .hidden-during-prewarmup{visibility:hidden}#masterPage.mesh-layout[data-mesh-layout=grid]{display:-ms-grid;display:grid;-ms-grid-rows:max-content max-content min-content max-content;grid-template-rows:-webkit-max-content -webkit-max-content -webkit-min-content -webkit-max-content;grid-template-rows:max-content max-content min-content max-content;-ms-grid-columns:100%;grid-template-columns:100%;-webkit-box-align:start;-webkit-align-items:start;align-items:start;-webkit-box-pack:stretch;-webkit-justify-content:stretch;justify-content:stretch}#masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER-placeholder,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER-placeholder,#masterPage.mesh-layout[data-mesh-layout=grid] #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],#masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,#masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer{-ms-grid-column:1;-ms-grid-row-align:start;-ms-grid-column-align:start}#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_HEADER-placeholder{-ms-grid-row:1;grid-area:1/1/2/2}#masterPage.mesh-layout[data-mesh-layout=grid] #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView]{-ms-grid-row:2;grid-area:2/1/3/2}#masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER,#masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,#masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer{-ms-grid-row:3;grid-area:3/1/4/2}#masterPage.mesh-layout[data-mesh-layout=grid] #soapAfterPagesContainer,#masterPage.mesh-layout[data-mesh-layout=grid] #soapBeforePagesContainer{width:100%}#masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINER{-webkit-align-self:stretch;align-self:stretch}#masterPage.mesh-layout[data-mesh-layout=grid] main#PAGES_CONTAINER{display:block}#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_FOOTER-placeholder{-ms-grid-row:4;grid-area:4/1/5/2}#masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINERcenteredContent,#masterPage.mesh-layout[data-mesh-layout=grid] #PAGES_CONTAINERinlineContent,#masterPage.mesh-layout[data-mesh-layout=grid] #SITE_PAGES{height:100%}#masterPage.mesh-layout.desktop>*{width:100%}#masterPage.mesh-layout #PAGES_CONTAINER,#masterPage.mesh-layout #SITE_FOOTER,#masterPage.mesh-layout #SITE_HEADER,#masterPage.mesh-layout #SOSP_CONTAINER_CUSTOM_ID[data-state~=mobileView],#masterPage.mesh-layout #masterPageinlineContent{position:relative}#masterPage.mesh-layout #SITE_FOOTER-placeholder,#masterPage.mesh-layout #SITE_HEADER-placeholder{display:none}#masterPage.mesh-layout #SITE_HEADER[data-state~=fixedPosition]~#SITE_HEADER-placeholder{display:block}#masterPage.mesh-layout #SITE_FOOTER[data-state~=fixedPosition]~#SITE_FOOTER-placeholder{display:block}#masterPage.mesh-layout #SITE_PAGES{height:auto;position:relative}#SITE_ROOT img:not([src]){visibility:hidden}#SITE_ROOT svg img:not([src]){visibility:visible}wix-image{display:block}
      </style>
      <style id="v7.languages.css">
         /*
         This CSS resource incorporates links to font software which is the valuable copyrighted
         property of Monotype Imaging and/or its suppliers. You may not attempt to copy, install,
         redistribute, convert, modify or reverse engineer this font software. Please contact Monotype
         Imaging with any questions regarding Web fonts:  http://webfonts.fonts.com
         */
         /* latin */
         @font-face {
         font-family: "Helvetica-W01-Roman";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ea95b44a-eab7-4bd1-861c-e73535e7f652.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4021a3b9-f782-438b-aeb4-c008109a8b64.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/669f79ed-002c-4ff6-965c-9da453968504.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d17bc040-9e8b-4397-8356-8153f4a64edf.svg#d17bc040-9e8b-4397-8356-8153f4a64edf") format("svg");
         }
         @font-face {
         font-family: "Helvetica-W01-Bold";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012a.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70da45a-a05c-490c-ad62-7db4894b012a.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c5749443-93da-4592-b794-42f28d62ef72.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73805f15-38e4-4fb7-8a08-d56bf29b483b.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/874bbc4a-0091-49f0-93ef-ea4e69c3cc7a.svg#874bbc4a-0091-49f0-93ef-ea4e69c3cc7a") format("svg");
         }
         @font-face {
         font-family: "Braggadocio-W01";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f305266f-adfb-4e4f-9055-1d7328de8ce6.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f305266f-adfb-4e4f-9055-1d7328de8ce6.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/518e4577-eecc-4ecd-adb4-2ee21df35b20.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f46241ad-1f5d-4935-ad69-b0a78c2e191d.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2a0a25d-e054-4c65-bffa-e5760b48dec3.svg#b2a0a25d-e054-4c65-bffa-e5760b48dec3") format("svg");
         }
         @font-face {
         font-family: "Clarendon-W01-Medium-692107";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6993450-d795-4fd3-b306-38481733894c.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6993450-d795-4fd3-b306-38481733894c.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b6878f57-4d64-4d70-926d-fa4dec6173a5.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a6b6eff-6b5d-46d4-b681-f356eef1e4c1.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/600b1038-76a8-43b4-a2f7-2a6eb0681f95.svg#600b1038-76a8-43b4-a2f7-2a6eb0681f95") format("svg");
         }
         @font-face {
         font-family: "DIN-Next-W01-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e0b2cd7-9657-438b-b4af-e04122e8f1f7.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc176270-17fa-4c78-a343-9fe52824e501.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3516f91d-ac48-42cd-acfe-1be691152cc4.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d1b1e866-a411-42ba-8f75-72bf28e23694.svg#d1b1e866-a411-42ba-8f75-72bf28e23694") format("svg");
         }
         @font-face {
         font-family: "SnellRoundhandW01-Scrip";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fea0fb7b-884b-4567-a6dc-addb8e67baaa.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fea0fb7b-884b-4567-a6dc-addb8e67baaa.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/efbfc170-aaf0-4472-91f4-dbb5bc2f4c59.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d974669d-978c-4bcf-8843-b2b7c366d097.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5b2427b5-3c1e-4b17-9f3c-720a332c9142.svg#5b2427b5-3c1e-4b17-9f3c-720a332c9142") format("svg");
         }
         @font-face {
         font-family: "Stencil-W01-Bold";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cc642b17-a005-4f1e-86e8-baffa4647445.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cc642b17-a005-4f1e-86e8-baffa4647445.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9eddc47-990d-47a3-be4e-c8cdec0090c6.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8d108476-7a62-4664-821f-03c8a522c030.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7823e34c-67dc-467a-bbfb-efbb5f6c90f0.svg#7823e34c-67dc-467a-bbfb-efbb5f6c90f0") format("svg");
         }
         @font-face {
         font-family: "Helvetica-W01-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/717f8140-20c9-4892-9815-38b48f14ce2b.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/717f8140-20c9-4892-9815-38b48f14ce2b.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/03805817-4611-4dbc-8c65-0f73031c3973.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d5f9f72d-afb7-4c57-8348-b4bdac42edbb.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/05ad458f-263b-413f-b054-6001a987ff3e.svg#05ad458f-263b-413f-b054-6001a987ff3e") format("svg");
         }
         @font-face {
         font-family: "Victoria-Titling-MT-W90";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b6731dc-305d-4dcd-928e-805163e26288.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b6731dc-305d-4dcd-928e-805163e26288.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/faceff42-b106-448b-b4cf-5b3a02ad61f1.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/82f103e4-7b1c-49af-862f-fe576da76996.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/46f6946a-4039-46e8-b001-be3e53068d46.svg#46f6946a-4039-46e8-b001-be3e53068d46") format("svg");
         }
         @font-face {
         font-family: "AmericanTypwrterITCW01--731025";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dff8aebe-deee-47a7-8575-b2f39c8473f8.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dff8aebe-deee-47a7-8575-b2f39c8473f8.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0c0f4d28-4c13-4e84-9a36-e63cd529ae86.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7f26a278-84b3-4587-bf07-c8cdf7e347a9.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/254ab931-e6d6-4307-9762-5914ded49f13.svg#254ab931-e6d6-4307-9762-5914ded49f13") format("svg");
         }
         @font-face {
         font-family: "Soho-W01-Thin-Condensed";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2d6b869-3f47-4c92-83d3-4546ffb860d0.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2d6b869-3f47-4c92-83d3-4546ffb860d0.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f84b539d-ed34-4400-a139-c0f909af49aa.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ef27401-09c0-434f-b0f0-784445b52ea2.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4ba3546a-32f7-4e7d-be64-8da01b23d46e.svg#4ba3546a-32f7-4e7d-be64-8da01b23d46e") format("svg");
         }
         @font-face {
         font-family: "Pacifica-W00-Condensed";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e50a5bb1-8246-4412-8c27-4a18ba89a0fd.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e50a5bb1-8246-4412-8c27-4a18ba89a0fd.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6849614c-986c-45b1-a1a7-39c891759bb9.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8ccb835c-4668-432d-8d1d-099b48aafe4e.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/028040ec-b956-41d8-a07d-b4d3466b8ed8.svg#028040ec-b956-41d8-a07d-b4d3466b8ed8") format("svg");
         }
         @font-face {
         font-family: "Avenida-W01";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a8138b05-e5ff-482f-a8f6-8be894e01fc3.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a8138b05-e5ff-482f-a8f6-8be894e01fc3.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/53f05821-c783-4593-bf20-c3d770f32863.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b7215bbe-7870-4733-9e81-28398fbed38b.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc2def79-bd99-49b9-98b3-502e34cc5552.svg#bc2def79-bd99-49b9-98b3-502e34cc5552") format("svg");
         }
         @font-face {
         font-family: "ITC-Arecibo-W01-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/036d6c0b-d067-431a-ab39-be3b89b1322f.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/036d6c0b-d067-431a-ab39-be3b89b1322f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5d6cd606-b520-4335-96e1-755691d666e8.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/03d7d783-5b99-4340-b373-97c00246ec27.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5fab48f-93a0-403a-b60e-bfdb0b69d973.svg#a5fab48f-93a0-403a-b60e-bfdb0b69d973") format("svg");
         }
         @font-face {
         font-family: "Droid-Serif-W01-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/de5702ce-174b-4ee6-a608-6482d5d7eb71.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/de5702ce-174b-4ee6-a608-6482d5d7eb71.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/83ae2051-dcdd-4931-9946-8be747a40d00.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63f35b58-a40f-4f53-bb3e-20396f202214.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/19db6ebc-2d1b-4835-9588-3fa45ff36f4e.svg#19db6ebc-2d1b-4835-9588-3fa45ff36f4e") format("svg");
         }
         @font-face {
         font-family: "Museo-W01-700";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b3d99a2-6b36-4912-a93e-29277020a5cf.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b3d99a2-6b36-4912-a93e-29277020a5cf.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/28d74e9b-4ea9-4e3c-b265-c67a72c66856.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b432b4e1-014a-4ed8-865c-249744f856b0.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8e63fd1e-adc9-460e-9ef7-bbf98ee32a71.svg#8e63fd1e-adc9-460e-9ef7-bbf98ee32a71") format("svg");
         }
         @font-face {
         font-family: "Museo-Slab-W01-100";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01ab709f-22cf-4831-b24a-8cf4eb852687.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01ab709f-22cf-4831-b24a-8cf4eb852687.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cacc0862-f146-4746-92b1-60e6114a66c4.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/54006f54-b61e-4103-abf8-b1d0294a2a9c.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e5841f2e-b306-4583-bfc3-a0e06742fedd.svg#e5841f2e-b306-4583-bfc3-a0e06742fedd") format("svg");
         }
         @font-face {
         font-family: "Geotica-W01-Four-Open";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/91cc94e6-2c98-4b42-aaec-086abb6a9370.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/91cc94e6-2c98-4b42-aaec-086abb6a9370.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cc0b2292-9358-41ee-b3b9-429952586f69.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8558b493-da55-4e6f-b473-56d9c7dff2a4.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ee507e8d-069a-4cb6-b184-62b1f3ab0102.svg#ee507e8d-069a-4cb6-b184-62b1f3ab0102") format("svg");
         }
         @font-face {
         font-family: "Marzo-W00-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/45563891-20ab-4087-b16c-b3cfc26faac1.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/45563891-20ab-4087-b16c-b3cfc26faac1.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e947b76a-edcf-4519-bc3d-c2da35865717.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c09cb36e-5e79-4033-b854-41e57fbf44fa.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f4245069-28b7-43b7-8a10-708b9f3c398b.svg#f4245069-28b7-43b7-8a10-708b9f3c398b") format("svg");
         }
         @font-face {
         font-family: "ReklameScriptW00-Medium";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5af7511a-dccc-450d-b2a2-bb8e3bb62540.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5af7511a-dccc-450d-b2a2-bb8e3bb62540.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/05b176f5-c622-4c35-af98-c0c056dd5b66.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9dcb5a3c-1c64-4c9c-a402-995bed762eb7.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1e87d66a-d7f1-4869-8430-51662777be57.svg#1e87d66a-d7f1-4869-8430-51662777be57") format("svg");
         }
         @font-face {
         font-family: "Nimbus-Sans-TW01Con";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2101adaa-6a98-4fa9-b085-3b04c3722637.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2101adaa-6a98-4fa9-b085-3b04c3722637.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8fb1090e-b4d0-4685-ac8f-3d0c29d60130.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5d5fc44e-e84b-48ca-a5a7-bed8bdbf79a1.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/24512b2a-e22d-4ebb-887c-a334d039433c.svg#24512b2a-e22d-4ebb-887c-a334d039433c") format("svg");
         }
         @font-face {
         font-family: "Bodoni-W01-Poster";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab0e3d15-2f64-49c1-8898-817a2235e719.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab0e3d15-2f64-49c1-8898-817a2235e719.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d1b9848-7ebd-472c-9d31-4af0aa7faaea.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/197b5ef7-65e6-4af6-9fd9-bc9fc63038c7.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9bda117-c293-40b5-a2d8-9f923f32623c.svg#a9bda117-c293-40b5-a2d8-9f923f32623c") format("svg");
         }
         /* Mobile system fallbacks */
         @font-face {
         font-family: "Comic-Sans-W01-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0d67e115-f220-4a6a-81c2-ae0035bda922.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0d67e115-f220-4a6a-81c2-ae0035bda922.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/234c98b8-36ae-45ab-8a55-77980708b2bc.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7ff2970c-1d51-47be-863d-b33afda8fb40.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f1afa7d8-abee-4268-9cf8-85d43150fdb1.svg#f1afa7d8-abee-4268-9cf8-85d43150fdb1") format("svg");
         }
         @font-face {
         font-family: "Courier-PS-W01";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2977c8d-4907-4cc3-b5ed-3dec9ca68102.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2977c8d-4907-4cc3-b5ed-3dec9ca68102.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b059d02a-a222-4c63-9fd3-705eaeea1c16.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/52e3d484-7188-4c9e-964e-b7a75e9dfa2f.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c2182c36-8eb4-4a56-a0ff-dba7492ce96c.svg#c2182c36-8eb4-4a56-a0ff-dba7492ce96c") format("svg");
         }
         @font-face {
         font-family: "Impact-W01-2010";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ae7059b-dd17-4a4c-8872-5cb4dd551277.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ae7059b-dd17-4a4c-8872-5cb4dd551277.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4cefdf47-0136-4169-9933-3225dbbec9d9.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f7450934-42f3-4193-befa-c825772a9454.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/25aa5449-ccc1-4f0e-ab3f-4cf3b959208f.svg#25aa5449-ccc1-4f0e-ab3f-4cf3b959208f") format("svg");
         }
         @font-face {
         font-family: "Lucida-Console-W01";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/527cb305-deee-4810-b337-67756678c830.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/527cb305-deee-4810-b337-67756678c830.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/60f4a13f-3943-432a-bb51-b612e41239c5.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/38229089-ebec-4782-b8f2-304cfdcea8d8.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f855783c-1079-4396-a7b7-f7d9179145be.svg#f855783c-1079-4396-a7b7-f7d9179145be") format("svg");
         }
         @font-face{
         font-family:"Tahoma-W01-Regular";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b155b1c-e651-4a51-9d03-0ca480aeaf9f.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b155b1c-e651-4a51-9d03-0ca480aeaf9f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/20323430-24f4-4767-9d4d-060d1e89758a.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6e17e62d-30cb-4840-8e9d-328c6b62316e.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/04ab3894-45ce-42ef-aa11-e7c0cd7f7da9.svg#04ab3894-45ce-42ef-aa11-e7c0cd7f7da9") format("svg");
         }
         @font-face{
         font-family:"Arial-W01-Black";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf85e414-1b16-4cd1-8ce8-dad15daa7daa.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf85e414-1b16-4cd1-8ce8-dad15daa7daa.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c6f5bcd6-66fc-44af-be95-bb1f2b38d080.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7b5b436b-a511-402a-88d6-dbac700cee36.ttf") format("truetype"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5adcd35-c36a-4b18-953d-47c029de4ef6.svg#a5adcd35-c36a-4b18-953d-47c029de4ef6") format("svg");
         }
         /* Greek and others */
         @font-face{
         font-family:"Tahoma-W15--Regular";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f0dd334c-878c-442c-bda3-0dbd122e87f1.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f0dd334c-878c-442c-bda3-0dbd122e87f1.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ae844b11-5158-4caf-90b4-7ace49ac3440.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e63ef4f4-b7b9-4f13-8db5-d7f5cf89839f.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5ad2ed93-1ba0-4b2c-a421-22c5bcfb5b79.svg#5ad2ed93-1ba0-4b2c-a421-22c5bcfb5b79") format("svg");
         }
         @font-face{
         font-family:"Tahoma-W99-Regular";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c3ebf729-2608-4787-9e5a-248f329aface.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c3ebf729-2608-4787-9e5a-248f329aface.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d3bbaa1b-d5e3-431f-93a7-9cea63601bb6.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/78cb924f-227d-4ab9-83d5-f2b2e6656da5.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ca045297-34e1-462e-acc8-75ef196ada02.svg#ca045297-34e1-462e-acc8-75ef196ada02") format("svg");
         }
         /*******************/
         @font-face {
         font-family: "Coquette-W00-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8c1ddea-29ea-42ec-8a48-32a89e792d3b.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8c1ddea-29ea-42ec-8a48-32a89e792d3b.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e5374b3-a214-41e5-81f0-a34c9292da7e.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c20581c8-0023-4888-aeaa-9d32636dc17f.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e514ed32-1687-47d8-8b39-423fb7664d33.svg#e514ed32-1687-47d8-8b39-423fb7664d33") format("svg");
         }
         @font-face {
         font-family: "Rosewood-W01-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bd86870e-0679-4116-aa13-96aa1d6c5944.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bd86870e-0679-4116-aa13-96aa1d6c5944.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d9bc879-ab51-45da-bf37-c9710cd1cc32.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a5564fdb-3616-4f27-a4e4-d932b6ae5b4a.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f128ef28-daf3-477b-8027-0fd8bdad2b91.svg#f128ef28-daf3-477b-8027-0fd8bdad2b91") format("svg");
         }
         @font-face {
         font-family: "segoe_printregular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.ttf") format("truetype"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/segoe_print-webfont.svg#f128ef28-daf3-477b-8027-0fd8bdad2b91") format("svg");
         }
         @font-face {
         font-family: 'Open Sans';
         font-style: normal;
         font-weight: 400;
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.ttf') format('truetype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-regular-webfont.svg#open_sansregular') format('svg');
         }
         @font-face {
         font-family: 'Open Sans';
         font-style: normal;
         font-weight: 700;
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.ttf') format('truetype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bold-webfont.svg#open_sansregular') format('svg');
         }
         @font-face {
         font-family: 'Open Sans';
         font-style: italic;
         font-weight: 400;
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.ttf') format('truetype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-italic-webfont.svg#open_sansregular') format('svg');
         }
         @font-face {
         font-family: 'Open Sans';
         font-style: italic;
         font-weight: 700;
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.ttf') format('truetype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-bolditalic-webfont.svg#open_sansregular') format('svg');
         }
         @font-face{
         font-family:"Avenir-LT-W01_35-Light1475496";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/edefe737-dc78-4aa3-ad03-3c6f908330ed.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/edefe737-dc78-4aa3-ad03-3c6f908330ed.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0078f486-8e52-42c0-ad81-3c8d3d43f48e.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/908c4810-64db-4b46-bb8e-823eb41f68c0.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4577388c-510f-4366-addb-8b663bcc762a.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b0268c31-e450-4159-bfea-e0d20e2b5c0c.svg#b0268c31-e450-4159-bfea-e0d20e2b5c0c") format("svg");
         }
         @font-face{
         font-family:"Avenir-LT-W01_85-Heavy1475544";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6af9989e-235b-4c75-8c08-a83bdaef3f66.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6af9989e-235b-4c75-8c08-a83bdaef3f66.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d513e15e-8f35-4129-ad05-481815e52625.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/61bd362e-7162-46bd-b67e-28f366c4afbe.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ccd17c6b-e7ed-4b73-b0d2-76712a4ef46b.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/20577853-40a7-4ada-a3fb-dd6e9392f401.svg#20577853-40a7-4ada-a3fb-dd6e9392f401") format("svg");
         }
         @font-face{
         font-family:"BaskervilleMTW01-SmBdIt";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0224f3fd-52d3-499a-ae2f-637a041f87f0.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0224f3fd-52d3-499a-ae2f-637a041f87f0.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c887df8e-b6c3-4c97-85b8-91cfdde77b07.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5c4d5432-75c4-4f6b-a6e7-8af4d54a33d1.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2ee46b89-b7cb-4bbe-9d60-b7ca4354b706.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9714d635-13b3-48b2-9315-5d0f72a69ab9.svg#9714d635-13b3-48b2-9315-5d0f72a69ab9") format("svg");
         }
         @font-face{
         font-family:"Belinda-W00-Regular";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63d38753-a8d9-4262-b844-3a007ad848b4.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63d38753-a8d9-4262-b844-3a007ad848b4.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/242487aa-209a-4dbd-aca2-64a3c73a8946.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4381b252-d9f8-4201-bbf3-9440e21259e7.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/46c2c4f2-cd15-4b7b-a4b4-aa04dbbd1655.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/334f8999-3703-47f3-b147-96b6dc3bf4b2.svg#334f8999-3703-47f3-b147-96b6dc3bf4b2") format("svg");
         }
         @font-face{
         font-family:"Brandon-Grot-W01-Light";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e00ba30a-0bf3-4c76-9392-8641fa237a92.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e00ba30a-0bf3-4c76-9392-8641fa237a92.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/69b40392-453a-438a-a121-a49e5fbc9213.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9362bca5-b362-4543-a051-2129e2def911.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/85060878-ca6c-43cc-ac31-7edccfdca71b.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/47f089a6-c8ce-46fa-b98f-03b8c0619d8a.svg#47f089a6-c8ce-46fa-b98f-03b8c0619d8a") format("svg");
         }
         @font-face{
         font-family:"Bree-W01-Thin-Oblique";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e33bf74-813a-4818-8313-6ea9039db056.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e33bf74-813a-4818-8313-6ea9039db056.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ceb3b4a3-0083-44ae-95cb-e362f95cc91b.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d716cea-5ba0-437a-b5a8-89ad159ea2be.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c458fc09-c8dd-4423-9767-e3e27082f155.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/85ffb31e-78ee-4e21-83d8-4313269135a9.svg#85ffb31e-78ee-4e21-83d8-4313269135a9") format("svg");
         }
         @font-face{
         font-family:"Adobe-Caslon-W01-SmBd";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d2804130-67b0-4fcf-98fe-d781df92a56e.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d2804130-67b0-4fcf-98fe-d781df92a56e.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/becfadb1-eaca-4817-afbd-fe4d61e1f661.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6530bac7-21ac-4e52-a014-dce6a8d937ab.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b34e8a45-c92d-4402-89bc-43cc51c6b4e0.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0804bb4a-399c-4547-9fa8-0acf6268d8f6.svg#0804bb4a-399c-4547-9fa8-0acf6268d8f6") format("svg");
         }
         @font-face{
         font-family:"Didot-W01-Italic";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c2cfd19-472b-4ef5-ad73-43eee68dc43b.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c2cfd19-472b-4ef5-ad73-43eee68dc43b.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/abe3d3a9-c990-459f-9407-54ac96cd2f00.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/09a4b57b-7400-4d30-b4ba-d6e303c57868.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a0cb08d5-975f-4c8d-bcdc-d771a014d92a.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/86d60a09-e8f8-4003-b688-0f8a2aba6532.svg#86d60a09-e8f8-4003-b688-0f8a2aba6532") format("svg");
         }
         @font-face{
         font-family:"Futura-LT-W01-Light";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b40e918-d269-4fd9-a572-19f5fec7cd7f.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2b40e918-d269-4fd9-a572-19f5fec7cd7f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26091050-06ef-4fd5-b199-21b27c0ed85e.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cca525a8-ad89-43ae-aced-bcb49fb271dc.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/88cc7a39-1834-4468-936a-f3c25b5d81a1.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/14d6bf5d-15f1-4794-b18e-c03fb9a5187e.svg#14d6bf5d-15f1-4794-b18e-c03fb9a5187e") format("svg");
         }
         @font-face{
         font-family:"Futura-LT-W01-Book";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cf053eae-ba1f-44f3-940c-a34b68ccbbdf.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cf053eae-ba1f-44f3-940c-a34b68ccbbdf.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8bf38806-3423-4080-b38f-d08542f7e4ac.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e2b9cbeb-fa8e-41cd-8a6a-46044b29ba52.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c2a69697-4f06-4764-abd4-625031a84e31.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dc423cc1-bf86-415c-bc7d-ad7dde416a34.svg#dc423cc1-bf86-415c-bc7d-ad7dde416a34") format("svg");
         }
         @font-face{
         font-family:"Kepler-W03-Light-SCd-Cp";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fc00d5ae-6d96-4b5c-b68b-4f5bdb562c98.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fc00d5ae-6d96-4b5c-b68b-4f5bdb562c98.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b2b1472c-55f2-478a-a9c9-9373214a27e5.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/20f7861b-3ff7-47f3-b0f5-1e0626824a63.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5c51e7a0-6ecc-46eb-a9ee-376f8c4073af.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/37bea6d0-2f14-4e48-a76f-fd85171dcf26.svg#37bea6d0-2f14-4e48-a76f-fd85171dcf26") format("svg");
         }
         @font-face{
         font-family:"Lulo-Clean-W01-One-Bold";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0163ac22-50a7-406e-aa64-c62ee6fbf3d7.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0163ac22-50a7-406e-aa64-c62ee6fbf3d7.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/aee74cb3-c913-4b54-9722-6001c92325f2.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/80de9d5d-ab5f-40ce-911b-104e51e93d7c.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b46b05b-cfdd-4d82-8c2f-5c6cfba1fe60.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be340f0b-a2d4-41df-acb1-4dc124330a88.svg#be340f0b-a2d4-41df-acb1-4dc124330a88") format("svg");
         }
         @font-face{
         font-family:"Proxima-N-W01-Reg";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7e90123f-e4a7-4689-b41f-6bcfe331c00a.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7e90123f-e4a7-4689-b41f-6bcfe331c00a.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64017d81-9430-4cba-8219-8f5cc28b923e.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e56ecb6d-da41-4bd9-982d-2d295bec9ab0.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2aff4f81-3e97-4a83-9e6c-45e33c024796.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab9cd062-380f-4b53-b1a7-c0bec7402235.svg#ab9cd062-380f-4b53-b1a7-c0bec7402235") format("svg");
         }
         @font-face{
         font-family:"Trend-Sans-W00-Four";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/392aa98f-a1bf-4dc4-9def-a5d27c73a0de.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/392aa98f-a1bf-4dc4-9def-a5d27c73a0de.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/29c66f1e-5243-4f34-8a19-47405f72954c.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c81cca03-5f1a-4252-9950-096e60e2bde9.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/569b48ce-f71b-4e2d-a80a-1920efbd7187.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f284409f-3669-43df-bfe1-f9f9ee1bbc07.svg#f284409f-3669-43df-bfe1-f9f9ee1bbc07") format("svg");
         }
         @font-face{
         font-family:"DINNeuzeitGroteskLTW01-_812426";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b41558bd-2862-46c0-abf7-536d2542fa26.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b41558bd-2862-46c0-abf7-536d2542fa26.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5cee8d6e-89ad-4d8c-a0ac-584d316b15ae.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/388ef902-2c31-4818-abb1-a40dcd81f6d6.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/29c60077-2614-4061-aa8d-5bcfdf7354bb.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/76250d27-b353-4f3b-90c6-0ff635fabaab.svg#76250d27-b353-4f3b-90c6-0ff635fabaab") format("svg");
         }
         @font-face{
         font-family:"Peaches-and-Cream-Regular-W00";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2250f930-9a6d-4486-a0eb-6b407c5d6c9b.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2250f930-9a6d-4486-a0eb-6b407c5d6c9b.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3c5beda8-45cc-4f76-abca-8eccfeb6220c.woff2") format("woff2"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b36b499f-d776-461c-bacb-fcbebe1cb9b4.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/896d3828-26ce-462a-9f70-62e0b5c90a70.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0dccbec2-a882-4dd9-8da0-3a035c808ce0.svg#0dccbec2-a882-4dd9-8da0-3a035c808ce0") format("svg");
         }
         /* latin-ext */
         @font-face {
         font-family: "Helvetica-W02-Roman";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53e.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4bd4516-4480-43df-aa6e-4e9b9029f53e.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b56b944e-bbe0-4450-a241-de2125d3e682.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7da02f05-ae8b-43a1-aeb9-83b3c0527c06.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/66cac56e-d017-4544-9d0c-f7d978f0c5c2.svg#66cac56e-d017-4544-9d0c-f7d978f0c5c2") format("svg");
         }
         @font-face {
         font-family: "Helvetica-W02-Bold";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8c0d8b0f-d7d6-4a72-a418-c2373e4cbf27.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/192dac76-a6d9-413d-bb74-22308f2e0cc5.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/47584448-98c4-436c-89b9-8d6fbeb2a776.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/375c70e5-6822-492b-8408-7cd350440af7.svg#375c70e5-6822-492b-8408-7cd350440af7") format("svg");
         }
         @font-face {
         font-family: "Clarendon-W02-Medium-693834";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be976e1d-6edc-4a1b-b50e-a6d326b5a02f.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be976e1d-6edc-4a1b-b50e-a6d326b5a02f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01681361-4a95-4651-a6c8-4005d0fc4a79.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fdc26895-148e-4fa8-898d-5eb459dabecf.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d59136e2-c38a-4ad4-8dec-2d258c12fd80.svg#d59136e2-c38a-4ad4-8dec-2d258c12fd80") format("svg");
         }
         @font-face {
         font-family: "DIN-Next-W02-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/48e5a0e1-2d56-46e5-8fc4-3d6d5c973cbf.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/07d62b21-8d7a-4c36-be86-d32ab1089972.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0050890-bbed-44b9-94df-2611d72dbb06.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9f774d17-c03a-418e-a375-34f3beecbc7a.svg#9f774d17-c03a-418e-a375-34f3beecbc7a") format("svg");
         }
         @font-face {
         font-family: "AmericanTypwrterITCW02--737091";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/04bcef92-4ec9-4491-9f06-433987df0eea.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/04bcef92-4ec9-4491-9f06-433987df0eea.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4e5713c6-f9bf-44d7-bc17-775b7c102f1c.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/80e40eb9-815f-4b42-9e99-297117a6ef52.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/25bb0c90-be7f-4dfc-bfff-5cd159d09832.svg#25bb0c90-be7f-4dfc-bfff-5cd159d09832") format("svg");
         }
         @font-face {
         font-family: "Helvetica-W02-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ff80873b-6ac3-44f7-b029-1b4111beac76.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ff80873b-6ac3-44f7-b029-1b4111beac76.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/80c34ad2-27c2-4d99-90fa-985fd64ab81a.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8cb02c2-5b58-48d8-9501-8d02869154c2.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/92c941ea-2b06-4b72-9165-17476d424d6c.svg#92c941ea-2b06-4b72-9165-17476d424d6c") format("svg");
         }
         @font-face {
         font-family: "Soho-W02-Thin-Condensed";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/61d1e245-4016-4f23-ad7a-409a44cabe90.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/61d1e245-4016-4f23-ad7a-409a44cabe90.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/68eb3cfd-be6c-4f9e-8ca4-e13ce8d29329.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6db04d94-de0b-4bf0-bf94-113fd27e7440.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/84e110e9-fd29-4036-b9ad-27968a6ba793.svg#84e110e9-fd29-4036-b9ad-27968a6ba793") format("svg");
         }
         @font-face {
         font-family: "Avenida-W02";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/131201ff-3951-4583-b4d9-2bc668927583.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/131201ff-3951-4583-b4d9-2bc668927583.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/582278da-0505-4fbe-9102-2b529c7c973a.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b82fbde2-1655-4728-96a9-90ef022c4590.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d325b64f-214b-4fc0-80d6-4c61621cd542.svg#d325b64f-214b-4fc0-80d6-4c61621cd542") format("svg");
         }
         @font-face {
         font-family: "Droid-Serif-W02-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/872d17cf-70ac-4722-b8ef-0f1578125042.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/872d17cf-70ac-4722-b8ef-0f1578125042.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/764779cf-076d-427a-87b4-136ccc83fba0.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f32cc734-5673-41a1-bd6e-1900c78691f5.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f627e21b-c1a5-4e7a-b072-37391ee8dcef.svg#f627e21b-c1a5-4e7a-b072-37391ee8dcef") format("svg");
         }
         /* Mobile system fallbacks */
         @font-face {
         font-family: "Comic-Sans-W02-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6a8b1499-f534-46fe-a0af-835bc83226cd.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6a8b1499-f534-46fe-a0af-835bc83226cd.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/301e2ea2-8153-453c-9051-0a729098e682.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cbe882c0-2ac0-4a28-8fe7-14e527942047.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ec680f09-6b07-442d-ab11-cea208cc138d.svg#ec680f09-6b07-442d-ab11-cea208cc138d") format("svg");
         }
         @font-face {
         font-family: "Courier-PS-W02";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/440875eb-e437-41fc-8aae-b5658bbea3b7.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/440875eb-e437-41fc-8aae-b5658bbea3b7.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bcc470b9-5a9b-45e9-bf60-6daca06bc70e.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f9018056-f579-4c4c-95ea-9bd02b859724.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f6d0e775-b2fc-4bc8-8967-cd78486d451c.svg#f6d0e775-b2fc-4bc8-8967-cd78486d451c") format("svg");
         }
         @font-face {
         font-family: "Impact-W02-2010";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/02fb45ce-d7cc-491c-a176-e2a883a632b2.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/02fb45ce-d7cc-491c-a176-e2a883a632b2.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/eb1185bb-8f9d-4855-83fa-d06f0efef677.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5386718d-bec6-41c5-b998-12dd1c859c53.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/01aba52b-d32b-41fc-a681-d7b4dfa43041.svg#01aba52b-d32b-41fc-a681-d7b4dfa43041") format("svg");
         }
         @font-face {
         font-family: "Lucida-Console-W02";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5606db21-eb18-48fa-979b-63bdf28555c0.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5606db21-eb18-48fa-979b-63bdf28555c0.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e5b24ea-4345-4830-8c7d-0e7ef26b4e63.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7b175f51-ff6c-47d2-908c-ee8538c2880d.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bd1a6a52-e0c2-4a1b-b5a4-2d25ec2b5706.svg#bd1a6a52-e0c2-4a1b-b5a4-2d25ec2b5706") format("svg");
         }
         @font-face {
         font-family: "Tahoma-W02-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bb223dcd-0a16-4e5a-b38b-4f2a29f2bcbb.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bb223dcd-0a16-4e5a-b38b-4f2a29f2bcbb.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/94e45703-fbd7-46e5-9fcd-228ae59d6266.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ef282b80-58de-4b03-a90f-c5703d54e3b7.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cb11dfc6-f3c4-4a58-83ac-df735ba9c428.svg#cb11dfc6-f3c4-4a58-83ac-df735ba9c428") format("svg");
         }
         @font-face {
         font-family: "Rosewood-W08-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f432fcbc-ae52-4db1-a4b3-c7145e69b3b6.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f432fcbc-ae52-4db1-a4b3-c7145e69b3b6.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/62a23651-230c-4724-b2c0-087544ed1a27.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e46f32da-eb61-45e5-a1b8-49f3a5f782f8.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9e73fac6-b45b-4ac5-a601-9a0d70cd45b2.svg#9e73fac6-b45b-4ac5-a601-9a0d70cd45b2") format("svg");
         }
         @font-face{
         font-family:"Arial-W02-Black";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c06088a2-994d-44b4-9b38-55d2ae9e13a9.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c06088a2-994d-44b4-9b38-55d2ae9e13a9.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/41280d6d-9240-4d82-9e98-3ea1a1913501.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc33f504-28ac-46ae-b258-d4fd1f599c47.ttf") format("truetype"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0faa6338-fe10-42e6-9346-2c6626ddcd73.svg#0faa6338-fe10-42e6-9346-2c6626ddcd73") format("svg");
         }
         /* cyrillic */
         @font-face {
         font-family: "DIN-Next-W10-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3d009cd7-c8fe-40c0-93da-74f4ea8c530b.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9e95a29-98a7-404a-90ee-1929ad09c696.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a7663fd-eae8-4e50-a67a-225271f8cceb.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58ae9be9-5d95-44b6-8b6c-e6da6a46822c.svg#58ae9be9-5d95-44b6-8b6c-e6da6a46822c") format("svg");
         }
         @font-face {
         font-family: "Helvetica-LT-W10-Bold";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9fe262dc-5a55-4d75-91a4-aed76bd32190.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0a3939d0-3833-4db3-8b85-f64c2b3350d2.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1b128d6d-126f-4c9c-8f87-3e7d30a1671c.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b791c850-fde1-48b3-adf0-8998d55b0866.svg#b791c850-fde1-48b3-adf0-8998d55b0866") format("svg");
         }
         @font-face {
         font-family: "Helvetica-LT-W10-Roman";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3c.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/686a6a06-e711-4bd2-b393-8504a497bb3c.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6f8d1983-4d34-4fa4-9110-988f6c495757.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7903ee3f-e9ab-4bdc-b7d2-d232de2da580.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0.svg#9c58e9ea-fdea-4b9c-b0f9-0a2157389ed0") format("svg");
         }
         @font-face {
         font-family: "Bodoni-Poster-W10";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3f2ac2b4-0662-446d-8b8a-51738492ea04.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3f2ac2b4-0662-446d-8b8a-51738492ea04.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e04da7b7-ccbf-4cbf-b19a-947551d17de6.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cb3483cd-190a-4634-b345-d88f22f1e6f5.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fea2ad42-3ce1-43c4-b571-39159cc109a6.svg#fea2ad42-3ce1-43c4-b571-39159cc109a6") format("svg");
         }
         @font-face {
         font-family: "Droid-Serif-W10-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d039cfc8-41eb-46d5-ad1a-faf4f0d26222.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/d039cfc8-41eb-46d5-ad1a-faf4f0d26222.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/571d67cb-de3d-41af-8c0a-06a53d490466.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/70f941f5-d702-4e7b-8b15-ee65e6b855b9.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e0ffd68e-55a8-4537-b2d1-c51865ac15ee.svg#e0ffd68e-55a8-4537-b2d1-c51865ac15ee") format("svg");
         }
         /* Mobile system fallbacks */
         @font-face {
         font-family: "Comic-Sans-W10-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6ea78fbd-72da-406c-bd23-556297e62ebb.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6ea78fbd-72da-406c-bd23-556297e62ebb.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73381861-eb6a-4f7c-8c14-cd34a714f943.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/93adf2cf-f54c-4a73-8ec7-43fe0b2c91a1.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a89d4dba-ce62-4aaa-8187-bea28a2b3a90.svg#a89d4dba-ce62-4aaa-8187-bea28a2b3a90") format("svg");
         }
         @font-face {
         font-family: "Courier-PS-W10";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/efcef8d3-4e54-4965-a5f0-67f288d40c0a.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/efcef8d3-4e54-4965-a5f0-67f288d40c0a.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2593bfe2-2f34-4218-a1e2-fde3bdc686e1.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e84e67b7-d822-43f4-80a9-315fddffd712.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7bbc8148-b9e2-49ad-bd2a-b6a8ba78efa6.svg#7bbc8148-b9e2-49ad-bd2a-b6a8ba78efa6") format("svg");
         }
         @font-face {
         font-family: "Impact-W10-2010";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2f6579cb-5ade-4b70-a96a-8fe9485fe73f.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2f6579cb-5ade-4b70-a96a-8fe9485fe73f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1c7b5ef1-5b09-4473-8003-a974846653a7.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/805172a0-d718-48ac-9053-873641b3e236.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1979f98e-b074-4385-81b0-772f28a00668.svg#1979f98e-b074-4385-81b0-772f28a00668") format("svg");
         }
         @font-face {
         font-family: "Lucida-Console-W10-0";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e9678295-b67a-4b01-bfb4-a357fa5dd939.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e9678295-b67a-4b01-bfb4-a357fa5dd939.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2c0bffef-a666-4646-a4bc-7faf1fa689f5.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4696d714-e3c0-4351-9df8-2e4449d30c3d.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/936712ee-6903-4ab8-b6ad-99e7ca1721d0.svg#936712ee-6903-4ab8-b6ad-99e7ca1721d0") format("svg");
         }
         @font-face {
         font-family: "Tahoma-W10-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/50c03b26-fd3d-4fa1-96d0-d88b72129c4f.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/50c03b26-fd3d-4fa1-96d0-d88b72129c4f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9ee00678-b6d7-4b4f-8448-70cfa267d36b.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6861fb60-a657-44e2-92fa-86bd26cd2657.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bf5f466c-6f51-449d-91b3-32f1f0c2b796.svg#bf5f466c-6f51-449d-91b3-32f1f0c2b796") format("svg");
         }
         @font-face{
         font-family:"Arial-W10-Black";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26819459-0b68-486b-ae05-2ecdbd222feb.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26819459-0b68-486b-ae05-2ecdbd222feb.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7cfb7eb0-2332-4048-a7f4-2c3fa389c3a3.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2edafc36-cb97-4b1a-8803-a7b2e6125929.ttf") format("truetype"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/00760470-0987-4c68-844d-564282fc8ff9.svg#00760470-0987-4c68-844d-564282fc8ff9") format("svg");
         }
         /* korean */
         @font-face {
         font-family: "FBBlueGothicL";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/902109a4-ea36-40b3-a234-05747684a610.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/902109a4-ea36-40b3-a234-05747684a610.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/1a10c1c0-157a-4f57-96c1-1af2fc242e06.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/31b02a27-3c41-4593-bfbf-84702627c9fd.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e4aaa0ee-fcdd-4558-9d8e-be75c6b8c417.svg#e4aaa0ee-fcdd-4558-9d8e-be75c6b8c417") format("svg");
         }
         @font-face {
         font-family: "FBChamBlue";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3df084ed-47e4-4347-91c7-44d290c2c093.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3df084ed-47e4-4347-91c7-44d290c2c093.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/75c0e570-e4e0-4e86-a031-1ade01e5b3f5.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b9eacc4f-ef9b-4ff5-bf09-ffca8edc43e2.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/12333ad5-3ac0-4a7d-b109-6d8c8101515a.svg#12333ad5-3ac0-4a7d-b109-6d8c8101515a") format("svg");
         }
         @font-face {
         font-family: "FBGreen";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/89bbab6a-1291-4439-9384-bc7e36aae8e0.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/89bbab6a-1291-4439-9384-bc7e36aae8e0.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/399c1f00-ff31-4f87-868c-bcbfcabcdd51.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ad6cc8e5-052c-4d6c-ab7b-66b2f70edb5f.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0045c511-e366-4e81-bd42-131808ac750f.svg#0045c511-e366-4e81-bd42-131808ac750f") format("svg");
         }
         @font-face {
         font-family: "FBNeoGothic";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3323e5a2-cefa-4887-9de9-9fd287987664.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3323e5a2-cefa-4887-9de9-9fd287987664.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c52a9d59-984f-45b4-bfd7-6f6af54eb89f.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/58e6245d-754a-4a05-9bd2-25a655e31640.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/29c28905-cc56-4077-86f5-917ad8e34c1c.svg#29c28905-cc56-4077-86f5-917ad8e34c1c") format("svg");
         }
         @font-face {
         font-family: "FBPlum";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/837a8a7f-bb60-42ed-a5bc-c9368cc1ecba.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/837a8a7f-bb60-42ed-a5bc-c9368cc1ecba.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/101fd386-ed60-4ed9-8ac2-80d0492347ac.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5539addf-e60b-4fba-a356-cbab8abd16c6.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6329eea0-a953-45d7-9074-6f0594e27df7.svg#6329eea0-a953-45d7-9074-6f0594e27df7") format("svg");
         }
         @font-face {
         font-family: "NanumGothic-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/nanum-gothic-regular.ttf") format("truetype");
         }
         @font-face {
         font-family: "BM-HANNA";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/bm-hanna.ttf") format("truetype");
         }
         /* arabic */
         @font-face {
         font-family: "AhmedLTW20-OutlineRegul";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b019dda-5201-4a96-ab40-449f0785e578.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b019dda-5201-4a96-ab40-449f0785e578.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bc9495bd-5edc-4c5b-be28-dfb45e27e688.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/bcaca41c-2840-4aef-9fb4-f0c66589e9cd.ttf") format("truetype"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b5000ada-6fa4-4aae-8c7e-6e6abda2be56.svg#b5000ada-6fa4-4aae-8c7e-6e6abda2be56") format("svg");
         }
         @font-face {
         font-family: "Arian-LT-W20-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e151393-e605-418c-8050-fb734e7b64b3.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3e151393-e605-418c-8050-fb734e7b64b3.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c977bad6-94c3-457c-9771-d8e0017a33c2.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a7bdf7c7-b425-4dae-b583-9f86ec510f9f.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/da80aad9-b3bc-417c-963f-b9033a872ec1.svg#da80aad9-b3bc-417c-963f-b9033a872ec1") format("svg");
         }
         @font-face {
         font-family: "Arian-LT-W20-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64ef878b-c690-447b-a020-f4491b2de821.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64ef878b-c690-447b-a020-f4491b2de821.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c257a373-9919-458c-b7b2-83850775058d.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/afa67eb7-2358-4d1d-bdcd-da0436f5cfb2.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/57ba934e-c7af-4166-a22c-48eaf65f26bb.svg#57ba934e-c7af-4166-a22c-48eaf65f26bb") format("svg");
         }
         @font-face {
         font-family: "Janna-LT-W20-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9c47d30-0eca-434f-8082-ac141c4c97b3.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a9c47d30-0eca-434f-8082-ac141c4c97b3.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/26c24286-5aab-4747-81b9-54330e77fb14.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9c4c7fff-85b6-442f-9726-af5f49d49e53.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a24f53ee-e15e-4931-89a3-b6f17fbfcd72.svg#a24f53ee-e15e-4931-89a3-b6f17fbfcd72") format("svg");
         }
         @font-face {
         font-family: "Kufi-LT-W20-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/774ebfa2-6ac0-48cf-8c15-1394d7bab265.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/774ebfa2-6ac0-48cf-8c15-1394d7bab265.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e0e311dc-5674-493c-8c19-f0a0a1422837.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/96829dee-2b11-4389-a3b6-35eabd423234.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e7b93a7e-e623-4628-809c-4ae5df08148b.svg#e7b93a7e-e623-4628-809c-4ae5df08148b") format("svg");
         }
         @font-face {
         font-family: "HelveticaNeueLTW20-Ligh";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab7f002d-5f09-4a65-b7ad-9f01ec5bfaf0.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ab7f002d-5f09-4a65-b7ad-9f01ec5bfaf0.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b8ee7e47-48e4-4b5b-8a74-cf02708fb54a.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/074fa346-a8c5-4331-9d93-7a06123af067.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e953f49c-15a9-4394-97dd-a3f230e12e0b.svg#e953f49c-15a9-4394-97dd-a3f230e12e0b") format("svg");
         }
         @font-face {
         font-family: "Midan-W20";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d56c718-5282-4923-867f-763af2fa8575.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4d56c718-5282-4923-867f-763af2fa8575.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/be87d34b-77db-4286-87d9-d2964115c6c5.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/539016b8-1f78-4507-b542-c9e55b269ac6.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/3b8c2857-0ab3-4ea6-90bc-9928bf53340c.svg#3b8c2857-0ab3-4ea6-90bc-9928bf53340c") format("svg");
         }
         @font-face {
         font-family: "TanseekModernW20-Light";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73d94c9b-15bd-4af9-bda1-c5ee4ed1c409.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/73d94c9b-15bd-4af9-bda1-c5ee4ed1c409.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/688d77ff-8c0d-4baf-ac95-f45c034e1caf.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/177fb002-a619-4d25-8a79-af7d0e9a1ee6.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/4fa09e39-beb9-46ca-bfcc-f9518ab4a9bd.svg#4fa09e39-beb9-46ca-bfcc-f9518ab4a9bd") format("svg");
         }
         @font-face {
         font-family: "DINNextLTW23-UltraLight";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b4a0535b-3a89-43bd-b3fb-b6619d0b0a09.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b4a0535b-3a89-43bd-b3fb-b6619d0b0a09.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/63b0b154-64e6-4846-be80-b601f3ce9b28.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f3f08f13-d46f-4589-90ac-70c0a21cd061.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/10870395-15e4-40b0-8f7e-5ffab7195224.svg#10870395-15e4-40b0-8f7e-5ffab7195224") format("svg");
         }
         @font-face {
         font-family: "ArabicTypesettingW23-Re";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/28b4ce0b-3a59-4f7c-ab3f-909d63dd0351.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/28b4ce0b-3a59-4f7c-ab3f-909d63dd0351.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/5a32e87e-0f32-4971-a43f-4ec453bc74ca.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/50f516bf-5611-4134-9556-2131aaea2b78.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8db4ca73-82e1-4259-afcd-c1f15b14f62b.svg#8db4ca73-82e1-4259-afcd-c1f15b14f62b") format("svg");
         }
         @font-face {
         font-family: "CoHeadlineW23-ArabicBol";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/925638f2-9ed0-4f9a-a78d-61d6eddd2b54.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/925638f2-9ed0-4f9a-a78d-61d6eddd2b54.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b15a6899-c706-46a9-8c2b-a80b62ba301b.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/36ad9b9b-5fb9-49e6-ad2d-1daafccea16a.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/05e393a0-71df-4e02-b8ba-6f68f2b23b92.svg#05e393a0-71df-4e02-b8ba-6f68f2b23b92") format("svg");
         }
         @font-face{
         font-family:'Amiri';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/amiri-regular.ttf') format('truetype');
         }
         @font-face{
         font-family:'Droid-Naskh';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/droidnaskh-regular.ttf') format('truetype');
         }
         /* hebrew */
         @font-face {
         font-family: "Adler-W26-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8fa9b915-180f-4b72-aee7-22fd066c52c6.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/8fa9b915-180f-4b72-aee7-22fd066c52c6.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fcb3f76f-a112-479e-ab7f-ab1c2be906c9.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/ceda4e97-a631-4986-8cab-709e1775be33.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/353c7faf-0d58-475b-8caa-f1d863e0cf1d.svg#353c7faf-0d58-475b-8caa-f1d863e0cf1d") format("svg");
         }
         @font-face {
         font-family: "Frank-Ruhl-W26-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/90882399-52f1-42a9-986b-c2c49d3fb409.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/90882399-52f1-42a9-986b-c2c49d3fb409.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/0e834425-e268-4b38-b5a8-f24b8632d6ae.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/cb5aceab-5dbf-4c09-b650-7c9d526cc117.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/850e45c9-2003-49fa-8e3f-c7dfd6579acc.svg#850e45c9-2003-49fa-8e3f-c7dfd6579acc") format("svg");
         }
         @font-face {
         font-family: "Haim-Arukeem-W26-Medium";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6de8df0c-23af-49b9-9578-42db4c756d2d.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/6de8df0c-23af-49b9-9578-42db4c756d2d.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/f70c24b0-d6be-4d04-99cd-46efc41d00b4.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/2dd64ac4-7c3a-47fb-acdb-063b811c93d5.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/a7ab1444-5d94-4474-9d31-86df47d8d5c1.svg#a7ab1444-5d94-4474-9d31-86df47d8d5c1") format("svg");
         }
         @font-face {
         font-family: "Miriam-W26-Medium";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/acfa87dd-5042-40e1-87e9-12e4a559269f.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/acfa87dd-5042-40e1-87e9-12e4a559269f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/21aeb0a3-3309-4415-818b-36f94e2a1a3a.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c5acaffd-7553-42ff-a693-8b9be795b4b3.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dd50d8fb-6769-469f-8bfa-9caed8e6df18.svg#dd50d8fb-6769-469f-8bfa-9caed8e6df18") format("svg");
         }
         @font-face {
         font-family: "Nekudot-W26-Bold";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0a57107-844c-4847-afc6-00f3cb3c4d5f.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c0a57107-844c-4847-afc6-00f3cb3c4d5f.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/c28b65cd-9544-42f1-9ffc-d6ffa544e6fb.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/9aa74607-c9af-4c4b-9a3f-fc76488dca25.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/00381de4-f82a-4939-b8e1-1bbde51ac4ce.svg#00381de4-f82a-4939-b8e1-1bbde51ac4ce") format("svg");
         }
         @font-face {
         font-family: "Gulash-W26-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7c672276-1d07-4ff2-8b1d-3245af0dc5cc.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7c672276-1d07-4ff2-8b1d-3245af0dc5cc.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/64f53eeb-1d5e-493c-aa3b-aa8e2c066320.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/7e32a874-81bc-4d38-87aa-ff626ce5a400.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/857d7efc-7a9c-457d-8aa5-44f0992e6441.svg#857d7efc-7a9c-457d-8aa5-44f0992e6441") format("svg");
         }
         @font-face {
         font-family: "Shabazi-W26-Bold";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dc7f3c57-fb2d-4656-9224-ef9f1c88477e.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/dc7f3c57-fb2d-4656-9224-ef9f1c88477e.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/09048cb1-f6a6-4b44-9d96-6d20013ef7e8.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/fec4486e-254a-4cb4-b1a0-859cf2190792.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b25da79b-ff9a-486e-bf4f-2893c47da939.svg#b25da79b-ff9a-486e-bf4f-2893c47da939") format("svg");
         }
         @font-face{
         font-family:"Chips-W26-Normal";
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/aa157336-ffa1-476e-9a72-e9f516e87ca3.eot?#iefix");
         src:url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/aa157336-ffa1-476e-9a72-e9f516e87ca3.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/e526922d-4fe2-4e4d-834d-6b62ebd244da.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/03e7eb16-072f-4c53-b299-08535bff2421.ttf") format("truetype"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/b21a0ec6-8efb-40de-99f1-20a11d482401.svg#b21a0ec6-8efb-40de-99f1-20a11d482401") format("svg");
         }
         @font-face {
         font-family: "Alef-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.eot?#iefix") format("eot"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.woff") format("woff"),url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/alef-regular.ttf") format("truetype");
         }
         @font-face {
         font-family: "OpenSansHebrewCondensed-Regular";
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.eot?#iefix");
         src: url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.woff") format("woff"),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/opensans-hebrew-condensed-regular.ttf") format("truetype");
         }
         @font-face{
         font-family:'almoni-dl-aaa-300';
         font-weight:300; /*(light)*/
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-300.ttf') format('truetype');
         }
         @font-face{
         font-family:'almoni-dl-aaa-400';
         font-weight:400; /*(regular)*/
         font-style: normal;
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-400.ttf') format('truetype');
         }
         @font-face{
         font-family:'almoni-dl-aaa-700';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/almoni-dl-aaa-700.ttf') format('truetype');
         }
         @font-face{
         font-family:'asimon-aaa-400';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/asimon-aaa-400.ttf') format('truetype');
         }
         @font-face{
         font-family:'atlas-aaa-500';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/atlas-aaa-500.ttf') format('truetype');
         }
         @font-face{
         font-family:'mixtape-aaa-400';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/mixtape-aaa-400.ttf') format('truetype');
         }
         @font-face{
         font-family:'museum-aaa-400';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/museum-aaa-400.ttf') format('truetype');
         }
         @font-face{
         font-family:'omes-aaa-400';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/omes-aaa-400.ttf') format('truetype');
         }
         @font-face{
         font-family:'MeodedPashut-oeregular';
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.eot');
         src: url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.eot?#iefix') format('embedded-opentype'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.woff') format('woff'),
         url('http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/open-source/meodedpashut_oeregular.ttf') format('truetype'),
         url("http://static.parastorage.com/services/third-party/fonts/user-site-fonts/fonts/meodedpashut_oeregular.svg#meodedpashut_oeregular") format("svg");
         }
         /* This fonts are from google fonts, We added them so we can configure the weights */
         /** Roboto Thin**/
         @font-face {
         font-family: "Roboto-Thin";
         src: url("http://fonts.gstatic.com/s/roboto/v18/hNdh1kLam5Qu9t6-swGJgPesZW2xOQ-xsNqO47m55DA.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/hNdh1kLam5Qu9t6-swGJgPesZW2xOQ-xsNqO47m55DA.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/e7MeVAyvogMqFwwl61PKhPesZW2xOQ-xsNqO47m55DA.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/idLYXfFa1c7oAPILDl4z0fesZW2xOQ-xsNqO47m55DA.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/BhNUF0UvSiDyKi5GMZK0cPesZW2xOQ-xsNqO47m55DA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=Rd0cKaNHVPp3zNwTc2cJ6fesZW2xOQ-xsNqO47m55DA&amp;skey=5473b731ec7fc9c1&amp;v=v18#Roboto") format("svg");
         }
         @font-face {
         font-family: "Roboto-Thin";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/roboto/v18/3KAd02OzFSDbt78HTOt2og.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/3KAd02OzFSDbt78HTOt2og.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/fIKu7GwZTy_12XzG_jt8eA.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/Xyjz-jNkfiYuJf8UC3Lizw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/5M21SdFLkD52QavfmHs6cA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=1w8PsahvVyy4URc6MP8jWQ&amp;skey=a0a0114a1dcab3ac&amp;v=v18#Roboto") format("svg");
         }
         @font-face {
         font-family: "Roboto-Thin";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8slQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8slQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8svk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8shsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/dzxs_VxZUhdM2mEBkNa8si3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=dzxs_VxZUhdM2mEBkNa8sqWUboTb-jS2tyCOQMtm97g&amp;skey=8f53aa2e7deadc4a&amp;v=v18#Roboto") format("svg");
         }
         @font-face {
         font-family: "Roboto-Thin";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/roboto/v18/87ImaWi619lMX9BhLChOt_esZW2xOQ-xsNqO47m55DA.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/87ImaWi619lMX9BhLChOt_esZW2xOQ-xsNqO47m55DA.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/vSzulfKSK0LLjjfeaxcREvesZW2xOQ-xsNqO47m55DA.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/dFWsweFqlD8ExfyN7Gh_GPesZW2xOQ-xsNqO47m55DA.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/OKegwhKhBNN-dhuHI27Hy_esZW2xOQ-xsNqO47m55DA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=uIFaDMJQtos_JDdGgbxITvesZW2xOQ-xsNqO47m55DA&amp;skey=c608c610063635f9&amp;v=v18#Roboto") format("svg");
         }
         /** Roboto Bold**/
         @font-face {
         font-family: "Roboto-Bold";
         src: url("http://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aWz8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/97uahxiqZRoncBaCEI3aW6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=97uahxiqZRoncBaCEI3aW5bd9NUM7myrQQz30yPaGQ4&amp;skey=c06e7213f788649e&amp;v=v18#Roboto") format("svg");
         }
         @font-face {
         font-family: "Roboto-Bold";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkvY6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkvY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkltXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkj8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/9_7S_tWeGDh5Pq3u05RVkqCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=9_7S_tWeGDh5Pq3u05RVkpbd9NUM7myrQQz30yPaGQ4&amp;skey=934406f772f9777d&amp;v=v18#Roboto") format("svg");
         }
         @font-face {
         font-family: "Roboto-Bold";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC6g5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC9Ih4imgI8P11RFo6YPCPC0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/t6Nd4cfPRhZP44Q5QAjcC102b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=t6Nd4cfPRhZP44Q5QAjcC5S_ZaL0arjVp2tkn2-HJhM&amp;skey=dd030d266f3beccc&amp;v=v18#Roboto") format("svg");
         }
         @font-face {
         font-family: "Roboto-Bold";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpag5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpdIh4imgI8P11RFo6YPCPC0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/roboto/v18/bmC0pGMXrhphrZJmniIZpV02b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=bmC0pGMXrhphrZJmniIZpZS_ZaL0arjVp2tkn2-HJhM&amp;skey=b80be3241fe40325&amp;v=v18#Roboto") format("svg");
         }
         /** WorkSans-ExtraLight**/
         @font-face {
         font-family: "WorkSans-ExtraLight";
         src: url("http://fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZ6lSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZ6lSqKUsDpiXlwfj-ZM2w_A.eot.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZxUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZxa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/worksans/v3/u_mYNr_qYP37m7vgvmIYZ9qQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=u_mYNr_qYP37m7vgvmIYZ91LKoZ82bBu2f46DhHcs3c&amp;skey=7c020d2757de915d&amp;v=v3#WorkSans") format("svg");
         }
         @font-face {
         font-family: "WorkSans-ExtraLight";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUpl6lSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUpl6lSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUplxUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUplxa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/worksans/v3/FD_Udbezj8EHXbdsqLUpl9qQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=FD_Udbezj8EHXbdsqLUpl91LKoZ82bBu2f46DhHcs3c&amp;skey=ebac65da87d8d365&amp;v=v3#WorkSans") format("svg");
         }
         /** WorkSans-SemiBold**/
         @font-face {
         font-family: "WorkSans-SemiBold";
         src: url("http://fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/worksans/v3/z9rX03Xuz9ZNHTMg1_ghGdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=z9rX03Xuz9ZNHTMg1_ghGd1LKoZ82bBu2f46DhHcs3c&amp;skey=d84f72eaa49bc5a2&amp;v=v3#WorkSans") format("svg");
         }
         @font-face {
         font-family: "WorkSans-SemiBold";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/worksans/v3/4udXuXg54JlPEP5iKO5AmdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=4udXuXg54JlPEP5iKO5Amd1LKoZ82bBu2f46DhHcs3c&amp;skey=f1df08d30998b725&amp;v=v3#WorkSans") format("svg");
         }
         /* Poppins-ExtraLight */
         @font-face {
         font-family: "Poppins-ExtraLight";
         src: url("http://fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGFQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGFQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGPk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGBsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/h3r77AwDsldr1E_2g4qqGC3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=h3r77AwDsldr1E_2g4qqGKWUboTb-jS2tyCOQMtm97g&amp;skey=1bdc08fe61c3cc9e&amp;v=v5#Poppins") format("svg");
         }
         @font-face {
         font-family: "Poppins-ExtraLight";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/poppins/v5/2NBlOVek2HIa2EeuV_3Cbw.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/2NBlOVek2HIa2EeuV_3Cbw.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/rijG6I_IOXJjsH07UEo2mw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/p0A1C4_gK5NzKtuGSwNurQ.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/rATt6MpBkxjRr3sy5fMEDg.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=dvQ6luzB0ViWP07p6fisSw&amp;skey=87759fb096548f6d&amp;v=v5#Poppins") format("svg");
         }
         @font-face {
         font-family: "Poppins-ExtraLight";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/-GlaWpWcSgdVagNuOGuFKdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=-GlaWpWcSgdVagNuOGuFKd1LKoZ82bBu2f46DhHcs3c&amp;skey=e6f64e60fb8d9268&amp;v=v5#Poppins") format("svg");
         }
         @font-face {
         font-family: "Poppins-ExtraLight";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQfY6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQfY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQVtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQT8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/Fm41upUVp7KTKUZhL0PfQaCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=Fm41upUVp7KTKUZhL0PfQZbd9NUM7myrQQz30yPaGQ4&amp;skey=f21d6e783fa43c88&amp;v=v5#Poppins") format("svg");
         }
         /* Poppins-SemiBold */
         @font-face {
         font-family: "Poppins-SemiBold";
         src: url("http://fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949Npfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/9VWMTeb5jtXkNoTv949NpS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=9VWMTeb5jtXkNoTv949NpaWUboTb-jS2tyCOQMtm97g&amp;skey=ce7ef9d62ca89319&amp;v=v5#Poppins") format("svg");
         }
         @font-face {
         font-family: "Poppins-SemiBold";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-Sfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/aDjpMND83pDErGXlVEr-SS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=aDjpMND83pDErGXlVEr-SaWUboTb-jS2tyCOQMtm97g&amp;skey=cea76fe63715a67a&amp;v=v5#Poppins") format("svg");
         }
         @font-face {
         font-family: "Poppins-SemiBold";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjalSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjRUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjRa1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/RbebACOccNN-5ixkDIVLjdqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=RbebACOccNN-5ixkDIVLjd1LKoZ82bBu2f46DhHcs3c&amp;skey=7fbc556774b13ef0&amp;v=v5#Poppins") format("svg");
         }
         @font-face {
         font-family: "Poppins-SemiBold";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdChUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCha1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/poppins/v5/c4FPK8_hIFKoX59qcGwdCtqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=c4FPK8_hIFKoX59qcGwdCt1LKoZ82bBu2f46DhHcs3c&amp;skey=29c3bd833a54ba8c&amp;v=v5#Poppins") format("svg");
         }
         /* Barlow-ExtraLight */
         @font-face {
         font-family: "Barlow-ExtraLight";
         src: url("http://fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NPY6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NPY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NFtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8ND8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/51v0xj5VPw1cLYHNhfd8NKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=51v0xj5VPw1cLYHNhfd8NJbd9NUM7myrQQz30yPaGQ4&amp;skey=e8c74abecf94633e&amp;v=v1#Barlow") format("svg");
         }
         @font-face {
         font-family: "Barlow-ExtraLight";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/barlow/ /SWLcTgmyMR1GjdNjixEPiQ.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/SWLcTgmyMR1GjdNjixEPiQ.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/2woyxyDnPU0v4IiqYU9D1g.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/-HJgNsTwx9qXGSxqew62RQ.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/qoExc9IJQUjYXhlVZNNLgg.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=lYNHuF7-w_9_po3MKWoAsw&amp;skey=32d7acf8757dbad0&amp;v=v1#Barlow") format("svg");
         }
         @font-face {
         font-family: "Barlow-ExtraLight";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZeZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZag5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZdIh4imgI8P11RFo6YPCPC0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/14AxwKgJhKIO-YYUP_KtZV02b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=14AxwKgJhKIO-YYUP_KtZZS_ZaL0arjVp2tkn2-HJhM&amp;skey=9a40589dc4645af7&amp;v=v1#Barlow") format("svg");
         }
         @font-face {
         font-family: "Barlow-ExtraLight";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/barlow/v1/8p49G4DnpMZgB5cGwNFgJvesZW2xOQ-xsNqO47m55DA.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/8p49G4DnpMZgB5cGwNFgJvesZW2xOQ-xsNqO47m55DA.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/cdbGxfKO8gdkBd5U5TuXqPesZW2xOQ-xsNqO47m55DA.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/W1XpMGU0WrpbCawEdG1FM_esZW2xOQ-xsNqO47m55DA.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/_lIpJP17FZmSeklpAeOdnvesZW2xOQ-xsNqO47m55DA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=MGR_1eUqfxpTc1K5cbfqWvesZW2xOQ-xsNqO47m55DA&amp;skey=ae428d300932fbee&amp;v=v1#Barlow") format("svg");
         }
         /* Barlow-Medium */
         @font-face {
         font-family: "Barlow-Medium";
         src: url("http://fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2Ez8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/ZqlneECqpsd9SXlmAsD2E6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=ZqlneECqpsd9SXlmAsD2E5bd9NUM7myrQQz30yPaGQ4&amp;skey=4c8d0d0b13516148&amp;v=v1#Barlow") format("svg");
         }
         @font-face {
         font-family: "Barlow-Medium";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xfY6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xfY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xVtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xT8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/yS165lxqGuDghyUMXeu6xaCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=yS165lxqGuDghyUMXeu6xZbd9NUM7myrQQz30yPaGQ4&amp;skey=f60e73b1bbf362f3&amp;v=v1#Barlow") format("svg");
         }
         @font-face {
         font-family: "Barlow-Medium";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ-ZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ6g5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ9Ih4imgI8P11RFo6YPCPC0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/xJLokI-F3wr7NRWXgS0pZ102b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=xJLokI-F3wr7NRWXgS0pZ5S_ZaL0arjVp2tkn2-HJhM&amp;skey=989d87b0113009a2&amp;v=v1#Barlow") format("svg");
         }
         @font-face {
         font-family: "Barlow-Medium";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xuZiE7IA0Up7-VwGqa0iGVY.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xuZiE7IA0Up7-VwGqa0iGVY.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xqg5eI2G47JWe0-AuFtD150.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xtIh4imgI8P11RFo6YPCPC0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/barlow/v1/hw7DQwyFvE7wFOFzpow4xl02b4v3fUxqf9CZJ1qUoIA.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=hw7DQwyFvE7wFOFzpow4xpS_ZaL0arjVp2tkn2-HJhM&amp;skey=25c93348b6ec64d8&amp;v=v1#Barlow") format("svg");
         }
         /** Oswald-ExtraLight **/
         @font-face {
         font-family: "Oswald-ExtraLight";
         src: url("http://fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868Ez8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/oswald/v16/GwZ_PiN1Aind9Eyjp868E6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=GwZ_PiN1Aind9Eyjp868E5bd9NUM7myrQQz30yPaGQ4&amp;skey=bb2021537ac38f74&amp;v=v16#Oswald") format("svg");
         }
         @font-face {
         font-family: "Oswald-ExtraLight";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/oswald/v16/aBQVVQvnHeKhkWtMdHDrBA.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/oswald/v16/aBQVVQvnHeKhkWtMdHDrBA.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/oswald/v16/RqRF4AQrkUh3ft98NHH2mA.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/oswald/v16/PyqsDANUgLi2UsdO-d4iZQ.woff") format("woff"),
         url("http://fonts.gstatic.com/s/oswald/v16/AWM5wXtMJeRP-AcRTgT4qQ.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=fxOl0NmPFyuGF72xEC-uaw&amp;skey=653237e53512d0de&amp;v=v16#Oswald") format("svg");
         }
         /** Oswald-Medium **/
         @font-face {
         font-family: "Oswald-Medium";
         src: url("http://fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajPY6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajPY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajFtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajD8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/oswald/v16/cgaIrkaP9Empe8_PwXbajKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=cgaIrkaP9Empe8_PwXbajJbd9NUM7myrQQz30yPaGQ4&amp;skey=4b4aed5676a34753&amp;v=v16#Oswald") format("svg");
         }
         @font-face {
         font-family: "Oswald-Medium";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb3_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb3_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb31tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb3z8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/oswald/v16/dI-qzxlKVQA6TUC5RKSb36CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=dI-qzxlKVQA6TUC5RKSb35bd9NUM7myrQQz30yPaGQ4&amp;skey=23b674776eaa386b&amp;v=v16#Oswald") format("svg");
         }
         /* CormorantGaramond-Light */
         @font-face {
         font-family: "CormorantGaramond-Light";
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbBfiualwvFStSOsxMaA9Xk.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbBfiualwvFStSOsxMaA9Xk.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVSNMxVe3WGf96EDbCaLCBKE.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVergGQquJ_f3dxTxEJk8ZKM.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXYC8UqYVZ_Us7w6eA7MdZE.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVQItn0uMP03uW4URT5yNJ1A&amp;skey=4f9ed6f80d6d2fa0&amp;v=v5#CormorantGaramond") format("svg");
         }
         @font-face {
         font-family: "CormorantGaramond-Light";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVazXwemCpFqMs4XqHkBvwCw.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVazXwemCpFqMs4XqHkBvwCw.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXP87xhFzkXvitf5EbJwljk.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVebEnH4R5m1MLXJyCi0BC78.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVXXouEby_DX2rsmMI51GE6g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVagJAOahgqhI62iGMRZxLgA&amp;skey=4b255bdbddcd870c&amp;v=v5#CormorantGaramond") format("svg");
         }
         @font-face {
         font-family: "CormorantGaramond-Light";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAo6DDMtmvJ_B6GwP8DnSGlc.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAo6DDMtmvJ_B6GwP8DnSGlc.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAhjqQayVfgmnRFwqYqN-Dis.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAhNmD6bOwmI0fiYv_Ehe03s.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAoUBHI3ylZGW9V5Fst4kWps.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAm2yWSqasHTScCEp__B8ZG8&amp;skey=5a7e0a432eb14fbf&amp;v=v5#CormorantGaramond") format("svg");
         }
         @font-face {
         font-family: "CormorantGaramond-Light";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEApsqEKC2V_AfCL0idPKEkUg.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEApsqEKC2V_AfCL0idPKEkUg.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAjp2K1CgsixPpkXulytJk5A.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAhX141arjC0UgpdoDjjeeVk.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAs_ggsKlhsDnft5n268BUmY.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAhPsKNRAg-HYnzxRksprgig&amp;skey=a646f7df62b0db07&amp;v=v5#CormorantGaramond") format("svg");
         }
         /* CormorantGaramond-SemiBold */
         @font-face {
         font-family: "CormorantGaramond-SemiBold";
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbVz384BzEPyLpTPeKMcRYU.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbVz384BzEPyLpTPeKMcRYU.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVVBiiiFZ1SMKhjDurTuPCI4.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVbaDr2DD9WOmTsY4M3S93hU.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVeXPWxx9SjLSy6MMhsXoUuc.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVYO0Qi8fZokth4SQK1TX-KE&amp;skey=e242efc8b3e67934&amp;v=v5#CormorantGaramond") format("svg");
         }
         @font-face {
         font-family: "CormorantGaramond-SemiBold";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVdloJvQ3p58mlwV6TqgfA7M.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVdloJvQ3p58mlwV6TqgfA7M.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVVYUpUlN7yzNHgIMH66hSOI.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVQIBIRsdTZvmhTwexVJEOCE.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/iEjm9hVxcattz37Y8gZwVaDtWBNc4GTxi9CQqfNpXFo.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=iEjm9hVxcattz37Y8gZwVb6HL2eGTYrO_zDfBqjt1MM&amp;skey=3181ffd829cb74e8&amp;v=v5#CormorantGaramond") format("svg");
         }
         @font-face {
         font-family: "CormorantGaramond-SemiBold";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAsYoq9jXh7-YfoVtEE3lLX0.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAsYoq9jXh7-YfoVtEE3lLX0.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAoNfVaeyxI1fRb3LCiKLt24.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAggc7XrJygm306pFqSI3kLU.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAtfqxAW0UHKApQgkrKaDcls.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAie-e-6qXDi5M9WaClpJAY0&amp;skey=d056cd8e7bb95ad3&amp;v=v5#CormorantGaramond") format("svg");
         }
         @font-face {
         font-family: "CormorantGaramond-SemiBold";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAgFSqQyBKGFf_cwATpqgiXs.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAgFSqQyBKGFf_cwATpqgiXs.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAoWXH9gdibkBmfnjU2pcZcs.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAsgX3acpz6D8mJOI1MynZxQ.woff") format("woff"),
         url("http://fonts.gstatic.com/s/cormorantgaramond/v5/zuqx3k1yUEl3Eavo-ZPEAr5MZRoaqvZ37XiNNIvX6C0.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=zuqx3k1yUEl3Eavo-ZPEAh8ZTJ6KlBZ1Ts_1-_3vUrI&amp;skey=f5baa31c9854d669&amp;v=v5#CormorantGaramond") format("svg");
         }
         /* PlayfairDisplay-Bold */
         @font-face {
         font-family: "PlayfairDisplay-Bold";
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPmrPH9ZsFqytabBz9sgz_Q.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPmrPH9ZsFqytabBz9sgz_Q.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIIWMvkC5IXg8PD2cMeMDjBI.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIMITpqSvb0EhPNqvdm-qG4s.woff") format("woff"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIETnlckwlsa9ycyidjAp5Kc.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=UC3ZEjagJi85gF9qFaBgIMnytsXa_r9I1moNmPEKxr4&amp;skey=c119c2be8134ed06&amp;v=v13#PlayfairDisplay") format("svg");
         }
         @font-face {
         font-family: "PlayfairDisplay-Bold";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPqcSpnvWCHzQNKqku5JWIY.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIPqcSpnvWCHzQNKqku5JWIY.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgILxv9TIgpWQaRKdG-_MdlP0.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIIidMZaDCgb76Cj_Fd30HHc.woff") format("woff"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/UC3ZEjagJi85gF9qFaBgIBczLBIbQ3AJzFR3-m2VmLg.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=UC3ZEjagJi85gF9qFaBgIKCikRNRa47LAyIy5yIVXvc&amp;skey=5c26bbaa7df0e616&amp;v=v13#PlayfairDisplay") format("svg");
         }
         @font-face {
         font-family: "PlayfairDisplay-Bold";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEFESDfruYL5oKOAJzNJb7ys.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEFESDfruYL5oKOAJzNJb7ys.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEPizZYmr4BUkAcTxjCN2kLE.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDENxHfcsPlDajrhlFKgOPuYg.woff") format("woff"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDELo34k-OXaeZF4ilAYxgJ0c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=n7G4PqJvFP2Kubl0VBLDEK8_Qdjw54vp4QRNW69d70M&amp;skey=a95cefd51a12ec17&amp;v=v13#PlayfairDisplay") format("svg");
         }
         @font-face {
         font-family: "PlayfairDisplay-Bold";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEIwnLPDplx5S8AKag-I5qXU.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEIwnLPDplx5S8AKag-I5qXU.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEA9QP145tN5qB9RQEnC5ftI.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEBMHjY5M6rp_NSn2hjKJhfc.woff") format("woff"),
         url("http://fonts.gstatic.com/s/playfairdisplay/v13/n7G4PqJvFP2Kubl0VBLDEEwFowWjhcb6pv3Dv1OTigc.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=n7G4PqJvFP2Kubl0VBLDEFAVE8WjwCPLYD-4C_k3wkc&amp;skey=5aa2cfa063a6b631&amp;v=v13#PlayfairDisplay") format("svg");
         }
         /** DancingScript-Regular **/
         @font-face {
         font-family: "DancingScript-Regular";
         src: url("http://fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2T9RCsRvjGRATIRlxBzwHdg.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2T9RCsRvjGRATIRlxBzwHdg.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2RN-0beyHaEC1kqeqPFpWrs.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2UtCETOCmz2wCdel46UOhAM.woff") format("woff"),
         url("http://fonts.gstatic.com/s/dancingscript/v9/DK0eTGXiZjN6yA8zAEyM2fog-Cy6dhy5Xgu82688fSg.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=DK0eTGXiZjN6yA8zAEyM2cGf0DEE6mlqV9opp_1pRbI&amp;skey=c89f400061e5d0a8&amp;v=v9#DancingScript") format("svg");
         }
         @font-face {
         font-family: "DancingScript-Regular";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowd1F__mTQJ--pRXs2EOmsg0.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowd1F__mTQJ--pRXs2EOmsg0.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowZR92E8gBbe58j0pHY_YhTY.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowW_WCyVccUAWDspcx_4UXqg.woff") format("woff"),
         url("http://fonts.gstatic.com/s/dancingscript/v9/KGBfwabt0ZRLA5W1ywjowWfbPar0qrg-I_8uTXkQ0Sc.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=KGBfwabt0ZRLA5W1ywjowT9GhUFziu5FA7LV6roWAHM&amp;skey=4fd71febfd48d6c&amp;v=v9#DancingScript") format("svg");
         }
         /* Raleway-SemiBold */
         @font-face {
         font-family: "Raleway-SemiBold";
         src: url("http://fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/raleway/v12/STBOO2waD2LpX45SXYjQBS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=STBOO2waD2LpX45SXYjQBaWUboTb-jS2tyCOQMtm97g&amp;skey=484edb0fdce88a64&amp;v=v12#Raleway") format("svg");
         }
         @font-face {
         font-family: "Raleway-SemiBold";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzVQlYEbsez9cZjKsNMjLOwM.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzVQlYEbsez9cZjKsNMjLOwM.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzfk_vArhqVIZ0nv9q090hN8.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzRsxEYwM7FgeyaSgU71cLG0.woff") format("woff"),
         url("http://fonts.gstatic.com/s/raleway/v12/WmVKXVcOuffP_qmCpFuyzS3USBnSvpkopQaUR-2r7iU.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=WmVKXVcOuffP_qmCpFuyzaWUboTb-jS2tyCOQMtm97g&amp;skey=e507c3e2b7915ad1&amp;v=v12#Raleway") format("svg");
         }
         @font-face {
         font-family: "Raleway-SemiBold";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29KlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29KlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29BUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29Ba1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/raleway/v12/OY22yoG8EJ3IN_muVWm29NqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=OY22yoG8EJ3IN_muVWm29N1LKoZ82bBu2f46DhHcs3c&amp;skey=cb4eb159e5e3db1f&amp;v=v12#Raleway") format("svg");
         }
         @font-face {
         font-family: "Raleway-SemiBold";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKqlSqKUsDpiXlwfj-ZM2w_A.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKhUOjZSKWg4xBWp_C_qQx0o.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKha1RVmPjeKy21_GQJaLlJI.woff") format("woff"),
         url("http://fonts.gstatic.com/s/raleway/v12/lFxvRPuGFG5ktd7P0WRwKtqQynqKV_9Plp7mupa0S4g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=lFxvRPuGFG5ktd7P0WRwKt1LKoZ82bBu2f46DhHcs3c&amp;skey=9ecf9384a6d643b6&amp;v=v12#Raleway") format("svg");
         }
         /* Lato-Light */
         @font-face {
         font-family: "Lato-Light";
         src: url("http://fonts.gstatic.com/s/lato/v14/KDRyPGFdQxeFClMSxPKQ3w.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/lato/v14/KDRyPGFdQxeFClMSxPKQ3w.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/lato/v14/2hXzmNaFRuKTSBR9nRGO-A.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/lato/v14/kU6VHbqMAZhaN_nXCmLQsQ.woff") format("woff"),
         url("http://fonts.gstatic.com/s/lato/v14/BTu4SsVveqk58cdYjlaM9g.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=I5jxx2JZduMchyTN9Dgylg&amp;skey=91f32e07d083dd3a&amp;v=v14#Lato") format("svg");
         }
         @font-face {
         font-family: "Lato-Light";
         font-weight: 700;
         src: url("http://fonts.gstatic.com/s/lato/v14/6TEmgPQ_0ZdLPE7b6hhIjQ.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/lato/v14/6TEmgPQ_0ZdLPE7b6hhIjQ.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/lato/v14/7nLfsQCzhQW_PwpkrwroYw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/lato/v14/I1Pn3gihk5vyP0Yw5GqKsQ.woff") format("woff"),
         url("http://fonts.gstatic.com/s/lato/v14/zpv3sOKAbMf4wff105oLjw.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=adjMoXVaHbO08wMAF5yDsA&amp;skey=3480a19627739c0d&amp;v=v14#Lato") format("svg");
         }
         @font-face {
         font-family: "Lato-Light";
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEPY6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEPY6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEFtXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNED8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/lato/v14/XNVd6tsqi9wmKNvnh5HNEKCWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=XNVd6tsqi9wmKNvnh5HNEJbd9NUM7myrQQz30yPaGQ4&amp;skey=8107d606b7e3d38e&amp;v=v14#Lato") format("svg");
         }
         @font-face {
         font-family: "Lato-Light";
         font-weight: 700;
         font-style: italic;
         src: url("http://fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn_Y6323mHUZFJMgTvxaG2iE.eot?#iefix");
         src: url("http://fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn_Y6323mHUZFJMgTvxaG2iE.eot?#iefix") format("eot"),
         url("http://fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn1tXRa8TVwTICgirnJhmVJw.woff2") format("woff2"),
         url("http://fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rnz8E0i7KZn-EPnyo3HZu7kw.woff") format("woff"),
         url("http://fonts.gstatic.com/s/lato/v14/AcvTq8Q0lyKKNxRlL28Rn6CWcynf_cDxXwCLxiixG1c.ttf") format("truetype"),
         url("http://fonts.gstatic.com/l/font?kit=AcvTq8Q0lyKKNxRlL28Rn5bd9NUM7myrQQz30yPaGQ4&amp;skey=5334e9c0b67702e2&amp;v=v14#Lato") format("svg");
         }
         @font-face {
         font-family: "August-Bold";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.eot?#iefix");
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.woff") format("woff"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.ttf") format("truetype"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustBold/v1/augustbold-webfont.svg") format("svg");
         }
         @font-face {
         font-family: "August-Light";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.eot?#iefix");
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.woff") format("woff"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.ttf") format("truetype"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustLight/v1/augustlight-webfont.svg") format("svg");
         }
         @font-face {
         font-family: "August-Medium";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.eot?#iefix");
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.woff") format("woff"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.ttf") format("truetype"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/AugustMedium/v1/augustmedium-webfont.svg") format("svg");
         }
         @font-face {
         font-family: "Knedge-Bold";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.eot?#iefix");
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.eot?#iefix") format("eot"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.woff") format("woff"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.ttf") format("truetype"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/KnedgeBold/v1/knedgebold-webfont.svg") format("svg");
         }
         @font-face {
         font-family: "TsukushiGothic";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-R.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-R.woff") format("woff")
         }
         @font-face {
         font-family: "TsukushiGothic";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-D.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiGothic/v1/WIX-TsukuGoPr5-D.woff") format("woff")
         }
         @font-face {
         font-family: "Rodin-Light";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-L.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-L.woff") format("woff")
         }
         /* mapped to rodin-medium*/
         @font-face {
         font-family: "Rodin-Light";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-M.woff") format("woff")
         }
         @font-face {
         font-family: "Rodin-Demi-Bold";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-DB.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Rodin/v1/WIX-RodinProN-DB.woff") format("woff")
         }
         @font-face {
         font-family: "NewCezanne";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/NewCezanne/v1/WIX-NewCezanneProN-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/NewCezanne/v1/WIX-NewCezanneProN-M.woff") format("woff")
         }
         @font-face {
         font-family: "UDKakugoLarge";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-M.woff") format("woff")
         }
         @font-face {
         font-family: "UDKakugoLarge";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-DB.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDKakugoLarge/v1/WIX-UDKakugo_LargePr6N-DB.woff") format("woff")
         }
         @font-face {
         font-family: "TsukushiMaruGothic";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-M.woff") format("woff")
         }
         @font-face {
         font-family: "TsukushiMaruGothic";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-B.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiMaruGothic/v1/WIX-TsukuARdGothicStd-B.woff") format("woff")
         }
         @font-face {
         font-family: "Seurat";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-M.woff") format("woff")
         }
         @font-face {
         font-family: "Seurat";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-DB.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Seurat/v1/WIX-SeuratProN-DB.woff") format("woff")
         }
         @font-face {
         font-family: "TsukushiBMaruGothic";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiBMaruGothic/v1/WIX-TsukuBRdGothicStd-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiBMaruGothic/v1/WIX-TsukuBRdGothicStd-M.woff") format("woff")
         }
         @font-face {
         font-family: "UDMincho";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-M.woff") format("woff")
         }
         @font-face {
         font-family: "UDMincho";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-DB.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/UDMincho/v1/WIX-UDMinchoPr6N-DB.woff") format("woff")
         }
         @font-face {
         font-family: "TsukushiOldMincho";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiOldMincho/v1/WIX-TsukuAOldMinPr6N-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/TsukushiOldMincho/v1/WIX-TsukuAOldMinPr6N-M.woff") format("woff")
         }
         @font-face {
         font-family: "Matisse";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-M.woff") format("woff")
         }
         @font-face {
         font-family: "Matisse";
         font-weight: 700;
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-DB.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Matisse/v1/WIX-MatisseProN-DB.woff") format("woff")
         }
         @font-face {
         font-family: "Skip";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Skip/v1/WIX-SkipStd-M.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Skip/v1/WIX-SkipStd-M.woff") format("woff")
         }
         @font-face {
         font-family: "Cookhand";
         src: url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Cookhand/v1/WIX-CookHandStd-R.woff2") format("woff2"),
         url("http://static.parastorage.com/services/santa-resources/resources/viewer/user-site-fonts/fonts/Japanese/Cookhand/v1/WIX-CookHandStd-R.woff") format("woff")
         }
      </style>
      <style id="fonts.googleapis">
         /* cyrillic */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 400;
         src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOEDuSfQZQ.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* hebrew */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 400;
         src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOECOSfQZQ.woff2) format('woff2');
         unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 400;
         src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOEBeSfQZQ.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 400;
         src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOEBOSfQZQ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 400;
         src: local('Amatic SC Regular'), local('AmaticSC-Regular'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZyzwprpvBS1izr_vOECuSf.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 700;
         src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKerUC7WQ.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* hebrew */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 700;
         src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKfLUC7WQ.woff2) format('woff2');
         unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 700;
         src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKcbUC7WQ.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 700;
         src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKcLUC7WQ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Amatic SC';
         font-style: normal;
         font-weight: 700;
         src: local('Amatic SC Bold'), local('AmaticSC-Bold'), url(https://fonts.gstatic.com/s/amaticsc/v13/TUZ3zwprpvBS1izr_vOMscGKfrUC.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Anton';
         font-style: normal;
         font-weight: 400;
         src: local('Anton Regular'), local('Anton-Regular'), url(https://fonts.gstatic.com/s/anton/v11/1Ptgg87LROyAm3K8-C8QSw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Anton';
         font-style: normal;
         font-weight: 400;
         src: local('Anton Regular'), local('Anton-Regular'), url(https://fonts.gstatic.com/s/anton/v11/1Ptgg87LROyAm3K9-C8QSw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Anton';
         font-style: normal;
         font-weight: 400;
         src: local('Anton Regular'), local('Anton-Regular'), url(https://fonts.gstatic.com/s/anton/v11/1Ptgg87LROyAm3Kz-C8.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Barlow';
         font-style: italic;
         font-weight: 400;
         src: local('Barlow Italic'), local('Barlow-Italic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHrv4kjgoGqM7E_Cfs0wH8RnA.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Barlow';
         font-style: italic;
         font-weight: 400;
         src: local('Barlow Italic'), local('Barlow-Italic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHrv4kjgoGqM7E_Cfs1wH8RnA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Barlow';
         font-style: italic;
         font-weight: 400;
         src: local('Barlow Italic'), local('Barlow-Italic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHrv4kjgoGqM7E_Cfs7wH8.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Barlow';
         font-style: italic;
         font-weight: 700;
         src: local('Barlow Bold Italic'), local('Barlow-BoldItalic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHsv4kjgoGqM7E_CfOA5WohvTobdw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Barlow';
         font-style: italic;
         font-weight: 700;
         src: local('Barlow Bold Italic'), local('Barlow-BoldItalic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHsv4kjgoGqM7E_CfOA5WogvTobdw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Barlow';
         font-style: italic;
         font-weight: 700;
         src: local('Barlow Bold Italic'), local('Barlow-BoldItalic'), url(https://fonts.gstatic.com/s/barlow/v4/7cHsv4kjgoGqM7E_CfOA5WouvTo.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Barlow';
         font-style: normal;
         font-weight: 400;
         src: local('Barlow Regular'), local('Barlow-Regular'), url(https://fonts.gstatic.com/s/barlow/v4/7cHpv4kjgoGqM7E_A8s52Hs.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Barlow';
         font-style: normal;
         font-weight: 400;
         src: local('Barlow Regular'), local('Barlow-Regular'), url(https://fonts.gstatic.com/s/barlow/v4/7cHpv4kjgoGqM7E_Ass52Hs.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Barlow';
         font-style: normal;
         font-weight: 400;
         src: local('Barlow Regular'), local('Barlow-Regular'), url(https://fonts.gstatic.com/s/barlow/v4/7cHpv4kjgoGqM7E_DMs5.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Barlow';
         font-style: normal;
         font-weight: 700;
         src: local('Barlow Bold'), local('Barlow-Bold'), url(https://fonts.gstatic.com/s/barlow/v4/7cHqv4kjgoGqM7E3t-4s6FospT4.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Barlow';
         font-style: normal;
         font-weight: 700;
         src: local('Barlow Bold'), local('Barlow-Bold'), url(https://fonts.gstatic.com/s/barlow/v4/7cHqv4kjgoGqM7E3t-4s6VospT4.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Barlow';
         font-style: normal;
         font-weight: 700;
         src: local('Barlow Bold'), local('Barlow-Bold'), url(https://fonts.gstatic.com/s/barlow/v4/7cHqv4kjgoGqM7E3t-4s51os.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Basic';
         font-style: normal;
         font-weight: 400;
         src: local('Basic Regular'), local('Basic-Regular'), url(https://fonts.gstatic.com/s/basic/v9/xfu_0WLxV2_XKTN-6FHlyQ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Basic';
         font-style: normal;
         font-weight: 400;
         src: local('Basic Regular'), local('Basic-Regular'), url(https://fonts.gstatic.com/s/basic/v9/xfu_0WLxV2_XKTNw6FE.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 400;
         src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKPtbo-Ew.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 400;
         src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKAtbo-Ew.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 400;
         src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKNtbo-Ew.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 400;
         src: local('Caudex Italic'), local('Caudex-Italic'), url(https://fonts.gstatic.com/s/caudex/v9/esDS311QOP6BJUr4yMKDtbo.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 700;
         src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8NMpWeGQ.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 700;
         src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8CMpWeGQ.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 700;
         src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8PMpWeGQ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Caudex';
         font-style: italic;
         font-weight: 700;
         src: local('Caudex Bold Italic'), local('Caudex-BoldItalic'), url(https://fonts.gstatic.com/s/caudex/v9/esDV311QOP6BJUr4yMo4kK8BMpU.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 400;
         src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4wfKBrb4.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 400;
         src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4zvKBrb4.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 400;
         src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4w_KBrb4.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 400;
         src: local('Caudex'), url(https://fonts.gstatic.com/s/caudex/v9/esDQ311QOP6BJUr4zfKB.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 700;
         src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUnp8DKpE.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 700;
         src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUkZ8DKpE.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 700;
         src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUnJ8DKpE.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Caudex';
         font-style: normal;
         font-weight: 700;
         src: local('Caudex Bold'), local('Caudex-Bold'), url(https://fonts.gstatic.com/s/caudex/v9/esDT311QOP6BJUrwdteUkp8D.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Chelsea Market';
         font-style: normal;
         font-weight: 400;
         src: local('Chelsea Market'), local('ChelseaMarket-Regular'), url(https://fonts.gstatic.com/s/chelseamarket/v7/BCawqZsHqfr89WNP_IApC8tzKChsJg8eKg.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Chelsea Market';
         font-style: normal;
         font-weight: 400;
         src: local('Chelsea Market'), local('ChelseaMarket-Regular'), url(https://fonts.gstatic.com/s/chelseamarket/v7/BCawqZsHqfr89WNP_IApC8tzKChiJg8.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Cinzel';
         font-style: normal;
         font-weight: 400;
         src: local('Cinzel Regular'), local('Cinzel-Regular'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIJ7ww63mVu7gt7-GT7LEc.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Cinzel';
         font-style: normal;
         font-weight: 400;
         src: local('Cinzel Regular'), local('Cinzel-Regular'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIJ7ww63mVu7gt79mT7.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Cinzel';
         font-style: normal;
         font-weight: 700;
         src: local('Cinzel Bold'), local('Cinzel-Bold'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIK7ww63mVu7gtzTUHuHWZaC_w.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Cinzel';
         font-style: normal;
         font-weight: 700;
         src: local('Cinzel Bold'), local('Cinzel-Bold'), url(https://fonts.gstatic.com/s/cinzel/v9/8vIK7ww63mVu7gtzTUHuE2Za.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Cookie';
         font-style: normal;
         font-weight: 400;
         src: local('Cookie-Regular'), url(https://fonts.gstatic.com/s/cookie/v11/syky-y18lb0tSbf9kgqS.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Corben';
         font-style: normal;
         font-weight: 400;
         src: local('Corben Regular'), local('Corben-Regular'), url(https://fonts.gstatic.com/s/corben/v13/LYjDdGzzklQtCMpNqQNFlVs.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Corben';
         font-style: normal;
         font-weight: 400;
         src: local('Corben Regular'), local('Corben-Regular'), url(https://fonts.gstatic.com/s/corben/v13/LYjDdGzzklQtCMpNpwNF.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Corben';
         font-style: normal;
         font-weight: 700;
         src: local('Corben'), url(https://fonts.gstatic.com/s/corben/v13/LYjAdGzzklQtCMpFHCZQpHoqbN4.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Corben';
         font-style: normal;
         font-weight: 700;
         src: local('Corben'), url(https://fonts.gstatic.com/s/corben/v13/LYjAdGzzklQtCMpFHCZQqnoq.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 400;
         src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtFmSq17w.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 400;
         src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtMmSq17w.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 400;
         src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtHmSq17w.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 400;
         src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtGmSq17w.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 400;
         src: local('Cormorant Garamond Italic'), local('CormorantGaramond-Italic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3ZmX5slCNuHLi8bLeY9MK7whWMhyjYrEtImSo.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 700;
         src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-HzhO7_w.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 700;
         src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-OzhO7_w.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 700;
         src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-FzhO7_w.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 700;
         src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-EzhO7_w.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: italic;
         font-weight: 700;
         src: local('Cormorant Garamond Bold Italic'), local('CormorantGaramond-BoldItalic'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3WmX5slCNuHLi8bLeY9MK7whWMhyjYrEPzvD-KzhM.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 400;
         src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYpHtKgS4.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 400;
         src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYrXtKgS4.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 400;
         src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYpntKgS4.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 400;
         src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYp3tKgS4.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 400;
         src: local('Cormorant Garamond Regular'), local('CormorantGaramond-Regular'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3bmX5slCNuHLi8bLeY9MK7whWMhyjYqXtK.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 700;
         src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fsw-I1hc.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 700;
         src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fug-I1hc.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 700;
         src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fsQ-I1hc.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 700;
         src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fsA-I1hc.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Cormorant Garamond';
         font-style: normal;
         font-weight: 700;
         src: local('Cormorant Garamond Bold'), local('CormorantGaramond-Bold'), url(https://fonts.gstatic.com/s/cormorantgaramond/v7/co3YmX5slCNuHLi8bLeY9MK7whWMhyjQEl5fvg-I.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Damion';
         font-style: normal;
         font-weight: 400;
         src: local('Damion'), url(https://fonts.gstatic.com/s/damion/v9/hv-XlzJ3KEUe_YZkamw2.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/dancingscript/v14/If2RXTr6YS-zF4S-kcSWSVi_szLviuEViw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/dancingscript/v14/If2RXTr6YS-zF4S-kcSWSVi_szLuiuEViw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/dancingscript/v14/If2RXTr6YS-zF4S-kcSWSVi_szLgiuE.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/dancingscript/v14/If2RXTr6YS-zF4S-kcSWSVi_szLviuEViw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/dancingscript/v14/If2RXTr6YS-zF4S-kcSWSVi_szLuiuEViw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Dancing Script';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/dancingscript/v14/If2RXTr6YS-zF4S-kcSWSVi_szLgiuE.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDY1ZzPJ.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweD81ZzPJ.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDc1ZzPJ.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDg1ZzPJ.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDQ1ZzPJ.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDU1ZzPJ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDs1Zw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDY1ZzPJ.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweD81ZzPJ.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDc1ZzPJ.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDg1ZzPJ.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDQ1ZzPJ.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDU1ZzPJ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'EB Garamond';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGWmQSNjdsmc35JDF1K5GRweDs1Zw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR4SDktYw.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GRxSDktYw.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR5SDktYw.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR2SDktYw.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR6SDktYw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR7SDktYw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR1SDk.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR4SDktYw.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GRxSDktYw.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR5SDktYw.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR2SDktYw.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR6SDktYw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR7SDktYw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'EB Garamond';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/ebgaramond/v13/SlGUmQSNjdsmc35JDF1K5GR1SDk.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Enriqueta';
         font-style: normal;
         font-weight: 400;
         src: local('Enriqueta Regular'), local('Enriqueta-Regular'), url(https://fonts.gstatic.com/s/enriqueta/v9/goksH6L7AUFrRvV44HVjQkqioP0.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Enriqueta';
         font-style: normal;
         font-weight: 400;
         src: local('Enriqueta Regular'), local('Enriqueta-Regular'), url(https://fonts.gstatic.com/s/enriqueta/v9/goksH6L7AUFrRvV44HVjTEqi.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Enriqueta';
         font-style: normal;
         font-weight: 700;
         src: local('Enriqueta Bold'), local('Enriqueta-Bold'), url(https://fonts.gstatic.com/s/enriqueta/v9/gokpH6L7AUFrRvV44HVr92-3kdxFm6Q.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Enriqueta';
         font-style: normal;
         font-weight: 700;
         src: local('Enriqueta Bold'), local('Enriqueta-Bold'), url(https://fonts.gstatic.com/s/enriqueta/v9/gokpH6L7AUFrRvV44HVr92-3n9xF.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Forum';
         font-style: normal;
         font-weight: 400;
         src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IcOpIq3g.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Forum';
         font-style: normal;
         font-weight: 400;
         src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IVOpIq3g.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Forum';
         font-style: normal;
         font-weight: 400;
         src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IfOpIq3g.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Forum';
         font-style: normal;
         font-weight: 400;
         src: local('Forum'), url(https://fonts.gstatic.com/s/forum/v10/6aey4Ky-Vb8Ew8IROpI.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Fredericka the Great';
         font-style: normal;
         font-weight: 400;
         src: local('Fredericka the Great'), local('FrederickatheGreat'), url(https://fonts.gstatic.com/s/frederickathegreat/v9/9Bt33CxNwt7aOctW2xjbCstzwVKsIBVV--StxbcVcg.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Fredericka the Great';
         font-style: normal;
         font-weight: 400;
         src: local('Fredericka the Great'), local('FrederickatheGreat'), url(https://fonts.gstatic.com/s/frederickathegreat/v9/9Bt33CxNwt7aOctW2xjbCstzwVKsIBVV--Sjxbc.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Jockey One';
         font-style: normal;
         font-weight: 400;
         src: local('Jockey One'), local('JockeyOne-Regular'), url(https://fonts.gstatic.com/s/jockeyone/v9/HTxpL2g2KjCFj4x8WI6AnI_xHLOk.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Jockey One';
         font-style: normal;
         font-weight: 400;
         src: local('Jockey One'), local('JockeyOne-Regular'), url(https://fonts.gstatic.com/s/jockeyone/v9/HTxpL2g2KjCFj4x8WI6AnIHxHA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Josefin Slab';
         font-style: italic;
         font-weight: 400;
         src: local('Josefin Slab Italic'), local('JosefinSlab-Italic'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-nwjwOK3Ps5GSJlNNkMalnrz6tDs8.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Josefin Slab';
         font-style: italic;
         font-weight: 700;
         src: local('Josefin Slab Bold Italic'), local('JosefinSlab-BoldItalic'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-kwjwOK3Ps5GSJlNNkMalnrzYWK9rnHg4.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Josefin Slab';
         font-style: normal;
         font-weight: 400;
         src: local('Josefin Slab Regular'), local('JosefinSlab-Regular'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-5wjwOK3Ps5GSJlNNkMalnqg6v.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Josefin Slab';
         font-style: normal;
         font-weight: 700;
         src: local('Josefin Slab Bold'), local('JosefinSlab-Bold'), url(https://fonts.gstatic.com/s/josefinslab/v10/lW-mwjwOK3Ps5GSJlNNkMalvESu6Kerl.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXclJURRD.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcBJURRD.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXchJURRD.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcdJURRD.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXctJURRD.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcpJURRD.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcRJUQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXclJURRD.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcBJURRD.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXchJURRD.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcdJURRD.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXctJURRD.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcpJURRD.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Jura';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/jura/v14/z7NbdRfiaC4VXcRJUQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Kelly Slab';
         font-style: normal;
         font-weight: 400;
         src: local('Kelly Slab'), local('KellySlab-Regular'), url(https://fonts.gstatic.com/s/kellyslab/v10/-W_7XJX0Rz3cxUnJC5t6fkALfq0k.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Kelly Slab';
         font-style: normal;
         font-weight: 400;
         src: local('Kelly Slab'), local('KellySlab-Regular'), url(https://fonts.gstatic.com/s/kellyslab/v10/-W_7XJX0Rz3cxUnJC5t6fkoLfq0k.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Kelly Slab';
         font-style: normal;
         font-weight: 400;
         src: local('Kelly Slab'), local('KellySlab-Regular'), url(https://fonts.gstatic.com/s/kellyslab/v10/-W_7XJX0Rz3cxUnJC5t6fkQLfg.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Lato';
         font-style: italic;
         font-weight: 400;
         src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v16/S6u8w4BMUTPHjxsAUi-qJCY.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Lato';
         font-style: italic;
         font-weight: 400;
         src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v16/S6u8w4BMUTPHjxsAXC-q.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Lato';
         font-style: italic;
         font-weight: 700;
         src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQft1dw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Lato';
         font-style: italic;
         font-weight: 700;
         src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwft.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Lato';
         font-style: normal;
         font-weight: 400;
         src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjxAwXjeu.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Lato';
         font-style: normal;
         font-weight: 400;
         src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v16/S6uyw4BMUTPHjx4wXg.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Lato';
         font-style: normal;
         font-weight: 700;
         src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGR_p.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Lato';
         font-style: normal;
         font-weight: 700;
         src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Libre Baskerville';
         font-style: italic;
         font-weight: 400;
         src: local('Libre Baskerville Italic'), local('LibreBaskerville-Italic'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWx8QDP2V.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Libre Baskerville';
         font-style: italic;
         font-weight: 400;
         src: local('Libre Baskerville Italic'), local('LibreBaskerville-Italic'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKhZrc3Hgbbcjq75U4uslyuy4kn0qNcWxEQDA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Libre Baskerville';
         font-style: normal;
         font-weight: 400;
         src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNXaxMICA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Libre Baskerville';
         font-style: normal;
         font-weight: 400;
         src: local('Libre Baskerville'), local('LibreBaskerville-Regular'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKnZrc3Hgbbcjq75U4uslyuy4kn0qNZaxM.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Libre Baskerville';
         font-style: normal;
         font-weight: 700;
         src: local('Libre Baskerville Bold'), local('LibreBaskerville-Bold'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY5KcCsww.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Libre Baskerville';
         font-style: normal;
         font-weight: 700;
         src: local('Libre Baskerville Bold'), local('LibreBaskerville-Bold'), url(https://fonts.gstatic.com/s/librebaskerville/v7/kmKiZrc3Hgbbcjq75U4uslyuy4kn0qviTgY3KcA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zo-mM5Ez.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zoamM5Ez.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zo2mM5Ez.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zoymM5Ez.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Lobster';
         font-style: normal;
         font-weight: 400;
         src: local('Lobster Regular'), local('Lobster-Regular'), url(https://fonts.gstatic.com/s/lobster/v22/neILzCirqoswsqX9zoKmMw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Marck Script';
         font-style: normal;
         font-weight: 400;
         src: local('Marck Script'), local('MarckScript-Regular'), url(https://fonts.gstatic.com/s/marckscript/v10/nwpTtK2oNgBA3Or78gapdwuyzCg_WMM.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Marck Script';
         font-style: normal;
         font-weight: 400;
         src: local('Marck Script'), local('MarckScript-Regular'), url(https://fonts.gstatic.com/s/marckscript/v10/nwpTtK2oNgBA3Or78gapdwuyxig_WMM.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Marck Script';
         font-style: normal;
         font-weight: 400;
         src: local('Marck Script'), local('MarckScript-Regular'), url(https://fonts.gstatic.com/s/marckscript/v10/nwpTtK2oNgBA3Or78gapdwuyyCg_.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Monoton';
         font-style: normal;
         font-weight: 400;
         src: local('Monoton'), local('Monoton-Regular'), url(https://fonts.gstatic.com/s/monoton/v9/5h1aiZUrOngCibe4TkHLQg.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 400;
         src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRxC7mw9c.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 400;
         src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRzS7mw9c.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 400;
         src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRxi7mw9c.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 400;
         src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRxy7mw9c.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 400;
         src: local('Montserrat Italic'), local('Montserrat-Italic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUQjIg1_i6t8kCHKm459WxRyS7m.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 700;
         src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz8fZwnCo.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 700;
         src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz-PZwnCo.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 700;
         src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz8_ZwnCo.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 700;
         src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz8vZwnCo.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Montserrat';
         font-style: italic;
         font-weight: 700;
         src: local('Montserrat Bold Italic'), local('Montserrat-BoldItalic'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUPjIg1_i6t8kCHKm459WxZcgvz_PZw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 400;
         src: local('Montserrat Regular'), local('Montserrat-Regular'), url(https://fonts.gstatic.com/s/montserrat/v14/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gTD_u50.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3g3D_u50.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gbD_u50.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gfD_u50.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Montserrat';
         font-style: normal;
         font-weight: 700;
         src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.gstatic.com/s/montserrat/v14/JTURjIg1_i6t8kCHKm45_dJE3gnD_g.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Mr De Haviland';
         font-style: normal;
         font-weight: 400;
         src: local('Mr De Haviland Regular'), local('MrDeHaviland-Regular'), url(https://fonts.gstatic.com/s/mrdehaviland/v8/OpNVnooIhJj96FdB73296ksbOg3L60PlNQ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Mr De Haviland';
         font-style: normal;
         font-weight: 400;
         src: local('Mr De Haviland Regular'), local('MrDeHaviland-Regular'), url(https://fonts.gstatic.com/s/mrdehaviland/v8/OpNVnooIhJj96FdB73296ksbOg3F60M.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Niconne';
         font-style: normal;
         font-weight: 400;
         src: local('Niconne'), local('Niconne-Regular'), url(https://fonts.gstatic.com/s/niconne/v9/w8gaH2QvRug1_rTfnQKn2W4O.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Niconne';
         font-style: normal;
         font-weight: 400;
         src: local('Niconne'), local('Niconne-Regular'), url(https://fonts.gstatic.com/s/niconne/v9/w8gaH2QvRug1_rTfnQyn2Q.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Noticia Text';
         font-style: italic;
         font-weight: 400;
         src: local('Noticia Text Italic'), local('NoticiaText-Italic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJodNDF2Yv9qppOePKYRP12YwtVn07tpQ.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Noticia Text';
         font-style: italic;
         font-weight: 400;
         src: local('Noticia Text Italic'), local('NoticiaText-Italic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJodNDF2Yv9qppOePKYRP12YwtUn07tpQ.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Noticia Text';
         font-style: italic;
         font-weight: 400;
         src: local('Noticia Text Italic'), local('NoticiaText-Italic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJodNDF2Yv9qppOePKYRP12Ywtan04.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Noticia Text';
         font-style: italic;
         font-weight: 700;
         src: local('Noticia Text Bold Italic'), local('NoticiaText-BoldItalic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJrdNDF2Yv9qppOePKYRP12YwPhulvdhDXUeA.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Noticia Text';
         font-style: italic;
         font-weight: 700;
         src: local('Noticia Text Bold Italic'), local('NoticiaText-BoldItalic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJrdNDF2Yv9qppOePKYRP12YwPhulvchDXUeA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Noticia Text';
         font-style: italic;
         font-weight: 700;
         src: local('Noticia Text Bold Italic'), local('NoticiaText-BoldItalic'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJrdNDF2Yv9qppOePKYRP12YwPhulvShDU.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Noticia Text';
         font-style: normal;
         font-weight: 400;
         src: local('Noticia Text'), local('NoticiaText-Regular'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJ2dNDF2Yv9qppOePKYRP12aTtYh0o.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Noticia Text';
         font-style: normal;
         font-weight: 400;
         src: local('Noticia Text'), local('NoticiaText-Regular'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJ2dNDF2Yv9qppOePKYRP12aDtYh0o.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Noticia Text';
         font-style: normal;
         font-weight: 400;
         src: local('Noticia Text'), local('NoticiaText-Regular'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJ2dNDF2Yv9qppOePKYRP12ZjtY.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Noticia Text';
         font-style: normal;
         font-weight: 700;
         src: local('Noticia Text Bold'), local('NoticiaText-Bold'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJpdNDF2Yv9qppOePKYRP1-3R5Nt2vQnDE.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Noticia Text';
         font-style: normal;
         font-weight: 700;
         src: local('Noticia Text Bold'), local('NoticiaText-Bold'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJpdNDF2Yv9qppOePKYRP1-3R5NtmvQnDE.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Noticia Text';
         font-style: normal;
         font-weight: 700;
         src: local('Noticia Text Bold'), local('NoticiaText-Bold'), url(https://fonts.gstatic.com/s/noticiatext/v9/VuJpdNDF2Yv9qppOePKYRP1-3R5NuGvQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDujMR6WR.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuHMR6WR.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDunMR6WR.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDubMR6WR.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDurMR6WR.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuvMR6WR.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 300;
         src: local('Open Sans Condensed Light'), local('OpenSansCondensed-Light'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuXMRw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDujMR6WR.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuHMR6WR.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDunMR6WR.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDubMR6WR.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDurMR6WR.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuvMR6WR.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Open Sans Condensed';
         font-style: normal;
         font-weight: 700;
         src: local('Open Sans Condensed Bold'), local('OpenSansCondensed-Bold'), url(https://fonts.gstatic.com/s/opensanscondensed/v14/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuXMRw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752FD8Ghe4.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752HT8Ghe4.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fj8Ghe4.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752Fz8Ghe4.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Oswald';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/oswald/v31/TK3iWkUHHAIjg752GT8G.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Overlock';
         font-style: italic;
         font-weight: 400;
         src: local('Overlock Italic'), local('Overlock-Italic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XTDmdMWRiN1_T9Z7Tc2OCsk4GC.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Overlock';
         font-style: italic;
         font-weight: 400;
         src: local('Overlock Italic'), local('Overlock-Italic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XTDmdMWRiN1_T9Z7Tc2O6skw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Overlock';
         font-style: italic;
         font-weight: 700;
         src: local('Overlock Bold Italic'), local('Overlock-BoldItalic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XQDmdMWRiN1_T9Z7Tc0FWJhrCj8RLT.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Overlock';
         font-style: italic;
         font-weight: 700;
         src: local('Overlock Bold Italic'), local('Overlock-BoldItalic'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XQDmdMWRiN1_T9Z7Tc0FWJhr6j8Q.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Overlock';
         font-style: normal;
         font-weight: 400;
         src: local('Overlock Regular'), local('Overlock-Regular'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XVDmdMWRiN1_T9Z7TX6Oy0lw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Overlock';
         font-style: normal;
         font-weight: 400;
         src: local('Overlock Regular'), local('Overlock-Regular'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XVDmdMWRiN1_T9Z7TZ6Ow.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Overlock';
         font-style: normal;
         font-weight: 700;
         src: local('Overlock Bold'), local('Overlock-Bold'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XSDmdMWRiN1_T9Z7xizfmFtry79Q.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Overlock';
         font-style: normal;
         font-weight: 700;
         src: local('Overlock Bold'), local('Overlock-Bold'), url(https://fonts.gstatic.com/s/overlock/v9/Z9XSDmdMWRiN1_T9Z7xizfmLtrw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Patrick Hand';
         font-style: normal;
         font-weight: 400;
         src: local('Patrick Hand'), local('PatrickHand-Regular'), url(https://fonts.gstatic.com/s/patrickhand/v13/LDI1apSQOAYtSuYWp8ZhfYe8UcLLq7s.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Patrick Hand';
         font-style: normal;
         font-weight: 400;
         src: local('Patrick Hand'), local('PatrickHand-Regular'), url(https://fonts.gstatic.com/s/patrickhand/v13/LDI1apSQOAYtSuYWp8ZhfYe8UMLLq7s.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Patrick Hand';
         font-style: normal;
         font-weight: 400;
         src: local('Patrick Hand'), local('PatrickHand-Regular'), url(https://fonts.gstatic.com/s/patrickhand/v13/LDI1apSQOAYtSuYWp8ZhfYe8XsLL.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 400;
         src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtg2H68T.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 400;
         src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtE2H68T.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 400;
         src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtY2H68T.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 400;
         src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvto2H68T.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 400;
         src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvts2H68T.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 400;
         src: local('Play Regular'), local('Play-Regular'), url(https://fonts.gstatic.com/s/play/v11/6aez4K2oVqwIvtU2Hw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 700;
         src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCp0y2knT.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 700;
         src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCpQy2knT.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 700;
         src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCpMy2knT.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 700;
         src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCp8y2knT.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 700;
         src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCp4y2knT.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Play';
         font-style: normal;
         font-weight: 700;
         src: local('Play Bold'), local('Play-Bold'), url(https://fonts.gstatic.com/s/play/v11/6ae84K2oVqwItm4TCpAy2g.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk72xU.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk72xU.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk72xU.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnohkk72xU.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojUk72xU.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnojEk72xU.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Playfair Display';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFkD-vYSZviVYUb_rj3ij__anPXDTnogkk7.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgFE_.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgFE_.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgFE_.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Playfair Display';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/playfairdisplay/v20/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* devanagari */
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 400;
         src: local('Poppins Italic'), local('Poppins-Italic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiGyp8kv8JHgFVrJJLucXtAKPY.woff2) format('woff2');
         unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 400;
         src: local('Poppins Italic'), local('Poppins-Italic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiGyp8kv8JHgFVrJJLufntAKPY.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 400;
         src: local('Poppins Italic'), local('Poppins-Italic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiGyp8kv8JHgFVrJJLucHtA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* devanagari */
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 700;
         src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VFteOcEg.woff2) format('woff2');
         unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 700;
         src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VGdeOcEg.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Poppins';
         font-style: italic;
         font-weight: 700;
         src: local('Poppins Bold Italic'), local('Poppins-BoldItalic'), url(https://fonts.gstatic.com/s/poppins/v9/pxiDyp8kv8JHgFVrJJLmy15VF9eO.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* devanagari */
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 400;
         src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
         unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 400;
         src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 400;
         src: local('Poppins Regular'), local('Poppins-Regular'), url(https://fonts.gstatic.com/s/poppins/v9/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* devanagari */
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 700;
         src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
         unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 700;
         src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Poppins';
         font-style: normal;
         font-weight: 700;
         src: local('Poppins Bold'), local('Poppins-Bold'), url(https://fonts.gstatic.com/s/poppins/v9/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin */
         @font-face {
         font-family: 'Questrial';
         font-style: normal;
         font-weight: 400;
         src: local('Questrial'), local('Questrial-Regular'), url(https://fonts.gstatic.com/s/questrial/v9/QdVUSTchPBm7nuUeVf70viFl.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Raleway';
         font-style: italic;
         font-weight: 400;
         src: local('Raleway Italic'), local('Raleway-Italic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptsg8zYS_SKggPNyCg4Q4FqPfE.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Raleway';
         font-style: italic;
         font-weight: 400;
         src: local('Raleway Italic'), local('Raleway-Italic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptsg8zYS_SKggPNyCg4TYFq.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Raleway';
         font-style: italic;
         font-weight: 700;
         src: local('Raleway Bold Italic'), local('Raleway-BoldItalic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptpg8zYS_SKggPNyCgw9qR_DNCb_Vo.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Raleway';
         font-style: italic;
         font-weight: 700;
         src: local('Raleway Bold Italic'), local('Raleway-BoldItalic'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptpg8zYS_SKggPNyCgw9qR_AtCb.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Raleway';
         font-style: normal;
         font-weight: 400;
         src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptug8zYS_SKggPNyCMIT5lu.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Raleway';
         font-style: normal;
         font-weight: 400;
         src: local('Raleway'), local('Raleway-Regular'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptug8zYS_SKggPNyC0ITw.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Raleway';
         font-style: normal;
         font-weight: 700;
         src: local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptrg8zYS_SKggPNwJYtWqhPAMif.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Raleway';
         font-style: normal;
         font-weight: 700;
         src: local('Raleway Bold'), local('Raleway-Bold'), url(https://fonts.gstatic.com/s/raleway/v14/1Ptrg8zYS_SKggPNwJYtWqZPAA.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 400;
         src: local('Roboto Italic'), local('Roboto-Italic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Roboto';
         font-style: italic;
         font-weight: 700;
         src: local('Roboto Bold Italic'), local('Roboto-BoldItalic'), url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 400;
         src: local('Roboto'), local('Roboto-Regular'), url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* cyrillic-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
         unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
         }
         /* cyrillic */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
         unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
         }
         /* greek-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
         unicode-range: U+1F00-1FFF;
         }
         /* greek */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
         unicode-range: U+0370-03FF;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Roboto';
         font-style: normal;
         font-weight: 700;
         src: local('Roboto Bold'), local('Roboto-Bold'), url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* devanagari */
         @font-face {
         font-family: 'Rozha One';
         font-style: normal;
         font-weight: 400;
         src: local('Rozha One Regular'), local('RozhaOne-Regular'), url(https://fonts.gstatic.com/s/rozhaone/v7/AlZy_zVFtYP12Zncg2kRc335bB0.woff2) format('woff2');
         unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Rozha One';
         font-style: normal;
         font-weight: 400;
         src: local('Rozha One Regular'), local('RozhaOne-Regular'), url(https://fonts.gstatic.com/s/rozhaone/v7/AlZy_zVFtYP12Zncg2kRfH35bB0.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Rozha One';
         font-style: normal;
         font-weight: 400;
         src: local('Rozha One Regular'), local('RozhaOne-Regular'), url(https://fonts.gstatic.com/s/rozhaone/v7/AlZy_zVFtYP12Zncg2kRcn35.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Sacramento';
         font-style: normal;
         font-weight: 400;
         src: local('Sacramento'), local('Sacramento-Regular'), url(https://fonts.gstatic.com/s/sacramento/v7/buEzpo6gcdjy0EiZMBUG4CMf_exL.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Sacramento';
         font-style: normal;
         font-weight: 400;
         src: local('Sacramento'), local('Sacramento-Regular'), url(https://fonts.gstatic.com/s/sacramento/v7/buEzpo6gcdjy0EiZMBUG4C0f_Q.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Sail';
         font-style: normal;
         font-weight: 400;
         src: local('Sail'), local('Sail-Regular'), url(https://fonts.gstatic.com/s/sail/v10/DPEjYwiBxwYJJB3JAQYA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Sail';
         font-style: normal;
         font-weight: 400;
         src: local('Sail'), local('Sail-Regular'), url(https://fonts.gstatic.com/s/sail/v10/DPEjYwiBxwYJJBPJAQ.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Sarina';
         font-style: normal;
         font-weight: 400;
         src: local('Sarina'), local('Sarina-Regular'), url(https://fonts.gstatic.com/s/sarina/v8/-F6wfjF3ITQwasLRJ0rVniA.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Sarina';
         font-style: normal;
         font-weight: 400;
         src: local('Sarina'), local('Sarina-Regular'), url(https://fonts.gstatic.com/s/sarina/v8/-F6wfjF3ITQwasLRKUrV.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Signika';
         font-style: normal;
         font-weight: 400;
         src: local('Signika Regular'), local('Signika-Regular'), url(https://fonts.gstatic.com/s/signika/v10/vEFR2_JTCgwQ5ejvG18mBkho.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Signika';
         font-style: normal;
         font-weight: 400;
         src: local('Signika Regular'), local('Signika-Regular'), url(https://fonts.gstatic.com/s/signika/v10/vEFR2_JTCgwQ5ejvG1EmBg.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Signika';
         font-style: normal;
         font-weight: 700;
         src: local('Signika Bold'), local('Signika-Bold'), url(https://fonts.gstatic.com/s/signika/v10/vEFU2_JTCgwQ5ejvE-oDE3lJanAd.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Signika';
         font-style: normal;
         font-weight: 700;
         src: local('Signika Bold'), local('Signika-Bold'), url(https://fonts.gstatic.com/s/signika/v10/vEFU2_JTCgwQ5ejvE-oDE3dJag.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Spinnaker';
         font-style: normal;
         font-weight: 400;
         src: local('Spinnaker'), local('Spinnaker-Regular'), url(https://fonts.gstatic.com/s/spinnaker/v11/w8gYH2oyX-I0_rvR6HmX1XYKmOo.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Spinnaker';
         font-style: normal;
         font-weight: 400;
         src: local('Spinnaker'), local('Spinnaker-Regular'), url(https://fonts.gstatic.com/s/spinnaker/v11/w8gYH2oyX-I0_rvR6HmX23YK.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* hebrew */
         @font-face {
         font-family: 'Suez One';
         font-style: normal;
         font-weight: 400;
         src: local('Suez One'), local('SuezOne-Regular'), url(https://fonts.gstatic.com/s/suezone/v4/taiJGmd_EZ6rqscQgOFMmouQ-A.woff2) format('woff2');
         unicode-range: U+0590-05FF, U+20AA, U+25CC, U+FB1D-FB4F;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Suez One';
         font-style: normal;
         font-weight: 400;
         src: local('Suez One'), local('SuezOne-Regular'), url(https://fonts.gstatic.com/s/suezone/v4/taiJGmd_EZ6rqscQgOFAmouQ-A.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Suez One';
         font-style: normal;
         font-weight: 400;
         src: local('Suez One'), local('SuezOne-Regular'), url(https://fonts.gstatic.com/s/suezone/v4/taiJGmd_EZ6rqscQgOFOmos.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Work Sans';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYqz_wNahGAdqQ43Rh_eZDkv_1w4A.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Work Sans';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYqz_wNahGAdqQ43Rh_eZDlv_1w4A.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Work Sans';
         font-style: italic;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYqz_wNahGAdqQ43Rh_eZDrv_0.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Work Sans';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYqz_wNahGAdqQ43Rh_eZDkv_1w4A.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Work Sans';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYqz_wNahGAdqQ43Rh_eZDlv_1w4A.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Work Sans';
         font-style: italic;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYqz_wNahGAdqQ43Rh_eZDrv_0.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Work Sans';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_c6Dpp_k.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Work Sans';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_cqDpp_k.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Work Sans';
         font-style: normal;
         font-weight: 400;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
         /* vietnamese */
         @font-face {
         font-family: 'Work Sans';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_c6Dpp_k.woff2) format('woff2');
         unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
         }
         /* latin-ext */
         @font-face {
         font-family: 'Work Sans';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_cqDpp_k.woff2) format('woff2');
         unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
         }
         /* latin */
         @font-face {
         font-family: 'Work Sans';
         font-style: normal;
         font-weight: 700;
         src: url(https://fonts.gstatic.com/s/worksans/v7/QGYsz_wNahGAdqQ43Rh_fKDp.woff2) format('woff2');
         unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
         }
      </style>
      <link rel="prefetch" href="_partials/wix-bolt/1.5312.0/node_modules/viewer-platform-worker/dist/wixcode-worker.js">
      <link rel="preconnect" href="https://siteassets.parastorage.com/pages/singlePage/viewerViewModeJson" crossorigin>
      <title>Mietheld - Schließung wegen Coronavirus? Wir helfen Ihrem Unternehmen, keine Miete zu bezahlen.</title>
      <meta name="description" content="Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision."/>
      <link rel="canonical" href="website.html"/>
      <meta name="robots" content="noindex"/>
      <meta property="og:title" content="Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien"/>
      <meta property="og:description" content="Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision."/>
      <meta property="og:image" content="https://static.wixstatic.com/media/ef305b_797a6aaee9a14aedb3214dcfe4118f39%7Emv2.png/v1/fit/w_2500,h_1330,al_c/ef305b_797a6aaee9a14aedb3214dcfe4118f39%7Emv2.png"/>
      <meta property="og:url" content="https://mietheld.wixsite.com/website"/>
      <meta property="og:site_name" content="Corona"/>
      <meta property="og:type" content="website"/>
      <meta name="fb_admins_meta_tag" content="mietheld"/>
      <meta name="google-site-verification" content="XEwv0xOL0rRjs2ut-CbHzE7-nLP3K2fkkjf7e-eoZGo"/>
      <meta name="keywords" content="Altbau, Miete, Mietsenkung, Mietzins, Richtwert, Senken"/>
      <meta property="fb:admins" content="mietheld"/>
   </head>
   <body class="prewarmup">
      <script type="text/javascript">
         var htmlClassList = document.documentElement.classList;
         
         
         
         
         var bodyCacheable = true;
         
         if (!bodyCacheable && wixBiSession.caching !== 'browser') {
         wixBiSession.caching = 'none';
         wixBiSession.isCached = false;
         }
         
         var clientSideRender = false;
         
         
         
      </script>
      <div id="SITE_CONTAINER">
         <style type="text/css" data-styleid="uploadedFonts">@font-face {
            font-family: wf_736a916d09a94cd392744ed6a;
            src: url("https://static.wixstatic.com/ufonts/ef305b_736a916d09a94cd392744ed6af33990f/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_736a916d09a94cd392744ed6af33990f/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_736a916d09a94cd392744ed6af33990f/ttf/file.ttf") format("ttf");
            }
            @font-face {
            font-family: wf_bb0ce061b76644cda03b0b852;
            src: url("https://static.wixstatic.com/ufonts/ef305b_bb0ce061b76644cda03b0b852cd1e5bc/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_bb0ce061b76644cda03b0b852cd1e5bc/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_bb0ce061b76644cda03b0b852cd1e5bc/ttf/file.ttf") format("ttf");
            }
            @font-face {
            font-family: wf_ab00c6b7e0104f2cba163c837;
            src: url("https://static.wixstatic.com/ufonts/ef305b_ab00c6b7e0104f2cba163c837a7748c9/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_ab00c6b7e0104f2cba163c837a7748c9/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_ab00c6b7e0104f2cba163c837a7748c9/ttf/file.ttf") format("ttf");
            }
            @font-face {
            font-family: wf_0330019483a5484fb21179a63;
            src: url("https://static.wixstatic.com/ufonts/ef305b_0330019483a5484fb21179a63b7bcf1a/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_0330019483a5484fb21179a63b7bcf1a/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_0330019483a5484fb21179a63b7bcf1a/ttf/file.ttf") format("ttf");
            }
            @font-face {
            font-family: wf_736a916d09a94cd392744ed6a;
            src: url("https://static.wixstatic.com/ufonts/ef305b_736a916d09a94cd392744ed6af33990f/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_736a916d09a94cd392744ed6af33990f/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_736a916d09a94cd392744ed6af33990f/ttf/file.ttf") format("ttf");
            }
            @font-face {
            font-family: wf_19b19ebbdc054b238cd8ba242;
            src: url("https://static.wixstatic.com/ufonts/ef305b_19b19ebbdc054b238cd8ba24264519b8/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_19b19ebbdc054b238cd8ba24264519b8/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_19b19ebbdc054b238cd8ba24264519b8/ttf/file.ttf") format("ttf");
            }
            @font-face {
            font-family: wf_19b19ebbdc054b238cd8ba242;
            src: url("https://static.wixstatic.com/ufonts/ef305b_19b19ebbdc054b238cd8ba24264519b8/woff2/file.woff2") format("woff2"),
            url("https://static.wixstatic.com/ufonts/ef305b_19b19ebbdc054b238cd8ba24264519b8/woff/file.woff") format("woff"),
            url("https://static.wixstatic.com/ufonts/ef305b_19b19ebbdc054b238cd8ba24264519b8/ttf/file.ttf") format("ttf");
            }
         </style>
         <div>
            <style type="text/css" data-styleid="theme_fonts">.font_0 {font: normal normal normal 24px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#FFFFFF;} 
               .font_1 {font: normal normal normal 16px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#646666;} 
               .font_2 {font: normal normal normal 88px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#008593;} 
               .font_3 {font: normal normal normal 260px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#00C8DC;} 
               .font_4 {font: normal normal normal 88px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#00C8DC;} 
               .font_5 {font: normal normal normal 36px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#00C8DC;} 
               .font_6 {font: normal normal normal 24px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#00C8DC;} 
               .font_7 {font: normal normal normal 18px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#00C8DC;} 
               .font_8 {font: normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#00C8DC;} 
               .font_9 {font: normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#008593;} 
               .font_10 {font: normal normal normal 12px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;color:#646666;} 
            </style>
            <style type="text/css" data-styleid="theme_colors">.color_0 {color: #FFFFFF;}
               .backcolor_0 {background-color: #FFFFFF;}
               .color_1 {color: #FFFFFF;}
               .backcolor_1 {background-color: #FFFFFF;}
               .color_2 {color: #000000;}
               .backcolor_2 {background-color: #000000;}
               .color_3 {color: #ED1C24;}
               .backcolor_3 {background-color: #ED1C24;}
               .color_4 {color: #0088CB;}
               .backcolor_4 {background-color: #0088CB;}
               .color_5 {color: #FFCB05;}
               .backcolor_5 {background-color: #FFCB05;}
               .color_6 {color: #727272;}
               .backcolor_6 {background-color: #727272;}
               .color_7 {color: #B0B0B0;}
               .backcolor_7 {background-color: #B0B0B0;}
               .color_8 {color: #FFFFFF;}
               .backcolor_8 {background-color: #FFFFFF;}
               .color_9 {color: #727272;}
               .backcolor_9 {background-color: #727272;}
               .color_10 {color: #B0B0B0;}
               .backcolor_10 {background-color: #B0B0B0;}
               .color_11 {color: #FFFFFF;}
               .backcolor_11 {background-color: #FFFFFF;}
               .color_12 {color: #CCCCCA;}
               .backcolor_12 {background-color: #CCCCCA;}
               .color_13 {color: #A0A09F;}
               .backcolor_13 {background-color: #A0A09F;}
               .color_14 {color: #646666;}
               .backcolor_14 {background-color: #646666;}
               .color_15 {color: #323333;}
               .backcolor_15 {background-color: #323333;}
               .color_16 {color: #A2ECF3;}
               .backcolor_16 {background-color: #A2ECF3;}
               .color_17 {color: #74DDE8;}
               .backcolor_17 {background-color: #74DDE8;}
               .color_18 {color: #00C8DC;}
               .backcolor_18 {background-color: #00C8DC;}
               .color_19 {color: #008593;}
               .backcolor_19 {background-color: #008593;}
               .color_20 {color: #004647;}
               .backcolor_20 {background-color: #004647;}
               .color_21 {color: #A0F0F1;}
               .backcolor_21 {background-color: #A0F0F1;}
               .color_22 {color: #71E1E2;}
               .backcolor_22 {background-color: #71E1E2;}
               .color_23 {color: #00D2D4;}
               .backcolor_23 {background-color: #00D2D4;}
               .color_24 {color: #008C8D;}
               .backcolor_24 {background-color: #008C8D;}
               .color_25 {color: #004647;}
               .backcolor_25 {background-color: #004647;}
               .color_26 {color: #C6D8F6;}
               .backcolor_26 {background-color: #C6D8F6;}
               .color_27 {color: #A7C1EC;}
               .backcolor_27 {background-color: #A7C1EC;}
               .color_28 {color: #5E90E3;}
               .backcolor_28 {background-color: #5E90E3;}
               .color_29 {color: #3F6097;}
               .backcolor_29 {background-color: #3F6097;}
               .color_30 {color: #1F304C;}
               .backcolor_30 {background-color: #1F304C;}
               .color_31 {color: #C7C5ED;}
               .backcolor_31 {background-color: #C7C5ED;}
               .color_32 {color: #8B8FD4;}
               .backcolor_32 {background-color: #8B8FD4;}
               .color_33 {color: #6F6DA3;}
               .backcolor_33 {background-color: #6F6DA3;}
               .color_34 {color: #4A496D;}
               .backcolor_34 {background-color: #4A496D;}
               .color_35 {color: #14163F;}
               .backcolor_35 {background-color: #14163F;}
            </style>
         </div>
         <div id="CSS_CONTAINER"></div>
         <div data-aid="stylesContainer">
            <style type="text/css" data-styleid="style-k7xjsg5i">.style-k7xjsg5i {display:none;}</style>
            <style type="text/css" data-styleid="pc1">.pc1screenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
               .pc1[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
               .pc1[data-state~="fixedPosition"].pc1_footer {top:auto;bottom:0;}
               .pc1bg {position:absolute;top:0;right:0;bottom:0;left:0;}
               .pc1inlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
               .pc1centeredContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="siteBackground">.siteBackground {width:100%;position:absolute;}
               .siteBackgroundbgBeforeTransition {position:absolute;top:0;}
               .siteBackgroundbgAfterTransition {position:absolute;top:0;}
            </style>
            <style type="text/css" data-styleid="style-k80gtdsy">.style-k80gtdsyscreenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k80gtdsy[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
               .style-k80gtdsy[data-state~="fixedPosition"].style-k80gtdsy_footer {top:auto;bottom:0;}
               .style-k80gtdsy_bg {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(241, 224, 182, 1);  border-top:0px solid rgba(160, 160, 159, 1);border-bottom:0px solid rgba(160, 160, 159, 1);}
               .style-k80gtdsybg {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k80gtdsy[data-state~="mobileView"] .style-k80gtdsybg {left:10px;right:10px;}
               .style-k80gtdsy_bg-center {position:absolute;top:0px;right:0;bottom:0px;left:0;background-color:rgba(241, 224, 182, 0.05);border-radius:0;}
               .style-k80gtdsyinlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k80gtdsycenteredContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-jsuazwot">.style-jsuazwotscreenWidthBackground {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-jsuazwot[data-state~="fixedPosition"] {position:fixed !important;left:auto !important;z-index:50;}
               .style-jsuazwot[data-state~="fixedPosition"].style-jsuazwot_footer {top:auto;bottom:0;}
               .style-jsuazwot_bg {position:absolute;top:0;right:0;bottom:0;left:0;background-color:rgba(255, 255, 255, 1);  border-top:0px solid transparent;border-bottom:0px solid transparent;}
               .style-jsuazwotbg {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-jsuazwot[data-state~="mobileView"] .style-jsuazwotbg {left:10px;right:10px;}
               .style-jsuazwot_bg-center {position:absolute;top:0px;right:0;bottom:0px;left:0;background-color:transparent;border-radius:0;}
               .style-jsuazwotinlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-jsuazwotcenteredContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k7xjsgms">.style-k7xjsgmsbg {border:0px solid rgba(50, 51, 51, 1);background-color:transparent;border-radius:0;  }
               .style-k7xjsgmsinlineContent,.style-k7xjsgmsbg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k81fvw8t">.style-k81fvw8tbg {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k81fvw8t[data-state~="mobileView"] .style-k81fvw8tbg {left:10px;right:10px;}
               .style-k81fvw8tinlineContent {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="txtNew">.txtNew {word-wrap:break-word;text-align:start;}
               .txtNew_override-left * {text-align:left !important;}
               .txtNew_override-right * {text-align:right !important;}
               .txtNew_override-center * {text-align:center !important;}
               .txtNew_override-justify * {text-align:justify !important;}
               .txtNew > * {pointer-events:auto;}
               .txtNew li {font-style:inherit;font-weight:inherit;line-height:inherit;letter-spacing:normal;}
               .txtNew ol,.txtNew ul {padding-left:1.3em;padding-right:0;margin-left:0.5em;margin-right:0;line-height:normal;letter-spacing:normal;}
               .txtNew ul {list-style-type:disc;}
               .txtNew ol {list-style-type:decimal;}
               .txtNew ul ul,.txtNew ol ul {list-style-type:circle;}
               .txtNew ul ul ul,.txtNew ol ul ul {list-style-type:square;}
               .txtNew ul ol ul,.txtNew ol ol ul {list-style-type:square;}
               .txtNew ul[dir="rtl"],.txtNew ol[dir="rtl"] {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
               .txtNew ul[dir="rtl"] ul,.txtNew ul[dir="rtl"] ol,.txtNew ol[dir="rtl"] ul,.txtNew ol[dir="rtl"] ol {padding-left:0;padding-right:1.3em;margin-left:0;margin-right:0.5em;}
               .txtNew p {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew h1 {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew h2 {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew h3 {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew h4 {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew h5 {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew h6 {margin:0;line-height:normal;letter-spacing:normal;}
               .txtNew a {color:inherit;}
            </style>
            <style type="text/css" data-styleid="ca1">.ca1_zoomedin {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
               .ca1_zoomedout {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
               .ca1link {display:block;overflow:hidden;}
               .ca1img {overflow:hidden;}
               .ca1[data-is-responsive=true] .ca1link,.ca1[data-is-responsive=true] .ca1img,.ca1[data-is-responsive=true] wix-image {position:absolute;top:0;right:0;bottom:0;left:0;}
               .ca1imgimage {position:static;box-shadow:#000 0 0 0;user-select:none;}
            </style>
            <style type="text/css" data-styleid="s_BIwzIGroupSkin">.s_BIwzIGroupSkin {pointer-events:none;}
               .s_BIwzIGroupSkin_ie10 {max-width:0;max-height:0;}
               .s_BIwzIGroupSkininlineContent {pointer-events:all;}
            </style>
            <style type="text/css" data-styleid="style-jsuazwo8">.style-jsuazwo8itemsContainer {width:calc(100% - 0px);height:calc(100% - 0px);white-space:nowrap;display:inline-block;overflow:visible;position:absolute;}
               .style-jsuazwo8moreContainer {overflow:visible;display:inherit;white-space:nowrap;width:auto;background-color:rgba(0, 0, 0, 1);border-radius:0;  }
               .style-jsuazwo8dropWrapper {z-index:99999;display:block;opacity:1;visibility:hidden;position:absolute;margin-top:7px;}
               .style-jsuazwo8 > nav {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-jsuazwo8dropWrapper[data-dropMode="dropUp"] {margin-top:0;margin-bottom:7px;}
               .style-jsuazwo8repeaterButton {height:100%;position:relative;box-sizing:border-box;display:inline-block;cursor:pointer;font:normal normal normal 14px/1.4em wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;}
               .style-jsuazwo8repeaterButton[data-state~="header"] a,.style-jsuazwo8repeaterButton[data-state~="header"] div {cursor:default !important;}
               .style-jsuazwo8repeaterButtonlinkElement {display:inline-block;height:100%;width:100%;}
               .style-jsuazwo8repeaterButton_gapper {padding:0 0px;}
               .style-jsuazwo8repeaterButtonlabel {display:inline-block;padding:0 10px;color:#000000;transition:color 0.4s ease 0s;}
               .style-jsuazwo8repeaterButton[data-state~="drop"] {width:100%;display:block;}
               .style-jsuazwo8repeaterButton[data-state~="drop"] .style-jsuazwo8repeaterButtonlabel {padding:0 .5em;}
               .style-jsuazwo8repeaterButton[data-state~="over"] .style-jsuazwo8repeaterButtonlabel,.style-jsuazwo8repeaterButton[data-preview~="hover"] .style-jsuazwo8repeaterButtonlabel {color:#A2ECF3;transition:color 0.4s ease 0s;}
               .style-jsuazwo8repeaterButton[data-state~="selected"] .style-jsuazwo8repeaterButtonlabel,.style-jsuazwo8repeaterButton[data-preview~="active"] .style-jsuazwo8repeaterButtonlabel {color:#000000;transition:color 0.4s ease 0s;}
            </style>
            <style type="text/css" data-styleid="style-k7xqzco9">.style-k7xqzco9bg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(241, 224, 182, 0.51);border-radius:0;  }
               .style-k7xqzco9inlineContent,.style-k7xqzco9bg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k80s6h1b">.style-k80s6h1b_zoomedin {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
               .style-k80s6h1b_zoomedout {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
               .style-k80s6h1blink {display:block;overflow:hidden;}
               .style-k80s6h1bimg {overflow:hidden;}
               .style-k80s6h1b[data-is-responsive=true] .style-k80s6h1blink,.style-k80s6h1b[data-is-responsive=true] .style-k80s6h1bimg,.style-k80s6h1b[data-is-responsive=true] wix-image {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k80s6h1bimgimage {position:static;box-shadow:#000 0 0 0;user-select:none;}
            </style>
            <style type="text/css" data-styleid="style-jsuazwix">.style-jsuazwix button.style-jsuazwixlink {width:100%;}
               .style-jsuazwix[data-state~="shouldUseFlex"] .style-jsuazwixlink,.style-jsuazwix[data-state~="shouldUseFlex"] .style-jsuazwixlabelwrapper {text-align:initial;display:flex;align-items:center;}
               .style-jsuazwix[data-state~="shouldUseFlex"][data-state~="center"] .style-jsuazwixlink,.style-jsuazwix[data-state~="shouldUseFlex"][data-state~="center"] .style-jsuazwixlabelwrapper {justify-content:center;}
               .style-jsuazwix[data-state~="shouldUseFlex"][data-state~="left"] .style-jsuazwixlink,.style-jsuazwix[data-state~="shouldUseFlex"][data-state~="left"] .style-jsuazwixlabelwrapper {justify-content:flex-start;}
               .style-jsuazwix[data-state~="shouldUseFlex"][data-state~="right"] .style-jsuazwixlink,.style-jsuazwix[data-state~="shouldUseFlex"][data-state~="right"] .style-jsuazwixlabelwrapper {justify-content:flex-end;}
               .style-jsuazwixlink {border-radius:10px 10px 10px 10px;  position:absolute;top:0;right:0;bottom:0;left:0;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
               .style-jsuazwixlabel {font:normal normal normal 17px/1.4em wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;  transition:color 0.4s ease 0s;  color:#000000;display:inline-block;margin:calc(-1 * 2px) 2px 0;position:relative;white-space:nowrap;}
               .style-jsuazwix[data-state~="shouldUseFlex"] .style-jsuazwixlabel {margin:0;}
               .style-jsuazwix[data-disabled="false"] .style-jsuazwixlink {background-color:rgba(241, 224, 182, 1);border:solid rgba(241, 224, 182, 1) 2px;cursor:pointer !important;}
               .style-jsuazwix[data-disabled="false"]:active[data-state~="mobile"] .style-jsuazwixlink,.style-jsuazwix[data-disabled="false"]:hover[data-state~="desktop"] .style-jsuazwixlink,.style-jsuazwix[data-disabled="false"][data-preview~="hover"] .style-jsuazwixlink {background-color:rgba(50, 50, 50, 1);border-color:transparent;}
               .style-jsuazwix[data-disabled="false"]:active[data-state~="mobile"] .style-jsuazwixlabel,.style-jsuazwix[data-disabled="false"]:hover[data-state~="desktop"] .style-jsuazwixlabel,.style-jsuazwix[data-disabled="false"][data-preview~="hover"] .style-jsuazwixlabel {color:#FFFFFF;}
               .style-jsuazwix[data-disabled="true"] .style-jsuazwixlink,.style-jsuazwix[data-preview~="disabled"] .style-jsuazwixlink {background-color:rgba(204, 204, 204, 1);border:solid rgba(50, 51, 51, 1) 2px;}
               .style-jsuazwix[data-disabled="true"] .style-jsuazwixlabel,.style-jsuazwix[data-preview~="disabled"] .style-jsuazwixlabel {color:#FFFFFF;}
            </style>
            <style type="text/css" data-styleid="style-jsuazwii">.style-jsuazwii button.style-jsuazwiilink {width:100%;}
               .style-jsuazwii[data-state~="shouldUseFlex"] .style-jsuazwiilink,.style-jsuazwii[data-state~="shouldUseFlex"] .style-jsuazwiilabelwrapper {text-align:initial;display:flex;align-items:center;}
               .style-jsuazwii[data-state~="shouldUseFlex"][data-state~="center"] .style-jsuazwiilink,.style-jsuazwii[data-state~="shouldUseFlex"][data-state~="center"] .style-jsuazwiilabelwrapper {justify-content:center;}
               .style-jsuazwii[data-state~="shouldUseFlex"][data-state~="left"] .style-jsuazwiilink,.style-jsuazwii[data-state~="shouldUseFlex"][data-state~="left"] .style-jsuazwiilabelwrapper {justify-content:flex-start;}
               .style-jsuazwii[data-state~="shouldUseFlex"][data-state~="right"] .style-jsuazwiilink,.style-jsuazwii[data-state~="shouldUseFlex"][data-state~="right"] .style-jsuazwiilabelwrapper {justify-content:flex-end;}
               .style-jsuazwiilink {border-radius:10px 10px 10px 10px;  position:absolute;top:0;right:0;bottom:0;left:0;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
               .style-jsuazwiilabel {font:normal normal normal 17px/1.4em wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;  transition:color 0.4s ease 0s;  color:#000000;display:inline-block;margin:calc(-1 * 2px) 2px 0;position:relative;white-space:nowrap;}
               .style-jsuazwii[data-state~="shouldUseFlex"] .style-jsuazwiilabel {margin:0;}
               .style-jsuazwii[data-disabled="false"] .style-jsuazwiilink {background-color:rgba(0, 0, 0, 0.01);border:solid rgba(0, 0, 0, 1) 2px;cursor:pointer !important;}
               .style-jsuazwii[data-disabled="false"]:active[data-state~="mobile"] .style-jsuazwiilink,.style-jsuazwii[data-disabled="false"]:hover[data-state~="desktop"] .style-jsuazwiilink,.style-jsuazwii[data-disabled="false"][data-preview~="hover"] .style-jsuazwiilink {background-color:rgba(50, 50, 50, 1);border-color:transparent;}
               .style-jsuazwii[data-disabled="false"]:active[data-state~="mobile"] .style-jsuazwiilabel,.style-jsuazwii[data-disabled="false"]:hover[data-state~="desktop"] .style-jsuazwiilabel,.style-jsuazwii[data-disabled="false"][data-preview~="hover"] .style-jsuazwiilabel {color:#FFFFFF;}
               .style-jsuazwii[data-disabled="true"] .style-jsuazwiilink,.style-jsuazwii[data-preview~="disabled"] .style-jsuazwiilink {background-color:rgba(204, 204, 204, 1);border:solid rgba(50, 51, 51, 1) 2px;}
               .style-jsuazwii[data-disabled="true"] .style-jsuazwiilabel,.style-jsuazwii[data-preview~="disabled"] .style-jsuazwiilabel {color:#FFFFFF;}
            </style>
            <style type="text/css" data-styleid="style-jsuazwh9">.style-jsuazwh9 {overflow:hidden;}
               .style-jsuazwh9 iframe {position:absolute;width:100%;height:100%;overflow:hidden;}
               .style-jsuazwh9 iframe:-webkit-full-screen {min-height:auto !important;}
               .style-jsuazwh9preloaderOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
               .style-jsuazwh9preloaderOverlaycontent {width:100%;height:100%;}
               .style-jsuazwh9unavailableMessageOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
               .style-jsuazwh9unavailableMessageOverlaycontent {width:100%;height:100%;background:rgba(255, 255, 255, 0.9);font-size:0;margin-top:5px;}
               .style-jsuazwh9unavailableMessageOverlaytextContainer {color:#373737;font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;font-size:14px;display:inline-block;vertical-align:middle;width:100%;margin-top:10px;text-align:center;}
               .style-jsuazwh9unavailableMessageOverlayreloadButton {display:inline-block;}
               .style-jsuazwh9unavailableMessageOverlay a {color:#0099FF;text-decoration:underline;cursor:pointer;}
               .style-jsuazwh9unavailableMessageOverlayiconContainer {display:none;}
               .style-jsuazwh9unavailableMessageOverlaydismissButton {display:none;}
               .style-jsuazwh9unavailableMessageOverlaytextTitle {font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;display:none;}
               .style-jsuazwh9unavailableMessageOverlay[data-state~="hideIframe"] .style-jsuazwh9unavailableMessageOverlay_buttons {opacity:1;}
               .style-jsuazwh9unavailableMessageOverlay[data-state~="hideOverlay"] {display:none;}
            </style>
            <style type="text/css" data-styleid="style-jsuazwgf">.style-jsuazwgfbg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(47, 46, 46, 0.05);border-radius:0;  }
               .style-jsuazwgfinlineContent,.style-jsuazwgfbg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="AutoWidthAnchorSkin">.AutoWidthAnchorSkin {pointer-events:none !important;}</style>
            <style type="text/css" data-styleid="FacebookLikeBox_1">.FacebookLikeBox_1likeboxContainer {position:absolute;top:0;right:0;bottom:0;left:0;}
               .FacebookLikeBox_1[data-state~="bgStyle-light"] .FacebookLikeBox_1likeboxContainer {background-color:#fff;}
               .FacebookLikeBox_1[data-state~="bgStyle-dark"] .FacebookLikeBox_1likeboxContainer {background-color:#000;}
               .FacebookLikeBox_1[data-state~="bgStyle-noBg"] .FacebookLikeBox_1likeboxContainer {background-color:transparent;}
               .FacebookLikeBox_1iframe {border:0;box-sizing:border-box;width:100%;height:100%;}
            </style>
            <style type="text/css" data-styleid="style-k81hmcq9">.style-k81hmcq9bg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(241, 224, 182, 0.51);border-radius:100px 100px 100px 100px;  }
               .style-k81hmcq9inlineContent,.style-k81hmcq9bg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k7xjsi2z">.style-k7xjsi2z > ul {display:table;width:100%;box-sizing:border-box;}
               .style-k7xjsi2z li {display:table;width:100%;}
               .style-k7xjsi2z a span {pointer-events:none;}
               .style-k7xjsi2z_noLink {cursor:default !important;}
               .style-k7xjsi2z_counter {margin:0 10px;opacity:0.6;}
               .style-k7xjsi2zmenuContainer {padding:0;margin:0;border:solid 1px rgba(50, 51, 51, 0.2);position:relative;  border-radius:0;}
               .style-k7xjsi2zmenuContainer .style-k7xjsi2z_emptySubMenu {display:none !important;}
               .style-k7xjsi2z_itemHoverArea {box-sizing:content-box;border-bottom:solid 0px rgba(50, 51, 51, 1);}
               .style-k7xjsi2z_itemHoverArea:first-child > .style-k7xjsi2z_item {border-radius:0;    border-bottom-left-radius:0;border-bottom-right-radius:0;}
               .style-k7xjsi2z_itemHoverArea:last-child {border-bottom:0 solid transparent;}
               .style-k7xjsi2z_itemHoverArea:last-child > .style-k7xjsi2z_item {border-radius:0;      border-top-left-radius:0;border-top-right-radius:0;border-bottom:0 solid transparent;}
               .style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_hover > .style-k7xjsi2z_item,.style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_selected > .style-k7xjsi2z_item,.style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_selectedContainer > .style-k7xjsi2z_item {transition:background-color 0.4s ease 0s;}
               .style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_hover .style-k7xjsi2z_subMenu {opacity:1;display:block;}
               .style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_hover:not(.style-k7xjsi2z_noLink) > .style-k7xjsi2z_item {background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_hover:not(.style-k7xjsi2z_noLink) > .style-k7xjsi2z_item > .style-k7xjsi2z_label {color:#646666;}
               .style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_selected > .style-k7xjsi2z_item,.style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_selectedContainer > .style-k7xjsi2z_item {background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_selected > .style-k7xjsi2z_item > .style-k7xjsi2z_label,.style-k7xjsi2z_itemHoverArea.style-k7xjsi2z_selectedContainer > .style-k7xjsi2z_item > .style-k7xjsi2z_label {color:#00C8DC;}
               .style-k7xjsi2z_item {height:100%;padding-left:30px;padding-right:30px;transition:background-color 0.4s ease 0s;  margin:0;position:relative;cursor:pointer;list-style:none;background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2z_label {font:normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;  color:#323333;display:inline;white-space:nowrap;overflow:hidden;}
               .style-k7xjsi2z_subMenu {z-index:999;min-width:100%;display:none;opacity:0;transition:all 0.4s ease 0s;  position:absolute;border:solid 1px rgba(50, 51, 51, 0.2);border-radius:0;  }
               .style-k7xjsi2z_subMenu .style-k7xjsi2z_item {background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2z_subMenu .style-k7xjsi2z_label {font:normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;}
               .style-k7xjsi2z_subMenu > .style-k7xjsi2z_itemHoverArea:first-child > .style-k7xjsi2z_item,.style-k7xjsi2z_subMenu > .style-k7xjsi2z_itemHoverArea:first-child:last-child > .style-k7xjsi2z_item {border-radius:0;}
               .style-k7xjsi2z_subMenu > .style-k7xjsi2z_itemHoverArea:first-child > .style-k7xjsi2z_item {border-bottom-left-radius:0;border-bottom-right-radius:0;}
               .style-k7xjsi2z_subMenu > .style-k7xjsi2z_itemHoverArea:last-child {border-bottom:0 solid transparent;}
               .style-k7xjsi2z_subMenu > .style-k7xjsi2z_itemHoverArea:last-child > .style-k7xjsi2z_item {border-radius:0;      border-top-left-radius:0;border-top-right-radius:0;border-bottom:0 solid transparent;}
               .style-k7xjsi2z_subMenu:before {background-color:#fff;opacity:0;z-index:999;content:" ";display:block;width:calc(0px + 1px);height:100%;position:absolute;top:0;}
               .style-k7xjsi2z[data-state~="items-align-left"] .style-k7xjsi2z_item {text-align:left;}
               .style-k7xjsi2z[data-state~="items-align-center"] .style-k7xjsi2z_item {text-align:center;}
               .style-k7xjsi2z[data-state~="items-align-right"] .style-k7xjsi2z_item {text-align:right;}
               .style-k7xjsi2z[data-state~="subItems-align-left"] .style-k7xjsi2z_subMenu > .style-k7xjsi2z_item {text-align:left;padding-left:30px;padding-right:30px;}
               .style-k7xjsi2z[data-state~="subItems-align-center"] .style-k7xjsi2z_subMenu > .style-k7xjsi2z_item {text-align:center;padding-left:30px;padding-right:30px;}
               .style-k7xjsi2z[data-state~="subItems-align-right"] .style-k7xjsi2z_subMenu > .style-k7xjsi2z_item {text-align:right;padding-left:30px;padding-right:30px;}
               .style-k7xjsi2z[data-state~="subMenuOpenSide-right"] .style-k7xjsi2z_subMenu {left:100%;float:left;margin-left:0px;}
               .style-k7xjsi2z[data-state~="subMenuOpenSide-right"] .style-k7xjsi2z_subMenu:before {right:100%;}
               .style-k7xjsi2z[data-state~="subMenuOpenSide-left"] .style-k7xjsi2z_subMenu {right:100%;float:right;margin-right:0px;}
               .style-k7xjsi2z[data-state~="subMenuOpenSide-left"] .style-k7xjsi2z_subMenu:before {left:100%;}
               .style-k7xjsi2z[data-open-direction~="subMenuOpenDir-down"] .style-k7xjsi2z_subMenu {top:calc(-1 * 1px);}
               .style-k7xjsi2z[data-open-direction~="subMenuOpenDir-up"] .style-k7xjsi2z_subMenu {bottom:calc(-1 * 1px);}
               .style-k7xjsi2zmenuContainer_with-validation-indication select:not([data-preview~="focus"]):invalid {border-width:2px;  border-style:solid;border-color:rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2zmenuContainer {display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;flex-direction:column;}
               .style-k7xjsi2zmenuContainer select {border-radius:0;  -webkit-appearance:none;-moz-appearance:none;  font:normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;  background-color:rgba(255, 255, 255, 1);color:#323333;border-width:1px;  border-style:solid;border-color:rgba(50, 51, 51, 0.2);margin:0;padding:0 45px;cursor:pointer;position:relative;max-width:100%;min-width:100%;min-height:10px;height:100%;text-overflow:ellipsis;white-space:nowrap;display:block;}
               .style-k7xjsi2zmenuContainer select option {text-overflow:ellipsis;white-space:nowrap;overflow:hidden;color:#44474D;background-color:#FFFFFF;}
               .style-k7xjsi2zmenuContainer select.style-k7xjsi2zmenuContainer_placeholder-style {color:#323333;}
               .style-k7xjsi2zmenuContainer select.style-k7xjsi2zmenuContainer_extended-placeholder-style {color:#888888;}
               .style-k7xjsi2zmenuContainer select:-moz-focusring {color:transparent;text-shadow:0 0 0 #000;}
               .style-k7xjsi2zmenuContainer select::-ms-expand {display:none;}
               .style-k7xjsi2zmenuContainer select:focus::-ms-value {background:transparent;}
               .style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection):hover,.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-preview~="hover"] {border-width:2px;  border-style:solid;border-color:rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection):focus,.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-preview~="focus"] {border-width:2px;  border-style:solid;border-color:rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-error="true"],.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-preview~="error"] {border-width:2px;  border-style:solid;border-color:rgba(249, 249, 249, 1);background-color:rgba(255, 255, 255, 1);}
               .style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection):disabled,.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-disabled="true"],.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-preview~="disabled"] {border-width:2px;border-color:rgba(204, 204, 204, 1);color:#FFFFFF;background-color:rgba(204, 204, 204, 1);}
               .style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection):disabled + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-disabled="true"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer select:not(.style-k7xjsi2zmenuContainer_mobileCollection)[data-preview~="disabled"] + .style-k7xjsi2zmenuContainerarrow {border-width:2px;border-color:rgba(204, 204, 204, 1);color:#FFFFFF;border:none;}
               .style-k7xjsi2zmenuContainerarrow {position:absolute;pointer-events:none;top:0;bottom:0;box-sizing:border-box;padding-left:20px;padding-right:20px;height:inherit;display:-webkit-box;display:-webkit-flex;display:flex;-webkit-box-align:center;-webkit-align-items:center;align-items:center;}
               .style-k7xjsi2zmenuContainerarrow .style-k7xjsi2zmenuContainer_svg_container {width:12px;}
               .style-k7xjsi2zmenuContainerarrow .style-k7xjsi2zmenuContainer_svg_container svg {height:100%;fill:rgba(204, 204, 202, 1);}
               .style-k7xjsi2zmenuContainer_left-direction {text-align-last:left;}
               .style-k7xjsi2zmenuContainer_left-direction .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction select:hover + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction select[data-preview~="hover"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction select:focus + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction select[data-preview~="focus"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction[data-preview~="focus"] .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction select[data-error="true"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_left-direction select[data-preview~="error"] + .style-k7xjsi2zmenuContainerarrow {border-left:0;}
               .style-k7xjsi2zmenuContainer_left-direction .style-k7xjsi2zmenuContainerarrow {right:0;}
               .style-k7xjsi2zmenuContainer_right-direction {text-align-last:right;direction:rtl;}
               .style-k7xjsi2zmenuContainer_right-direction .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction select:hover + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction select[data-preview~="hover"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction select:focus + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction select[data-preview~="focus"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction[data-preview~="focus"] .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction select[data-error="true"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_right-direction select[data-preview~="error"] + .style-k7xjsi2zmenuContainerarrow {border-right:0;}
               .style-k7xjsi2zmenuContainer_right-direction .style-k7xjsi2zmenuContainerarrow {left:0;}
               .style-k7xjsi2zmenuContainer_center-direction {text-align-last:left;text-align-last:center;}
               .style-k7xjsi2zmenuContainer_center-direction .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction select:hover + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction select[data-preview~="hover"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction select:focus + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction select[data-preview~="focus"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction[data-preview~="focus"] .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction select[data-error="true"] + .style-k7xjsi2zmenuContainerarrow,.style-k7xjsi2zmenuContainer_center-direction select[data-preview~="error"] + .style-k7xjsi2zmenuContainerarrow {border-left:0;}
               .style-k7xjsi2zmenuContainer_center-direction .style-k7xjsi2zmenuContainerarrow {right:0;}
               .style-k7xjsi2zmenuContainer_mobileMenuContainer {border:0;}
               .style-k7xjsi2zmenuContainer_mobileMenuContainer .style-k7xjsi2zmenuContainerarrow .style-k7xjsi2zmenuContainer_svg_container .style-k7xjsi2zmenuContainericon {fill:#323333;}
               .style-k7xjsi2zmenuContainerlabel {font:normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif ;  color:#323333;word-break:break-word;display:inline-block;line-height:1;}
               .style-k7xjsi2zmenuContainer_required .style-k7xjsi2zmenuContainerlabel::after {content:" *";color:transparent;}
               .style-k7xjsi2zmenuContainer_selector-wrapper {-webkit-box-flex:1;-webkit-flex:1;flex:1;position:relative;}
            </style>
            <style type="text/css" data-styleid="tpaw0">.tpaw0 {overflow:hidden;}
               .tpaw0 iframe {position:absolute;width:100%;height:100%;overflow:hidden;}
               .tpaw0 iframe:-webkit-full-screen {min-height:auto !important;}
               .tpaw0preloaderOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
               .tpaw0preloaderOverlaycontent {width:100%;height:100%;}
               .tpaw0unavailableMessageOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
               .tpaw0unavailableMessageOverlaycontent {width:100%;height:100%;background:rgba(255, 255, 255, 0.9);font-size:0;margin-top:5px;}
               .tpaw0unavailableMessageOverlaytextContainer {color:#373737;font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;font-size:14px;display:inline-block;vertical-align:middle;width:100%;margin-top:10px;text-align:center;}
               .tpaw0unavailableMessageOverlayreloadButton {display:inline-block;}
               .tpaw0unavailableMessageOverlay a {color:#0099FF;text-decoration:underline;cursor:pointer;}
               .tpaw0unavailableMessageOverlayiconContainer {display:none;}
               .tpaw0unavailableMessageOverlaydismissButton {display:none;}
               .tpaw0unavailableMessageOverlaytextTitle {font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;display:none;}
               .tpaw0unavailableMessageOverlay[data-state~="hideIframe"] .tpaw0unavailableMessageOverlay_buttons {opacity:1;}
               .tpaw0unavailableMessageOverlay[data-state~="hideOverlay"] {display:none;}
            </style>
            <style type="text/css" data-styleid="style-k80blg8s">.style-k80blg8s_zoomedin {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
               .style-k80blg8s_zoomedout {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
               .style-k80blg8slink {display:block;overflow:hidden;}
               .style-k80blg8simg {overflow:hidden;}
               .style-k80blg8s[data-is-responsive=true] .style-k80blg8slink,.style-k80blg8s[data-is-responsive=true] .style-k80blg8simg,.style-k80blg8s[data-is-responsive=true] wix-image {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k80blg8simgimage {position:static;box-shadow:#000 0 0 0;user-select:none;}
            </style>
            <style type="text/css" data-styleid="style-k81iwzv7">.style-k81iwzv7 button.style-k81iwzv7link {width:100%;}
               .style-k81iwzv7[data-state~="shouldUseFlex"] .style-k81iwzv7link,.style-k81iwzv7[data-state~="shouldUseFlex"] .style-k81iwzv7labelwrapper {text-align:initial;display:flex;align-items:center;}
               .style-k81iwzv7[data-state~="shouldUseFlex"][data-state~="center"] .style-k81iwzv7link,.style-k81iwzv7[data-state~="shouldUseFlex"][data-state~="center"] .style-k81iwzv7labelwrapper {justify-content:center;}
               .style-k81iwzv7[data-state~="shouldUseFlex"][data-state~="left"] .style-k81iwzv7link,.style-k81iwzv7[data-state~="shouldUseFlex"][data-state~="left"] .style-k81iwzv7labelwrapper {justify-content:flex-start;}
               .style-k81iwzv7[data-state~="shouldUseFlex"][data-state~="right"] .style-k81iwzv7link,.style-k81iwzv7[data-state~="shouldUseFlex"][data-state~="right"] .style-k81iwzv7labelwrapper {justify-content:flex-end;}
               .style-k81iwzv7link {border-radius:10px 10px 10px 10px;  position:absolute;top:0;right:0;bottom:0;left:0;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
               .style-k81iwzv7label {font:normal normal normal 17px/1.4em wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;  transition:color 0.4s ease 0s;  color:#000000;display:inline-block;margin:calc(-1 * 2px) 2px 0;position:relative;white-space:nowrap;}
               .style-k81iwzv7[data-state~="shouldUseFlex"] .style-k81iwzv7label {margin:0;}
               .style-k81iwzv7[data-disabled="false"] .style-k81iwzv7link {background-color:rgba(241, 224, 182, 1);border:solid rgba(241, 224, 182, 1) 2px;cursor:pointer !important;}
               .style-k81iwzv7[data-disabled="false"]:active[data-state~="mobile"] .style-k81iwzv7link,.style-k81iwzv7[data-disabled="false"]:hover[data-state~="desktop"] .style-k81iwzv7link,.style-k81iwzv7[data-disabled="false"][data-preview~="hover"] .style-k81iwzv7link {background-color:rgba(50, 50, 50, 1);border-color:transparent;}
               .style-k81iwzv7[data-disabled="false"]:active[data-state~="mobile"] .style-k81iwzv7label,.style-k81iwzv7[data-disabled="false"]:hover[data-state~="desktop"] .style-k81iwzv7label,.style-k81iwzv7[data-disabled="false"][data-preview~="hover"] .style-k81iwzv7label {color:#FFFFFF;}
               .style-k81iwzv7[data-disabled="true"] .style-k81iwzv7link,.style-k81iwzv7[data-preview~="disabled"] .style-k81iwzv7link {background-color:rgba(204, 204, 204, 1);border:solid rgba(50, 51, 51, 1) 2px;}
               .style-k81iwzv7[data-disabled="true"] .style-k81iwzv7label,.style-k81iwzv7[data-preview~="disabled"] .style-k81iwzv7label {color:#FFFFFF;}
            </style>
            <style type="text/css" data-styleid="style-k80gjxad">.style-k80gjxadbg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(47, 46, 46, 0.05);border-radius:100px 0 0 100px;  }
               .style-k80gjxadinlineContent,.style-k80gjxadbg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k81hlnyp">.style-k81hlnypbg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(241, 224, 182, 1);border-radius:100px 100px 100px 100px;  }
               .style-k81hlnypinlineContent,.style-k81hlnypbg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k80c4fv41">.style-k80c4fv41_zoomedin {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_out.cur), auto;overflow:hidden;display:block;}
               .style-k80c4fv41_zoomedout {cursor:url(services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.png), url(https://static.parastorage.com/services/skins/2.1229.80/images/wysiwyg/core/themes/base/cursor_zoom_in.cur), auto;}
               .style-k80c4fv41link {display:block;box-shadow:0.00px 0.00px 14px 0px rgba(0,0,0,0.2);  border-radius:50%;border:6px solid rgba(255, 255, 255, 1);background-color:rgba(255, 255, 255, 1);overflow:hidden;}
               .style-k80c4fv41img {border-radius:50%;overflow:hidden;}
               .style-k80c4fv41imgimage {position:static;box-shadow:#000 0 0 0;user-select:none;}
            </style>
            <style type="text/css" data-styleid="style-k80gmbgq">.style-k80gmbgqbg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(47, 46, 46, 0.05);border-radius:0 100px 100px 0;  }
               .style-k80gmbgqinlineContent,.style-k80gmbgqbg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k81fpsvi">.style-k81fpsvi {-webkit-tap-highlight-color:rgba(0, 0, 0, 0);}
               .style-k81fpsvilink,.style-k81fpsvisvg {position:absolute;top:0;right:0;bottom:0;left:0;}
               .style-k81fpsvi svg {position:absolute;top:0;right:0;bottom:0;left:0;width:100%;height:100%;margin:auto;}
               .style-k81fpsvi_non-scaling-stroke * {vector-effect:non-scaling-stroke;}
               .style-k81fpsvi_with-shadow svg {overflow:visible !important;}
            </style>
            <style type="text/css" data-styleid="style-k81h7oj4">.style-k81h7oj4bg {border:0px solid rgba(255, 255, 255, 1);background-color:rgba(20, 22, 63, 0.05);border-radius:100px 100px 100px 100px;  }
               .style-k81h7oj4inlineContent,.style-k81h7oj4bg {position:absolute;top:0;right:0;bottom:0;left:0;}
            </style>
            <style type="text/css" data-styleid="style-k81ika8o">.style-k81ika8o button.style-k81ika8olink {width:100%;}
               .style-k81ika8o[data-state~="shouldUseFlex"] .style-k81ika8olink,.style-k81ika8o[data-state~="shouldUseFlex"] .style-k81ika8olabelwrapper {text-align:initial;display:flex;align-items:center;}
               .style-k81ika8o[data-state~="shouldUseFlex"][data-state~="center"] .style-k81ika8olink,.style-k81ika8o[data-state~="shouldUseFlex"][data-state~="center"] .style-k81ika8olabelwrapper {justify-content:center;}
               .style-k81ika8o[data-state~="shouldUseFlex"][data-state~="left"] .style-k81ika8olink,.style-k81ika8o[data-state~="shouldUseFlex"][data-state~="left"] .style-k81ika8olabelwrapper {justify-content:flex-start;}
               .style-k81ika8o[data-state~="shouldUseFlex"][data-state~="right"] .style-k81ika8olink,.style-k81ika8o[data-state~="shouldUseFlex"][data-state~="right"] .style-k81ika8olabelwrapper {justify-content:flex-end;}
               .style-k81ika8olink {border-radius:10px 10px 10px 10px;  position:absolute;top:0;right:0;bottom:0;left:0;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
               .style-k81ika8olabel {font:normal normal normal 18px/1.4em wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;  transition:color 0.4s ease 0s;  color:#000000;display:inline-block;margin:calc(-1 * 2px) 2px 0;position:relative;white-space:nowrap;}
               .style-k81ika8o[data-state~="shouldUseFlex"] .style-k81ika8olabel {margin:0;}
               .style-k81ika8o[data-disabled="false"] .style-k81ika8olink {background-color:rgba(255, 178, 90, 1);border:solid transparent 2px;cursor:pointer !important;}
               .style-k81ika8o[data-disabled="false"]:active[data-state~="mobile"] .style-k81ika8olink,.style-k81ika8o[data-disabled="false"]:hover[data-state~="desktop"] .style-k81ika8olink,.style-k81ika8o[data-disabled="false"][data-preview~="hover"] .style-k81ika8olink {background-color:rgba(50, 50, 50, 1);border-color:transparent;}
               .style-k81ika8o[data-disabled="false"]:active[data-state~="mobile"] .style-k81ika8olabel,.style-k81ika8o[data-disabled="false"]:hover[data-state~="desktop"] .style-k81ika8olabel,.style-k81ika8o[data-disabled="false"][data-preview~="hover"] .style-k81ika8olabel {color:#FFFFFF;}
               .style-k81ika8o[data-disabled="true"] .style-k81ika8olink,.style-k81ika8o[data-preview~="disabled"] .style-k81ika8olink {background-color:rgba(204, 204, 204, 1);border:solid rgba(50, 51, 51, 1) 2px;}
               .style-k81ika8o[data-disabled="true"] .style-k81ika8olabel,.style-k81ika8o[data-preview~="disabled"] .style-k81ika8olabel {color:#FFFFFF;}
            </style>
            <style type="text/css" data-styleid="style-k81kzflh">.style-k81kzflh button.style-k81kzflhlink {width:100%;}
               .style-k81kzflh[data-state~="shouldUseFlex"] .style-k81kzflhlink,.style-k81kzflh[data-state~="shouldUseFlex"] .style-k81kzflhlabelwrapper {text-align:initial;display:flex;align-items:center;}
               .style-k81kzflh[data-state~="shouldUseFlex"][data-state~="center"] .style-k81kzflhlink,.style-k81kzflh[data-state~="shouldUseFlex"][data-state~="center"] .style-k81kzflhlabelwrapper {justify-content:center;}
               .style-k81kzflh[data-state~="shouldUseFlex"][data-state~="left"] .style-k81kzflhlink,.style-k81kzflh[data-state~="shouldUseFlex"][data-state~="left"] .style-k81kzflhlabelwrapper {justify-content:flex-start;}
               .style-k81kzflh[data-state~="shouldUseFlex"][data-state~="right"] .style-k81kzflhlink,.style-k81kzflh[data-state~="shouldUseFlex"][data-state~="right"] .style-k81kzflhlabelwrapper {justify-content:flex-end;}
               .style-k81kzflhlink {border-radius:10px 10px 10px 10px;  position:absolute;top:0;right:0;bottom:0;left:0;transition:border-color 0.4s ease 0s, background-color 0.4s ease 0s;  }
               .style-k81kzflhlabel {font:normal normal normal 18px/1.4em wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;  transition:color 0.4s ease 0s;  color:#000000;display:inline-block;margin:calc(-1 * 2px) 2px 0;position:relative;white-space:nowrap;}
               .style-k81kzflh[data-state~="shouldUseFlex"] .style-k81kzflhlabel {margin:0;}
               .style-k81kzflh[data-disabled="false"] .style-k81kzflhlink {background-color:rgba(255, 178, 90, 1);border:solid transparent 2px;cursor:pointer !important;}
               .style-k81kzflh[data-disabled="false"]:active[data-state~="mobile"] .style-k81kzflhlink,.style-k81kzflh[data-disabled="false"]:hover[data-state~="desktop"] .style-k81kzflhlink,.style-k81kzflh[data-disabled="false"][data-preview~="hover"] .style-k81kzflhlink {background-color:rgba(50, 50, 50, 1);border-color:transparent;}
               .style-k81kzflh[data-disabled="false"]:active[data-state~="mobile"] .style-k81kzflhlabel,.style-k81kzflh[data-disabled="false"]:hover[data-state~="desktop"] .style-k81kzflhlabel,.style-k81kzflh[data-disabled="false"][data-preview~="hover"] .style-k81kzflhlabel {color:#FFFFFF;}
               .style-k81kzflh[data-disabled="true"] .style-k81kzflhlink,.style-k81kzflh[data-preview~="disabled"] .style-k81kzflhlink {background-color:rgba(204, 204, 204, 1);border:solid rgba(50, 51, 51, 1) 2px;}
               .style-k81kzflh[data-disabled="true"] .style-k81kzflhlabel,.style-k81kzflh[data-preview~="disabled"] .style-k81kzflhlabel {color:#FFFFFF;}
            </style>
            <style type="text/css" data-styleid="s_DtaksTPAWidgetSkin">.s_DtaksTPAWidgetSkin {overflow:hidden;}
               .s_DtaksTPAWidgetSkin iframe {position:absolute;width:100%;height:100%;overflow:hidden;}
               .s_DtaksTPAWidgetSkin iframe:-webkit-full-screen {min-height:auto !important;}
               .s_DtaksTPAWidgetSkinpreloaderOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
               .s_DtaksTPAWidgetSkinpreloaderOverlaycontent {width:100%;height:100%;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlay {position:absolute;top:0;left:0;color:#373737;width:100%;height:100%;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlaycontent {width:100%;height:100%;background:rgba(255, 255, 255, 0.9);font-size:0;margin-top:5px;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlaytextContainer {color:#373737;font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;font-size:14px;display:inline-block;vertical-align:middle;width:100%;margin-top:10px;text-align:center;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlayreloadButton {display:inline-block;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlay a {color:#0099FF;text-decoration:underline;cursor:pointer;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlayiconContainer {display:none;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlaydismissButton {display:none;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlaytextTitle {font-family:"Helvetica Neue", "HelveticaNeueW01-55Roma", "HelveticaNeueW02-55Roma", "HelveticaNeueW10-55Roma", Helvetica, Arial, sans-serif;display:none;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlay[data-state~="hideIframe"] .s_DtaksTPAWidgetSkinunavailableMessageOverlay_buttons {opacity:1;}
               .s_DtaksTPAWidgetSkinunavailableMessageOverlay[data-state~="hideOverlay"] {display:none;}
            </style>
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
                  }
            </style>
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
         </div>
         <!-- <div id="notificationDiv" style="background-color: red; height:30px;">
            <p style="text-align: center;vertical-align: middle;font-weight: 700;padding-top: 5px;color: wheat;">Coronavirus: Schließung wegen Coronavirus?
               Wir helfen Ihrem Unternehmen, keine Miete zu bezahlen. Alle Informationen hier.&emsp;&emsp;<i  style="
               position: absolute;" onclick="removeNotification();" id="removeNot" class="fa fa-times-circle-o" aria-hidden="true"></i></p>
         </div> -->
         <div class="noop" style="position:relative">
            <div id="SCROLL_TO_TOP" tabindex="-1" aria-label="top of page" role="region" style="height:0"></div>
            <div id="FONTS_CONTAINER"></div>
            <div id="SITE_BACKGROUND" style="height:100%;top:0;min-height:calc(100vh - 0px);bottom:;left:;right:;position:" class="siteBackground">
               <div id="SITE_BACKGROUND_previous_noPrev" data-position="absolute" data-align="" data-fitting="" class="siteBackgroundprevious">
                  <div id="SITE_BACKGROUNDpreviousImage" class="siteBackgroundpreviousImage"></div>
                  <div id="SITE_BACKGROUNDpreviousVideo" class="siteBackgroundpreviousVideo"></div>
                  <div id="SITE_BACKGROUND_previousOverlay_noPrev" class="siteBackgroundpreviousOverlay"></div>
               </div>
               <div id="SITE_BACKGROUND_current_c1dmp_j7iwimtk_bg" style="top:0;height:100%;width:100%;background-color:rgba(255, 255, 255, 1);display:;position:absolute" data-position="absolute" data-align="center" data-fitting="fill" class="siteBackgroundcurrent">
                  <div id="SITE_BACKGROUND_currentImage_c1dmp_j7iwimtk_bg" style="position:absolute;top:0;height:100%;width:100%" data-type="bgimage" data-height="100%" class="siteBackgroundcurrentImage"></div>
                  <div id="SITE_BACKGROUNDcurrentVideo" class="siteBackgroundcurrentVideo"></div>
                  <div id="SITE_BACKGROUND_currentOverlay_c1dmp_j7iwimtk_bg" style="position:absolute;top:0;width:100%;height:100%" class="siteBackgroundcurrentOverlay"></div>
               </div>
            </div>
            
            <div id="SITE_ROOT" class="SITE_ROOT" style="width:100%;min-width:980px;padding-bottom:0;top:0" aria-hidden="false">
               
              

               <div id="masterPage" class="mesh-layout" data-mesh-layout="grid">
                  <header data-is-mobile="false" data-state="transition-allowed" data-site-width="980" data-header-top="0" style="position:relative;margin-top:0;left:0;margin-left:0;width:100%;min-width:980px;top:;bottom:;right:" class="style-jsuazwot" id="SITE_HEADER">
                     <div style="left:0;width:100%" id="SITE_HEADERscreenWidthBackground" class="style-jsuazwotscreenWidthBackground">
                        <div class="style-jsuazwot_bg"></div>
                     </div>
                     <div id="SITE_HEADERcenteredContent" class="style-jsuazwotcenteredContent">
                        <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="SITE_HEADERbg" class="style-jsuazwotbg">
                           <div class="style-jsuazwot_bg-center"></div>
                        </div>
                        <div id="SITE_HEADERinlineContent" class="style-jsuazwotinlineContent">
                           <style id="SITE_HEADER-mesh-styles">
                              #SITE_HEADERinlineContent {
                              height: auto;
                              width: 100%;
                              position: relative;
                              }
                              #SITE_HEADERinlineContent-gridWrapper {
                              display: flex;
                              pointer-events: none;
                              }
                              #SITE_HEADERinlineContent-gridContainer {
                              position: static;
                              display: grid;
                              height: auto;
                              width: 100%;
                              min-height: auto;
                              margin-top: -2878px;
                              grid-template-rows: min-content min-content min-content min-content min-content min-content min-content min-content min-content 1fr;
                              grid-template-columns: 100%;
                              }
                              #comp-k80hiywd {
                              position: relative;
                              margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                              left: 552px;
                              grid-area: 2 / 1 / 3 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k80hj2zi {
                              position: relative;
                              margin: 0px 0px -16px calc((100% - 980px) * 0.5);
                              left: 420px;
                              grid-area: 1 / 1 / 2 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k80hj54k {
                              position: relative;
                              margin: 0px 0px -16px calc((100% - 980px) * 0.5);
                              left: 420px;
                              grid-area: 1 / 1 / 2 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k81ika71 {
                              position: relative;
                              margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                              left: 20px;
                              grid-area: 4 / 1 / 5 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k81ikdm9 {
                              position: relative;
                              margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                              left: 20px;
                              grid-area: 4 / 1 / 5 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k81ikffy {
                              position: relative;
                              margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                              left: 20px;
                              grid-area: 4 / 1 / 5 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k81ikqoz {
                              position: relative;
                              margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                              left: 20px;
                              grid-area: 4 / 1 / 5 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-jlk3esfw {
                              position: relative;
                              margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                              left: 19px;
                              grid-area: 7 / 1 / 8 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-jlk3f0xv {
                              position: relative;
                              margin: 13px 0px -24px calc((100% - 980px) * 0.5);
                              left: 19px;
                              grid-area: 6 / 1 / 7 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-jlk3f720 {
                              position: relative;
                              margin: 0px 0px -11px calc((100% - 980px) * 0.5);
                              left: 19px;
                              grid-area: 6 / 1 / 7 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-jlxyyk1h {
                              position: relative;
                              margin: 19px 0px 20px calc((100% - 980px) * 0.5);
                              left: 0px;
                              grid-area: 9 / 1 / 10 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-jlk40r0r {
                              position: relative;
                              margin: 17px 0px 18px calc((100% - 980px) * 0.5);
                              left: 29px;
                              grid-area: 9 / 1 / 10 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k3vwn1z8 {
                              position: relative;
                              margin: 16px 0px 23px calc((100% - 980px) * 0.5);
                              left: 152px;
                              grid-area: 9 / 1 / 10 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k3vwk1u9 {
                              position: relative;
                              margin: 16px 0px 19px calc((100% - 980px) * 0.5);
                              left: 178px;
                              grid-area: 9 / 1 / 10 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-jljzkd5z {
                              position: relative;
                              margin: 2px 0px 4px calc((100% - 980px) * 0.5);
                              left: 359px;
                              grid-area: 9 / 1 / 10 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-j7q7ipup {
                              position: relative;
                              margin: 0px 0px 2px calc((100% - 980px) * 0.5);
                              left: 1035px;
                              grid-area: 9 / 1 / 10 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #comp-k8051orl {
                              position: relative;
                              margin: 0px 0px 0px calc((100% - 980px) * 0.5);
                              left: 1021px;
                              grid-area: 10 / 1 / 11 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #SITE_HEADERinlineContent-wedge-4 {
                              visibility: hidden;
                              height: 515px;
                              width: 0;
                              grid-area: 1 / 1 / 4 / 2;
                              }
                              #SITE_HEADERinlineContent-wedge-6 {
                              visibility: hidden;
                              height: 2547px;
                              width: 0;
                              grid-area: 1 / 1 / 6 / 2;
                              }
                              #SITE_HEADERinlineContent-wedge-9 {
                              visibility: hidden;
                              height: 2886px;
                              width: 0;
                              grid-area: 1 / 1 / 9 / 2;
                              }
                              #SITE_HEADERcenteredContent {
                              position: relative;
                              }
                              #SITE_HEADERinlineContent-gridContainer > * {
                              pointer-events: auto;
                              }
                              #SITE_HEADERinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                              pointer-events: none;
                              }
                              #SITE_HEADERinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                              pointer-events: auto;
                              }
                              /*CustomCss Css */
                              img#comp-jlxyyk1himgimage {
                                  margin-top: -6px !important;
                              }
                              img#comp-k3vwn1z8imgimage {
                                  margin-top: -3px !important;
                              }
                              a:hover {
                                 text-decoration: none !important;
                              }
                           </style>
                           <div id="SITE_HEADERinlineContent-gridWrapper" data-mesh-internal="true">
                              <div id="SITE_HEADERinlineContent-gridContainer" data-mesh-internal="true">
                                 <div data-packed="false" style="top:;bottom:;left:;right:;width:551px;height:auto;position:;min-height:31px;pointer-events:none" data-min-height="31" class="txtNew" id="comp-k80hiywd">
                                    <h1 class="font_0" style="font-size:18px;"><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Pr&uuml;fung und optionale Korrespondenz mit Ihrem Vermieter durch einen Rechtsanwal</span></span><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">t</span></span></h1>
                                    <h1 class="font_0" style="font-size:18px;"><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Preis Leistungspaket: &euro;180,00</span></span></h1>
                                 </div>
                                 <div data-packed="false" style="top:;bottom:;left:;right:;width:551px;height:auto;position:;min-height:31px;pointer-events:none" data-min-height="31" class="txtNew" id="comp-k80hj2zi">
                                    <h1 class="font_0" style="font-size:18px;"><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Pr&uuml;fung und optionale Korrespondenz mit Ihrem Vermieter durch einen Rechtsanwal</span></span><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">t</span></span></h1>
                                    <h1 class="font_0" style="font-size:18px;"><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Preis Leistungspaket: &euro;180,00</span></span></h1>
                                 </div>
                                 <div data-packed="false" style="top:;bottom:;left:;right:;width:551px;height:auto;position:;min-height:31px;pointer-events:none" data-min-height="31" class="txtNew" id="comp-k80hj54k">
                                    <h1 class="font_0" style="font-size:18px;"><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Pr&uuml;fung und optionale Korrespondenz mit Ihrem Vermieter durch einen Rechtsanwal</span></span><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">t</span></span></h1>
                                    <h1 class="font_0" style="font-size:18px;"><span style="color:#FFFFFF;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Preis Leistungspaket: &euro;180,00</span></span></h1>
                                 </div>
                                 <div id="comp-k81ika71" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="304" data-height="54" style="top:;bottom:;left:;right:;width:304px;height:54px;position:" class="style-k81ika8o" data-state="desktop shouldUseFlex center"><a href="website.html" target="_self" id="comp-k81ika71link" class="g-transparent-a style-k81ika8olink"><span id="comp-k81ika71label" class="style-k81ika8olabel">ANSPRUCH JETZT ÜBERPRÜFEN</span></a></div>
                                 <div id="comp-k81ikdm9" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="304" data-height="54" style="top:;bottom:;left:;right:;width:304px;height:54px;position:" class="style-k81ika8o" data-state="desktop shouldUseFlex center"><a href="website.html" target="_self" id="comp-k81ikdm9link" class="g-transparent-a style-k81ika8olink"><span id="comp-k81ikdm9label" class="style-k81ika8olabel">ANSPRUCH JETZT ÜBERPRÜFEN</span></a></div>
                                 <div id="comp-k81ikffy" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="304" data-height="54" style="top:;bottom:;left:;right:;width:304px;height:54px;position:" class="style-k81ika8o" data-state="desktop shouldUseFlex center"><a href="website.html" target="_self" id="comp-k81ikffylink" class="g-transparent-a style-k81ika8olink"><span id="comp-k81ikffylabel" class="style-k81ika8olabel">ANSPRUCH JETZT ÜBERPRÜFEN</span></a></div>
                                 <div id="comp-k81ikqoz" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="304" data-height="54" style="top:;bottom:;left:;right:;width:304px;height:54px;position:" class="style-k81ika8o" data-state="desktop shouldUseFlex center"><a href="website.html" target="_self" id="comp-k81ikqozlink" class="g-transparent-a style-k81ika8olink"><span id="comp-k81ikqozlabel" class="style-k81ika8olabel">ANSPRUCH JETZT ÜBERPRÜFEN</span></a></div>
                                 <div data-packed="true" style="top:;bottom:;left:;right:;width:805px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-jlk3esfw">
                                    <h1 class="font_0" style="font-size:50px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:50px;"><span style="color:#2F2E2E;"><span style="letter-spacing:0.02em;">Miete im Altbau senken</span></span></span></span></h1>
                                 </div>
                                 <div data-packed="true" style="top:;bottom:;left:;right:;width:805px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-jlk3f0xv">
                                    <h1 class="font_0" style="font-size:50px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:50px;"><span style="color:#2F2E2E;"><span style="letter-spacing:0.02em;">Miete im Altbau senken</span></span></span></span></h1>
                                 </div>
                                 <div data-packed="true" style="top:;bottom:;left:;right:;width:805px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-jlk3f720">
                                    <h1 class="font_0" style="font-size:50px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:50px;"><span style="color:#2F2E2E;"><span style="letter-spacing:0.02em;">Miete im Altbau senken</span></span></span></span></h1>
                                 </div>
                                 <div style="top:;bottom:;left:;right:;width:17px;height:17px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="17" class="ca1" id="comp-jlxyyk1h">
                                    <div style="width:17px;height:17px" id="comp-jlxyyk1hlink" class="ca1link">
                                       <wix-image style="width:17px;height:17px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jlxyyk67&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_eaccebeeeb8c41c0871bf3c087f351bd~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:1218,&quot;height&quot;:1084,&quot;alt&quot;:&quot;Bildschirmfoto 2018-09-11 um 19.05.05.pn&quot;,&quot;name&quot;:&quot;Bildschirmfoto 2018-09-11 um 19.05.05.pn&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-jlxyyk1h&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-jlxyyk1himg" class="ca1img"><img id="comp-jlxyyk1himgimage" style="object-position:50% 50%;width:17px;height:17px;object-fit:cover" alt="Bildschirmfoto 2018-09-11 um 19.05.05.pn" data-type="image" itemProp="image" src="media/header/phone.png"/></wix-image>
                                    </div>
                                 </div>
                                 <div data-packed="true" style="top:;bottom:;left:;right:;width:310px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-jlk40r0r">
                                    <h2 class="font_2" style="font-size:16px;"><span style="font-size:16px;"><span style="color:#2F2E2E;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">01 34 80 30</span></span></span></h2>
                                 </div>
                                 <div style="top:;bottom:;left:;right:;width:17px;height:17px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="17" class="ca1" id="comp-k3vwn1z8">
                                    <div style="width:17px;height:17px" id="comp-k3vwn1z8link" class="ca1link">
                                       <wix-image style="width:17px;height:17px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k3vwn22r&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_2e13b00a67da4435b5e3d9de9bb30179~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:500,&quot;height&quot;:500,&quot;alt&quot;:&quot;kisspng-computer-icons-email-icon-design&quot;,&quot;name&quot;:&quot;kisspng-computer-icons-email-icon-design&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k3vwn1z8&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k3vwn1z8img" class="ca1img"><img id="comp-k3vwn1z8imgimage" style="object-position:50% 50%;width:17px;height:17px;object-fit:cover" alt="kisspng-computer-icons-email-icon-design" data-type="image" itemProp="image" src="media/header/gmail.png"/></wix-image>
                                    </div>
                                 </div>
                                 <div data-packed="true" style="top:;bottom:;left:;right:;width:310px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k3vwk1u9">
                                    <h2 class="font_2" style="font-size:16px;"><span style="font-size:16px;"><span style="color:#2F2E2E;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><object height="0"><a class="auto-generated-link" data-auto-recognition="true" data-content="kontakt@mietheld.at" href="mailto:kontakt@mietheld.at" data-type="mail">kontakt@mietheld.at</a></object></span></span></span></h2>
                                 </div>
                                 <div id="comp-jljzkd5z" class="hidden-during-prewarmup style-jsuazwo8" style="overflow-x:none;top:;bottom:;left:;right:;width:621px;height:50px;position:" data-stretch-buttons-to-menu-width="true" data-same-width-buttons="false" data-num-items="7" data-menuborder-y="0" data-menubtn-border="0" data-ribbon-els="0" data-label-pad="0" data-ribbon-extra="0" data-drophposition="" data-dropalign="center" dir="ltr" data-state="center notMobile">
                                    <nav aria-label="Site" id="comp-jljzkd5znavContainer" class="style-jsuazwo8navContainer">
                                       <ul style="text-align:center" id="comp-jljzkd5zitemsContainer" class="style-jsuazwo8itemsContainer">
                                          <li data-direction="ltr" data-listposition="left" data-data-id="dataItem-ioig82zc" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z0">
                                             <a data-listposition="left" aria-haspopup="false" href="index.php#funktioniert" target="_self" data-keep-roots="true" data-anchor-comp-id="funktioniert" data-anchor="dataItem-jlz9z6t9" id="comp-jljzkd5z0linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z0bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z0label" class="style-jsuazwo8repeaterButtonlabel" onclick="redirectToComponent(this.id)">So funktioniert&#x27;s</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li data-direction="ltr" data-listposition="center" data-data-id="dataItem-ioig9c8t" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z1">
                                             <a data-listposition="center" aria-haspopup="false" href="index.php#fragen-antworten" target="_self" data-keep-roots="true" data-anchor-comp-id="fragen-antworten" data-anchor="dataItem-jlz9zo1v" id="comp-jljzkd5z1linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z1bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z1label" class="style-jsuazwo8repeaterButtonlabel">Fragen</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li data-direction="ltr" data-listposition="center" data-data-id="dataItem-k81kp1nf" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z2">
                                             <a data-listposition="center" aria-haspopup="false" href="index.php#vorteile" target="_self" data-keep-roots="true" data-anchor-comp-id="vorteile" data-anchor="dataItem-k81kjfq7" id="comp-jljzkd5z2linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z2bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z2label" class="style-jsuazwo8repeaterButtonlabel">Vorteile</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li data-direction="ltr" data-listposition="center" data-data-id="dataItem-k81kpqoi" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z3">
                                             <a data-listposition="center" aria-haspopup="false" href="index.php#preise" target="_self" data-keep-roots="true" data-anchor-comp-id="preise" data-anchor="dataItem-k81kk2xw" id="comp-jljzkd5z3linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z3bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z3label" class="style-jsuazwo8repeaterButtonlabel">Preise</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li data-direction="ltr" data-listposition="center" data-data-id="dataItem-k81kq29u" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z4">
                                             <a data-listposition="center" aria-haspopup="false" href="index.php#rechtliche" target="_self" data-keep-roots="true" data-anchor-comp-id="rechtliche" data-anchor="dataItem-k81kkki3" id="comp-jljzkd5z4linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z4bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z4label" class="style-jsuazwo8repeaterButtonlabel">Rechtsgrundlagen</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li data-direction="ltr" data-listposition="center" data-data-id="dataItem-ioig9t5w" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z5">
                                             <a data-listposition="center" aria-haspopup="false" href="index.php#kontaktieren" target="_self" data-keep-roots="true" data-anchor-comp-id="kontaktieren" data-anchor="dataItem-jlza0gef" id="comp-jljzkd5z5linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z5bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z5label" class="style-jsuazwo8repeaterButtonlabel">Kontakt</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <li data-direction="ltr" data-listposition="right" data-data-id="dataItem-k81kx514" class="style-jsuazwo8repeaterButton" data-state="menu  idle link notMobile" id="comp-jljzkd5z6">
                                             <a data-listposition="right" aria-haspopup="false" href="https://mietheldgmbh.formstack.com/forms/unternehmen" target="_blank" data-content="https://mietheldgmbh.formstack.com/forms/unternehmen" data-type="external" rel="noopener" id="comp-jljzkd5z6linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z6bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z6label" class="style-jsuazwo8repeaterButtonlabel">Loslegen!</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li>
                                          <!-- <li data-listposition="right" class="style-jsuazwo8repeaterButton" data-state="menu  idle header notMobile" id="comp-jljzkd5z__more__">
                                             <a data-listposition="right" tabindex="0" aria-haspopup="true" id="comp-jljzkd5z__more__linkElement" class="style-jsuazwo8repeaterButtonlinkElement">
                                                <div class="style-jsuazwo8repeaterButton_gapper">
                                                   <div style="text-align:center" id="comp-jljzkd5z__more__bg" class="style-jsuazwo8repeaterButtonbg">
                                                      <p style="text-align:center" id="comp-jljzkd5z__more__label" class="style-jsuazwo8repeaterButtonlabel">More</p>
                                                   </div>
                                                </div>
                                             </a>
                                          </li> -->
                                       </ul>
                                       <div id="comp-jljzkd5zmoreButton" class="style-jsuazwo8moreButton"></div>
                                       <div style="visibility:hidden" data-drophposition="" data-dropalign="center" id="comp-jljzkd5zdropWrapper" class="style-jsuazwo8dropWrapper">
                                          <ul style="visibility:hidden" id="comp-jljzkd5zmoreContainer" class="style-jsuazwo8moreContainer"></ul>
                                       </div>
                                    </nav>
                                 </div>
                                 <div style="top:;bottom:;left:;right:;width:88px;height:54px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="54" class="ca1" id="comp-j7q7ipup">
                                    <a style="cursor:pointer;width:88px;height:54px" href="https://www.mietheld.at/" target="_self" id="comp-j7q7ipuplink" class="ca1link">
                                       <wix-image style="width:88px;height:54px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j7q7ipvd&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_797a6aaee9a14aedb3214dcfe4118f39~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:852,&quot;height&quot;:538,&quot;alt&quot;:&quot;&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:10,&quot;width&quot;:852,&quot;height&quot;:519},&quot;link&quot;:{&quot;type&quot;:&quot;PageLink&quot;,&quot;id&quot;:&quot;dataItem-jlzacxmk&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;pageId&quot;:{&quot;type&quot;:&quot;Page&quot;,&quot;id&quot;:&quot;c1dmp&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;masterPage&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;Homepage&quot;,&quot;hideTitle&quot;:true,&quot;icon&quot;:&quot;&quot;,&quot;descriptionSEO&quot;:&quot;Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision.&quot;,&quot;metaKeywordsSEO&quot;:&quot;Miete Senken Altbau Richtwert Mietzins Mietsenkung &quot;,&quot;pageTitleSEO&quot;:&quot;Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien&quot;,&quot;pageUriSEO&quot;:&quot;homepage&quot;,&quot;hidePage&quot;:true,&quot;isMobileLandingPage&quot;:false,&quot;underConstruction&quot;:false,&quot;tpaApplicationId&quot;:0,&quot;pageSecurity&quot;:{&quot;requireLogin&quot;:false},&quot;isPopup&quot;:false,&quot;indexable&quot;:true,&quot;isLandingPage&quot;:false,&quot;pageBackgrounds&quot;:{&quot;desktop&quot;:{&quot;custom&quot;:true,&quot;ref&quot;:{&quot;type&quot;:&quot;BackgroundMedia&quot;,&quot;id&quot;:&quot;c1dmp_j7iwimtk_bg&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;color&quot;:&quot;{color_11}&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;fittingType&quot;:&quot;fill&quot;,&quot;scrollType&quot;:&quot;fixed&quot;,&quot;colorOverlay&quot;:&quot;&quot;,&quot;colorOverlayOpacity&quot;:0},&quot;isPreset&quot;:true},&quot;mobile&quot;:{&quot;custom&quot;:true,&quot;ref&quot;:{&quot;type&quot;:&quot;BackgroundMedia&quot;,&quot;id&quot;:&quot;c1dmp_jlzdkfa5_bg&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;color&quot;:&quot;#F1E0B6&quot;,&quot;alignType&quot;:&quot;center&quot;,&quot;fittingType&quot;:&quot;fill&quot;,&quot;scrollType&quot;:&quot;fixed&quot;,&quot;colorOverlay&quot;:&quot;&quot;,&quot;colorOverlayOpacity&quot;:0},&quot;isPreset&quot;:false,&quot;mediaSizing&quot;:&quot;viewport&quot;}},&quot;translationData&quot;:{&quot;uriSEOTranslated&quot;:false},&quot;ogImage&quot;:&quot;&quot;},&quot;target&quot;:&quot;_self&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j7q7ipup&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-j7q7ipupimg" class="ca1img"><img id="comp-j7q7ipupimgimage" style="object-position:50% 50%;width:88px;height:54px;object-fit:cover" alt="" data-type="image" itemProp="image" src="media/header/logo.png"/></wix-image>
                                    </a>
                                 </div>
                                 <div data-packed="true" style="top:;bottom:;left:;right:;width:228px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k8051orl">
                                    <h2 class="font_2" style="font-size:16px;"><span style="font-size:16px;"><span style="color:#2F2E2E;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">Mietheld GmbH</span></span></span></h2>
                                 </div>
                                 <div id="SITE_HEADERinlineContent-wedge-4" data-mesh-internal="true"></div>
                                 <div id="SITE_HEADERinlineContent-wedge-6" data-mesh-internal="true"></div>
                                 <div id="SITE_HEADERinlineContent-wedge-9" data-mesh-internal="true"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </header>
                  <footer style="bottom:auto;left:0;margin-left:0;width:100%;min-width:980px;top:;right:;position:" class="style-k80gtdsy_footer style-k80gtdsy" tabindex="-1" data-site-width="980" data-fixedposition="false" data-isrunninginmobile="false" data-state=" " id="SITE_FOOTER">
                     <div style="left:0;width:100%" id="SITE_FOOTERscreenWidthBackground" class="style-k80gtdsyscreenWidthBackground">
                        <div class="style-k80gtdsy_bg"></div>
                     </div>
                     <div style="width:100%" id="SITE_FOOTERcenteredContent" class="style-k80gtdsycenteredContent">
                        <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="SITE_FOOTERbg" class="style-k80gtdsybg">
                           <div class="style-k80gtdsy_bg-center"></div>
                        </div>
                        <div id="SITE_FOOTERinlineContent" class="style-k80gtdsyinlineContent">
                           <style id="SITE_FOOTER-mesh-styles">
                              #SITE_FOOTERinlineContent {
                              height: auto;
                              width: 100%;
                              position: relative;
                              }
                              #SITE_FOOTERinlineContent-gridWrapper {
                              pointer-events: none;
                              }
                              #SITE_FOOTERinlineContent-gridContainer {
                              position: static;
                              display: grid;
                              height: auto;
                              width: 100%;
                              min-height: auto;
                              grid-template-rows: 1fr;
                              grid-template-columns: 100%;
                              }
                              #comp-j7f54j7w {
                              position: relative;
                              margin: 0px 0px 0px calc((100% - 980px) * 0.5);
                              left: 0px;
                              grid-area: 1 / 1 / 2 / 2;
                              justify-self: start;
                              align-self: start;
                              }
                              #SITE_FOOTERcenteredContent {
                              position: relative;
                              }
                              #SITE_FOOTERinlineContent-gridContainer > * {
                              pointer-events: auto;
                              }
                              #SITE_FOOTERinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                              pointer-events: none;
                              }
                              #SITE_FOOTERinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                              pointer-events: auto;
                              }
                              a#comp-k803vqu5link {
    text-decoration: none;
}
                           </style>
                           <div id="SITE_FOOTERinlineContent-gridWrapper" data-mesh-internal="true">
                              <div id="SITE_FOOTERinlineContent-gridContainer" data-mesh-internal="true">
                                 <div data-packed="false" style="top:;bottom:;left:;right:;width:980px;height:auto;position:;min-height:133px;pointer-events:none" data-min-height="133" class="txtNew" id="comp-j7f54j7w">
                                    <p class="font_7" style="font-size:14px; line-height:1.5em; text-align:center;">&nbsp;</p>
                                    <p class="font_7" style="font-size:14px; line-height:1.5em; text-align:center;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:14px;"><span style="color:rgb(0, 0, 0);">Disclaimer: Die Mietheld GmbH leistet keine Rechtsauskunft, Rechtsberatung oder sonstige rechtliche Dienstleistungen, sondern organisiert die Finanzierung spezialisierter Rechtsanw&auml;lte und Juristen. S&auml;mtliche auf dieser Webseite bereitgestellten Informationen stammen&nbsp;von externen Rechtsanw&auml;lten oder Zeitungsartikeln, es handelt sich um eine unverbindliche Informationsleistung. Die Mietheld GmbH weist ausdr&uuml;cklich darauf hin, dass f&uuml;r rechtliche Ausk&uuml;nfte stets ein Rechtsanwalt aufzusuchen ist. Es besteht freie Anwaltswahl.</span></span></span><br />
                                       &nbsp;
                                    </p>
                                    <p class="font_7" style="font-size:14px; line-height:1.5em; text-align:center;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:14px;"><span style="color:rgb(0, 0, 0);"><span style="text-decoration:underline;"><a href="../impressum" target="_self">Impressum</a></span>&nbsp;</span></span></span></p>
                                    <p class="font_7" style="font-size:14px; line-height:1.5em; text-align:center;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:14px;"><span style="color:rgb(0, 0, 0);"><span class="wixGuard">​</span></span></span></span></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </footer>
                  <main tabindex="-1" data-is-mobile="false" data-is-mesh="true" data-site-width="980" style="left:0;margin-left:0;width:100%;min-width:980px;top:0;bottom:;right:;position:" class="pc1" data-state="" id="PAGES_CONTAINER">
                     <div style="left:0" id="PAGES_CONTAINERscreenWidthBackground" class="pc1screenWidthBackground"></div>
                     <div style="position:relative" id="PAGES_CONTAINERcenteredContent" class="pc1centeredContent">
                        <div style="display:none" id="PAGES_CONTAINERbg" class="pc1bg"></div>
                        <div style="position:relative" id="PAGES_CONTAINERinlineContent" class="pc1inlineContent">
                           <div style="width:100%">
                              <div data-ismobile="false" data-is-mesh-layout="true" style="height:100%;left:0;position:relative;top:;bottom:;right:" class="style-k81fvw8t" id="c1dmp">
                                 <div style="margin-left:calc((100% - 980px) / 2);width:980px" id="c1dmpbg" class="style-k81fvw8tbg"></div>
                                 <div class="style-k81fvw8tinlineContent" id="c1dmpinlineContent">
                                    <style id="c1dmp-mesh-styles">
                                       #c1dmpinlineContent {
                                       height: auto;
                                       width: 100%;
                                       position: relative;
                                       }
                                       #c1dmpinlineContent-gridWrapper {
                                       pointer-events: none;
                                       }
                                       #c1dmpinlineContent-gridContainer {
                                       position: static;
                                       display: grid;
                                       height: auto;
                                       width: 100%;
                                       min-height: 5336px !important;
                                       grid-template-rows: min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content min-content 1fr;
                                       grid-template-columns: 100%;
                                       padding-bottom: 0px;
                                       box-sizing: border-box;
                                       }
                                       #comp-j76jsqzm {
                                       position: relative;
                                       margin: 5px 0px 8px calc((100% - 980px) * 0.5);
                                       left: 0px;
                                       grid-area: 1 / 1 / 2 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k7xul5f2 {
                                       position: relative;
                                       margin: 0px 0px -34px calc((100% - 980px) * 0.5);
                                       left: 0px;
                                       grid-area: 2 / 1 / 3 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-jlk34a2s {
                                       position: relative;
                                       margin: 18px 0px 0 calc((100% - 980px) * 0.5);
                                       left: -182px;
                                       grid-area: 3 / 1 / 9 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k803vqu5 {
                                       position: relative;
                                       margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                                       left: 0px;
                                       grid-area: 3 / 1 / 4 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k80ht2e6 {
                                       position: relative;
                                       margin: 0px 0px 9px calc((100% - 980px) * 0.5);
                                       left: 451px;
                                       grid-area: 6 / 1 / 7 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81ilvlg {
                                       position: relative;
                                       margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                                       left: 567px;
                                       grid-area: 7 / 1 / 8 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81is4it {
                                       position: relative;
                                       margin: 0px 0px 5px calc((100% - 980px) * 0.5);
                                       left: 653px;
                                       grid-area: 5 / 1 / 6 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-jlk2d2q1 {
                                       position: relative;
                                       margin: 0px 0px 26px calc((100% - 980px) * 0.5);
                                       left: -182px;
                                       grid-area: 9 / 1 / 10 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #funktioniert {
                                       position: relative;
                                       margin: 0px 0 19px 0;
                                       left: 0;
                                       grid-area: 10 / 1 / 11 / 2;
                                       justify-self: stretch;
                                       align-self: start;
                                       }
                                       #comp-k804gu0f {
                                       position: relative;
                                       margin: 0px 0px -140px calc((100% - 980px) * 0.5);
                                       left: -182px;
                                       grid-area: 11 / 1 / 18 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k7z6a29p {
                                       position: relative;
                                       margin: 0px 0px -11px calc((100% - 980px) * 0.5);
                                       left: 776px;
                                       grid-area: 11 / 1 / 12 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k7z5zmb2 {
                                       position: relative;
                                       margin: 0px 0px 14px calc((100% - 980px) * 0.5);
                                       left: 773px;
                                       grid-area: 13 / 1 / 14 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k7z6ceu8 {
                                       position: relative;
                                       margin: 0px 0px 0 calc((100% - 980px) * 0.5);
                                       left: 780px;
                                       grid-area: 14 / 1 / 15 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k7z6batq {
                                       position: relative;
                                       margin: 0px 0px 0 calc((100% - 980px) * 0.5);
                                       left: 773px;
                                       grid-area: 15 / 1 / 16 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k803j3bm {
                                       position: relative;
                                       margin: 0px 0px 41px calc((100% - 980px) * 0.5);
                                       left: 773px;
                                       grid-area: 16 / 1 / 17 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-jlk4tftv {
                                       position: relative;
                                       margin: 0px 0px -26px calc((100% - 980px) * 0.5);
                                       left: 3px;
                                       grid-area: 12 / 1 / 13 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k7z9ysoa {
                                       position: relative;
                                       /* margin: 0px 0px 0 calc((100% - 980px) * 0.5); */
                                       margin: 15px 0px 0 calc((100% - 980px) * 0.5);
                                       left: 773px;
                                       grid-area: 19 / 1 / 20 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k80e0a87 {
                                       position: relative;
                                       margin: 0px 0px -149px calc((100% - 980px) * 0.5);
                                       left: 999px;
                                       grid-area: 11 / 1 / 19 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81fpsgs {
                                       position: relative;
                                       margin: 0px 0px 36px calc((100% - 980px) * 0.5);
                                       left: -349px;
                                       grid-area: 20 / 1 / 21 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81fqw4u {
                                       position: relative;
                                       margin: 16px 0px 52px calc((100% - 980px) * 0.5);
                                       left: 10px;
                                       grid-area: 20 / 1 / 21 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81fw1cc {
                                       position: relative;
                                       margin: 22px 0px 56px calc((100% - 980px) * 0.5);
                                       left: 231px;
                                       grid-area: 20 / 1 / 21 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81fwtfu {
                                       position: relative;
                                       margin: 20px 0px 56px calc((100% - 980px) * 0.5);
                                       left: 660px;
                                       grid-area: 20 / 1 / 21 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #vorteile {
                                       position: relative;
                                       margin: 0px 0 10px 0;
                                       left: 0;
                                       grid-area: 21 / 1 / 22 / 2;
                                       justify-self: stretch;
                                       align-self: start;
                                       }
                                       #comp-k2ysqosy {
                                       position: relative;
                                       margin: 0px 0px 44px calc((100% - 980px) * 0.5);
                                       left: -194px;
                                       grid-area: 22 / 1 / 23 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #preise {
                                       position: relative;
                                       margin: 0px 0 10px 0;
                                       left: 0;
                                       grid-area: 23 / 1 / 24 / 2;
                                       justify-self: stretch;
                                       align-self: start;
                                       }
                                       #comp-k81g58cb {
                                       position: relative;
                                       margin: 0px 0px 15px calc((100% - 980px) * 0.5);
                                       left: -182px;
                                       grid-area: 24 / 1 / 25 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-k81hj340 {
                                       position: relative;
                                       margin: 0px 0px 42px calc((100% - 980px) * 0.5);
                                       left: 387px;
                                       grid-area: 26 / 1 / 27 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #rechtliche {
                                       position: relative;
                                       margin: 0px 0 0 0;
                                       left: 0;
                                       grid-area: 25 / 1 / 26 / 2;
                                       justify-self: stretch;
                                       align-self: start;
                                       }
                                       #comp-k80c4ft0 {
                                       position: relative;
                                       margin: 0px 0px 36px calc((100% - 980px) * 0.5);
                                       left: -155px;
                                       grid-area: 27 / 1 / 28 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #fragen-antworten {
                                       position: relative;
                                       margin: 0px 0 15px 0;
                                       left: 0;
                                       grid-area: 28 / 1 / 29 / 2;
                                       justify-self: stretch;
                                       align-self: start;
                                       }
                                       #comp-jlkzb5kx {
                                       position: relative;
                                       margin: 5px 0px 13px calc((100% - 980px) * 0.5);
                                       left: 0px;
                                       grid-area: 29 / 1 / 33 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #comp-jlz8n22d {
                                       position: relative;
                                       margin: 0px 0px 10px calc((100% - 980px) * 0.5);
                                       left: 271px;
                                       grid-area: 29 / 1 / 30 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #kontaktieren {
                                       position: relative;
                                       margin: 0px 0 25px 0;
                                       left: 0;
                                       grid-area: 31 / 1 / 32 / 2;
                                       justify-self: stretch;
                                       align-self: start;
                                       }
                                       #comp-jlnyte8r {
                                       position: relative;
                                       margin: 0px 0px 0 calc((100% - 980px) * 0.5);
                                       left: -184px;
                                       grid-area: 33 / 1 / 34 / 2;
                                       justify-self: start;
                                       align-self: start;
                                       }
                                       #c1dmpinlineContent-wedge-5 {
                                       visibility: hidden;
                                       height: 145px;
                                       width: 0;
                                       grid-area: 3 / 1 / 5 / 2;
                                       }
                                       #c1dmpinlineContent-wedge-31 {
                                       visibility: hidden;
                                       height: 394px;
                                       width: 0;
                                       grid-area: 29 / 1 / 31 / 2;
                                       }
                                       #c1dmpcenteredContent {
                                       position: relative;
                                       }
                                       #c1dmpinlineContent-gridContainer > * {
                                       pointer-events: auto;
                                       }
                                       #c1dmpinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                       pointer-events: none;
                                       }
                                       #c1dmpinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                       pointer-events: auto;
                                       }
                                    </style>
                                    <div id="c1dmpinlineContent-gridWrapper" data-mesh-internal="true">
                                       <div id="c1dmpinlineContent-gridContainer" data-mesh-internal="true">
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:982px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-j76jsqzm">
                                             <h1 class="font_0" style="font-size:40px; line-height:1.1em;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:40px;"><span style="color:#000000;">Schlie&szlig;ung wegen Coronavirus?</span></span></span></span></h1>
                                             <h1 class="font_0" style="font-size:40px; line-height:1.1em;"><span style="letter-spacing:-0.05em;"><span style="font-size:40px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:#000000;"><span style="color:#ffb25a;font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">Wir helfen Ihrem Unternehmen</span>, keine Miete zu bezahlen.</span></span></span></span></h1>
                                          </div>
                                          <div data-packed="false" style="top:;bottom:;left:;right:;width:883px;height:auto;position:;min-height:31px;pointer-events:none" data-min-height="31" class="txtNew" id="comp-k7xul5f2">
                                             <h1 class="font_0" style="font-size:18px; line-height:1.3em;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:#2F2E2E;">&raquo;Basierend auf den geltenden Regelungen ist laut Auskunft der Beh&ouml;rden&nbsp;davon auszugehen, dass {...}&nbsp;auch der g&auml;nzliche Mietzinsentfall f&uuml;r die Dauer der Beschr&auml;nkung durchsetzbar ist.&laquo; <span style="font-weight:bold;">Wirtschaftskammer &Ouml;sterreich&nbsp;(2020)</span></span></span></span></span></h1>
                                             <h1 class="font_0" style="font-size:18px; line-height:1.3em;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:#2F2E2E;"><span class="wixGuard">​</span></span></span></span></span></h1>
                                             <h1 class="font_0" style="font-size:18px; line-height:1.3em;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:#2F2E2E;"><span class="wixGuard">​</span></span></span></span></span></h1>
                                          </div>
                                          <div style="top:;bottom:;left:;right:;width:1344px;height:551px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="551" class="style-k80s6h1b" id="comp-jlk34a2s">
                                             <div style="width:1344px;height:551px" id="comp-jlk34a2slink" class="style-k80s6h1blink">
                                                <wix-image style="width:1344px;height:551px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jlk34a8e&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_5a3ccff2f63d4c9b96213e48bbac56a3~mv2.jpg&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:3000,&quot;height&quot;:2002,&quot;alt&quot;:&quot;Smiling lawyer portrait.jpg&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:27,&quot;width&quot;:3000,&quot;height&quot;:1230},&quot;name&quot;:&quot;Smiling lawyer portrait.jpg&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-jlk34a2s&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-jlk34a2simg" class="style-k80s6h1bimg"><img id="comp-jlk34a2simgimage" style="object-position:50% 50%;width:1344px;height:551px;object-fit:cover" alt="Smiling lawyer portrait.jpg" data-type="image" itemProp="image" src="media/banner/Smiling_lawyer_portrait.png"/></wix-image>
                                             </div>
                                          </div>
                                          <div id="comp-k803vqu5" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="304" data-height="46" style="top:;bottom:;left:;right:;width:304px;height:46px;position:" class="style-k81iwzv7" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/unternehmen" target="_blank" data-content="https://mietheldgmbh.formstack.com/forms/unternehmen" data-type="external" rel="noopener" id="comp-k803vqu5link" class="g-transparent-a style-k81iwzv7link"><span id="comp-k803vqu5label" class="style-k81iwzv7label">ANSPRUCH JETZT ÜBERPRÜFEN</span></a></div>
                                          <div data-packed="false" style="top:;bottom:;left:;right:;width:529px;height:auto;position:;min-height:31px;pointer-events:none" data-min-height="31" class="txtNew" id="comp-k80ht2e6">
                                             <h1 class="font_0" style="font-size:30px; text-align:center;"><span style="font-size:30px;"><span style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><span style="color:#F1E0B6;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">INDIVIDUELLE FALLPR&Uuml;FUNG</span></span></span></span></span></h1>
                                             <h1 class="font_0" style="font-size:30px; text-align:center;"><span style="font-size:30px;"><span style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><span style="color:#F1E0B6;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">&amp; KORRESPONDENZ MIT VERMIETER</span></span></span></span></span></h1>
                                             <h1 class="font_0" style="font-size:25px; text-align:center;"><span style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><span style="font-size:20px;"><span style="color:#F1E0B6;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;">ausgef&uuml;hrt von einem Rechtsanwalt</span></span></span></span></span><span style="text-shadow:rgba(0, 0, 0, 0.4) 0px 4px 5px;"><span style="font-size:20px;"><span style="color:#F1E0B6;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;">&nbsp;</span></span></span></span></span></h1>
                                          </div>
                                          <div id="comp-k81ilvlg" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="310" data-height="46" style="top:;bottom:;left:;right:;width:310px;height:46px;position:" class="style-k81kzflh" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/unternehmen" target="_blank" data-content="https://mietheldgmbh.formstack.com/forms/unternehmen" data-type="external" rel="noopener" id="comp-k81ilvlglink" class="g-transparent-a style-k81kzflhlink"><span id="comp-k81ilvlglabel" class="style-k81kzflhlabel">MIETHELD JETZT BEAUFTRAGEN</span></a></div>
                                          <div style="top:;bottom:;left:;right:;width:123px;height:128px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="128" class="style-k80s6h1b" id="comp-k81is4it">
                                             <div style="width:123px;height:128px" id="comp-k81is4itlink" class="style-k80s6h1blink">
                                                <wix-image style="width:123px;height:128px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k81is4jr&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_f769d35cdcb34b939f8ab2a1b14a4b1a~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:704,&quot;height&quot;:858,&quot;alt&quot;:&quot;Bildschirmfoto 2018-09-02 um 11.15.48.pn&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:0,&quot;width&quot;:704,&quot;height&quot;:780,&quot;svgId&quot;:&quot;909695c1e003409ba70b5561666c7c4d.svg&quot;},&quot;name&quot;:&quot;Bildschirmfoto 2018-09-02 um 11.15.48.pn&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k81is4it&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="true" data-is-svg-mask="true" id="comp-k81is4itimg" class="style-k80s6h1bimg">
                                                   <svg id="svgcomp-k81is4itimg" version="1.1" role="img" aria-label="Bildschirmfoto 2018-09-02 um 11.15.48.pn" width="123" height="128" viewBox="0 0 123 128">
                                                      <defs>
                                                         <style>#mask-comp-k81is4itimg-svg * {fill: #fff; stroke: #fff; stroke-width: 0;}</style>
                                                         <mask id="mask-comp-k81is4itimg">
                                                            <use id="mask-comp-k81is4itimg-svg-use" xlink:href="#mask-comp-k81is4itimg-svg" width="100%" height="100%" x="0" y="0"></use>
                                                         </mask>
                                                         <svg id="mask-comp-k81is4itimg-svg" preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                                            <g>
                                                               <path d="M180 20v160H20V20h160z"/>
                                                            </g>
                                                         </svg>
                                                      </defs>
                                                      <image width="123" height="128" x="0" y="0" transform="" preserveAspectRatio="xMidYMid slice" id="comp-k81is4itimgimage" data-type="image" xlink:href="media/others/small-right.png" mask="url(#mask-comp-k81is4itimg)" data-svg-mask="mask-comp-k81is4itimg-svg"></image>
                                                   </svg>
                                                </wix-image>
                                             </div>
                                          </div>
                                          <div style="top:;bottom:;left:;right:;position:" class="style-k7xqzco9" id="comp-jlk2d2q1">
                                             <div id="comp-jlk2d2q1bg" class="style-k7xqzco9bg"></div>
                                             <div class="style-k7xqzco9inlineContent" id="comp-jlk2d2q1inlineContent">
                                                <style id="comp-jlk2d2q1-mesh-styles">
                                                   #comp-jlk2d2q1inlineContent {
                                                   height: auto;
                                                   width: 1344px;
                                                   position: relative;
                                                   }
                                                   #comp-jlk2d2q1inlineContent-gridWrapper {
                                                   pointer-events: none;
                                                   }
                                                   #comp-jlk2d2q1inlineContent-gridContainer {
                                                   position: static;
                                                   display: grid;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: auto;
                                                   grid-template-rows: 1fr;
                                                   grid-template-columns: 100%;
                                                   }
                                                   #comp-jlk4pbav {
                                                   position: relative;
                                                   margin: 20px 0px 19px 0;
                                                   left: 15px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jnp4kr9t {
                                                   position: relative;
                                                   margin: 17px 0px 17px 0;
                                                   left: 182px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jljz6ykx {
                                                   position: relative;
                                                   margin: 12px 0px 12px 0;
                                                   left: 310px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k3yg2l2w {
                                                   position: relative;
                                                   margin: 0px 0px 6px 0;
                                                   left: 1214px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlk2d2q1centeredContent {
                                                   position: relative;
                                                   }
                                                   #comp-jlk2d2q1inlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-jlk2d2q1inlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-jlk2d2q1inlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-jlk2d2q1inlineContent-gridWrapper" data-mesh-internal="true">
                                                   <div id="comp-jlk2d2q1inlineContent-gridContainer" data-mesh-internal="true">
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:124px;height:auto;position:;min-height:31px;pointer-events:none" data-min-height="31" class="txtNew" id="comp-jlk4pbav">
                                                         <h1 class="font_0" style="font-size:20px;"><span style="color:rgb(47, 46, 46); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f, wf_736a916d09a94cd392744ed6a, orig_ubuntu;">Bekannt aus:&nbsp;</span></h1>
                                                      </div>
                                                      <div style="top:;bottom:;left:;right:;width:85px;height:36px;position:;transform:translateZ(0)" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="36" class="ca1" id="comp-jnp4kr9t">
                                                         <div style="width:85px;height:36px" id="comp-jnp4kr9tlink" class="ca1link">
                                                            <wix-image style="width:85px;height:36px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jnp4krd5&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_5c54646e5b974609a2c31e265769caab~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:709,&quot;height&quot;:303,&quot;alt&quot;:&quot;709px-ORF_logo.svg.png&quot;,&quot;name&quot;:&quot;709px-ORF_logo.svg.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-jnp4kr9t&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-jnp4kr9timg" class="ca1img">
                                                               <svg id="svgkennedy-comp-jnp4kr9timg" version="1.1" style="width:0;height:0;left:0;top:0;overflow:hidden;position:absolute">
                                                                  <defs>
                                                                     <filter id="kennedy-comp-jnp4kr9timg" color-interpolation-filters="sRGB" >
                                                                        <feComponentTransfer result="srcRGB"/>
                                                                        <feColorMatrix type="saturate" values="0"  />
                                                                        <feComponentTransfer>
                                                                           <feFuncR type="linear" slope="1.1" intercept="-0.05"/>
                                                                           <feFuncG type="linear" slope="1.1" intercept="-0.05"/>
                                                                           <feFuncB type="linear" slope="1.1" intercept="-0.05"/>
                                                                        </feComponentTransfer>
                                                                        <feComponentTransfer >
                                                                           <feFuncR type="linear" slope="0.9" />
                                                                           <feFuncG type="linear" slope="0.9" />
                                                                           <feFuncB type="linear" slope="0.9" />
                                                                        </feComponentTransfer>
                                                                        <feComponentTransfer/>
                                                                     </filter>
                                                                  </defs>
                                                               </svg>
                                                               <img id="comp-jnp4kr9timgimage" style="-webkit-filter:url(#kennedy-comp-jnp4kr9timg);filter:url(#kennedy-comp-jnp4kr9timg);outline:1px solid transparent;object-position:50% 50%;width:85px;height:36px;object-fit:cover" alt="709px-ORF_logo.svg.png" data-type="image" itemProp="image" src="media/company-logos/ORF_logo_svg.png"/>
                                                            </wix-image>
                                                         </div>
                                                      </div>
                                                      <div style="pointer-events:none;top:;bottom:;left:;right:;position:" class="s_BIwzIGroupSkin" id="comp-jljz6ykx">
                                                         <div style="pointer-events:none" class="s_BIwzIGroupSkininlineContent" id="comp-jljz6ykxinlineContent">
                                                            <style id="comp-jljz6ykx-mesh-styles">
                                                               #comp-jljz6ykxinlineContent {
                                                               height: auto;
                                                               width: 862px;
                                                               position: relative;
                                                               }
                                                               #comp-jljz6ykxinlineContent-gridWrapper {
                                                               pointer-events: none;
                                                               }
                                                               #comp-jljz6ykxinlineContent-gridContainer {
                                                               position: static;
                                                               display: grid;
                                                               height: auto;
                                                               width: 100%;
                                                               min-height: auto;
                                                               grid-template-rows: 1fr;
                                                               grid-template-columns: 100%;
                                                               }
                                                               #comp-j76maixh {
                                                               position: relative;
                                                               margin: 8px 0px 8px 0;
                                                               left: 0px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-j77jv7xm {
                                                               position: relative;
                                                               margin: 13px 0px 12px 0;
                                                               left: 201px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-j76lncaq {
                                                               position: relative;
                                                               margin: 6px 0px 7px 0;
                                                               left: 427px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-j76lhpzc {
                                                               position: relative;
                                                               margin: 8px 0px 7px 0;
                                                               left: 585px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-j76kzrio {
                                                               position: relative;
                                                               margin: 0px 0px 0px 0;
                                                               left: 762px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-jljz6ykxcenteredContent {
                                                               position: relative;
                                                               }
                                                               #comp-jljz6ykxinlineContent-gridContainer > * {
                                                               pointer-events: auto;
                                                               }
                                                               #comp-jljz6ykxinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                               pointer-events: none;
                                                               }
                                                               #comp-jljz6ykxinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                               pointer-events: auto;
                                                               }
                                                            </style>
                                                            <div id="comp-jljz6ykxinlineContent-gridWrapper" data-mesh-internal="true">
                                                               <div id="comp-jljz6ykxinlineContent-gridContainer" data-mesh-internal="true">
                                                                  <div style="top:;bottom:;left:;right:;width:168px;height:30px;position:;transform:translateZ(0)" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="30" class="ca1" id="comp-j76maixh">
                                                                     <div style="width:168px;height:30px" id="comp-j76maixhlink" class="ca1link">
                                                                        <wix-image style="width:168px;height:30px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j76maj3y&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_5d79ba8fcb6940118abef942f308cc62~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:3240,&quot;height&quot;:616,&quot;alt&quot;:&quot;&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:19,&quot;width&quot;:3240,&quot;height&quot;:578},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j76maixh&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-j76maixhimg" class="ca1img">
                                                                           <svg id="svgdarken-comp-j76maixhimg" version="1.1" style="width:0;height:0;left:0;top:0;overflow:hidden;position:absolute">
                                                                              <defs>
                                                                                 <filter id="darken-comp-j76maixhimg" color-interpolation-filters="sRGB" >
                                                                                    <feComponentTransfer result="srcRGB"/>
                                                                                    <feComponentTransfer result="brightness">
                                                                                       <feFuncR type="linear" slope="0.4" />
                                                                                       <feFuncG type="linear" slope="0.4" />
                                                                                       <feFuncB type="linear" slope="0.4" />
                                                                                    </feComponentTransfer>
                                                                                    <feBlend mode="darken" in="brightness" in2="SourceGraphic" />
                                                                                    <feComponentTransfer/>
                                                                                 </filter>
                                                                              </defs>
                                                                           </svg>
                                                                           <img id="comp-j76maixhimgimage" style="-webkit-filter:url(#darken-comp-j76maixhimg);filter:url(#darken-comp-j76maixhimg);outline:1px solid transparent;object-position:50% 50%;width:168px;height:30px;object-fit:cover" alt="" data-type="image" itemProp="image" src="media/company-logos/blatt.png"/>
                                                                        </wix-image>
                                                                     </div>
                                                                  </div>
                                                                  <div style="top:;bottom:;left:;right:;width:183px;height:21px;position:;transform:translateZ(0)" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="21" class="ca1" id="comp-j77jv7xm">
                                                                     <a style="cursor:pointer;width:183px;height:21px" href="http://www.wienerzeitung.at/nachrichten/wien/stadtpolitik/870444_Das-ewige.html" target="_blank" data-content="http://www.wienerzeitung.at/nachrichten/wien/stadtpolitik/870444_Das-ewige.html" data-type="external" rel="noopener" id="comp-j77jv7xmlink" class="ca1link">
                                                                        <wix-image style="width:183px;height:21px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j77jv81j&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_2c961a3b8b384f46af3cb1c753f9c4d8~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:3360,&quot;height&quot;:426,&quot;alt&quot;:&quot;&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:19,&quot;width&quot;:3360,&quot;height&quot;:389},&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-j77k00te&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;http://www.wienerzeitung.at/nachrichten/wien/stadtpolitik/870444_Das-ewige.html&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j77jv7xm&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-j77jv7xmimg" class="ca1img">
                                                                           <svg id="svgdarken-comp-j77jv7xmimg" version="1.1" style="width:0;height:0;left:0;top:0;overflow:hidden;position:absolute">
                                                                              <defs>
                                                                                 <filter id="darken-comp-j77jv7xmimg" color-interpolation-filters="sRGB" >
                                                                                    <feComponentTransfer result="srcRGB"/>
                                                                                    <feComponentTransfer result="brightness">
                                                                                       <feFuncR type="linear" slope="0.4" />
                                                                                       <feFuncG type="linear" slope="0.4" />
                                                                                       <feFuncB type="linear" slope="0.4" />
                                                                                    </feComponentTransfer>
                                                                                    <feBlend mode="darken" in="brightness" in2="SourceGraphic" />
                                                                                    <feComponentTransfer/>
                                                                                 </filter>
                                                                              </defs>
                                                                           </svg>
                                                                           <img id="comp-j77jv7xmimgimage" style="-webkit-filter:url(#darken-comp-j77jv7xmimg);filter:url(#darken-comp-j77jv7xmimg);outline:1px solid transparent;object-position:50% 50%;width:183px;height:21px;object-fit:cover" alt="" data-type="image" itemProp="image" src="media/company-logos/wiz.png"/>
                                                                        </wix-image>
                                                                     </a>
                                                                  </div>
                                                                  <div style="top:;bottom:;left:;right:;width:111px;height:33px;position:;transform:translateZ(0)" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="33" class="ca1" id="comp-j76lncaq">
                                                                     <a style="cursor:pointer;width:111px;height:33px" href="https://www.immobilien-magazin.at/artikel/firmen_kontra_vermieter/2015.4144/" target="_blank" data-content="https://www.immobilien-magazin.at/artikel/firmen_kontra_vermieter/2015.4144/" data-type="external" rel="noopener" id="comp-j76lncaqlink" class="ca1link">
                                                                        <wix-image style="width:111px;height:33px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j76lnceb&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_4278102930d54de6a5e144b6a15d9322~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:602,&quot;height&quot;:182,&quot;alt&quot;:&quot;&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:0,&quot;width&quot;:602,&quot;height&quot;:177},&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-j77f3zuv&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://www.immobilien-magazin.at/artikel/firmen_kontra_vermieter/2015.4144/&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j76lncaq&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-j76lncaqimg" class="ca1img">
                                                                           <svg id="svgdarken-comp-j76lncaqimg" version="1.1" style="width:0;height:0;left:0;top:0;overflow:hidden;position:absolute">
                                                                              <defs>
                                                                                 <filter id="darken-comp-j76lncaqimg" color-interpolation-filters="sRGB" >
                                                                                    <feComponentTransfer result="srcRGB"/>
                                                                                    <feComponentTransfer result="brightness">
                                                                                       <feFuncR type="linear" slope="0.4" />
                                                                                       <feFuncG type="linear" slope="0.4" />
                                                                                       <feFuncB type="linear" slope="0.4" />
                                                                                    </feComponentTransfer>
                                                                                    <feBlend mode="darken" in="brightness" in2="SourceGraphic" />
                                                                                    <feComponentTransfer/>
                                                                                 </filter>
                                                                              </defs>
                                                                           </svg>
                                                                           <img id="comp-j76lncaqimgimage" style="-webkit-filter:url(#darken-comp-j76lncaqimg);filter:url(#darken-comp-j76lncaqimg);outline:1px solid transparent;object-position:50% 50%;width:111px;height:33px;object-fit:cover" alt="" data-type="image" itemProp="image" src="media/company-logos/immobilien.png"/>
                                                                        </wix-image>
                                                                     </a>
                                                                  </div>
                                                                  <div style="top:;bottom:;left:;right:;width:138px;height:31px;position:;transform:translateZ(0)" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="31" class="ca1" id="comp-j76lhpzc">
                                                                     <a style="cursor:pointer;width:138px;height:31px" href="http://derstandard.at/2000022108799/Wachstumsbranche-Altbau-Mietencheck" target="_blank" data-content="http://derstandard.at/2000022108799/Wachstumsbranche-Altbau-Mietencheck" data-type="external" rel="noopener" id="comp-j76lhpzclink" class="ca1link">
                                                                        <wix-image style="width:138px;height:31px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j76lhq6o&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_3ccf1bbff61e42ddbf65262a7d0aa124~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:1320,&quot;height&quot;:286,&quot;alt&quot;:&quot;&quot;,&quot;crop&quot;:{&quot;x&quot;:28,&quot;y&quot;:0,&quot;width&quot;:1274,&quot;height&quot;:286},&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-j77f3djo&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;http://derstandard.at/2000022108799/Wachstumsbranche-Altbau-Mietencheck&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j76lhpzc&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-j76lhpzcimg" class="ca1img">
                                                                           <svg id="svgdarken-comp-j76lhpzcimg" version="1.1" style="width:0;height:0;left:0;top:0;overflow:hidden;position:absolute">
                                                                              <defs>
                                                                                 <filter id="darken-comp-j76lhpzcimg" color-interpolation-filters="sRGB" >
                                                                                    <feComponentTransfer result="srcRGB"/>
                                                                                    <feComponentTransfer result="brightness">
                                                                                       <feFuncR type="linear" slope="0.4" />
                                                                                       <feFuncG type="linear" slope="0.4" />
                                                                                       <feFuncB type="linear" slope="0.4" />
                                                                                    </feComponentTransfer>
                                                                                    <feBlend mode="darken" in="brightness" in2="SourceGraphic" />
                                                                                    <feComponentTransfer/>
                                                                                 </filter>
                                                                              </defs>
                                                                           </svg>
                                                                           <img id="comp-j76lhpzcimgimage" style="-webkit-filter:url(#darken-comp-j76lhpzcimg);filter:url(#darken-comp-j76lhpzcimg);outline:1px solid transparent;object-position:50% 50%;width:138px;height:31px;object-fit:cover" alt="" data-type="image" itemProp="image" src="media/company-logos/desr-new.png"/>
                                                                        </wix-image>
                                                                     </a>
                                                                  </div>
                                                                  <div style="top:;bottom:;left:;right:;width:100px;height:46px;position:;transform:translateZ(0)" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="46" class="ca1" id="comp-j76kzrio">
                                                                     <a style="cursor:pointer;width:100px;height:46px" href="https://www.profil.at/wirtschaft/mietrecht-von-fuechsen-checkern-helden-5846173" target="_blank" data-content="https://www.profil.at/wirtschaft/mietrecht-von-fuechsen-checkern-helden-5846173" data-type="external" rel="noopener" id="comp-j76kzriolink" class="ca1link">
                                                                        <wix-image style="width:100px;height:46px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-j76kzrn6&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_7cc59e780931417c82ee5bf4c86af280~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:2330,&quot;height&quot;:1076,&quot;alt&quot;:&quot;&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-j77euiuw&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://www.profil.at/wirtschaft/mietrecht-von-fuechsen-checkern-helden-5846173&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-j76kzrio&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-j76kzrioimg" class="ca1img">
                                                                           <svg id="svgkennedy-comp-j76kzrioimg" version="1.1" style="width:0;height:0;left:0;top:0;overflow:hidden;position:absolute">
                                                                              <defs>
                                                                                 <filter id="kennedy-comp-j76kzrioimg" color-interpolation-filters="sRGB" >
                                                                                    <feComponentTransfer result="srcRGB"/>
                                                                                    <feColorMatrix type="saturate" values="0"  />
                                                                                    <feComponentTransfer>
                                                                                       <feFuncR type="linear" slope="1.1" intercept="-0.05"/>
                                                                                       <feFuncG type="linear" slope="1.1" intercept="-0.05"/>
                                                                                       <feFuncB type="linear" slope="1.1" intercept="-0.05"/>
                                                                                    </feComponentTransfer>
                                                                                    <feComponentTransfer >
                                                                                       <feFuncR type="linear" slope="0.9" />
                                                                                       <feFuncG type="linear" slope="0.9" />
                                                                                       <feFuncB type="linear" slope="0.9" />
                                                                                    </feComponentTransfer>
                                                                                    <feComponentTransfer/>
                                                                                 </filter>
                                                                              </defs>
                                                                           </svg>
                                                                           <img id="comp-j76kzrioimgimage" style="-webkit-filter:url(#kennedy-comp-j76kzrioimg);filter:url(#kennedy-comp-j76kzrioimg);outline:1px solid transparent;object-position:50% 50%;width:100px;height:46px;object-fit:cover" alt="" data-type="image" itemProp="image" src="media/company-logos/profil.png"/>
                                                                        </wix-image>
                                                                     </a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div style="top:;bottom:;left:;right:;width:77px;height:64px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="64" class="ca1" id="comp-k3yg2l2w">
                                                         <a style="cursor:pointer;width:77px;height:64px" href="https://www.1000things.at/blog/wie-du-in-wien-richtig-viel-miete-sparen-kannst/" target="_blank" data-content="https://www.1000things.at/blog/wie-du-in-wien-richtig-viel-miete-sparen-kannst/" data-type="external" rel="noopener" id="comp-k3yg2l2wlink" class="ca1link">
                                                            <wix-image style="width:77px;height:64px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k3yg2l6t&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_4ddc41f015074569af5cea779fca1c56~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:1110,&quot;height&quot;:898,&quot;alt&quot;:&quot;Bildschirmfoto 2019-12-09 um 13.59.04.pn&quot;,&quot;name&quot;:&quot;Bildschirmfoto 2019-12-09 um 13.59.04.pn&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-k3yg64ie&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://www.1000things.at/blog/wie-du-in-wien-richtig-viel-miete-sparen-kannst/&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k3yg2l2w&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k3yg2l2wimg" class="ca1img"><img id="comp-k3yg2l2wimgimage" style="object-position:50% 50%;width:77px;height:64px;object-fit:cover" alt="Bildschirmfoto 2019-12-09 um 13.59.04.pn" data-type="image" itemProp="image" src="media/company-logos/vienna.png"/></wix-image>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div tabindex="-1" role="region" aria-label="So Funktionierts" style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="funktioniert"> </div>
                                          <div style="top:;bottom:;left:;right:;position:" class="style-k80gjxad" id="comp-k804gu0f">
                                             <div id="comp-k804gu0fbg" class="style-k80gjxadbg"></div>
                                             <div class="style-k80gjxadinlineContent" id="comp-k804gu0finlineContent">
                                                <style id="comp-k804gu0f-mesh-styles">
                                                   #comp-k804gu0finlineContent {
                                                   height: auto;
                                                   width: 931px;
                                                   position: relative;
                                                   }
                                                   #comp-k804gu0finlineContent-gridWrapper {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k804gu0finlineContent-gridContainer {
                                                   position: static;
                                                   display: grid;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: auto;
                                                   grid-template-rows: min-content 1fr;
                                                   grid-template-columns: 100%;
                                                   }
                                                   #comp-jlkj4w0d {
                                                   position: relative;
                                                   margin: 117px 0px -18px 0;
                                                   left: 186px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlk5futr {
                                                   position: relative;
                                                   margin: 0px 0px 43px 0;
                                                   left: 423px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlk5fe9s {
                                                   position: relative;
                                                   margin: 0px 0px 43px 0;
                                                   left: 182px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k804gu0fcenteredContent {
                                                   position: relative;
                                                   }
                                                   #comp-k804gu0finlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-k804gu0finlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k804gu0finlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-k804gu0finlineContent-gridWrapper" data-mesh-internal="true">
                                                   <div id="comp-k804gu0finlineContent-gridContainer" data-mesh-internal="true">
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:745px;height:auto;position:;min-height:23px;pointer-events:none" data-min-height="23" class="txtNew" id="comp-jlkj4w0d">
                                                         <h1 class="font_0" style="font-size:18px;"><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">1 ‣</span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">&nbsp;</span></span><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">F&uuml;llen Sie unser Online-Formular mit Angaben zu Ihrem gewerblichen Mietvertrag aus</span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"> (Zeitaufwand: zwei&nbsp;Minuten) und w&auml;hlen Sie die gew&uuml;nschte Vorgangsweise.</span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">2 ‣&nbsp;</span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Anschlie&szlig;end beauftragen und finanzieren wir einen </span><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">Rechtsanwalt, der Ihren Anspruch auf Mietzinsaussetzung bzw. -minderung&nbsp;pr&uuml;ft</span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"> und Ihnen die rechtliche Auswertung &uuml;bermittelt.&nbsp;Wenn Ihr&nbsp;Betrieb von einer beh&ouml;rdlichen Sperre betroffen ist, sind Ihre Chancen sehr hoch.</span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">3</span></span></span></span><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">‣&nbsp;</span></span></span></span><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Optional&nbsp;</span></span></span></span><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">kann&nbsp;d</span></span></span></span><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">e</span></span></span></span><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">r&nbsp;Rechtsanwalt&nbsp;</span></span><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">auf&nbsp;Ihren&nbsp;Wunsch&nbsp;ein&nbsp;</span><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">individuelles&nbsp;Aufforderungsschreiben mit den rechtlichen Grundlagen des Mietzinsentfalls </span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">an Ihren Vermieter&nbsp;&uuml;bermitteln </span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">und diesbez&uuml;glich mit Ihm&nbsp;verhandeln,&nbsp;&nbsp;wenn Sie ihm einen&nbsp;Verhandlungsspielraum&nbsp;&uuml;ber einen neuen, reduzierten Mietzins einr&auml;umen. Ist Ihr Vermieter nicht kompromissbereit, gibt es zwei Vorgangsweisen:</span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:rgb(47, 46, 46);"><span style="text-decoration:underline;">Variante A:&nbsp;</span></span></span><span style="color:rgb(47, 46, 46); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Ihre Firma zahlt die Miete weiterhin unter Vorbehalt und kann&nbsp;diesen bei Bedarf nachtr&auml;glich (mit Mietheld als Prozessfinanzierer)&nbsp;r&uuml;ckfordern.&nbsp;&nbsp;</span></span></span><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:rgb(47, 46, 46);">WICHTIG</span></span><span style="color:rgb(47, 46, 46); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">: Laut Gesetz k&ouml;nnen die Mietzinse nur nachtr&auml;glich r&uuml;ckgefordert werden, wenn&nbsp;der Vorbehalt unverz&uuml;glich dem Vermieter mitgeteilt wurde. Dies erledigt der&nbsp;Rechtsanwalt f&uuml;r Sie.&nbsp;</span><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:rgb(47, 46, 46);">VORTEIL:&nbsp;</span></span><span style="color:rgb(47, 46, 46); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">Maximale Rechtssicherheit, dass Ihr Vermieter keine R&auml;umungsklage erhebt.</span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="color:rgb(47, 46, 46);"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="text-decoration:underline;">Variante B:</span></span><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:rgb(47, 46, 46);"> </span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;">&nbsp;Ihr Betrieb zahlt keine Miete mehr. Ein&nbsp;Mietzins- und R&auml;umungsklage Ihres Vermieters ist theoretisch m&ouml;glich, allerdings aufgrund der gesetzlichen Lage wenig erfolgsversprechend. &nbsp;Zudem sinkt die Wahrscheinlichkeit einer Vermieterklage erfahrungsgem&auml;&szlig; deutlich, wenn sich ein Rechtsanwalt um die Angelegenheit f&uuml;r Sie k&uuml;mmert.</span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="color:rgb(47, 46, 46); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></h1>
                                                         <h1 class="font_0" style="font-size:18px;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span style="color:rgb(47, 46, 46); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></h1>
                                                      </div>
                                                      <div id="comp-jlk5futr" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="418" data-height="54" style="top:;bottom:;left:;right:;width:418px;height:54px;position:" class="style-jsuazwii" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/kontaktanfrage" target="_blank" id="comp-jlk5futrlink" class="g-transparent-a style-jsuazwiilink"><span id="comp-jlk5futrlabel" class="style-jsuazwiilabel">FRAGEN? GRATIS KONTAKTANFRAGE SENDEN</span></a></div>
                                                      <div id="comp-jlk5fe9s" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="200" data-height="54" style="top:;bottom:;left:;right:;width:200px;height:54px;position:" class="style-jsuazwix" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/unternehmen" target="_blank" data-content="https://mietheldgmbh.formstack.com/forms/unternehmen" data-type="external" rel="noopener" id="comp-jlk5fe9slink" class="g-transparent-a style-jsuazwixlink"><span id="comp-jlk5fe9slabel" class="style-jsuazwixlabel">ZUM FORMULAR</span></a></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div style="top:;bottom:;left:;right:;width:200px;height:39px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="39" class="style-k80blg8s" id="comp-k7z6a29p">
                                             <a style="cursor:pointer;width:200px;height:39px" href="https://kurier.at/chronik/oesterreich/coronavirus-firmen-muessen-vorerst-keine-miete-zahlen/400782320" target="_blank" data-content="https://kurier.at/chronik/oesterreich/coronavirus-firmen-muessen-vorerst-keine-miete-zahlen/400782320" data-type="external" rel="noopener" id="comp-k7z6a29plink" class="style-k80blg8slink">
                                                <wix-image style="width:200px;height:39px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k7z6a2dq&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_cca8304222924952af8eb0eb65dc40a2~mv2.jpg&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:631,&quot;height&quot;:123,&quot;alt&quot;:&quot;s-versicherung-kurier-logo-2.jpg&quot;,&quot;name&quot;:&quot;s-versicherung-kurier-logo-2.jpg&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-k7z6e348&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://kurier.at/chronik/oesterreich/coronavirus-firmen-muessen-vorerst-keine-miete-zahlen/400782320&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k7z6a29p&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k7z6a29pimg" class="style-k80blg8simg"><img id="comp-k7z6a29pimgimage" style="object-position:50% 50%;width:200px;height:39px;object-fit:cover" alt="s-versicherung-kurier-logo-2.jpg" data-type="image" itemProp="image" src="media/company-logos/s-versicherung-kurier-logo-2.jpg"/></wix-image>
                                             </a>
                                          </div>
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:206px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k7z5zmb2">
                                             <h1 class="font_0"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">&quot;Coronavirus: Firmen m&uuml;ssen vorerst keine Miete zahlen&quot;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:18px;"><span style="color:#000000;"><span style="letter-spacing:-0.05em;"><span style="font-weight:normal;"><span style="font-style:italic;">vom&nbsp;16.03.2020&nbsp;</span></span></span></span></span></span></h1>
                                             <h1 class="font_0" style="font-size:18px;"><span style="color:#2F2E2E;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></h1>
                                          </div>
                                          <div style="top:;bottom:;left:;right:;width:199px;height:39px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="39" class="ca1" id="comp-k7z6ceu8">
                                             <a style="cursor:pointer;width:199px;height:39px" href="https://www.diepresse.com/5785132/gesperrte-geschafte-unternehmen-mussen-keine-miete-zahlen" target="_blank" data-content="https://www.diepresse.com/5785132/gesperrte-geschafte-unternehmen-mussen-keine-miete-zahlen" data-type="external" rel="noopener" id="comp-k7z6ceu8link" class="ca1link">
                                                <wix-image style="width:199px;height:39px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k7z6ceva&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_4638ddd6040d432291f29b90558467a7~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:472,&quot;height&quot;:146,&quot;alt&quot;:&quot;Bildschirmfoto 2020-03-19 um 20.55.14.pn&quot;,&quot;name&quot;:&quot;Bildschirmfoto 2020-03-19 um 20.55.14.pn&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-k7z6dj20&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://www.diepresse.com/5785132/gesperrte-geschafte-unternehmen-mussen-keine-miete-zahlen&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k7z6ceu8&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k7z6ceu8img" class="ca1img"><img id="comp-k7z6ceu8imgimage" style="object-position:50% 50%;width:199px;height:39px;object-fit:cover" alt="Bildschirmfoto 2020-03-19 um 20.55.14.pn" data-type="image" itemProp="image" src="media/company-logos/die-presse.png"/></wix-image>
                                             </a>
                                          </div>
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:206px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k7z6batq">
                                             <h1 class="font_0">&nbsp;</h1>
                                             <h1 class="font_0"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">&quot;Gesperrte Gesch&auml;fte: Unternehmen m&uuml;ssen keine Miete zahlen</span></span></span><span style="font-size:18px;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">&quot;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-style:italic;"><span style="letter-spacing:-0.05em;"><span style="color:#000000;">vom 15.03.2020.</span></span></span></span></span></h1>
                                             <p class="font_8"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_0330019483a5484fb21179a63b7bcf1a,wf_0330019483a5484fb21179a63,orig_ubuntu_medium_italic;"><span style="font-style:italic;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></span></span></p>
                                             <h1 class="font_0" style="font-size:18px;"><span style="color:#2F2E2E;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></h1>
                                          </div>
                                          <div style="top:;bottom:;left:;right:;width:199px;height:39px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="39" class="ca1" id="comp-k803j3bm">
                                             <a style="cursor:pointer;width:199px;height:39px" href="https://www.derstandard.at/story/2000115802556/mietzahlung-kann-wegen-coronavirus-wohl-vielfach-ausgesetzt-werden" target="_blank" data-content="https://www.derstandard.at/story/2000115802556/mietzahlung-kann-wegen-coronavirus-wohl-vielfach-ausgesetzt-werden" data-type="external" rel="noopener" id="comp-k803j3bmlink" class="ca1link">
                                                <wix-image style="width:199px;height:39px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k803j3cg&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_73f6e8e1c78149899f1e885895c3d8f0~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:1204,&quot;height&quot;:284,&quot;alt&quot;:&quot;Bildschirmfoto 2020-03-20 um 12.25.12.pn&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:24,&quot;width&quot;:1204,&quot;height&quot;:235,&quot;svgId&quot;:&quot;909695c1e003409ba70b5561666c7c4d.svg&quot;},&quot;name&quot;:&quot;Bildschirmfoto 2020-03-20 um 12.25.12.pn&quot;,&quot;link&quot;:{&quot;type&quot;:&quot;ExternalLink&quot;,&quot;id&quot;:&quot;dataItem-k803j3cg1&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;1.0&quot;,&quot;isHidden&quot;:false},&quot;url&quot;:&quot;https://www.derstandard.at/story/2000115802556/mietzahlung-kann-wegen-coronavirus-wohl-vielfach-ausgesetzt-werden&quot;,&quot;target&quot;:&quot;_blank&quot;},&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k803j3bm&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="true" data-is-svg-mask="true" id="comp-k803j3bmimg" class="ca1img">
                                                   <svg id="svgcomp-k803j3bmimg" version="1.1" role="img" aria-label="Bildschirmfoto 2020-03-20 um 12.25.12.pn" width="199" height="39" viewBox="0 0 199 39">
                                                      <defs>
                                                         <style>#mask-comp-k803j3bmimg-svg * {fill: #fff; stroke: #fff; stroke-width: 0;}</style>
                                                         <mask id="mask-comp-k803j3bmimg">
                                                            <use id="mask-comp-k803j3bmimg-svg-use" xlink:href="#mask-comp-k803j3bmimg-svg" width="100%" height="100%" x="0" y="0"></use>
                                                         </mask>
                                                         <svg id="mask-comp-k803j3bmimg-svg" preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                                            <g>
                                                               <path d="M180 20v160H20V20h160z"/>
                                                            </g>
                                                         </svg>
                                                      </defs>
                                                      <image width="199" height="39" x="0" y="0" transform="" preserveAspectRatio="xMidYMid slice" id="comp-k803j3bmimgimage" data-type="image" xlink:href="media/company-logos/desr-color.png" mask="url(#mask-comp-k803j3bmimg)" data-svg-mask="mask-comp-k803j3bmimg-svg"></image>
                                                   </svg>
                                                </wix-image>
                                             </a>
                                          </div>
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:980px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-jlk4tftv">
                                             <h1 class="font_0" style="font-size:50px;"><span style="letter-spacing:-0.05em;"><span style="font-size:50px;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">So funktioniert&#39;s</span></span></span></span></h1>
                                          </div>
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:206px;height:auto;position:;pointer-events:none;top: -14px;margin-bottom: 71px;" class="txtNew" id="comp-k7z9ysoa">
                                             <h1 class="font_0"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">&quot;Mietzahlung kann wegen Coronavirus wohl vielfach ausgesetzt werden&quot;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0); font-size:18px; font-style:italic; letter-spacing:-0.05em;">vom 16.03.2020</span></span></h1>
                                             <p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="color:#000000;"><span class="wixGuard">​</span></span></span></span></span></p>
                                             <h1 class="font_0" style="font-size:18px;"><span style="color:#2F2E2E;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span class="wixGuard">​</span></span></span></span></h1>
                                          </div>

<!-- <div style="background:red;height:300px;"></div> -->


                                          <div style="top:;bottom:;left:;right:;position:" class="style-k80gmbgq" id="comp-k80e0a87">
                                             <div id="comp-k80e0a87bg" class="style-k80gmbgqbg"></div>
                                             <div class="style-k80gmbgqinlineContent" id="comp-k80e0a87inlineContent">
                                                <style id="comp-k80e0a87-mesh-styles">
                                                   #comp-k80e0a87inlineContent {
                                                   height: auto;
                                                   width: 163px;
                                                   position: relative;
                                                   }
                                                   #comp-k80e0a87inlineContent-gridContainer {
                                                   position: static;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: 647px;
                                                   }
                                                   #comp-k80e0a87centeredContent {
                                                   position: relative;
                                                   }
                                                   #comp-k80e0a87inlineContent-gridWrapper {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k80e0a87inlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-k80e0a87inlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k80e0a87inlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-k80e0a87inlineContent-gridContainer" data-mesh-internal="true"></div>
                                             </div>
                                          </div>
                                          <div data-svg-id="fb1b725bec7b60cce141453398672f7c.svg" data-svg-type="shape" data-display-mode="stretch" data-strokewidth="0" data-viewbox="0 0 207.471 142.529" data-preserve-viewbox="ignore" style="top:;bottom:;left:;right:;width: 1680px;height:94px;position:" class="style-k81fpsvi" id="comp-k81fpsgs">
                                             <div id="comp-k81fpsgslink" class="style-k81fpsvilink">
                                                <div style="stroke-width:0;fill-opacity:0.5;stroke:rgba(50, 51, 51, 1);stroke-opacity:1;fill:#68B04D" class="style-k81fpsvi_comp-k81fpsgs style-k81fpsvi_non-scaling-stroke style-k81fpsvisvg" id="comp-k81fpsgssvg">
                                                   <svg preserveAspectRatio="none" data-bbox="9.04 19.052 186 103" xmlns="http://www.w3.org/2000/svg" viewBox="9.04 19.052 186 103" role="img" aria-labelledby="comp-k81fpsgs-svgtitle">
                                                      <title id="comp-k81fpsgs-svgtitle"></title>
                                                      <g>
                                                         <path d="M195.04 19.052v103h-186v-103h186z"/>
                                                      </g>
                                                   </svg>
                                                </div>
                                             </div>
                                          </div>
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:756px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k81fqw4u">
                                             <h1 class="font_0" style="font-size:30px;"><span style="font-size:48px;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">WICHTIG!&nbsp;</span></span></span></span></h1>
                                          </div>
                                          <div data-packed="true" style="top:;bottom:;left:;right:;width:438px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k81fw1cc">
                                             <p class="font_7" style="font-size:20px;"><span style="font-size:20px;"><span style="font-style:normal;"><span style="font-weight:normal;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">Zur Wahrung Ihrer Anspr&uuml;che muss Ihr Vermieter laut Gesetz umgehend informiert werden.</span></span></span></span></span></span></p>
                                          </div>
                                          <div id="comp-k81fwtfu" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="284" data-height="54" style="top:;bottom:;left:;right:;width:177px;height:54px;position:" class="style-jsuazwii" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/unternehmen" target="_blank" data-content="https://mietheldgmbh.formstack.com/forms/unternehmen" data-type="external" rel="noopener" id="comp-k81fwtfulink" class="g-transparent-a style-jsuazwiilink"><span id="comp-k81fwtfulabel" class="style-jsuazwiilabel">BEAUFTRAGEN</span></a></div>


                                          <style>
                                             div.new-fb-img {
                                                   left: 868px !important;
                                                }
                                                div.new-norton-img {
                                                   left: 1013px !important;
                                                   top: -5px;
                                                }
                                             </style>
                                          <div id="comp-k81fwtfu" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="284" data-height="54" style="top:;bottom:;left:;right:;width:177px;height:54px;position:" class="style-jsuazwii new-fb-img" data-state="desktop shouldUseFlex center">
                                          
                                             <wix-image style="width:121px;height:50px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k83a1d74&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_022d260734c8415888812132a45172b2~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:1556,&quot;height&quot;:650,&quot;alt&quot;:&quot;Bildschirmfoto 2017-09-05 um 20.44.05.pn&quot;,&quot;name&quot;:&quot;Bildschirmfoto 2017-09-05 um 20.44.05.pn&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k83a1d3n&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="" data-is-svg="false" data-is-svg-mask="false" id="comp-k83a1d3nimg" class="ca1img" data-src="media/company-logos/norton.png"><img id="comp-k83a1d3nimgimage" style="object-position:50% 50%;width:121px;height:50px;object-fit:cover" alt="Bildschirmfoto 2017-09-05 um 20.44.05.pn" data-type="image" itemprop="image" src="media/company-logos/norton.png"></wix-image>
                                          
                                          </div>


                                          <div id="comp-k81fwtfu" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="284" data-height="54" style="top:;bottom:;left:;right:;width:177px;height:54px;position:" class="style-jsuazwii new-norton-img" data-state="desktop shouldUseFlex center">
                                          
                                             <wix-image style="width:111px;height:62px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k839zkp7&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_259f200b922f4974a9e24efd7ac312f3~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:666,&quot;height&quot;:388,&quot;alt&quot;:&quot;Bildschirmfoto 2017-09-18 um 15.51.45.pn&quot;,&quot;name&quot;:&quot;Bildschirmfoto 2017-09-18 um 15.51.45.pn&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k839zkmf&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="" data-is-svg="false" data-is-svg-mask="false" id="comp-k839zkmfimg" class="ca1img" data-src="media/company-logos/fb.png"><img id="comp-k839zkmfimgimage" style="object-position:50% 50%;width:111px;height:62px;object-fit:cover" alt="Bildschirmfoto 2017-09-18 um 15.51.45.pn" data-type="image" itemprop="image" src="media/company-logos/fb.png"></wix-image>
                                          
                                          </div>

                                          <!-- RECHTSANWALT -->
                                          <div tabindex="-1" role="region" aria-label="Vorteile" style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="vorteile"> </div>
                                          <div style="top:;bottom:;left:;right:;position:" class="style-k81hmcq9" id="comp-k2ysqosy">
                                             <div id="comp-k2ysqosybg" class="style-k81hmcq9bg"></div>
                                             <div class="style-k81hmcq9inlineContent" id="comp-k2ysqosyinlineContent">
                                                <style id="comp-k2ysqosy-mesh-styles">
                                                   #comp-k2ysqosyinlineContent {
                                                   height: auto;
                                                   width: 1345px;
                                                   position: relative;
                                                   }
                                                   #comp-k2ysqosyinlineContent-gridWrapper {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k2ysqosyinlineContent-gridContainer {
                                                   position: static;
                                                   display: grid;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: auto;
                                                   grid-template-rows: min-content 1fr;
                                                   grid-template-columns: 100%;
                                                   }
                                                   #comp-k808tmbe {
                                                   position: relative;
                                                   margin: 0px 0px 10px 0;
                                                   left: 148px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k2yss5zy {
                                                   position: relative;
                                                   margin: 42px 0px -17px 0;
                                                   left: 578px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-j7f2246a {
                                                   position: relative;
                                                   margin: 48px 0px 62px 0;
                                                   left: 578px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k2ysqosycenteredContent {
                                                   position: relative;
                                                   }
                                                   #comp-k2ysqosyinlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-k2ysqosyinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k2ysqosyinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-k2ysqosyinlineContent-gridWrapper" data-mesh-internal="true">
                                                   <div id="comp-k2ysqosyinlineContent-gridContainer" data-mesh-internal="true">
                                                      <div style="top:;bottom:;left:;right:;width:358px;height:393px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="393" class="style-k80blg8s" id="comp-k808tmbe">
                                                         <div style="width:358px;height:393px" id="comp-k808tmbelink" class="style-k80blg8slink">
                                                            <wix-image style="width:358px;height:393px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k808tme9&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_f769d35cdcb34b939f8ab2a1b14a4b1a~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:704,&quot;height&quot;:858,&quot;alt&quot;:&quot;Bildschirmfoto 2018-09-02 um 11.15.48.pn&quot;,&quot;crop&quot;:{&quot;x&quot;:0,&quot;y&quot;:0,&quot;width&quot;:704,&quot;height&quot;:780,&quot;svgId&quot;:&quot;909695c1e003409ba70b5561666c7c4d.svg&quot;},&quot;name&quot;:&quot;Bildschirmfoto 2018-09-02 um 11.15.48.pn&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k808tmbe&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="true" data-is-svg-mask="true" id="comp-k808tmbeimg" class="style-k80blg8simg">
                                                               <svg id="svgcomp-k808tmbeimg" version="1.1" role="img" aria-label="Bildschirmfoto 2018-09-02 um 11.15.48.pn" width="358" height="393" viewBox="0 0 358 393">
                                                                  <defs>
                                                                     <style>#mask-comp-k808tmbeimg-svg * {fill: #fff; stroke: #fff; stroke-width: 0;}</style>
                                                                     <mask id="mask-comp-k808tmbeimg">
                                                                        <use id="mask-comp-k808tmbeimg-svg-use" xlink:href="#mask-comp-k808tmbeimg-svg" width="100%" height="100%" x="0" y="0"></use>
                                                                     </mask>
                                                                     <svg id="mask-comp-k808tmbeimg-svg" preserveAspectRatio="none" data-bbox="20 20 160 160" viewBox="20 20 160 160" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="img">
                                                                        <g>
                                                                           <path d="M180 20v160H20V20h160z"/>
                                                                        </g>
                                                                     </svg>
                                                                  </defs>
                                                                  <style>
                                                                     /*! CSS Used from: Embedded */
                                                                     div{margin:0;padding:0;border:0;outline:0;vertical-align:baseline;background:0 0;}
                                                                     :focus{outline:0;}
                                                                     wix-image{display:block;}
                                                                     /*! CSS Used from: Embedded */
                                                                     .style-k80blg8slink{display:block;overflow:hidden;}
                                                                     .style-k80blg8simg{overflow:hidden;}
                                                                     /*! CSS Used from: Embedded ; media=all */
                                                                     @media all{
                                                                     #mask-comp-k808tmbeimg-svg *{fill:#fff;stroke:#fff;stroke-width:0;}
                                                                     }
                                                                  </style>
                                                                  <image width="358" height="451" x="0" y="0" transform="" preserveAspectRatio="xMidYMid slice" id="comp-k808tmbeimgimage" data-type="image" xlink:href="media/others/right.png" mask="url(#mask-comp-k808tmbeimg)" data-svg-mask="mask-comp-k808tmbeimg-svg"></image>
                                                               </svg>
                                                            </wix-image>
                                                         </div>
                                                      </div>
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:449px;height:auto;position:;min-height:46px;pointer-events:none" data-min-height="46" class="txtNew" id="comp-k2yss5zy">
                                                         <h1 class="font_0" style="font-size:50px;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;"><span style="font-size:50px;">Ihre </span></span><span style="color:#68B04D;"><span style="font-size:50px;">Vorteile</span></span><span style="color:#000000;"><span style="font-size:50px;"> mit uns</span></span></span></span></h1>
                                                      </div>
                                                      <div data-packed="true" style="top:;bottom:;left:;right:;width:584px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-j7f2246a">
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:25px;"><span style="letter-spacing:-0.05em;">✔&nbsp;mehr Rechtsicherheit&nbsp;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;">dank einer individuellen, rechtlichen Stellungnahme eines spezialisierten Rechtsanwaltes zu Ihrem Mietvertrag.</span></span></span></span></p>
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span class="wixGuard">​</span></span></span></span></span></p>
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:25px;"><span style="letter-spacing:-0.05em;">✔&nbsp;h&ouml;here Erfolgschancen&nbsp;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;">weil sich anstatt Ihnen ein Rechtsanwalt der Sache annimmt&nbsp;und&nbsp;die Wahrscheinlichkeit einer gerichtlichen Auseinandersetzung dabei erfahrungsgem&auml;&szlig; erheblich sinkt.&nbsp;</span></span></span></span></p>
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span class="wixGuard">​</span></span></span></span></span></p>
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:25px;"><span style="letter-spacing:-0.05em;">✔&nbsp;Anspr&uuml;che sichern&nbsp;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;">durch den Rechtsanwalt. Wenn Sie den Mietzins weiterhin unter Vorbehalt&nbsp;zahlen und eventuell nachtr&auml;glich einklagen m&ouml;chten, muss&nbsp;der&nbsp;Vermieter laut Gesetz von diesem Vorbehalt jetzt korrekt&nbsp;in Kenntnis gesetzt werden.&nbsp;</span></span></span></span></p>
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;"><span class="wixGuard">​</span></span></span></span></span></p>
                                                         <p class="font_8" style="font-size:25px; line-height:0.8em;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="font-size:25px;"><span style="letter-spacing:-0.05em;">✔&nbsp;Kein Prozesskostenrisiko&nbsp;</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="letter-spacing:-0.05em;"><span style="font-size:18px;">wenn Sie sich daf&uuml;r entscheiden, den Mietzins weiterhin unter Vorbehalt zu zahlen und eventuell nachtr&auml;glich einzuklagen. Wir bieten&nbsp;Ihnen eine Prozessfinanzierung f&uuml;r eine Provision von 35% des erstrittenen Betrages an. &nbsp;S&auml;mtliche Gerichts- und Rechtsvertretungskosten werden dabei von uns &uuml;bernommen.</span></span></span></span></p>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div tabindex="-1" role="region" aria-label="Preise" style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="preise"> </div>
                                          <div style="top:;bottom:;left:;right:;position:" class="style-k81h7oj4" id="comp-k81g58cb">
                                             <div id="comp-k81g58cbbg" class="style-k81h7oj4bg"></div>
                                             <div class="style-k81h7oj4inlineContent" id="comp-k81g58cbinlineContent">
                                                <style id="comp-k81g58cb-mesh-styles">
                                                   #comp-k81g58cbinlineContent {
                                                   height: auto;
                                                   width: 1345px;
                                                   position: relative;
                                                   }
                                                   #comp-k81g58cbinlineContent-gridWrapper {
                                                   display: flex;
                                                   pointer-events: none;
                                                   }
                                                   #comp-k81g58cbinlineContent-gridContainer {
                                                   position: static;
                                                   display: grid;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: auto;
                                                   margin-bottom: -54px;
                                                   grid-template-rows: min-content min-content 1fr;
                                                   grid-template-columns: 100%;
                                                   }
                                                   #comp-k81g58dn {
                                                   position: relative;
                                                   margin: 29px 0px 16px 0;
                                                   left: 525px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k81icmke {
                                                   position: relative;
                                                   margin: 0px 0px 19px 0;
                                                   left: 321px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k81ib2nz {
                                                   position: relative;
                                                   margin: 0px 0px 10px 0;
                                                   left: 671px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k81ifj0r {
                                                   position: relative;
                                                   margin: 0px 0px 10px 0;
                                                   left: 979px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k81hngym {
                                                   position: relative;
                                                   margin: 0px 0px 0px 0;
                                                   left: 182px;
                                                   grid-area: 3 / 1 / 4 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k81g58cbcenteredContent {
                                                   position: relative;
                                                   }
                                                   #comp-k81g58cbinlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-k81g58cbinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k81g58cbinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-k81g58cbinlineContent-gridWrapper" data-mesh-internal="true">
                                                   <div id="comp-k81g58cbinlineContent-gridContainer" data-mesh-internal="true">
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:294px;height:auto;position:;min-height:46px;pointer-events:none" data-min-height="46" class="txtNew" id="comp-k81g58dn">
                                                         <h1 class="font_0" style="font-size:50px;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;"><span style="font-size:50px;">Unsere Preise</span></span></span></span></h1>
                                                      </div>
                                                      <div style="top:;bottom:;left:;right:;width:72px;height:72px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="72" class="ca1" id="comp-k81icmke">
                                                         <div style="width:72px;height:72px" id="comp-k81icmkelink" class="ca1link">
                                                            <wix-image style="width:72px;height:72px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k81icml8&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_4b76010ce5134215ad735b0141224ecd~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:128,&quot;height&quot;:128,&quot;alt&quot;:&quot;icon1.png&quot;,&quot;name&quot;:&quot;icon1.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k81icmke&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k81icmkeimg" class="ca1img"><img id="comp-k81icmkeimgimage" style="object-position:50% 50%;width:72px;height:72px;object-fit:cover" alt="icon1.png" data-type="image" itemProp="image" src="media/icons/icon1.png"/></wix-image>
                                                         </div>
                                                      </div>
                                                      <div style="top:;bottom:;left:;right:;width:81px;height:81px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="81" class="ca1" id="comp-k81ib2nz">
                                                         <div style="width:81px;height:81px" id="comp-k81ib2nzlink" class="ca1link">
                                                            <wix-image style="width:81px;height:81px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k81ib2ot&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_94d2159e9f3f4b11a452f772126934e1~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:128,&quot;height&quot;:128,&quot;alt&quot;:&quot;icon2.png&quot;,&quot;name&quot;:&quot;icon2.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k81ib2nz&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k81ib2nzimg" class="ca1img"><img id="comp-k81ib2nzimgimage" style="object-position:50% 50%;width:81px;height:81px;object-fit:cover" alt="icon2.png" data-type="image" itemProp="image" src="media/icons/icon2.png"/></wix-image>
                                                         </div>
                                                      </div>
                                                      <div style="top:;bottom:;left:;right:;width:81px;height:81px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="81" class="ca1" id="comp-k81ifj0r">
                                                         <div style="width:81px;height:81px" id="comp-k81ifj0rlink" class="ca1link">
                                                            <wix-image style="width:81px;height:81px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k81ifj1p&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_579e4f59316c492997cbb1f7da6c6984~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:128,&quot;height&quot;:128,&quot;alt&quot;:&quot;icon3.png&quot;,&quot;name&quot;:&quot;icon3.png&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k81ifj0r&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k81ifj0rimg" class="ca1img"><img id="comp-k81ifj0rimgimage" style="object-position:50% 50%;width:81px;height:81px;object-fit:cover" alt="icon3.png" data-type="image" itemProp="image" src="media/icons/icon3.png"/></wix-image>
                                                         </div>
                                                      </div>
                                                      <div style="pointer-events:none;top:;bottom:;left:;right:;position:" class="s_BIwzIGroupSkin" id="comp-k81hngym">
                                                         <div style="pointer-events:none" class="s_BIwzIGroupSkininlineContent" id="comp-k81hngyminlineContent">
                                                            <style id="comp-k81hngym-mesh-styles">
                                                               #comp-k81hngyminlineContent {
                                                               height: auto;
                                                               width: 984px;
                                                               position: relative;
                                                               }
                                                               #comp-k81hngyminlineContent-gridWrapper {
                                                               pointer-events: none;
                                                               }
                                                               #comp-k81hngyminlineContent-gridContainer {
                                                               position: static;
                                                               display: grid;
                                                               height: auto;
                                                               width: 100%;
                                                               min-height: 534px;
                                                               grid-template-rows: 1fr;
                                                               grid-template-columns: 100%;
                                                               }
                                                               #comp-k81g58dp1 {
                                                               position: relative;
                                                               margin: 0px 0px 10px 0;
                                                               left: 0px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k81h9g8j {
                                                               position: relative;
                                                               margin: 0px 0px 10px 0;
                                                               left: 366px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k81hajlx {
                                                               position: relative;
                                                               margin: 0px 0px 10px 0;
                                                               left: 690px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k81hngymcenteredContent {
                                                               position: relative;
                                                               }
                                                               #comp-k81hngyminlineContent-gridContainer > * {
                                                               pointer-events: auto;
                                                               }
                                                               #comp-k81hngyminlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                               pointer-events: none;
                                                               }
                                                               #comp-k81hngyminlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                               pointer-events: auto;
                                                               }
                                                            </style>
                                                            <div id="comp-k81hngyminlineContent-gridWrapper" data-mesh-internal="true">
                                                               <div id="comp-k81hngyminlineContent-gridContainer" data-mesh-internal="true">
                                                                  <div data-packed="false" style="top:;bottom:;left:;right:;width:358px;height:auto;position:;min-height:69px;pointer-events:none" data-min-height="69" class="txtNew" id="comp-k81g58dp1">
                                                                     <p class="font_8">&nbsp;</p>
                                                                     <p class="font_8" style="font-size:23px; text-align:center;"><span style="font-size:23px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">PR&Uuml;FUNG &amp; KORRESPONDENZ</span></span></span></span></p>
                                                                     <p class="font_8" style="font-size:23px; text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold; font-size:25px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="font-size:20px; text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">Individuelle&nbsp;Pr&uuml;fung Ihres Sachverhaltes durch Rechtsanwalt</span></span></span><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">&nbsp;&amp;&nbsp;</span></span></span><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">&Uuml;bermittlung der Auswertung</span></span></span><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">&nbsp;&amp;&nbsp;</span></span></span><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">optional: Korrespondenz mit Vermieter&nbsp;</span></span></span><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">&uuml;ber Rechtsgrundlagen des Mietzinsausfalls.</span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-size:23px;"><span style="color:#000000;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="letter-spacing:-0.05em;">&euro;180,00</span></span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:20px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"> </span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center; font-size:14px;"><span style="font-size:14px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">wenn Sie die Miete&nbsp;anschlie&szlig;end </span></span></span><span style="color:#000000;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="letter-spacing:-0.05em;">nicht zahlen.</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:20px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span class="wixGuard">​</span></span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-size:23px;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">&euro;180,00 </span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center; font-size:14px;"><span style="font-size:14px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">wenn Sie die Miete unter Vorbehalt </span></span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">weiterzahlen </span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">und nachtr&auml;glich </span></span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">alleine </span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">zur&uuml;ckfordern/einklagen.</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="font-size:20px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span class="wixGuard">​</span></span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="font-size:23px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">&euro;0,00</span></span></span><span style="font-size:20px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"> </span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center; font-size:14px;"><span style="font-size:14px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">wenn Sie die Miete unter Vorbehalt </span></span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">weiterzahlen</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"> und nachtr&auml;glich </span></span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">mit Mietheld</span></span></span><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"> zur&uuml;ckfordern.</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">&nbsp;</span></span></span></p>
                                                                  </div>
                                                                  <div data-packed="false" style="top:;bottom:;left:;right:;width:320px;height:auto;position:;min-height:69px;pointer-events:none" data-min-height="69" class="txtNew" id="comp-k81h9g8j">
                                                                     <p class="font_8" style="text-align:center;">&nbsp;</p>
                                                                     <p class="font_8" style="font-size:23px; text-align:center;"><span style="font-size:23px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">VERGLEICHSABSCHLUSS</span></span></span></span></p>
                                                                     <p class="font_8" style="font-size:23px; text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold; font-size:25px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="font-size:20px; text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;">Wenn der von uns finanzierte Rechtsanwalt im Rahmen des von Ihnen vorgegebenen Verhandlungsspielraums einen Vergleich &uuml;ber einen neuen, reudzierten Mietzins schlie&szlig;t.</span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="font-size:23px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">35% </span></span></span></span><span style="font-size:14px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">des Ersparnisses</span></span></span></span></p>
                                                                     <p class="font_8">&nbsp;</p>
                                                                  </div>
                                                                  <div data-packed="false" style="top:;bottom:;left:;right:;width:294px;height:auto;position:;min-height:69px;pointer-events:none" data-min-height="69" class="txtNew" id="comp-k81hajlx">
                                                                     <p class="font_8">&nbsp;</p>
                                                                     <p class="font_8" style="font-size:23px; text-align:center;"><span style="font-size:23px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">MIETZINSR&Uuml;CKFORDERUNG</span></span></span></span></p>
                                                                     <p class="font_8" style="font-size:23px; text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold; font-size:25px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="font-size:20px; text-align:center;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">Wenn Sie die Miete unter Vorbehalt </span></span></span></span><span style="font-size:18px;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">weiterzahlen</span></span></span></span><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"> und nachtr&auml;glich </span></span></span></span><span style="font-size:18px;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">mit Mietheld</span></span></span></span><span style="font-size:18px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">&nbsp;erfolgreich zur&uuml;ckfordern/einklagen.</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px;"><span class="wixGuard">​</span></span></span></span></p>
                                                                     <p class="font_8" style="text-align:center;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="font-size:23px;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">35% </span></span></span></span><span style="font-size:14px;"><span style="font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu;"><span style="color:rgb(0, 0, 0);"><span style="letter-spacing:-0.05em;">der R&uuml;ckforderung</span></span></span></span></p>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="comp-k81hj340" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="200" data-height="54" style="top:;bottom:;left:;right:;width:200px;height:54px;position:" class="style-jsuazwix" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/unternehmen" target="_blank" data-content="https://mietheldgmbh.formstack.com/forms/unternehmen" data-type="external" rel="noopener" id="comp-k81hj340link" class="g-transparent-a style-jsuazwixlink"><span id="comp-k81hj340label" class="style-jsuazwixlabel">JETZT LOSLEGEN</span></a></div>
                                          <div tabindex="-1" role="region" aria-label="Rechtsgrundlagen" style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="rechtliche"> </div>
                                          <div style="pointer-events:none;top:;bottom:;left:;right:;position:" class="s_BIwzIGroupSkin" id="comp-k80c4ft0">
                                             <div style="pointer-events:none" class="s_BIwzIGroupSkininlineContent" id="comp-k80c4ft0inlineContent">
                                                <style id="comp-k80c4ft0-mesh-styles">
                                                   #comp-k80c4ft0inlineContent {
                                                   height: auto;
                                                   width: 1339px;
                                                   position: relative;
                                                   }
                                                   #comp-k80c4ft0inlineContent-gridWrapper {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k80c4ft0inlineContent-gridContainer {
                                                   position: static;
                                                   display: grid;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: auto;
                                                   grid-template-rows: 1fr;
                                                   grid-template-columns: 100%;
                                                   }
                                                   #comp-k80c4fuy {
                                                   position: relative;
                                                   margin: 0px 0px 0px 0;
                                                   left: 0px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k80c4fvc {
                                                   position: relative;
                                                   margin: 171px 0px 10px 0;
                                                   left: 182px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k80c4ft0centeredContent {
                                                   position: relative;
                                                   }
                                                   #comp-k80c4ft0inlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-k80c4ft0inlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-k80c4ft0inlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-k80c4ft0inlineContent-gridWrapper" data-mesh-internal="true">
                                                   <div id="comp-k80c4ft0inlineContent-gridContainer" data-mesh-internal="true">
                                                      <div style="top:;bottom:;left:;right:;position:" class="style-k81hlnyp" id="comp-k80c4fuy">
                                                         <div id="comp-k80c4fuybg" class="style-k81hlnypbg"></div>
                                                         <div class="style-k81hlnypinlineContent" id="comp-k80c4fuyinlineContent">
                                                            <style id="comp-k80c4fuy-mesh-styles">
                                                               #comp-k80c4fuyinlineContent {
                                                               height: auto;
                                                               width: 1339px;
                                                               position: relative;
                                                               }
                                                               #comp-k80c4fuyinlineContent-gridWrapper {
                                                               pointer-events: none;
                                                               }
                                                               #comp-k80c4fuyinlineContent-gridContainer {
                                                               position: static;
                                                               display: grid;
                                                               height: auto;
                                                               width: 100%;
                                                               min-height: 1078px;
                                                               grid-template-rows: min-content min-content min-content 1fr;
                                                               grid-template-columns: 100%;
                                                               }
                                                               #comp-k80c4fv5 {
                                                               position: relative;
                                                               margin: 70px 0px 36px 0;
                                                               left: 202px;
                                                               grid-area: 1 / 1 / 2 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k80c4fv2 {
                                                               position: relative;
                                                               margin: 0px 0px 4px 0;
                                                               left: 788px;
                                                               grid-area: 2 / 1 / 3 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k80c4fv8 {
                                                               position: relative;
                                                               /* margin: 0px 0px 23px 0; */
                                                               margin: 0px 0px 8px 0;
                                                               left: 742px;
                                                               grid-area: 3 / 1 / 4 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k80c4fva {
                                                               position: relative;
                                                               margin: 0px 0px 10px 0;
                                                               left: 182px;
                                                               grid-area: 4 / 1 / 5 / 2;
                                                               justify-self: start;
                                                               align-self: start;
                                                               }
                                                               #comp-k80c4fuycenteredContent {
                                                               position: relative;
                                                               }
                                                               #comp-k80c4fuyinlineContent-gridContainer > * {
                                                               pointer-events: auto;
                                                               }
                                                               #comp-k80c4fuyinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                               pointer-events: none;
                                                               }
                                                               #comp-k80c4fuyinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                               pointer-events: auto;
                                                               }
                                                            </style>
                                                            <div id="comp-k80c4fuyinlineContent-gridWrapper" data-mesh-internal="true">
                                                               <div id="comp-k80c4fuyinlineContent-gridContainer" data-mesh-internal="true">
                                                                  <div data-packed="true" style="top:;bottom:;left:;right:;width:537px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k80c4fv5">
                                                                     <h1 class="font_0" style="font-size:50px;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;"><span style="font-size:50px;">Rechtliche Grundlagen</span></span></span></span></h1>
                                                                  </div>
                                                                  <div style="top:;bottom:;left:;right:;width:318px;height:318px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="12" data-content-padding-vertical="12" data-exact-height="318" class="style-k80c4fv41" id="comp-k80c4fv2">
                                                                     <div style="width:306px;height:306px" id="comp-k80c4fv2link" class="style-k80c4fv41link">
                                                                        <wix-image style="width:306px;height:306px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-k80c4fv21&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_14b151f57d5848c4af0f85afe24a8587~mv2.jpg&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:365,&quot;height&quot;:365,&quot;alt&quot;:&quot;2588fc51-7f3e-4164-b78a-4488ae7d16b9-B1.&quot;,&quot;name&quot;:&quot;2588fc51-7f3e-4164-b78a-4488ae7d16b9-B1.&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-k80c4fv2&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-k80c4fv2img" class="style-k80c4fv41img"><img id="comp-k80c4fv2imgimage" style="object-position:50% 50%;width:306px;height:306px;object-fit:cover" alt="2588fc51-7f3e-4164-b78a-4488ae7d16b9-B1." data-type="image" itemProp="image" src="media/others/client.jpg"/></wix-image>
                                                                     </div>
                                                                  </div>
                                                                  <div data-packed="true" style="top:;bottom:;left:;right:;width:410px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k80c4fv8">
                                                                     <p class="font_7" style="text-align:center;"><span style="font-style:italic;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">Rechtsanw&auml;ltin&nbsp;</span></span><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:#000000;">Mag. Petra Laback </span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">informiert.</span></span></span></p>
                                                                  </div>
                                                                  <div data-packed="true" style="top:;bottom:;left:;right:;width:980px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k80c4fva">
                                                                     <!-- <ul class="font_8" style="color:rgb(0, 0, 0); font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light; font-size:18px; letter-spacing:-0.05em;">
                                                                    
                                                                     </ul> -->

                                                                     <ul class="font_8" style="color:rgb(0, 0, 0); font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light; font-size:18px; letter-spacing:-0.05em;margin-top: 42px;">
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Der bedungene Gebrauch des Bestandsgegenstandes muss vereitelt sein, es genügt jedoch, wenn die Gebrauchsbeeinträchtigung eine Zeit lang andauert. Die erforderliche Dauer ist nicht exakt festgelegt.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Von einer Gebrauchsbeeinträchtigung kann gegenständlich jedoch nur die Rede sein, wenn der&nbsp;Betrieb behördlich geschlossen&nbsp;ist, beispielsweise wegen eines bestätigten Corona-Falls&nbsp;gem § 20 Epidemiegesetz. Dies gilt auch für behördlich angeordnete Räumungen von Wohnungen und Gebäuden gem § 22 Epidemiegesetz. Die Unbrauchbarkeit muss sich nämlich auf das Bestandsobjekt direkt beziehen; es muss für jeden potentiellen Bestandnehmer unbrauchbar sein (Binder/Pesek in Schwimann/Kodek, Praxiskommentar zum ABGB § 1104 ABGB Rz 2 unter Bezug auf GlUNF 7543; Klang in Klang V² 81; Th. Rabel, ecolex 1999, 150; Hirsch, ZVR 2000, 4f). Dies liegt jedenfalls vor, wenn eine behördliche Schließung verfügt wurde.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Eine Gebrauchsbeeinträchtigung wird in vielen Fällen auch dann vorliegen, wenn das Unternehmen bzw der Betrieb von der&nbsp;</span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">VO des BMSGPK betreffend vorläufiger Maßnahmen zur Verhinderung der Verbreitung von COVID-19 BGBl II Nr. 96/2020 („Betretungsverbote-VO“</span></span><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">)&nbsp;betroffen ist. Denn darin ist das „Betreten des Kundenbereichs von Betriebsstätten des Handels und von Dienstleistungsunternehmen sowie von Freizeit- und Sportbetrieben zum Zweck des Erwerbs von Waren oder der Inanspruchnahme von Dienstleistungen oder der Benützung von Freizeit- und Sportbetrieben“ untersagt, sofern es sich nicht um einen in § 2 Z 1 – 21 leg cit aufgezählten Betrieb handelt. Gem § 4 dieser VO ist das Betreten von Betriebsstätten sämtlicher Betriebsarten der Gastgewerbe untersagt, sofern nicht eine Ausnahme gem § 4 Abs 2 vorliegt. Gem § 3 der&nbsp;</span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">Verordnung BGBl II 107/2020 (Änderung der COVID-19-Maßnahmenverordnung)</span></span><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">&nbsp;ist nun auch das Betreten von Kuranstalten gem § 42a KAKuG für Kurgäste und Rehabilitationseinrichtungen verboten, sofern in Letzteren nicht Patienten unbedingt Behandlungen in Anspruch nehmen müssen. Ebenso ist gem § 5 das Betreten von Sportplätzen verboten.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-weight:bold;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Der Umfang der Einschränkung der Brauchbarkeit ist jedoch nach dem Einzelfall zu prüfen.</span></span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Mieter und Pächter sind gut beraten, wenn sie die Miet- und Pachtzinse nur noch unter Vorbehalt bezahlen, ansonsten kann eine vorbehaltslose Weiterzahlung als Verzicht auf den Minderungsanspruch gelten. Der Unglücksfall der COVID-19-Seuche&nbsp;muss&nbsp;nach der Rechtsprechung (vgl 2 Ob 295/48; 6 Ob 38/11y) bzw </span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="color:#000000;">gem § 1108 ABGB&nbsp;ohne Zeitverlust beim Vermieter bzw Verpächter angezeigt</span></span><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;"> werden, um eine nachträgliche Miet- bzw Pachtzinsrückforderung geltend machen zu können.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Wenn der Bestandnehmer die Zahlung des Bestandszinses zum Teil oder gar gänzlich aussetzt, kann der Bestandgeber den Vertrag aufkündigen und Mietzins- und Räumungsklage erheben. Sofern es sich um dem MRG unterworfene Bestandsobjekte handelt, kann das Gericht im Verfahren einen Beschluss gem § 33 Abs 2 und 3 MRG fällen, womit dem Bestandnehmer die Möglichkeit eröffnet wird, den als offen aushaftend festgestellten Mietzins zu bezahlen, wodurch die Räumung jedenfalls abgewendet werden kann. Dies gilt jedoch nicht für Unternehmenspachtverträge.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="color:#000000;">Die Unbrauchbarkeit führt im Übrigen nicht zum Erlöschen des Bestandsvertrages.“</span></span></span></p>
	</li>
</ul>


                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div data-packed="true" style="top:;bottom:;left:;right:;width:532px;height:auto;position:;pointer-events:none" class="txtNew" id="comp-k80c4fvc">
                                                         <!-- <ul class="font_8" style="color:rgb(0, 0, 0); font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8, wf_19b19ebbdc054b238cd8ba242, orig_ubuntu_light; font-size:18px; letter-spacing:-0.05em;">
                                                           
                                                         </ul> -->
                                                         <ul class="font_8" style="color:rgb(0, 0, 0); font-family:wfont_ef305b_736a916d09a94cd392744ed6af33990f,wf_736a916d09a94cd392744ed6a,orig_ubuntu; font-size:18px; letter-spacing:-0.05em;">
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="font-size:18px;"><span style="color:#000000;">"Gem § 1104 ABGB entfällt die Verpflichtung zur Zahlung von Miet- oder Pachtzins, wenn die in Bestand genommene Sache wegen außerordentlicher Zufälle – unter anderem Seuchen – nicht gebraucht oder benutzt werden kann. Außerordentliche Zufälle sind solche, die einen größeren Personenkreis treffen und von Menschen nicht beherrschbar sind, so dass für deren Folgen von niemandem Ersatz erwartet werden kann.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="font-size:18px;"><span style="color:#000000;">Diese Regelung kann jedoch im Bestandvertrag abbedungen sein</span></span></span><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="font-size:18px;"><span style="color:#000000;">, beispielsweise kann vereinbart sein, dass im Fall von außerordentlichen Zufällen der Mieter haftet. Ob dies vereinbart ist, sollte im Miet- und Pachtvertrag überprüft werden.</span></span></span></p>
	</li>
	<li>
	<p class="font_8" style="font-size:18px;"><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="font-size:18px;"><span style="color:#000000;">Eine derartige Regelung ist hinsichtlich COVID-19 gem § 1106 ABGB allerdings&nbsp;</span></span></span><span style="font-family:wfont_ef305b_ab00c6b7e0104f2cba163c837a7748c9,wf_ab00c6b7e0104f2cba163c837,orig_ubuntu_medium;"><span style="font-size:18px;"><span style="color:#000000;">nur wirksam, wenn sie konkret auf die Gefahr einer Seuche bzw. Epidemie Bezug</span></span></span><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="font-size:18px;"><span style="color:#000000;"> nimmt. Eine generelle und unbestimmte Haftungsübernahme des Mieters ist nur für die</span></span></span><span style="font-family:wfont_ef305b_19b19ebbdc054b238cd8ba24264519b8,wf_19b19ebbdc054b238cd8ba242,orig_ubuntu_light;"><span style="font-size:18px;"><span style="color:#000000;"> Gefahren der Feuer-, Wasserschäden und Wetterschläge rechtsgültig.</span></span></span></p>
	</li>
</ul>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div tabindex="-1" role="region" aria-label="Fragen" style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="fragen-antworten"> </div>
                                          <!-- <wix-iframe style="top:;bottom:;left:;right:;width:980px;height:422px;position:;overflow:hidden;visibility:hidden;min-height:422px;min-width:980px" data-has-iframe="true" data-is-tpa="true" data-widget-id="14c92de1-0e02-cbe5-98e9-c3de44d63a55" data-app-definition-id="14c92d28-031e-7910-c9a8-a670011e062d" id="comp-jlkzb5kx" class="style-jsuazwh9">
                                             <iframe data-src="https://wixlabs-wix-faq-11.appspot.com/index?cacheKiller=1584794407495&amp;compId=comp-jlkzb5kx&amp;currency=EUR&amp;deviceType=desktop&amp;editorCompId=comp-jlkzb5kx&amp;height=422&amp;instance=e1XxDTC4XfoxVAjvG8d5BrnwIBWKKaFjKVoaLHp2PIY.eyJpbnN0YW5jZUlkIjoiYzY1MjI2NjktNDZhZC00MjkyLThiODgtZDA1N2E0NmE0MWQ0IiwiYXBwRGVmSWQiOiIxNGM5MmQyOC0wMzFlLTc5MTAtYzlhOC1hNjcwMDExZTA2MmQiLCJtZXRhU2l0ZUlkIjoiOWRiZjJjOTctNzNhYi00MDdmLTg1Y2ItMDc1NWFlMjJmNjk3Iiwic2lnbkRhdGUiOiIyMDIwLTAzLTIxVDEyOjQ3OjIxLjMxMFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJhOWYzNjlmNi0yMjRlLTRmNjktODM4Yi00MWIzYzEzMzMxMmUiLCJhaWQiOiIwMmYwYjI1ZS01ZTk4LTQ0YTYtODFkOC02MjdjNDYzMjg2ZjkiLCJiaVRva2VuIjoiNWJlZDBhZmUtMzUwNi0wMmVkLTBlNDMtZDcwMjBhNDhiNzQzIiwic2l0ZU93bmVySWQiOiJlZjMwNWJlNi0yYTc3LTQ0OWEtOTU5Mi1hOGQxMDZiZDU1ZTkifQ&amp;locale=en&amp;pageId=c1dmp&amp;siteRevision=120&amp;tz=Europe%2FVienna&amp;viewMode=site&amp;width=980" scrolling="no" frameBorder="0" allow="autoplay; camera; microphone; geolocation; vr" allowtransparency="true" allowfullscreen="" name="comp-jlkzb5kx" style="width:980px;height:422px;min-height:422px;min-width:980px;display:block;position:absolute;z-index:" title="Wix FAQ" aria-label="Wix FAQ" id="comp-jlkzb5kxiframe" class="style-jsuazwh9iframe"></iframe>
                                             <div id="comp-jlkzb5kxoverlay" class="style-jsuazwh9overlay"></div>
                                          </wix-iframe> -->
                                          <div data-packed="false" style="top:;bottom:;left:;right:;width:432px;height:auto;position:;min-height:38px;pointer-events:none" data-min-height="38" class="txtNew" id="comp-jlz8n22d">
                                             <h2 class="font_2" style="font-size:40px; text-align:center;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:#2F2E2E;"><span style="font-size:40px;">Fragen &amp; Antworten</span></span></span></h2>
                                          </div>
                                          


<div style="background-color: white;height: auto;margin-top: -381px !important;    margin: auto;width: 58%;">
 
<style>
.panel-heading {
  position: relative;
}
.panel-heading[data-toggle="collapse"]:after {
  font-family: 'Glyphicons Halflings';
  content: "\e072"; /* "play" icon */
  position: absolute;
  color: #b0c5d8;
  font-size: 18px;
  line-height: 22px;
  right: 20px;
  top: calc(50% - 10px);

  /* rotate "play" icon from > (right arrow) to down arrow */
  -webkit-transform: rotate(-90deg);
  -moz-transform:    rotate(-90deg);
  -ms-transform:     rotate(-90deg);
  -o-transform:      rotate(-90deg);
  transform:         rotate(-90deg);
}
.panel-heading[data-toggle="collapse"].collapsed:after {
  /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
  -webkit-transform: rotate(90deg);
  -moz-transform:    rotate(90deg);
  -ms-transform:     rotate(90deg);
  -o-transform:      rotate(90deg);
  transform:         rotate(90deg);
}


</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<style>
  .panel-default>.panel-heading {
    color: #333;
    background-color: #ffffff !important;
    border-color: #fff;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 4px;
    /* -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); */
    box-shadow: 0 3px 0px #f1e0b6 !important;
    padding: 10px;
}
.panel {
    margin-bottom: 20px;
    background-color: #fff;
    border: 0px !important;
}
.panel-group .panel-heading+.panel-collapse>.list-group, .panel-group .panel-heading+.panel-collapse>.panel-body {
    border-top: 1px solid transparent;
}
.panel-title{
  color: rgba(100,102,102,1);
    font: normal normal normal 21px/1.9em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif !important;
    line-height: 1.2em;
    font-weight: 600 !important;
}

.panel-body {
    color: rgba(100,102,102,1);
    font: normal normal normal 14px/1.4em din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;
    font-size: 16px;
    line-height: 1.5em;
    font: normal normal normal 16px/20px din-next-w01-light,din-next-w02-light,din-next-w10-light,sans-serif;
    line-height: 1.5em;
}

.panel.panel-default {
    cursor: pointer;
}
</style>
<!-- Accordion START -->
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne">
            <h4 class="panel-title">Was kostet die Dienstleistung</h4>

          </div>
          <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
              <p>€180,00 zzgl. USt für die Finanzierung des Rechtsanwalts zur Durchführung einer Prüfung bzw. anschließender außergerichtlicher Korrespondenz mit dem Vermieter. Sofern Sie mit Mietheld die unter Vorbehalt weitergezahlten Mietzinse nachträglich zurückfordern möchten, fällt zunächst €0,00 an und nur im Erfolgsfall eine Provision von 35% des Streitwertes.
</p>
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo">
            <h4 class="panel-title">Welche Dienstleistungen werden angeboten?</h4>

          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
<p>Es handelt sich um eine (Prozess-)finanzierungsdienstleistung. Das bedeutet, dass ein Rechtsanwalt finanziert wird, um nach Ihrer Wahl die folgenden Tätigkeiten auszuführen (Diese können Sie im Formular auswählen=:<br/>
  - die individuelle Überprüfung Ihres Mietvertrages hinsichtlich eines Anspruchs einer Mietzinsminderung bzw. einer Mietzinsaussetzung<br/>
  - die Übermittlung der entsprechenden rechtlichen Auswertung an Sie<br/>
  - die Versendung eines rechtlichen Aufforderungsschreibens samt rechtlicher Grundlage der Mietzinsausetzung bzw. Weiterzahlung unter Vorbehalt zur Wahrung Ihrer Ansprüche an Ihren Vermieter.<br/>
  - Prozessfinanzierung zur nachträglichen Geltendmachung der unter Vorbehalt bezahlten Miet- bzw. Pachtzinse.
<br/></p>
            </div>
          </div>
        </div>


        <div class="panel panel-default">
          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree">
            <h4 class="panel-title">Welche Rolle spielt die Mietheld GmbH dabei?</h4>

          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Die Mietheld GmbH finanziert den Rechtsanwalt, der das Leistungspaket ausführt. Zudem übernimmt die Mietheld GmbH die Prozesskostenfinanzierung, sofern ein gewerblicher Mieter die Mietzinse unter Vorbehalt weiterzahlt und nachträglich (gerichtlich) rückfordern möchte. Die Mietheld GmbH übernimmt keine Prozesskostenfinanzierung im Falle einer Mietzins- bzw. Räumungsklage des Vermieters.</p>
            </div>
          </div>
        </div>




        <div class="panel panel-default">
          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour">
            <h4 class="panel-title">Wem bringt die Dienstleistung etwas?</h4>

          </div>
          <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Allen Betrieben in Österreich, die aufgrund der COVID-19-Pandemie ihr Mietobjekt nicht nutzen können, und wissen möchten, ob Sie keine bzw. weniger Miete zahlen können bzw. möglicherweise Ihren Vermieter zu Wahrung ihrer Ansprüche davon korrekt verständigen möchten und/oder nachträglich eine Rückforderung geltend machen möchten.</p>
            </div>
          </div>
        </div>

      </div>
      <!-- Accordion END -->
<script>
     /**
     * EFECTO PARA FLECHAS EN ACORDEON
     */
    
     $(document).on('show','.accordion', function (e) {
         //$('.accordion-heading i').toggleClass(' ');
         $(e.target).prev('.accordion-heading').addClass('accordion-opened');
    });
    
    $(document).on('hide','.accordion', function (e) {
        $(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
        //$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
    });
  </script>


</div>







                                          

                                          <div tabindex="-1" role="region" aria-label="Kontakt" style="left:0;margin-left:0;width:100%;min-width:initial;top:;bottom:;right:;height:21px;position:" class="AutoWidthAnchorSkin" id="kontaktieren"> </div>
                                          <div style="top:;bottom:;left:;right:;position:;margin-bottom: 50px;" class="style-jsuazwgf" id="comp-jlnyte8r">
                                             <div id="comp-jlnyte8rbg" class="style-jsuazwgfbg"></div>
                                             <div class="style-jsuazwgfinlineContent" id="comp-jlnyte8rinlineContent">
                                                <style id="comp-jlnyte8r-mesh-styles">
                                                   #comp-jlnyte8rinlineContent {
                                                   height: auto;
                                                   width: 1348px;
                                                   position: relative;
                                                   }
                                                   #comp-jlnyte8rinlineContent-gridWrapper {
                                                   pointer-events: none;
                                                   }
                                                   #comp-jlnyte8rinlineContent-gridContainer {
                                                   position: static;
                                                   display: grid;
                                                   height: auto;
                                                   width: 100%;
                                                   min-height: auto;
                                                   grid-template-rows: min-content min-content min-content min-content min-content min-content 1fr;
                                                   grid-template-columns: 100%;
                                                   }
                                                   #comp-jlnyu5ia {
                                                   position: relative;
                                                   margin: 34px 0px 44px 0;
                                                   left: 162px;
                                                   grid-area: 1 / 1 / 8 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-j7f22459 {
                                                   position: relative;
                                                   margin: 74px 0px 0 0;
                                                   left: 747px;
                                                   grid-area: 1 / 1 / 2 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlz9h7n7 {
                                                   position: relative;
                                                   margin: 45px 0px 20px 0;
                                                   left: 647px;
                                                   grid-area: 3 / 1 / 4 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlz9ilzv {
                                                   position: relative;
                                                   margin: 0px 0px 25px 0;
                                                   left: 658px;
                                                   grid-area: 4 / 1 / 5 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlz9jdo1 {
                                                   position: relative;
                                                   margin: 0px 0px 10px 0;
                                                   left: 658px;
                                                   grid-area: 5 / 1 / 6 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jmanu6d3 {
                                                   position: relative;
                                                   margin: 0px 0px 56px 0;
                                                   left: 962px;
                                                   grid-area: 3 / 1 / 7 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-k81l26kh {
                                                   position: relative;
                                                   margin: 0px 0px 35px 0;
                                                   left: 726px;
                                                   grid-area: 2 / 1 / 3 / 2;
                                                   justify-self: start;
                                                   align-self: start;
                                                   }
                                                   #comp-jlnyte8rcenteredContent {
                                                   position: relative;
                                                   }
                                                   #comp-jlnyte8rinlineContent-gridContainer > * {
                                                   pointer-events: auto;
                                                   }
                                                   #comp-jlnyte8rinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                                                   pointer-events: none;
                                                   }
                                                   #comp-jlnyte8rinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                                                   pointer-events: auto;
                                                   }
                                                </style>
                                                <div id="comp-jlnyte8rinlineContent-gridWrapper" data-mesh-internal="true">
                                                   <div id="comp-jlnyte8rinlineContent-gridContainer" data-mesh-internal="true">
                                                      <div style="top:;bottom:;left:;right:;width:511px;height:406px;position:" title="" data-is-responsive="false" data-display-mode="fill" data-content-padding-horizontal="0" data-content-padding-vertical="0" data-exact-height="406" class="ca1" id="comp-jlnyu5ia">
                                                         <div style="width:511px;height:406px" id="comp-jlnyu5ialink" class="ca1link">
                                                            <wix-image style="width:511px;height:406px;top:0;left:0" data-has-bg-scroll-effect="" data-image-info="{&quot;imageData&quot;:{&quot;type&quot;:&quot;Image&quot;,&quot;id&quot;:&quot;dataItem-jlnyu5lh&quot;,&quot;metaData&quot;:{&quot;pageId&quot;:&quot;c1dmp&quot;,&quot;isPreset&quot;:false,&quot;schemaVersion&quot;:&quot;2.0&quot;,&quot;isHidden&quot;:false},&quot;title&quot;:&quot;&quot;,&quot;uri&quot;:&quot;ef305b_f6959ba6f9a74be98a7f9bd8a03e16c9~mv2.png&quot;,&quot;description&quot;:&quot;&quot;,&quot;width&quot;:1186,&quot;height&quot;:944,&quot;alt&quot;:&quot;Bildschirmfoto 2018-09-02 um 17.37.56.pn&quot;,&quot;name&quot;:&quot;Bildschirmfoto 2018-09-02 um 17.37.56.pn&quot;,&quot;displayMode&quot;:&quot;fill&quot;},&quot;containerId&quot;:&quot;comp-jlnyu5ia&quot;,&quot;displayMode&quot;:&quot;fill&quot;}" data-has-ssr-src="true" data-is-svg="false" data-is-svg-mask="false" id="comp-jlnyu5iaimg" class="ca1img"><img id="comp-jlnyu5iaimgimage" style="object-position:50% 50%;width:511px;height:406px;object-fit:cover" alt="Bildschirmfoto 2018-09-02 um 17.37.56.pn" data-type="image" itemProp="image" src="media/others/three-client.png"/></wix-image>
                                                         </div>
                                                      </div>
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:377px;height:auto;position:;min-height:38px;pointer-events:none" data-min-height="38" class="txtNew" id="comp-j7f22459">
                                                         <h2 class="font_2" style="font-size:40px; text-align:center;"><span style="letter-spacing:-0.05em;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="color:#2F2E2E;"><span style="font-size:40px;">Kontaktieren Sie uns.</span></span></span></span></h2>
                                                      </div>
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:277px;height:auto;position:;min-height:38px;pointer-events:none" data-min-height="38" class="txtNew" id="comp-jlz9h7n7">
                                                         <!-- <h2 class="font_2" style="font-size:18px; text-align:center;"><span class="color_14"><span style="font-size:18px;"><a href="http://m.me/mietheld" target="_blank" data-content="http://m.me/mietheld" data-type="external" rel="noopener"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;"><span style="text-decoration:underline;">Eßlinggasse 4/6a, 1010 Wien</span></span></a></span></span></h2> -->
                                                         <h2 class="font_2" style="font-size:18px; text-align:center;"><span class="color_14"><span style="text-decoration:underline;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">Eßlinggasse 4/6a, 1010 Wien</span></span></span></span></h2>

                                                      </div>
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:249px;height:auto;position:;min-height:38px;pointer-events:none" data-min-height="38" class="txtNew" id="comp-jlz9ilzv">
                                                         <h2 class="font_2" style="font-size:18px; text-align:center;"><span class="color_14"><a href="mailto:kontakt@mietheld.at?subject=Homepage Anfrage" target="_self" data-content="kontakt@mietheld.at" data-type="mail"><span style="text-decoration:underline;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">Email kontakt@mietheld.at</span></span></span></a></span></h2>
                                                      </div>
                                                      <div data-packed="false" style="top:;bottom:;left:;right:;width:184px;height:auto;position:;min-height:25px;pointer-events:none" data-min-height="25" class="txtNew" id="comp-jlz9jdo1">
                                                         <h2 class="font_2" style="font-size:18px; text-align:center;"><span class="color_14"><a href="mailto:kontakt@mietheld.at?subject=Homepage Anfrage" target="_self" data-content="kontakt@mietheld.at" data-type="mail"><span style="text-decoration:underline;"><span style="font-size:18px;"><span style="font-family:wfont_ef305b_bb0ce061b76644cda03b0b852cd1e5bc,wf_bb0ce061b76644cda03b0b852,orig_ubuntu_bold;">Telefon: 01 34 80 30</span></span></span></a></span></h2>
                                                      </div>
                                                      <div style="min-width:280px;max-width:500px;min-height:214px;max-height:214px;top:;bottom:;left:;right:;width:280px;height:214px;position:" class="FacebookLikeBox_1" id="comp-jmanu6d3">
                                                         <!-- <div class="fb-page" data-href="http://www.facebook.com/mietheld" data-height="214" data-width="280" data-hide-cover="false" data-show-posts="false" data-show-facepile="true" data-adapt-container-width="true"></div> -->
                                                         <iframe name="f1ab809e644a0f8" width="280px" height="214px" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v2.4/plugins/page.php?adapt_container_width=true&amp;app_id=304553036307597&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df2ce56ba13aa3c%26domain%3Dwww.mietheld.at%26origin%3Dhttps%253A%252F%252Fwww.mietheld.at%252Ff1bd980796356c4%26relation%3Dparent.parent&amp;container_width=280&amp;height=214&amp;hide_cover=false&amp;href=http%3A%2F%2Fwww.facebook.com%2Fmietheld&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;width=280" style="border: none; visibility: visible; width: 280px; height: 181px;" class=""></iframe>
                                                      </div>
                                                      <div id="comp-k81l26kh" data-align="center" data-disabled="false" data-margin="0" data-should-use-flex="true" data-width="418" data-height="54" style="top:;bottom:;left:;right:;width:418px;height:54px;position:" class="style-jsuazwii" data-state="desktop shouldUseFlex center"><a href="https://mietheldgmbh.formstack.com/forms/kontaktanfrage" target="_blank" id="comp-k81l26khlink" class="g-transparent-a style-jsuazwiilink"><span id="comp-k81l26khlabel" class="style-jsuazwiilabel">GRATIS KONTAKTANFRAGE SENDEN</span></a></div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="c1dmpinlineContent-wedge-5" data-mesh-internal="true"></div>
                                          <div id="c1dmpinlineContent-wedge-31" data-mesh-internal="true"></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </main>
                  <div id="soapAfterPagesContainer" class="page-without-sosp">
                     <style id="soapAfterPagesContainer-mesh-styles">
                        #soapAfterPagesContainerinlineContent {
                        height: auto;
                        width: 100%;
                        position: relative;
                        }
                        #soapAfterPagesContainerinlineContent-gridContainer {
                        position: static;
                        height: auto;
                        width: 100%;
                        min-height: auto;
                        padding-bottom: 0px;
                        box-sizing: border-box;
                        }
                        #CONTROLLER_COMP_CUSTOM_ID {
                        position: absolute;
                        top: -70px;
                        left: 20px;
                        }
                        #soapAfterPagesContainercenteredContent {
                        position: relative;
                        }
                        #soapAfterPagesContainerinlineContent-gridWrapper {
                        pointer-events: none;
                        }
                        #soapAfterPagesContainerinlineContent-gridContainer > * {
                        pointer-events: auto;
                        }
                        #soapAfterPagesContainerinlineContent-gridContainer > [id$="-rotated-wrapper"] {
                        pointer-events: none;
                        }
                        #soapAfterPagesContainerinlineContent-gridContainer > [id$="-rotated-wrapper"] > * {
                        pointer-events: auto;
                        }
                     </style>
                     <div id="soapAfterPagesContainerinlineContent-gridContainer" data-mesh-internal="true">
                        <div style="width:;height:;top:;bottom:;left:;right:;position:" class="style-k7xjsg5i" id="CONTROLLER_COMP_CUSTOM_ID"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="aspectCompsContainer" class="siteAspectsContainer">
               <div style="position:absolute" id="popoverLayer"></div>
               <wix-iframe style="top:;bottom:;left:;right:;position:;overflow:hidden;visibility:hidden" data-has-iframe="true" data-is-tpa="true" data-app-definition-id="14ce28f7-7eb0-3745-22f8-074b0e2401fb" id="tpaWorker_9748" class="s_DtaksTPAWidgetSkin">
                  <iframe data-src="https://apps.wix.com/members-area/app-worker?cacheKiller=1584794407495&amp;compId=tpaWorker_9748&amp;currency=EUR&amp;deviceType=desktop&amp;editorCompId=tpaWorker_9748&amp;endpointType=worker&amp;instance=0lRtF6ILKf_RS03OS39k8S37dTW5tttyEJOHOxv5NZw.eyJpbnN0YW5jZUlkIjoiZmYzOGViZTAtMzJjMi00MzRiLTgyYTAtYzEyMGU3YzE0MWE1IiwiYXBwRGVmSWQiOiIxNGNlMjhmNy03ZWIwLTM3NDUtMjJmOC0wNzRiMGUyNDAxZmIiLCJtZXRhU2l0ZUlkIjoiOWRiZjJjOTctNzNhYi00MDdmLTg1Y2ItMDc1NWFlMjJmNjk3Iiwic2lnbkRhdGUiOiIyMDIwLTAzLTIxVDEyOjQ3OjIxLjMxMFoiLCJkZW1vTW9kZSI6ZmFsc2UsIm9yaWdpbkluc3RhbmNlSWQiOiJjYWEyN2Q2Yy1jNDZhLTRkMWItOTQxZC0zNmJkMTQ5ZWY0ZDQiLCJhaWQiOiIwMmYwYjI1ZS01ZTk4LTQ0YTYtODFkOC02MjdjNDYzMjg2ZjkiLCJiaVRva2VuIjoiNjI4N2M3NzctNDE2OS0wMzM0LTA3NmItYzY3NTQ5ZTNiNzMyIiwic2l0ZU93bmVySWQiOiJlZjMwNWJlNi0yYTc3LTQ0OWEtOTU5Mi1hOGQxMDZiZDU1ZTkifQ&amp;locale=en&amp;siteRevision=120&amp;tz=Europe%2FVienna&amp;viewMode=site" scrolling="no" frameBorder="0" allow="autoplay; camera; microphone; geolocation; vr" allowtransparency="true" allowfullscreen="" name="tpaWorker_9748" style="display:none;position:absolute;z-index:" title="Profile Card" aria-label="Profile Card" id="tpaWorker_9748iframe" class="s_DtaksTPAWidgetSkiniframe"></iframe>
                  <div id="tpaWorker_9748overlay" class="s_DtaksTPAWidgetSkinoverlay"></div>
               </wix-iframe>
            </div>
            <div id="SCROLL_TO_BOTTOM" tabindex="-1" aria-label="bottom of page" role="region" style="height:0"></div>
            <script id="partiallyVisibleBeat">
               if (window.wixBiSession) {
                   wixBiSession.isUsingMesh = true;
                   if (wixBiSession.sendBeat) {
                       wixBiSession.sendBeat(12, 'Partially visible', '&pid=c1dmp');
                   }
                   
               if (window.requestCloseWelcomeScreen) {
               window.requestCloseWelcomeScreen();
               }
               
               }
            </script>
         </div>
         <div class="font-ruler-container" style="overflow:hidden;visibility:hidden;max-height:0;max-width:0;position:absolute">
            <style>.font-ruler-content::after {content:"@#$%%^&*~IAO"}</style>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
            <div style="position:absolute;overflow:hidden;font-size:1200px;left:-2000px;visibility:hidden">
               <div style="position:relative;white-space:nowrap;font-family:serif">
                  <div style="position:absolute;width:100%;height:100%;overflow:hidden">
                     <div></div>
                  </div>
                  <span class="font-ruler-content"></span>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         var warmupData = {"layoutData":{"displayedPagesData":{"masterPage":{"structure":{"DESKTOP":{"SITE_BACKGROUND":{"id":"SITE_BACKGROUND","metaData":{"pageId":"masterPage"},"parent":"BOLT_SITE","componentType":"wysiwyg.viewer.components.SiteBackground","skin":"wysiwyg.viewer.skins.siteBackgroundSkin","layout":{},"styleId":"siteBackground"},"masterPage":{"id":"masterPage","type":"Document","metaData":{"pageId":"masterPage"},"componentType":"mobile.core.components.MasterPage","dataQuery":"#masterPage","modes":{"definitions":[{"type":"SHOW_ON_SOME_PAGES","modeId":"masterPage-mode-k7xjsj18","label":"SOSP-members_pages_group","settings":{"pagesGroupId":"#dataItem-k7xjsgxn"}}],"overrides":[]},"layout":{"y":0,"rotationInDegrees":0,"anchors":[{"distance":0,"type":"BOTTOM_TOP","locked":false,"targetComponent":"PAGES_CONTAINER"}]},"components":["SITE_HEADER","SITE_FOOTER","PAGES_CONTAINER","CONTROLLER_COMP_CUSTOM_ID"]},"SITE_HEADER":{"id":"SITE_HEADER","type":"Container","metaData":{"pageId":"masterPage"},"parent":"masterPage","componentType":"wysiwyg.viewer.components.HeaderContainer","skin":"wysiwyg.viewer.skins.screenwidthcontainer.DefaultScreen","connectionQuery":"connection-jsubjddh","layout":{"width":980,"height":85,"x":0,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwot","components":["comp-k80hiywd","comp-k80hj2zi","comp-k80hj54k","comp-k81ika71","comp-k81ikdm9","comp-k81ikffy","comp-k81ikqoz","comp-jlk3esfw","comp-jlk3f0xv","comp-jlk3f720","comp-jlxyyk1h","comp-jlk40r0r","comp-k3vwn1z8","comp-k3vwk1u9","comp-jljzkd5z","comp-j7q7ipup","comp-k8051orl"]},"SITE_FOOTER":{"id":"SITE_FOOTER","type":"Container","metaData":{"pageId":"masterPage"},"parent":"masterPage","componentType":"wysiwyg.viewer.components.FooterContainer","skin":"wysiwyg.viewer.skins.screenwidthcontainer.DefaultScreen","connectionQuery":"connection-jsubjdcs","layout":{"width":980,"height":174,"x":0,"y":5662,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80gtdsy","components":["comp-j7f54j7w"]},"PAGES_CONTAINER":{"id":"PAGES_CONTAINER","type":"Container","metaData":{"pageId":"masterPage"},"parent":"masterPage","componentType":"wysiwyg.viewer.components.PagesContainer","skin":"wysiwyg.viewer.skins.screenwidthcontainer.BlankScreen","connectionQuery":"connection-jsubjdby","layout":{"width":980,"height":5577,"x":0,"y":85,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"pc1","components":["SITE_PAGES"]},"comp-k80hiywd":{"id":"comp-k80hiywd","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k80hiyxw","connectionQuery":"connection-k80hiyy7","propertyQuery":"propItem-k80hiyxy","layout":{"width":551,"height":69,"x":552,"y":-2825,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k80hj2zi":{"id":"comp-k80hj2zi","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k80hj30a","connectionQuery":"connection-k80hj30b1","propertyQuery":"propItem-k80hj30a1","layout":{"width":551,"height":69,"x":420,"y":-2878,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k80hj54k":{"id":"comp-k80hj54k","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k80hj55e","connectionQuery":"connection-k80hj55f2","propertyQuery":"propItem-k80hj55f","layout":{"width":551,"height":69,"x":420,"y":-2878,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81ika71":{"id":"comp-k81ika71","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81ika8l","connectionQuery":"connection-k81ika8p","propertyQuery":"propItem-k81ika8n","layout":{"width":304,"height":54,"x":20,"y":-2363,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81ika8o"},"comp-k81ikdm9":{"id":"comp-k81ikdm9","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81ikdn8","connectionQuery":"connection-k81ikdn91","propertyQuery":"propItem-k81ikdn82","layout":{"width":304,"height":54,"x":20,"y":-2363,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81ika8o"},"comp-k81ikffy":{"id":"comp-k81ikffy","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81ikfgr","connectionQuery":"connection-k81ikfgs2","propertyQuery":"propItem-k81ikfgr2","layout":{"width":304,"height":54,"x":20,"y":-2363,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81ika8o"},"comp-k81ikqoz":{"id":"comp-k81ikqoz","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81ikqqd","connectionQuery":"connection-k81ikqqf","propertyQuery":"propItem-k81ikqqe","layout":{"width":304,"height":54,"x":20,"y":-2363,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81ika8o"},"comp-jlk3esfw":{"id":"comp-jlk3esfw","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlk3esg6","connectionQuery":"connection-jsubjdcn","propertyQuery":"propItem-jlk3esg8","layout":{"width":805,"height":65,"x":19,"y":-277,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlk3f0xv":{"id":"comp-jlk3f0xv","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlk3f0y5","connectionQuery":"connection-jsubjdci","propertyQuery":"propItem-jlk3f0y6","layout":{"width":805,"height":65,"x":19,"y":-318,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlk3f720":{"id":"comp-jlk3f720","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlk3f729","connectionQuery":"connection-jsubjdce","propertyQuery":"propItem-jlk3f7291","layout":{"width":805,"height":65,"x":19,"y":-331,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlxyyk1h":{"id":"comp-jlxyyk1h","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-jlxyyk67","connectionQuery":"connection-jsubjdcy","propertyQuery":"propItem-jlxyyk6b","layout":{"width":17,"height":17,"x":0,"y":27,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-jlk40r0r":{"id":"comp-jlk40r0r","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","skin":"wysiwyg.viewer.skins.WRichTextNewSkin","dataQuery":"#dataItem-jlk40r1o","connectionQuery":"connection-jsubjdc9","propertyQuery":"propItem-jlk40r59","layout":{"width":310,"height":21,"x":29,"y":25,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k3vwn1z8":{"id":"comp-k3vwn1z8","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k3vwn22r","connectionQuery":"connection-k3vwn23z","propertyQuery":"propItem-k3vwn22w","layout":{"width":17,"height":17,"x":152,"y":24,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k3vwk1u9":{"id":"comp-k3vwk1u9","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","skin":"wysiwyg.viewer.skins.WRichTextNewSkin","dataQuery":"#dataItem-k3vwk1wt","connectionQuery":"connection-k3vwk1x0","propertyQuery":"propItem-k3vwk1wv","layout":{"width":310,"height":21,"x":178,"y":24,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jljzkd5z":{"id":"comp-jljzkd5z","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.menus.DropDownMenu","skin":"wysiwyg.common.components.dropdownmenu.viewer.skins.TextOnlyMenuButtonSkin","dataQuery":"#dataItem-jljzkd7i","connectionQuery":"connection-jsubjddc","propertyQuery":"propItem-jljzkd7j","layout":{"width":621,"height":50,"x":359,"y":10,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwo8"},"comp-j7q7ipup":{"id":"comp-j7q7ipup","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-j7q7ipvd","connectionQuery":"connection-jsubjdd5","propertyQuery":"propItem-j7q7ipve","layout":{"width":88,"height":54,"x":1035,"y":8,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k8051orl":{"id":"comp-k8051orl","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_HEADER","componentType":"wysiwyg.viewer.components.WRichText","skin":"wysiwyg.viewer.skins.WRichTextNewSkin","dataQuery":"#dataItem-k8051ot3","connectionQuery":"connection-k8051ot6","propertyQuery":"propItem-k8051ot4","layout":{"width":310,"height":21,"x":1021,"y":64,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-j7f54j7w":{"id":"comp-j7f54j7w","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SITE_FOOTER","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-j7f54j8x","connectionQuery":"connection-jsubjdc4","propertyQuery":"propItem-j7f54j8x1","layout":{"width":980,"height":174,"x":0,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"SITE_PAGES":{"id":"SITE_PAGES","type":"Container","metaData":{"pageId":"masterPage"},"parent":"PAGES_CONTAINER","componentType":"wysiwyg.viewer.components.PageGroup","skin":"wysiwyg.viewer.skins.PageGroupSkin","connectionQuery":"connection-jsubjdbs","propertyQuery":"SITE_PAGES","layout":{"width":980,"height":5577,"x":0,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"components":[]},"CONTROLLER_COMP_CUSTOM_ID":{"id":"CONTROLLER_COMP_CUSTOM_ID","type":"Component","metaData":{"pageId":"masterPage"},"parent":"masterPage","componentType":"platform.components.AppController","skin":"platform.components.skins.controllerSkin","dataQuery":"#CONTROLLER_COMP_CUSTOM_ID","connectionQuery":"connection-k7xjsg6g","layout":{"width":96,"height":96,"x":20,"y":15,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k7xjsg5i"},"SOSP_CONTAINER_CUSTOM_ID":{"id":"SOSP_CONTAINER_CUSTOM_ID","type":"Container","metaData":{"pageId":"masterPage"},"parent":false,"componentType":"wysiwyg.viewer.components.SiteRegionContainer","modes":{"overrides":[{"modeIds":["masterPage-mode-k7xjsj18"],"isHiddenByModes":false}],"isHiddenByModes":true},"connectionQuery":"connection-k7xjsgnp","layout":{"width":291,"height":451,"x":0,"y":85,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k7xjsgms","components":["comp-k7xjshk1","comp-k7xjshjv"]},"comp-k7xjshjv":{"id":"comp-k7xjshjv","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SOSP_CONTAINER_CUSTOM_ID","componentType":"wysiwyg.common.components.verticalmenu.viewer.VerticalMenu","dataQuery":"#dataItem-k7xjsi2y","connectionQuery":"connection-k7xjsi3o","propertyQuery":"propItem-k7xjsi2y1","layout":{"width":250,"height":42,"x":20,"y":275,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k7xjsi2z"},"comp-k7xjshk1":{"id":"comp-k7xjshk1","type":"Component","metaData":{"pageId":"masterPage"},"parent":"SOSP_CONTAINER_CUSTOM_ID","componentType":"wysiwyg.viewer.components.tpapps.TPAWidget","skin":"wysiwyg.viewer.skins.TPAWidgetSkin","dataQuery":"#dataItem-k7xjshpu","connectionQuery":"connection-k7xjshs8","layout":{"width":250,"height":5,"x":20,"y":60,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"tpaw0"}}},"data":{"behaviors_data":{},"connections_data":{},"document_data":{"dataItem-j7q7ipvd":{"type":"Image","id":"dataItem-j7q7ipvd","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_797a6aaee9a14aedb3214dcfe4118f39~mv2.png","description":"","width":852,"height":538,"alt":"","crop":{"x":0,"y":10,"width":852,"height":519},"link":{"type":"PageLink","id":"dataItem-jlzacxmk","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"1.0","isHidden":false},"pageId":{"type":"Page","id":"c1dmp","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"Homepage","hideTitle":true,"icon":"","descriptionSEO":"Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision.","metaKeywordsSEO":"Miete Senken Altbau Richtwert Mietzins Mietsenkung ","pageTitleSEO":"Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien","pageUriSEO":"homepage","hidePage":true,"isMobileLandingPage":false,"underConstruction":false,"tpaApplicationId":0,"pageSecurity":{"requireLogin":false},"isPopup":false,"indexable":true,"isLandingPage":false,"pageBackgrounds":{"desktop":{"custom":true,"ref":{"type":"BackgroundMedia","id":"c1dmp_j7iwimtk_bg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"color":"{color_11}","alignType":"center","fittingType":"fill","scrollType":"fixed","colorOverlay":"","colorOverlayOpacity":0},"isPreset":true},"mobile":{"custom":true,"ref":{"type":"BackgroundMedia","id":"c1dmp_jlzdkfa5_bg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"color":"#F1E0B6","alignType":"center","fittingType":"fill","scr�#    �#                    `�)            ��'    x�#            0�#     @      0�#            "translationData":{"uriSEOTranslated":false},"ogImage":""},"target":"_self"},"displayMode":"fill"},"dataItem-jlxyyk67":{"type":"Image","id":"dataItem-jlxyyk67","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_eaccebeeeb8c41c0871bf3c087f351bd~mv2.png","description":"","width":1218,"height":1084,"alt":"Bildschirmfoto 2018-09-11 um 19.05.05.pn","name":"Bildschirmfoto 2018-09-11 um 19.05.05.pn","displayMode":"fill"},"dataItem-k3vwn22r":{"type":"Image","id":"dataItem-k3vwn22r","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_2e13b00a67da4435b5e3d9de9bb30179~mv2.png","description":"","width":500,"height":500,"alt":"kisspng-computer-icons-email-icon-design","name":"kisspng-computer-icons-email-icon-design","displayMode":"fill"},"masterPage":{"type":"Document","id":"masterPage","metaData":{"pageId":"masterPage","isPreset":true,"schemaVersion":"1.0","isHidden":false},"siteName":"Template Base","mainPage":{"type":"Page","id":"c1dmp","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"Homepage","hideTitle":true,"icon":"","descriptionSEO":"Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision.","metaKeywordsSEO":"Miete Senken Altbau Richtwert Mietzins Mietsenkung ","pageTitleSEO":"Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien","pageUriSEO":"homepage","hidePage":true,"isMobileLandingPage":false,"underConstruction":false,"tpaApplicationId":0,"pageSecurity":{"requireLogin":false},"isPopup":false,"indexable":true,"isLandingPage":false,"pageBackgrounds":{"desktop":{"custom":true,"ref":{"type":"BackgroundMedia","id":"c1dmp_j7iwimtk_bg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"color":"{color_11}","alignType":"center","fittingType":"fill","scrollType":"fixed","colorOverlay":"","colorOverlayOpacity":0},"isPreset":true},"mobile":{"custom":true,"ref":{"type":"BackgroundMedia","id":"c1dmp_jlzdkfa5_bg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"color":"#F1E0B6","alignType":"center","fittingType":"fill","scrollType":"fixed","colorOverlay":"","colorOverlayOpacity":0},"isPreset":false,"mediaSizing":"viewport"}},"translationData":{"uriSEOTranslated":false},"ogImage":""},"mainPageId":"c1dmp","renderModifiers":{"pageAutoShrink":true},"characterSets":["latin"],"usedFonts":[],"smSettings":{"socialLoginGoogleEnabled":true,"socialLoginFacebookEnabled":true},"layoutSettings":{"useDesktopSectionsLayout":true,"mechanism":"mesh","soapCompsAroundPagesContainer":true},"styleSettings":{"stylesPerPage":"1.0"},"mobileSettings":{"animationsEnabled":false}},"dataItem-k7xjshpu":{"type":"TPAWidget","id":"dataItem-k7xjshpu","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"1.0","isHidden":false},"applicationId":"9748","appDefinitionId":"14ce28f7-7eb0-3745-22f8-074b0e2401fb","widgetId":"14cefc05-d163-dbb7-e4ec-cd4f2c4d6ddd"},"c1dmp":{"type":"Page","id":"c1dmp","metaData":{"pageId":"masterPage","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"Homepage","hideTitle":true,"icon":"","descriptionSEO":"Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision.","metaKeywordsSEO":"Miete Senken Altbau Richtwert Mietzins Mietsenkung ","pageTitleSEO":"Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien","pageUriSEO":"homepage","hidePage":true,"isMobileLandingPage":false,"underConstruction":false,"tpaApplicationId":0,"pageSecurity":{"requireLogin":false},"isPopup":false,"indexable":true,"isLandingPage":false,"pageBackgrounds":{"desktop":{"custom":true,"ref":{"type":"BackgroundMedia","id":"c1dmp_j7iwimtk_bg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"color":"{color_11}","alignType":"center","fittingType":"fill","scrollType":"fixed","colorOverlay":"","colorOverlayOpacity":0},"isPreset":true},"mobile":{"custom":true,"ref":{"type":"BackgroundMedia","id":"c1dmp_jlzdkfa5_bg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"color":"#F1E0B6","alignType":"center","fittingType":"fill","scrollType":"fixed","colorOverlay":"","colorOverlayOpacity":0},"isPreset":false,"mediaSizing":"viewport"}},"translationData":{"uriSEOTranslated":false},"ogImage":""}},"design_data":{},"mobile_hints":{},"component_properties":{},"anchors_data":{},"breakpoints_data":{},"layout_data":{},"variants_data":{},"theme_data":{}}},"c1dmp":{"structure":{"DESKTOP":{"c1dmp":{"id":"c1dmp","type":"Page","metaData":{"pageId":"c1dmp"},"componentType":"mobile.core.components.Page","skin":"wysiwyg.viewer.skins.page.TransparentPageSkin","dataQuery":"#c1dmp","connectionQuery":"connection-jsubjdaj","propertyQuery":"propItem-j7919536","layout":{"width":1680,"height":5577,"x":0,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81fvw8t","components":["comp-j76jsqzm","comp-k7xul5f2","comp-jlk34a2s","comp-k803vqu5","comp-k80ht2e6","comp-k81ilvlg","comp-k81is4it","comp-jlk2d2q1","funktioniert","comp-k804gu0f","comp-k7z6a29p","comp-k7z5zmb2","comp-k7z6ceu8","comp-k7z6batq","comp-k803j3bm","comp-jlk4tftv","comp-k7z9ysoa","comp-k80e0a87","comp-k81fpsgs","comp-k81fqw4u","comp-k81fw1cc","comp-k81fwtfu","vorteile","comp-k2ysqosy","preise","comp-k81g58cb","comp-k81hj340","rechtliche","comp-k80c4ft0","fragen-antworten","comp-jlkzb5kx","comp-jlz8n22d","kontaktieren","comp-jlnyte8r"]},"comp-j76jsqzm":{"id":"comp-j76jsqzm","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-j76jsr2v","connectionQuery":"connection-jsubjd73","propertyQuery":"propItem-j76jsr2v1","layout":{"width":951,"height":96,"x":0,"y":5,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k7xul5f2":{"id":"comp-k7xul5f2","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k7xul5fw","connectionQuery":"connection-k7xul5fy1","propertyQuery":"propItem-k7xul5fx","layout":{"width":883,"height":100,"x":0,"y":109,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlk34a2s":{"id":"comp-jlk34a2s","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WPhoto","skin":"wysiwyg.viewer.skins.photo.NoSkinPhoto","dataQuery":"#dataItem-jlk34a8e","connectionQuery":"connection-jsubjd8z","propertyQuery":"propItem-jlk34a8e1","layout":{"width":1344,"height":551,"x":-182,"y":193,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80s6h1b"},"comp-k803vqu5":{"id":"comp-k803vqu5","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k803vqv4","connectionQuery":"connection-k803vqv7","propertyQuery":"propItem-k803vqv6","layout":{"width":304,"height":46,"x":0,"y":175,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81iwzv7"},"comp-k80ht2e6":{"id":"comp-k80ht2e6","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k80ht2fw","connectionQuery":"connection-k80ht2fz","propertyQuery":"propItem-k80ht2fx","layout":{"width":529,"height":108,"x":451,"y":453,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81ilvlg":{"id":"comp-k81ilvlg","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81ilvme","connectionQuery":"connection-k81ilvmz","propertyQuery":"propItem-k81ilvmf","layout":{"width":310,"height":46,"x":567,"y":570,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81kzflh"},"comp-k81is4it":{"id":"comp-k81is4it","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WPhoto","skin":"wysiwyg.viewer.skins.photo.NoSkinPhoto","dataQuery":"#dataItem-k81is4jr","connectionQuery":"connection-k81is4js1","propertyQuery":"propItem-k81is4jr1","layout":{"width":123,"height":128,"x":653,"y":320,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80s6h1b"},"comp-jlk2d2q1":{"id":"comp-jlk2d2q1","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"mobile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-jsubjd9f","layout":{"width":1344,"height":70,"x":-182,"y":744,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k7xqzco9","components":["comp-jlk4pbav","comp-jnp4kr9t","comp-jljz6ykx","comp-k3yg2l2w"]},"funktioniert":{"id":"funktioniert","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.common.components.anchor.viewer.Anchor","skin":"AutoWidthAnchorSkin","dataQuery":"#dataItem-jlz9z6t9","connectionQuery":"connection-jsubjd9p","layout":{"width":1680,"height":21,"x":-350,"y":840,"scale":1,"rotationInDegrees":0,"fixedPosition":false,"docked":{"left":{"vw":0,"px":0},"right":{"vw":0,"px":0}}}},"comp-k804gu0f":{"id":"comp-k804gu0f","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"mobile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-k804gu22","layout":{"width":931,"height":702,"x":-182,"y":880,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80gjxad","components":["comp-jlkj4w0d","comp-jlk5futr","comp-jlk5fe9s"]},"comp-k7z6a29p":{"id":"comp-k7z6a29p","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WPhoto","skin":"wysiwyg.viewer.skins.photo.NoSkinPhoto","dataQuery":"#dataItem-k7z6a2dq","connectionQuery":"connection-k7z6a2eg","propertyQuery":"propItem-k7z6a2ds","layout":{"width":200,"height":39,"x":776,"y":880,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80blg8s"},"comp-k7z5zmb2":{"id":"comp-k7z5zmb2","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k7z5zmb21","connectionQuery":"connection-k7z5zmb41","propertyQuery":"propItem-k7z5zmb3","layout":{"width":206,"height":143,"x":773,"y":947,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k7z6ceu8":{"id":"comp-k7z6ceu8","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k7z6ceva","connectionQuery":"connection-k7z6ceve","propertyQuery":"propItem-k7z6cevd","layout":{"width":199,"height":39,"x":780,"y":1104,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k7z6batq":{"id":"comp-k7z6batq","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k7z6bauj","connectionQuery":"connection-k7z6baum","propertyQuery":"propItem-k7z6bauk","layout":{"width":206,"height":219,"x":773,"y":1143,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k803j3bm":{"id":"comp-k803j3bm","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k803j3cg","connectionQuery":"connection-k803j3cm","propertyQuery":"propItem-k803j3cl","layout":{"width":199,"height":39,"x":773,"y":1362,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-jlk4tftv":{"id":"comp-jlk4tftv","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlk4tfup","connectionQuery":"connection-jsubjd6r","propertyQuery":"propItem-jlk4tfup1","layout":{"width":980,"height":65,"x":3,"y":908,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k7z9ysoa":{"id":"comp-k7z9ysoa","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k7z9ysp9","connectionQuery":"connection-k7z9yspd","propertyQuery":"propItem-k7z9yspb","layout":{"width":206,"height":196,"x":773,"y":1442,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k80e0a87":{"id":"comp-k80e0a87","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"mobile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-k80e0aad","layout":{"width":163,"height":711,"x":999,"y":880,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80gmbgq","components":[]},"comp-k81fpsgs":{"id":"comp-k81fpsgs","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.VectorImage","skin":"skins.viewer.VectorImageSkin","dataQuery":"#dataItem-k81fpsv9","connectionQuery":"connection-k81fpswa","propertyQuery":"propItem-k81fpsvb","layout":{"width":1680,"height":94,"x":-349,"y":1638,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"designQuery":"#dataItem-k81fpsvc","styleId":"style-k81fpsvi"},"comp-k81fqw4u":{"id":"comp-k81fqw4u","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k81fqw5s","connectionQuery":"connection-k81fqw61","propertyQuery":"propItem-k81fqw5t","layout":{"width":756,"height":62,"x":10,"y":1654,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81fw1cc":{"id":"comp-k81fw1cc","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","skin":"wysiwyg.viewer.skins.WRichTextNewSkin","dataQuery":"#dataItem-k81fw1dd","connectionQuery":"connection-k81fw1dz","propertyQuery":"propItem-k81fw1ht","layout":{"width":438,"height":52,"x":231,"y":1660,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81fwtfu":{"id":"comp-k81fwtfu","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81fwtgk","connectionQuery":"connection-k81fwtgn1","propertyQuery":"propItem-k81fwtgm","layout":{"width":284,"height":54,"x":660,"y":1658,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwii"},"vorteile":{"id":"vorteile","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.common.components.anchor.viewer.Anchor","skin":"AutoWidthAnchorSkin","dataQuery":"#dataItem-k81kjfq7","connectionQuery":"connection-k81kjfr2","layout":{"width":1918,"height":21,"x":-469,"y":1768,"scale":1,"rotationInDegrees":0,"fixedPosition":false,"docked":{"left":{"vw":0,"px":0},"right":{"vw":0,"px":0}}}},"comp-k2ysqosy":{"id":"comp-k2ysqosy","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"mobile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-k2ysqoui","layout":{"width":1345,"height":591,"x":-194,"y":1799,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81hmcq9","components":["comp-k808tmbe","comp-k2yss5zy","comp-j7f2246a"]},"preise":{"id":"preise","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.common.components.anchor.viewer.Anchor","skin":"AutoWidthAnchorSkin","dataQuery":"#dataItem-k81kk2xw","connectionQuery":"connection-k81kk2yi","layout":{"width":1918,"height":21,"x":-469,"y":2434,"scale":1,"rotationInDegrees":0,"fixedPosition":false,"docked":{"left":{"vw":0,"px":0},"right":{"vw":0,"px":0}}}},"comp-k81g58cb":{"i�#    �#                    `�)            ��'    x�#            0�#     @      0�#            bile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-k81g58di1","layout":{"width":1345,"height":681,"x":-182,"y":2465,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81h7oj4","components":["comp-k81g58dn","comp-k81icmke","comp-k81ib2nz","comp-k81ifj0r","comp-k81hngym"]},"comp-k81hj340":{"id":"comp-k81hj340","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81hj352","connectionQuery":"connection-k81hj3551","propertyQuery":"propItem-k81hj353","layout":{"width":200,"height":54,"x":387,"y":3182,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwix"},"rechtliche":{"id":"rechtliche","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.common.components.anchor.viewer.Anchor","skin":"AutoWidthAnchorSkin","dataQuery":"#dataItem-k81kkki3","connectionQuery":"connection-k81kkkip","layout":{"width":1918,"height":21,"x":-469,"y":3161,"scale":1,"rotationInDegrees":0,"fixedPosition":false,"docked":{"left":{"vw":0,"px":0},"right":{"vw":0,"px":0}}}},"comp-k80c4ft0":{"id":"comp-k80c4ft0","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.Group","skin":"wysiwyg.viewer.components.GroupSkin","connectionQuery":"connection-k80c4fux","layout":{"width":1339,"height":1156,"x":-155,"y":3278,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"components":["comp-k80c4fuy","comp-k80c4fvc"]},"fragen-antworten":{"id":"fragen-antworten","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.common.components.anchor.viewer.Anchor","skin":"AutoWidthAnchorSkin","dataQuery":"#dataItem-jlz9zo1v","connectionQuery":"connection-jsubjd9m","layout":{"width":1680,"height":21,"x":-350,"y":4470,"scale":1,"rotationInDegrees":0,"fixedPosition":false,"docked":{"left":{"vw":0,"px":0},"right":{"vw":0,"px":0}}}},"comp-jlkzb5kx":{"id":"comp-jlkzb5kx","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.tpapps.TPAWidget","skin":"wysiwyg.viewer.skins.TPAWidgetSkin","dataQuery":"#dataItem-jlkzb632","connectionQuery":"connection-jsubjd9s","layout":{"width":980,"height":422,"x":0,"y":4511,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwh9"},"comp-jlz8n22d":{"id":"comp-jlz8n22d","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlz8n22j","connectionQuery":"connection-jsubjd61","propertyQuery":"propItem-jlz8n22k","layout":{"width":432,"height":51,"x":271,"y":4506,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"kontaktieren":{"id":"kontaktieren","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"wysiwyg.common.components.anchor.viewer.Anchor","skin":"AutoWidthAnchorSkin","dataQuery":"#dataItem-jlza0gef","connectionQuery":"connection-jsubjd9i","layout":{"width":1680,"height":21,"x":-350,"y":4900,"scale":1,"rotationInDegrees":0,"fixedPosition":false,"docked":{"left":{"vw":0,"px":0},"right":{"vw":0,"px":0}}}},"comp-jlnyte8r":{"id":"comp-jlnyte8r","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"c1dmp","componentType":"mobile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-jsubjd96","layout":{"width":1348,"height":484,"x":-184,"y":4946,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwgf","components":["comp-jlnyu5ia","comp-j7f22459","comp-jlz9h7n7","comp-jlz9ilzv","comp-jlz9jdo1","comp-jmanu6d3","comp-k81l26kh"]},"comp-jlk4pbav":{"id":"comp-jlk4pbav","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlk2d2q1","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlk4pbbu","connectionQuery":"connection-jsubjd6w","propertyQuery":"propItem-jlk4pbbv","layout":{"width":124,"height":31,"x":15,"y":20,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jnp4kr9t":{"id":"comp-jnp4kr9t","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlk2d2q1","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-jnp4krd5","connectionQuery":"connection-jsubjd8t","propertyQuery":"propItem-jnp4krdb","layout":{"width":85,"height":36,"x":182,"y":17,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-jljz6ykx":{"id":"comp-jljz6ykx","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"comp-jlk2d2q1","componentType":"wysiwyg.viewer.components.Group","skin":"wysiwyg.viewer.components.GroupSkin","connectionQuery":"connection-jsubjdab","layout":{"width":862,"height":46,"x":310,"y":12,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"components":["comp-j76maixh","comp-j77jv7xm","comp-j76lncaq","comp-j76lhpzc","comp-j76kzrio"]},"comp-k3yg2l2w":{"id":"comp-k3yg2l2w","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlk2d2q1","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k3yg2l6t","connectionQuery":"connection-k3yg2l86","propertyQuery":"propItem-k3yg2l6z","layout":{"width":77,"height":64,"x":1214,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-jlkj4w0d":{"id":"comp-jlkj4w0d","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k804gu0f","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlkj4w0k","connectionQuery":"connection-jsubjd6o","propertyQuery":"propItem-jlkj4w0l","layout":{"width":745,"height":506,"x":186,"y":117,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlk5futr":{"id":"comp-jlk5futr","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k804gu0f","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-jlk5fuuj","connectionQuery":"connection-jsubjd9z","propertyQuery":"propItem-jlk5fuuj1","layout":{"width":418,"height":54,"x":423,"y":605,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwii"},"comp-jlk5fe9s":{"id":"comp-jlk5fe9s","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k804gu0f","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-jlk5feaj","connectionQuery":"connection-jsubjda2","propertyQuery":"propItem-jlk5feak","layout":{"width":200,"height":54,"x":182,"y":605,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwix"},"comp-k808tmbe":{"id":"comp-k808tmbe","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k2ysqosy","componentType":"wysiwyg.viewer.components.WPhoto","skin":"wysiwyg.viewer.skins.photo.NoSkinPhoto","dataQuery":"#dataItem-k808tme9","connectionQuery":"connection-k808tmew","propertyQuery":"propItem-k808tmed","layout":{"width":358,"height":393,"x":148,"y":90,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80blg8s"},"comp-k2yss5zy":{"id":"comp-k2yss5zy","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k2ysqosy","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k2yss612","connectionQuery":"connection-k2yss613","propertyQuery":"propItem-k2yss6121","layout":{"width":449,"height":65,"x":578,"y":42,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-j7f2246a":{"id":"comp-j7f2246a","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k2ysqosy","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-j7f2246b","connectionQuery":"connection-jsubjd63","propertyQuery":"propItem-j7f2246b1","layout":{"width":584,"height":391,"x":578,"y":138,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81g58dn":{"id":"comp-k81g58dn","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k81g58cb","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k81g58dn1","connectionQuery":"connection-k81g58dp","propertyQuery":"propItem-k81g58do","layout":{"width":294,"height":65,"x":525,"y":29,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81icmke":{"id":"comp-k81icmke","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k81g58cb","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k81icml8","connectionQuery":"connection-k81icmlb","propertyQuery":"propItem-k81icmla","layout":{"width":72,"height":72,"x":321,"y":110,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k81ib2nz":{"id":"comp-k81ib2nz","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k81g58cb","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k81ib2ot","connectionQuery":"connection-k81ib2ow","propertyQuery":"propItem-k81ib2ov","layout":{"width":81,"height":81,"x":671,"y":110,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k81ifj0r":{"id":"comp-k81ifj0r","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k81g58cb","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-k81ifj1p","connectionQuery":"connection-k81ifj1r","propertyQuery":"propItem-k81ifj1q","layout":{"width":81,"height":81,"x":979,"y":110,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k81hngym":{"id":"comp-k81hngym","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"comp-k81g58cb","componentType":"wysiwyg.viewer.components.Group","skin":"wysiwyg.viewer.components.GroupSkin","connectionQuery":"connection-k81hnh0k","layout":{"width":984,"height":534,"x":182,"y":201,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"components":["comp-k81g58dp1","comp-k81h9g8j","comp-k81hajlx"]},"comp-k80c4fuy":{"id":"comp-k80c4fuy","type":"Container","metaData":{"pageId":"c1dmp"},"parent":"comp-k80c4ft0","componentType":"mobile.core.components.Container","skin":"wysiwyg.viewer.skins.area.DefaultAreaSkin","connectionQuery":"connection-k80c4fv11","layout":{"width":1339,"height":1156,"x":0,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k81hlnyp","components":["comp-k80c4fv5","comp-k80c4fv2","comp-k80c4fv8","comp-k80c4fva"]},"comp-k80c4fvc":{"id":"comp-k80c4fvc","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k80c4ft0","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k80c4fvc1","connectionQuery":"connection-k80c4fvd2","propertyQuery":"propItem-k80c4fvd","layout":{"width":532,"height":368,"x":182,"y":171,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlnyu5ia":{"id":"comp-jlnyu5ia","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-jlnyu5lh","connectionQuery":"connection-jsubjd7a","propertyQuery":"propItem-jlnyu5li","layout":{"width":511,"height":406,"x":162,"y":34,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-j7f22459":{"id":"comp-j7f22459","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-j7f224591","connectionQuery":"connection-jsubjd5q","propertyQuery":"propItem-j7f224592","layout":{"width":377,"height":51,"x":747,"y":74,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlz9h7n7":{"id":"comp-jlz9h7n7","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlz9h7nx","connectionQuery":"connection-jsubjd5n","propertyQuery":"propItem-jlz9h7ny","layout":{"width":218,"height":38,"x":647,"y":259,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlz9ilzv":{"id":"comp-jlz9ilzv","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlz9im0m","connectionQuery":"connection-jsubjd5l","propertyQuery":"propItem-jlz9im0m2","layout":{"width":249,"height":38,"x":658,"y":317,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jlz9jdo1":{"id":"comp-jlz9jdo1","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-jlz9jdov","connectionQuery":"connection-jsubjd5h","propertyQuery":"propItem-jlz9jdow","layout":{"width":184,"height":25,"x":658,"y":380,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-jmanu6d3":{"id":"comp-jmanu6d3","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.common.components.facebooklikebox.viewer.FacebookLikeBox","skin":"wysiwyg.common.components.facebooklikebox.viewer.skins.FacebookLikeBoxSkin","dataQuery":"#dataItem-jmanu6ee","connectionQuery":"connection-jsubjd76","propertyQuery":"propItem-jmanu6eg","layout":{"width":280,"height":214,"x":962,"y":214,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"FacebookLikeBox_1"},"comp-k81l26kh":{"id":"comp-k81l26kh","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jlnyte8r","componentType":"wysiwyg.viewer.components.SiteButton","skin":"wysiwyg.viewer.skins.button.BasicButton","dataQuery":"#dataItem-k81l26lz","connectionQuery":"connection-k81l26m4","propertyQuery":"propItem-k81l26m2","layout":{"width":418,"height":54,"x":726,"y":125,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-jsuazwii"},"comp-j76maixh":{"id":"comp-j76maixh","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jljz6ykx","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-j76maj3y","connectionQuery":"connection-jsubjd8r","propertyQuery":"propItem-j76maj3y1","layout":{"width":168,"height":30,"x":0,"y":8,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-j77jv7xm":{"id":"comp-j77jv7xm","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jljz6ykx","componentType":"wysiwyg.viewer.components.WPhoto","skin":"wysiwyg.viewer.skins.photo.NoSkinPhoto","dataQuery":"#dataItem-j77jv81j","connectionQuery":"connection-jsubjd8o","propertyQuery":"propItem-j77jv81j1","layout":{"width":183,"height":21,"x":201,"y":13,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-j76lncaq":{"id":"comp-j76lncaq","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jljz6ykx","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-j76lnceb","connectionQuery":"connection-jsubjd8l","propertyQuery":"propItem-j76lncec","layout":{"width":111,"height":33,"x":427,"y":6,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-j76lhpzc":{"id":"comp-j76lhpzc","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jljz6ykx","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-j76lhq6o","connectionQuery":"connection-jsubjd8i","propertyQuery":"propItem-j76lhq6p","layout":{"width":138,"height":31,"x":585,"y":8,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-j76kzrio":{"id":"comp-j76kzrio","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-jljz6ykx","componentType":"wysiwyg.viewer.components.WPhoto","dataQuery":"#dataItem-j76kzrn6","connectionQuery":"connection-jsubjd8d","propertyQuery":"propItem-j76kzrn7","layout":{"width":100,"height":46,"x":762,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"ca1"},"comp-k81g58dp1":{"id":"comp-k81g58dp1","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k81hngym","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k81g58dq","connectionQuery":"connection-k81g58dq3","propertyQuery":"propItem-k81g58dq1","layout":{"width":358,"height":463,"x":0,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId�#    �#                    `�)            ��'    x�#            0�#     @      0�#            nt":"comp-k81hngym","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k81h9g95","connectionQuery":"connection-k81h9g981","propertyQuery":"propItem-k81h9g97","layout":{"width":320,"height":262,"x":366,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k81hajlx":{"id":"comp-k81hajlx","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k81hngym","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k81hajmw","connectionQuery":"connection-k81hajn0","propertyQuery":"propItem-k81hajmy","layout":{"width":294,"height":243,"x":690,"y":0,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k80c4fv5":{"id":"comp-k80c4fv5","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k80c4fuy","componentType":"wysiwyg.viewer.components.WRichText","dataQuery":"#dataItem-k80c4fv6","connectionQuery":"connection-k80c4fv71","propertyQuery":"propItem-k80c4fv61","layout":{"width":537,"height":65,"x":202,"y":70,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k80c4fv2":{"id":"comp-k80c4fv2","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k80c4fuy","componentType":"wysiwyg.viewer.components.WPhoto","skin":"wysiwyg.viewer.skins.photo.CirclePhoto","dataQuery":"#dataItem-k80c4fv21","connectionQuery":"connection-k80c4fv42","propertyQuery":"propItem-k80c4fv4","layout":{"width":318,"height":318,"x":788,"y":171,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"style-k80c4fv41"},"comp-k80c4fv8":{"id":"comp-k80c4fv8","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k80c4fuy","componentType":"wysiwyg.viewer.components.WRichText","skin":"wysiwyg.viewer.skins.WRichTextNewSkin","dataQuery":"#dataItem-k80c4fv81","connectionQuery":"connection-k80c4fv91","propertyQuery":"propItem-k80c4fv9","layout":{"width":410,"height":23,"x":742,"y":493,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"},"comp-k80c4fva":{"id":"comp-k80c4fva","type":"Component","metaData":{"pageId":"c1dmp"},"parent":"comp-k80c4fuy","componentType":"wysiwyg.viewer.components.WRichText","skin":"wysiwyg.viewer.skins.WRichTextNewSkin","dataQuery":"#dataItem-k80c4fvb","connectionQuery":"connection-k80c4fvb2","propertyQuery":"propItem-k80c4fvb1","layout":{"width":980,"height":529,"x":182,"y":539,"scale":1,"rotationInDegrees":0,"fixedPosition":false},"styleId":"txtNew"}}},"data":{"behaviors_data":{},"connections_data":{},"document_data":{"dataItem-j76kzrn6":{"type":"Image","id":"dataItem-j76kzrn6","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_7cc59e780931417c82ee5bf4c86af280~mv2.png","description":"","width":2330,"height":1076,"alt":"","link":{"type":"ExternalLink","id":"dataItem-j77euiuw","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"https:\/\/www.profil.at\/wirtschaft\/mietrecht-von-fuechsen-checkern-helden-5846173","target":"_blank"},"displayMode":"fill"},"dataItem-j76lhq6o":{"type":"Image","id":"dataItem-j76lhq6o","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_3ccf1bbff61e42ddbf65262a7d0aa124~mv2.png","description":"","width":1320,"height":286,"alt":"","crop":{"x":28,"y":0,"width":1274,"height":286},"link":{"type":"ExternalLink","id":"dataItem-j77f3djo","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"http:\/\/derstandard.at\/2000022108799\/Wachstumsbranche-Altbau-Mietencheck","target":"_blank"},"displayMode":"fill"},"dataItem-j76lnceb":{"type":"Image","id":"dataItem-j76lnceb","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_4278102930d54de6a5e144b6a15d9322~mv2.png","description":"","width":602,"height":182,"alt":"","crop":{"x":0,"y":0,"width":602,"height":177},"link":{"type":"ExternalLink","id":"dataItem-j77f3zuv","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"https:\/\/www.immobilien-magazin.at\/artikel\/firmen_kontra_vermieter\/2015.4144\/","target":"_blank"},"displayMode":"fill"},"dataItem-j76maj3y":{"type":"Image","id":"dataItem-j76maj3y","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_5d79ba8fcb6940118abef942f308cc62~mv2.png","description":"","width":3240,"height":616,"alt":"","crop":{"x":0,"y":19,"width":3240,"height":578},"displayMode":"fill"},"dataItem-j77jv81j":{"type":"Image","id":"dataItem-j77jv81j","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_2c961a3b8b384f46af3cb1c753f9c4d8~mv2.png","description":"","width":3360,"height":426,"alt":"","crop":{"x":0,"y":19,"width":3360,"height":389},"link":{"type":"ExternalLink","id":"dataItem-j77k00te","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"http:\/\/www.wienerzeitung.at\/nachrichten\/wien\/stadtpolitik\/870444_Das-ewige.html","target":"_blank"},"displayMode":"fill"},"dataItem-jlk34a8e":{"type":"Image","id":"dataItem-jlk34a8e","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_5a3ccff2f63d4c9b96213e48bbac56a3~mv2.jpg","description":"","width":3000,"height":2002,"alt":"Smiling lawyer portrait.jpg","crop":{"x":0,"y":27,"width":3000,"height":1230},"name":"Smiling lawyer portrait.jpg","displayMode":"fill"},"dataItem-jlkzb632":{"type":"TPAWidget","id":"dataItem-jlkzb632","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"applicationId":"6251","appDefinitionId":"14c92d28-031e-7910-c9a8-a670011e062d","tpaData":{"type":"TPAData","id":"tpaData-jmantgkw","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"content":"{\"faq_app_size_a9f369f6-224e-4f69-838b-41b3c133312e_comp-jlkzb5kx\":\"{\\\"h\\\":718,\\\"w\\\":544}\",\"faq_app_mobile_size_a9f369f6-224e-4f69-838b-41b3c133312e_comp-jlkzb5kx\":\"{\\\"h\\\":558,\\\"w\\\":280}\",\"faq_app_widget_size_a9f369f6-224e-4f69-838b-41b3c133312e_comp-jlkzb5kx\":\"{\\\"h\\\":588,\\\"w\\\":604}\",\"faq_app_widget_size_c6522669-46ad-4292-8b88-d057a46a41d4_comp-jlkzb5kx\":\"{\\\"h\\\":422,\\\"w\\\":980}\"}"},"widgetId":"14c92de1-0e02-cbe5-98e9-c3de44d63a55"},"dataItem-jlnyu5lh":{"type":"Image","id":"dataItem-jlnyu5lh","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_f6959ba6f9a74be98a7f9bd8a03e16c9~mv2.png","description":"","width":1186,"height":944,"alt":"Bildschirmfoto 2018-09-02 um 17.37.56.pn","name":"Bildschirmfoto 2018-09-02 um 17.37.56.pn","displayMode":"fill"},"dataItem-jnp4krd5":{"type":"Image","id":"dataItem-jnp4krd5","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_5c54646e5b974609a2c31e265769caab~mv2.png","description":"","width":709,"height":303,"alt":"709px-ORF_logo.svg.png","name":"709px-ORF_logo.svg.png","displayMode":"fill"},"dataItem-k3yg2l6t":{"type":"Image","id":"dataItem-k3yg2l6t","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_4ddc41f015074569af5cea779fca1c56~mv2.png","description":"","width":1110,"height":898,"alt":"Bildschirmfoto 2019-12-09 um 13.59.04.pn","name":"Bildschirmfoto 2019-12-09 um 13.59.04.pn","link":{"type":"ExternalLink","id":"dataItem-k3yg64ie","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"https:\/\/www.1000things.at\/blog\/wie-du-in-wien-richtig-viel-miete-sparen-kannst\/","target":"_blank"},"displayMode":"fill"},"dataItem-k7z6a2dq":{"type":"Image","id":"dataItem-k7z6a2dq","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_cca8304222924952af8eb0eb65dc40a2~mv2.jpg","description":"","width":631,"height":123,"alt":"s-versicherung-kurier-logo-2.jpg","name":"s-versicherung-kurier-logo-2.jpg","link":{"type":"ExternalLink","id":"dataItem-k7z6e348","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"https:\/\/kurier.at\/chronik\/oesterreich\/coronavirus-firmen-muessen-vorerst-keine-miete-zahlen\/400782320","target":"_blank"},"displayMode":"fill"},"dataItem-k7z6ceva":{"type":"Image","id":"dataItem-k7z6ceva","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_4638ddd6040d432291f29b90558467a7~mv2.png","description":"","width":472,"height":146,"alt":"Bildschirmfoto 2020-03-19 um 20.55.14.pn","name":"Bildschirmfoto 2020-03-19 um 20.55.14.pn","link":{"type":"ExternalLink","id":"dataItem-k7z6dj20","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"https:\/\/www.diepresse.com\/5785132\/gesperrte-geschafte-unternehmen-mussen-keine-miete-zahlen","target":"_blank"},"displayMode":"fill"},"dataItem-k803j3cg":{"type":"Image","id":"dataItem-k803j3cg","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"title":"","uri":"ef305b_73f6e8e1c78149899f1e885895c3d8f0~mv2.png","description":"","width":1204,"height":284,"alt":"Bildschirmfoto 2020-03-20 um 12.25.12.pn","crop":{"x":0,"y":24,"width":1204,"height":235,"svgId":"909695c1e003409ba70b5561666c7c4d.svg"},"name":"Bildschirmfoto 2020-03-20 um 12.25.12.pn","link":{"type":"ExternalLink","id":"dataItem-k803j3cg1","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"1.0","isHidden":false},"url":"https:\/\/www.derstandard.at\/story\/2000115802556\/mietzahlung-kann-wegen-coronavirus-wohl-vielfach-ausgesetzt-werden","target":"_blank"},"displayMode":"fill"},"dataItem-k808tme9":{"type":"Image","id":"dataItem-k808tme9","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_f769d35cdcb34b939f8ab2a1b14a4b1a~mv2.png","description":"","width":704,"height":858,"alt":"Bildschirmfoto 2018-09-02 um 11.15.48.pn","crop":{"x":0,"y":0,"width":704,"height":780,"svgId":"909695c1e003409ba70b5561666c7c4d.svg"},"name":"Bildschirmfoto 2018-09-02 um 11.15.48.pn","displayMode":"fill"},"dataItem-k80c4fv21":{"type":"Image","id":"dataItem-k80c4fv21","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_14b151f57d5848c4af0f85afe24a8587~mv2.jpg","description":"","width":365,"height":365,"alt":"2588fc51-7f3e-4164-b78a-4488ae7d16b9-B1.","name":"2588fc51-7f3e-4164-b78a-4488ae7d16b9-B1.","displayMode":"fill"},"dataItem-k81ib2ot":{"type":"Image","id":"dataItem-k81ib2ot","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_94d2159e9f3f4b11a452f772126934e1~mv2.png","description":"","width":128,"height":128,"alt":"icon2.png","name":"icon2.png","displayMode":"fill"},"dataItem-k81icml8":{"type":"Image","id":"dataItem-k81icml8","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_4b76010ce5134215ad735b0141224ecd~mv2.png","description":"","width":128,"height":128,"alt":"icon1.png","name":"icon1.png","displayMode":"fill"},"dataItem-k81ifj1p":{"type":"Image","id":"dataItem-k81ifj1p","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_579e4f59316c492997cbb1f7da6c6984~mv2.png","description":"","width":128,"height":128,"alt":"icon3.png","name":"icon3.png","displayMode":"fill"},"dataItem-k81is4jr":{"type":"Image","id":"dataItem-k81is4jr","metaData":{"pageId":"c1dmp","isPreset":false,"schemaVersion":"2.0","isHidden":false},"title":"","uri":"ef305b_f769d35cdcb34b939f8ab2a1b14a4b1a~mv2.png","description":"","width":704,"height":858,"alt":"Bildschirmfoto 2018-09-02 um 11.15.48.pn","crop":{"x":0,"y":0,"width":704,"height":780,"svgId":"909695c1e003409ba70b5561666c7c4d.svg"},"name":"Bildschirmfoto 2018-09-02 um 11.15.48.pn","displayMode":"fill"}},"design_data":{},"mobile_hints":{},"component_properties":{},"anchors_data":{},"breakpoints_data":{},"layout_data":{},"variants_data":{},"theme_data":{}}}},"anchorsMap":null,"ssr":{"shouldRenderPage":true,"aspectsComponentStructures":{"POPOVER_LAYER":{"componentType":"PopoverLayer","metaData":{"pageId":"PopoverAspect"},"parent":"aspectCompsContainer"},"tpaWorker_9748":{"componentType":"tpa.viewer.classes.TPAWorker","skin":"wysiwyg.viewer.skins.TPAWidgetSkin","type":"Component","id":"tpaWorker_9748","metaData":{"pageId":"tpaPostMessageAspect"},"parent":"aspectCompsContainer"}}},"currentUrl":{"full":"https:\/\/mietheld.wixsite.com\/website","protocol":"https:","host":"mietheld.wixsite.com","hostname":"mietheld.wixsite.com","port":"","path":"\/website","search":"","hash":"","query":{}},"isMobileView":false,"siteMemberDetails":null,"isPageAllowed":true,"browserFlags":{"highlightAnchorsInMenu":true,"fixedSiteBackground":true,"animateRevealScrubAction":false,"animateParallaxScrubAction":false,"animateTinyMenuIcon":true,"preserve3DParallaxScrubAction":true,"fixedBackgroundColorBalata":false,"forceOverflowScroll":false,"doubleResetMobileViewport":false,"shouldDisableSmoothScrolling":false,"mixBlendModeSupported":true,"cssGridSupported":true,"cssFiltersSupported":true,"cssClipPathSupported":true,"cssVariablesSupported":true,"webglCrossOriginSupported":true,"webglVideoTextureSupported":true,"useDropShadowFilterOnVideo":true,"cssFeatureQueriesSupported":true}},"svgShapes":{"3d84bae5ad4d4d8a96de15e9f4b79a08.svg":{"content":"<svg data-bbox=\"0 0 50 50\" data-type=\"shape\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"50\" height=\"50\" viewBox=\"0 0 50 50\">\n    <g>\n        <path d=\"M25 48.077c-5.924 0-11.31-2.252-15.396-5.921 2.254-5.362 7.492-8.267 15.373-8.267 7.889 0 13.139 3.044 15.408 8.418-4.084 3.659-9.471 5.77-15.385 5.77m.278-35.3c4.927 0 8.611 3.812 8.611 8.878 0 5.21-3.875 9.456-8.611 9.456s-8.611-4.246-8.611-9.456c0-5.066 3.684-8.878 8.611-8.878M25 0C11.193 0 0 11.193 0 25c0 .915.056 1.816.152 2.705.032.295.091.581.133.873.085.589.173 1.176.298 1.751.073.338.169.665.256.997.135.515.273 1.027.439 1.529.114.342.243.675.37 1.01.18.476.369.945.577 1.406.149.331.308.657.472.98.225.446.463.883.714 1.313.182.312.365.619.56.922.272.423.56.832.856 1.237.207.284.41.568.629.841.325.408.671.796 1.02 1.182.22.244.432.494.662.728.405.415.833.801 1.265 1.186.173.154.329.325.507.475l.004-.011A24.886 24.886 0 0 0 25 50a24.881 24.881 0 0 0 16.069-5.861.126.126 0 0 1 .003.01c.172-.144.324-.309.49-.458.442-.392.88-.787 1.293-1.209.228-.232.437-.479.655-.72.352-.389.701-.78 1.028-1.191.218-.272.421-.556.627-.838.297-.405.587-.816.859-1.24a26.104 26.104 0 0 0 1.748-3.216c.208-.461.398-.93.579-1.406.127-.336.256-.669.369-1.012.167-.502.305-1.014.44-1.53.087-.332.183-.659.256-.996.126-.576.214-1.164.299-1.754.042-.292.101-.577.133-.872.095-.89.152-1.791.152-2.707C50 11.193 38.807 0 25 0\"\/>\n    <\/g>\n<\/svg>\n","info":{"svgType":"shape","viewBox":"0 0 50 50","bbox":"0 0 50 50"},"boxBoundaries":{}},"909695c1e003409ba70b5561666c7c4d.svg":{"content":"<svg data-bbox=\"20 20 160 160\" viewBox=\"0 0 200 200\" height=\"200\" width=\"200\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" data-type=\"shape\">\n    <g>\n        <path d=\"M180 20v160H20V20h160z\"\/>\n    <\/g>\n<\/svg>\n","info":{"svgType":"shape","viewBox":"0 0 200 200","bbox":"20 20 160 160"},"boxBoundaries":{}},"fb1b725bec7b60cce141453398672f7c.svg":{"content":"<svg data-bbox=\"9.04 19.052 186 103\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\" viewBox=\"0 0 207.471 142.529\">\n    <g>\n        <path d=\"M195.04 19.052v103h-186v-103h186z\"\/>\n    <\/g>\n<\/svg>\n","info":{"svgType":"shape","viewBox":"0 0 207.471 142.529","bbox":"9.04 19.052 186 103"},"boxBoundaries":{}}},"animationData":{},"rootNavigationInfo":{"format":"slash","pageId":"c1dmp","title":"homepage"},"currentUrl":{"full":"https:\/\/mietheld.wixsite.com\/website","protocol":"https:","host":"mietheld.wixsite.com","hostname":"mietheld.wixsite.com","port":"","path":"\/website","search":"","hash":"","query":{}},"userWarmup":{},"runtime":{"data":{"behaviors_data":{},"connections_data":{},"document_data":{},"design_data":{},"mobile_hints":{},"component_properties":{},"anchors_data":{},"breakpoints_data":{},"layout_data":{},"variants_data":{},"theme_data":{}},"state":{}},"wixappsCoreWarmup":{"appbuilder":{},"faq":{},"news":{},"menu":{},"blog":{}},"wixappsClassicsWarmup":{"warmup":{"failedRequests":{}},"metadata":{"items":{},"descriptor":{},"isCategoriesLoaded":false,"videoThumbnails":{}}},"listBuilderWarmup":{"warmup":{"requestFailed":false},"metadata":{"items":{}}},"tpaWidgetNativeInitData":{},"externalScripts":{},"seoDebugInfo":{},"seoSsrData":{"tags":[{"type":"title","children":"Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien"},{"type":"meta","props":{"name":"description","content":"Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision."}},{"type":"link","props":{"rel":"canonical","href":"https:\/\/mietheld.wixsite.com\/website"}},{"type":"meta","props":{"name":"robots","content":"noindex"}},{"type":"meta","props":{"property":"og:title","content":"Mietheld - Miete im Altbau berechnen, senken, zurückholen - Wien"}},{"type":"meta","props":{"property":"og:description","content":"Zahlst Du zu viel Miete im Altbau? Jetzt kostenlos und unverbindlich überprüfen. Mietheld senkt deine Miete und erhält nur im Erfolgsfall eine Provision."}},{"type":"meta","props":{"property":"og:image","content":"https:\/\/static.wixstatic.com\/media\/ef305b_797a6aaee9a14aedb3214dcfe4118f39%7Emv2.png\/v1\/fit\/w_2500,h_1330,al_c\/ef305b_797a6aaee9a14aedb3214dcfe4118f39%7Emv2.png"}},{"type":"meta","props":{"property":"og:url","content":"https:\/\/mietheld.wixsite.com\/website"}},{"type":"meta","props":{"property":"og:site_name","content":"Corona"}},{"type":"meta","props":{"property":"og:type","content":"website"}},{"type":"meta","props":{"name":"fb_admins_meta_tag","content":"mietheld"}},{"type":"meta","props":{"name":"google-site-verification","content":"XEwv0xOL0rRjs2ut-CbHzE7-nLP3K2fkkjf7e-eoZGo"}},{"type":"meta","props":{"name":"keywords","content":"Altbau, Miete, Mietsenkung, Mietzins, Richtwert, Senken"}},{"type":"meta","props":{"property":"fb:admins","content":"mietheld"}}]},"cssData":{},"tpaCompIdToAppId":{"tpaWorker_9748":9748,"comp-k7xjshk1":"9748","comp-jlkzb5kx":"6251"}};
      </script>
      <!-- No Footer -->
      <script type="text/javascript">
         var timeSpentInSSR = 1229;
      </script>
      <script type="text/javascript">
         var ssrInfo = {"timeSpentInSSR":1229,"platformOnPage":true,"workerStarted":true,"platformAppsOnPage":["14cc59bc-f0b7-15b8-e1c7-89ce41d0e0c9"],"userCode":false,"useBoltush":true,"sessionId":"4b8fdeb1-69ea-4201-8272-4db700b2e9ca","cacheExclusionReason":"","cacheableUserCode":"false"};
      </script>



<script>
function redirectToComponent(id){
console.log("test"+id);

    // $('html, body').animate({
    //     scrollTop: $("#"+id).offset().top
    // }, 2000);

  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>

$(window).on('load resize', function() {

var check = false;
(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
//return check;
if(check){
  window.location.href="https://www.mietheld.at/unternehmen/mobile.html";
}
 // console.log('All assets are loaded')
})
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

document.getElementById("removeNot").addEventListener('click', fadeOutEffect);

//   function removeNotification(){
     
//    document.getElementById("notificationDiv").style.display = "none";
//    console.log('test');
//    }
   </script>
   </body>
   <!-- Mirrored from mietheld.wixsite.com/website by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Mar 2020 12:47:40 GMT -->
</html>
   