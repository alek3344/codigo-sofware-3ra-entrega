<!DOCTYPE html>
<html lang="es">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Inicio"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? generateCanonicalUrl($sitemapUrls) : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
					<meta name="description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Inicio"); ?>" />
			<meta name="keywords" content="<?php echo htmlspecialchars((isset($seoKeywords) && $seoKeywords !== "") ? $seoKeywords : "Inicio"); ?>" />
		
	<!-- Facebook Open Graph -->
		<meta property="og:title" content="<?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Inicio"); ?>" />
			<meta property="og:description" content="<?php echo htmlspecialchars((isset($seoDescription) && $seoDescription !== "") ? $seoDescription : "Inicio"); ?>" />
			<meta property="og:image" content="<?php echo htmlspecialchars((isset($seoImage) && $seoImage !== "") ? "{{base_url}}".$seoImage : ""); ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:url" content="{{curr_url}}" />
		<!-- Facebook Open Graph end -->

		<meta name="generator" content="Constructor de sitios" />
			<script src="js/common-bundle.js?ts=20240524074742" type="text/javascript"></script>
	<script src="js/a188dd9c959000a4e2033e87b6d42e69-bundle.js?ts=20240524074742" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20240524074742" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9c959000a4e2033e87b6d42e69-bundle.css?ts=20240524074742" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/>
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'es';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-es<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9c959000a4e2033e87b6d42e69" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="center" data-v-align="top"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8506028b8058ac44fb44afb2" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a18b5caabf7f006b07568d7a9d61a260" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8506031fad56b60a1c0e285a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h4 class="wb-stl-pagetitle"><a href=""><span style="color:rgba(255,255,255,1);">Diseño</span></a></h4>
</div></div></div><div id="a18b5cabde420043a22b962e77aead5b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c85060465fb5c8e01bcdd69f8" class="wb_element wb-menu wb-prevent-layout-click wb-menu-mobile" data-plugin="Menu"><a class="btn btn-default btn-collapser"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><ul class="hmenu" dir="ltr"><li class="wb_this_page_menu_item" data-anchor="home"><a href="#home">Inicio</a></li><li class="wb_this_page_menu_item" data-anchor="About us"><a href="#About+us">Sobre nosotros</a></li><li class="wb_this_page_menu_item" data-anchor="design"><a href="#design">Diseño</a></li><li class="wb_this_page_menu_item" data-anchor="contact"><a href="#contact">Contactos</a></li></ul><div class="clearfix"></div></div></div></div></div></div></div></div><div id="wb_main_a188dd9c959000a4e2033e87b6d42e69" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8506067c1cd55ac892e127ca" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a18e60eadcac001822ea2a22d74c82f2" class="wb_element wb-sticky wb-layout-element" data-plugin="LayoutElement" data-h-align="right" data-v-align="bottom"><div class="wb_content wb-layout-horizontal"><div id="a18e60eadcac01d340bb6c499fee70da" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><a onclick="window.scrollTo({top: 0, behavior: 'smooth'});" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#0095ff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></a></div></div></div></div></div><div id="a188dd9c850607634b067f40e5bb487e" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c850608b22855c32202854f92" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850609c21533abc582701c03" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;"><span style="color:rgba(0,0,0,1);">Tus ojos son como el azul del cielo en verano</span></h1>
</div><div id="a188dd9c85060aa1947538613369487d" class="wb_element" data-plugin="Button"><a class="wb_button" href="#contact"><span>Sólo hazlo!</span></a></div></div></div></div></div></div></div><div id="a188dd9c85060bc4b8dadb18939d1ab0" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="home" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a188dd9c85060cd8affee8d854211d83" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c85060d566f26771bee01a291" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85060e1ea0bed3beb8b54047" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:rgba(0,0,0,1);">Socios</span></h2>
</div><div id="a188dd9c85060faea0fce2597922b978" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85061083c8b598f343ed66eb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850611c2f18885ef88d32310" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="1.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c8506124878c3a7326c100a8c" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><strong><span style="color:rgba(0,0,0,1);">Empresa</span></strong></p>
</div></div></div><div id="a188dd9c850613a1e7a67e61864a2c67" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850614884682f784b66c4603" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c850615c7b72c34f39d76018a" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><strong><span style="color:rgba(0,0,0,1);">Empresa</span></strong></p>
</div></div></div><div id="a188dd9c85061666b0a73e04990e5376" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850700c5f523f71de8df690f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c8507012a80e4c801bc78f2a7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><strong><span style="color:rgba(0,0,0,1);">Empresa</span></strong></p>
</div></div></div><div id="a188dd9c850702c010b89fde192ff218" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8507039ffe26fce4aba1ae3a" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1921.02083" height="1793.982" viewBox="0 0 1921.02083 1793.982" style="direction: ltr; color:#000000"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c85070402c5e7b38bc6d2d83b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><strong><span style="color:rgba(0,0,0,1);">Empresa</span></strong></p>
</div></div></div></div></div></div></div></div></div></div></div><div id="a188dd9c8507052dbdc0e16627c3d96d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c850706f96d42649a575263e1" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850707940dbc1da8f73ed644" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850708b514099716ce5733e1" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Nuestra filosofía</span></h2>
</div><div id="a188dd9c850709cb02e647e05b4195c4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal"><span style="color:rgba(255,255,255,1);">Encontrará la información más reciente sobre nosotros en esta página. Nuestra empresa está en constante evolución y crecimiento. Ofrecemos una amplia gama de servicios. Nuestra misión es proporcionar la mejor solución que ayude a todos. Si desea ponerse en contacto con nosotros, por favor...</span></p>
</div></div></div></div></div></div></div><div id="a188dd9c85070a9fe1d59f341540a081" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85070b912d445cd68fdf4e97" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="About+us" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a188dd9c85070cc42e3d414a02dd48af" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(0,0,0,1);">Re-diseño de muebles</span></h2>
</div><div id="a188dd9c85070decfc18135132abc577" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85070e4131eaab01fe2401bc" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c85070f1add185170d278dc5f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c850710d1e60c22ab8ba80781" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(0,0,0,1);"><strong><span style="font-size: 16px; font-weight: normal; line-height: 24px; text-align: left; background-color: transparent;">Nuestra historia</span></strong></span></h2></div></div></div><div id="a188dd9c850711540d0a1cae85777f2d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850712bbc2cddfd3c7350f4f" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#000000"><text x="65.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c85071338eee535978b934956" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(0,0,0,1);"><strong><span style="font-size: 16px; font-weight: normal; line-height: 24px; text-align: left; background-color: transparent;">Eventos próximos</span></strong></span></h2></div></div></div><div id="a188dd9c85071469d06187e941b62825" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c8507154f0227241ab1586c54" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="2049.02083" height="1793.982" viewBox="0 0 2049.02083 1793.982" style="direction: ltr; color:#000000"><text x="1.02083" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c8507169298e6fd796fc61a09" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(0,0,0,1);"><strong><span style="font-size: 16px; font-weight: normal; line-height: 24px; text-align: left; background-color: transparent;">Nuestras noticias</span></strong></span></h2></div></div></div></div></div></div></div></div></div><div id="a188dd9c8507172749437b8fe0fbc814" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="design" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a188dd9c85071830beb32e06071e3f0b" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850719a5638bdc3116727fe3" class="wb_element wb-prevent-layout-click wb_gallery" data-plugin="Gallery"><script type="text/javascript">
			$(function() {
				(function(GalleryLib) {
					var el = document.getElementById("a188dd9c850719a5638bdc3116727fe3");
					var lib = new GalleryLib({"id":"a188dd9c850719a5638bdc3116727fe3","height":"auto","type":"thumbs","trackResize":true,"interval":10,"speed":400,"images":[{"thumb":"gallery_gen\/b06dfb937dfcaa586dffba26d09a92bc_900x600_fill.jpg","src":"gallery_gen\/a59d509e7d1ffbf511e9d96b6d1b0684_fit.jpg?ts=1716526062","width":1200,"height":800,"title":"","link":null,"description":"","address":{"latLng":{"lat":55.7765730186677,"lng":68.90625},"text":"55.7765730186677, 68.90625"}},{"thumb":"gallery_gen\/07119171912e3df6af6f5c2b61959f41_900x600_fill.jpg","src":"gallery_gen\/d25d4f6f62ba5b953460582be6388187_fit.jpg?ts=1716526062","width":1200,"height":800,"title":"","link":null,"description":"","address":{"latLng":{"lat":60.930432202923335,"lng":116.71875},"text":"60.930432202923335, 116.71875"}},{"thumb":"gallery_gen\/82d967596c71411e9915f5b07b36d0c8_800x600_fill.jpg","src":"gallery_gen\/21cc35c33089a72d7c76f54903b0b1d9_fit.jpg?ts=1716526062","width":1200,"height":900,"title":"","link":null,"description":"","address":{"latLng":{"lat":50.736455137010665,"lng":95.625},"text":"50.736455137010665, 95.625"}},{"thumb":"gallery_gen\/30a165ac9b5df9842ff0bd629945e4ed_400x600_fill.jpg","src":"gallery_gen\/8b7270a0081b9fc145a252e4563ea54a_fit.jpg?ts=1716526062","width":720,"height":1080,"title":"","link":null,"description":"","address":{"latLng":{"lat":58.07787626787517,"lng":36.56249999999992},"text":"58.07787626787517, 36.56249999999992"}}],"border":{"border":"5px none #00008c"},"padding":0,"thumbWidth":290,"thumbHeight":300,"thumbAlign":"center","thumbPadding":10,"thumbAnim":"","thumbShadow":"","imageCover":false,"disablePopup":false,"controlsArrow":"chevron","controlsArrowSize":14,"controlsArrowStyle":{"normal":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}},"hover":{"color":"#DDDDDD","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#222222","forText":true,"css":{"text-shadow":"0px 0px 1px #222222"}}},"active":{"color":"#FFFFFF","shadow":{"angle":135,"distance":0,"size":0,"blur":1,"color":"#000000","forText":true,"css":{"text-shadow":"0px 0px 1px #000000"}}}},"slideOpacity":100,"showPictureCaption":"always","captionIncludeDescription":false,"captionPosition":"center bottom","mapTypeId":"roadmap","markerIconTypeId":"thumbs","zoom":2,"mapCenter":{"latLng":{"lat":48.458363666994,"lng":4.5703249052167},"text":"48.4583636669942, 4.570324905216694"},"key":"AIzaSyChpsOrBxEG_GeV-KIABgsxtIZ-IXneudg","theme":"default","color":"#eeeeee","showSatellite":true,"showZoom":true,"showStreetView":true,"showFullscreen":true,"allowDragging":true,"showRoads":true,"showLandmarks":true,"showLabels":true,"locale":"es_ES","pauseOnHover":false});
					lib.appendTo(el);
				})(window.wbmodGalleryLib);
			});
		</script></div><div id="a188dd9c85071a1bb3a6071b75c942a7" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Tus ojos son como el azul del cielo en verano</span></h2>
