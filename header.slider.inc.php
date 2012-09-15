<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
<title>HOTEL BELLO</title>
<meta charset="UTF-8" />
<!--meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1"> 
<meta name="apple-mobile-web-app-capable" content="yes" /> 
<link id="page_favicon" href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link rel="shortcut icon" href="images/favicon.ico"> 

<!-- stylesheets -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<?php //include ("fullscreen.inc.php"); ?>

<!-- jQuery library -->
<script type="text/javascript" src = "scripts/jquery-1.4.min.js"></script>
<script type="text/javascript" src = "scripts/jquery.easing-1.3.js"></script>
		
<!-- iosSlider plugin -->
<script src = "scripts/jquery.iosslider.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
			
				$('.iosSlider').iosSlider({
					scrollbar: true,
					snapToChildren: true,
					desktopClickDrag: true,
					scrollbarLocation: 'top',
					scrollbarMargin: '10px 10px 0 10px',
					scrollbarBorderRadius: '0',
					responsiveSlideWidth: true,
					navSlideSelector: $('.iosSliderButtons .button'),
					infiniteSlider: true,
					startAtSlide: '2',
					onSlideChange: slideContentChange,
					onSlideComplete: slideContentComplete,
					onSliderLoaded: slideContentLoaded
				});
				
				function slideContentChange(args) {
					
					/* indicator */
					$(args.sliderObject).parent().find('.iosSliderButtons .button').removeClass('selected');
					$(args.sliderObject).parent().find('.iosSliderButtons .button:eq(' + args.currentSlideNumber + ')').addClass('selected');
					
				}
				
				function slideContentComplete(args) {
					
					/* animation */
					$(args.sliderObject).find('.text1, .text2').attr('style', '');
					
					$(args.currentSlideObject).children('.text1').animate({
						right: '100px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					$(args.currentSlideObject).children('.text2').delay(200).animate({
						right: '50px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
				}
				
				function slideContentLoaded(args) {
					
					/* animation */
					$(args.sliderObject).find('.text1, .text2').attr('style', '');
					
					$(args.currentSlideObject).children('.text1').animate({
						right: '100px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					$(args.currentSlideObject).children('.text2').delay(200).animate({
						right: '50px',
						opacity: '1'
					}, 400, 'easeOutQuint');
					
					/* indicator */
					$(args.sliderObject).parent().find('.iosSliderButtons .button').removeClass('selected');
					$(args.sliderObject).parent().find('.iosSliderButtons .button:eq(' + args.currentSlideNumber + ')').addClass('selected');
					
				}
				
			});
		</script>

</head>

<body>
<div id="main">

<div id="header">

<div id="header_left">
<div id="logo_top"><a href="index.php" target="_self"><img src="images/logo.png"width=50 height=50></a></div>
</div>					<!-- header_left -->

<div id="header_right">
<div id="menu_top">
<ul id="menu_inline">
<li><a href="index.php">INICIO</a></li>
<li><a href="contenido.php#tarifas">TARIFAS</a></li>
<li><a href="contenido.php#reservaciones">RESERVACIONES</a></li>
<li><a href="contenido.php#contacto">MAPA DE UBICACI&Oacute;N</a></li>
<li><a href="contenido.php#galeria">GALER&Iacute;A</a></li>
<li><a href="contenido.php#servicios">SERVICIOS</a></li>
</ul>
</div>			<!-- menu_top -->

</div>			<!-- header_right -->

</div>			<!-- header -->