</div><div id="a188dd9c85071bb026164212d423ec8a" class="wb_element" data-plugin="Button"><a class="wb_button" href="#contact"><span>Sólo hazlo!</span></a></div></div></div></div></div><div id="a188dd9c85071ccf1a04670ee371027d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><a name="contact" class="wb_anchor"></a><div class="wb_content wb-layout-vertical"><div id="a188dd9c85071dc5d8a4926a4e5f6b8b" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Contactos</span></h2>
</div><div id="a188dd9c85071e3d37f17239287daf6d" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85071fff7af59dbba13dfdb3" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,255,255,1);"><strong>Teléfono:</strong></span></p>
<p class="wb-stl-normal" style="text-align: center;"><a href="tel:+123456789"><span style="color:rgba(255,255,255,1);"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+34 917 81 68 62</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p>
<p class="wb-stl-normal" style="text-align: center;"> </p>
<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,255,255,1);"><strong>Fax:</strong></span></p>
<p class="wb-stl-normal" style="text-align: center;"><a href="tel:+123456789"><span style="color:rgba(255,255,255,1);"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;"><span dir="ltr" style="direction: ltr;">+34 917 81 68 62</span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></a></p></div><div id="a188dd9c8507200e0a16d1b7c6fef9a6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,255,255,1);"><strong>Email:</strong></span></p>

<p class="wb-stl-normal" style="text-align: center;"><span style="color:#ffffff;">info@ejemplo.com</span></p>

<p class="wb-stl-normal" style="text-align: center;"> </p>

<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,255,255,1);"><strong>Skype:</strong></span></p>

<p class="wb-stl-normal" style="text-align: center;"><span style="color:rgba(255,255,255,1);">Diseño</span></p>
</div></div></div><div id="a188dd9c8507212ac85eca2c70a4f0bb" class="wb_element wb-map wb-prevent-layout-click" data-plugin="GoogleMaps"><div class="wb_google_maps_overlay"><div>Get <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key">API key from Google</a> and insert it to plugin properties to enable maps on your website.</div></div><script type="text/javascript">
				(function() {
					var resizeFunc = function() {
						var elem = $("#a188dd9c8507212ac85eca2c70a4f0bb");
						var w = elem.width(), h = elem.height();
						elem.find("div > div:first").css("zoom", Math.max(0.5, Math.min(1, ((w * h) / 120000))));
					};
					$(window).on("resize", resizeFunc);
					resizeFunc();
				})();
			</script></div></div></div></div></div><div id="wb_footer_a188dd9c959000a4e2033e87b6d42e69" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850724eb7a80914baa8b5796" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85072560c5f6f94dfdcd5c12" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a188dd9c850726d02b713b354fe200f6" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><p class="wb-stl-footer">© 2024 <a href="http://upcprojects.xyz">upcprojects.xyz</a></p></div><div id="a188dd9c8507272a1575b9a15b0e58f8" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap"><div class="wb-picture-wrapper"><a href="http://www.latinoamericahosting.com.co" target="_blank"><img alt="" src="gallery/94c1e243b9a0091fca91a4b370a0c0ee.lock.png?ts=1716526062"></a></div></div></div></div></div><div id="a188dd9c850728b865c062d044d7f2cb" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a188dd9c85072991aad9a085db68924b" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1793.982" height="1793.982" viewBox="0 0 1793.982 1793.982" style="direction: ltr; color:#ffffff"><text x="129.501415" y="1537.02" font-size="1792" fill="currentColor" style='font-family: "FontAwesome"'></text></svg></div></div></div><div id="a188dd9c85072a6adddf0af304c94dff" class="wb_element wb_element_picture" data-plugin="Picture" title=""><div class="wb_picture_wrap" style="height: 100%"><div class="wb-picture-wrapper" style="overflow: visible; display: flex"><svg xmlns="http://www.w3.org/2000/svg" width="1024" height="1024" viewBox="0 0 1024 1024" style="direction: ltr; color:#ffffff"><text x="64" y="960" font-size="1024" fill="currentColor" style='font-family: "builder-ui-icons-plugins"'></text></svg></div></div></div></div></div></div></div><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div>
<div class="wb_pswp pswp" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="pswp__bg" style="opacity: 0.7;"></div>
	<div class="pswp__scroll-wrap">
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>
		<div class="pswp__ui pswp__ui--hidden">
			<div class="pswp__top-bar">
				<div class="pswp__counter"></div>
				<button class="pswp__button pswp__button--close" title="Cerrar"></button>
				<button class="pswp__button pswp__button--zoom" title="Zoom +/-"></button>
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>
			<button class="pswp__button pswp__button--arrow--left" title="Previo"></button>
			<button class="pswp__button pswp__button--arrow--right" title="Próximo"></button>
			<div class="pswp__caption"><div class="pswp__caption__center"></div></div>
		</div>
	</div>
</div>
</div>{{hr_out}}</body>
</html>
