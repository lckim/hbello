<!DOCTYPE html>
<html>
	<head>
		<!-- META -->
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
		<meta name = "apple-mobile-web-app-capable" content = "yes" /> 
		
		<link rel="stylesheet" type="text/css" href="css/slider.css">
		
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
		<title>Slider</title>
	</head>
	
	<body>
		<div class = 'iosSlider'>
			<div class = 'slider'>
				<div class = 'item' id = 'item1'>
					<div class = 'text1'><span>Touch Me.</span></div>
					<div class = 'text2'><span>Hardware accelerated using<br />CSS3 for supported iOS,<br />Android and WebKit</span></div>
				</div>
				<div class = 'item' id = 'item2'>
					<div class = 'text1'><span>Responsive.</span></div>
					<div class = 'text2'><span>Respond to change in browser<br />width and adjust automatically</span></div>
				</div>
				<div class = 'item' id = 'item3'>
					<div class = 'text1'><span>Flexible.</span></div>
					<div class = 'text2'><span>Run multiple sliders on<br />the same web page</span></div>
				</div>
				<div class = 'item' id = 'item4'>
					<div class = 'text1'><span>Customize.</span></div>
					<div class = 'text2'><span>Set momentum, elasticity,<br />scrollbars and more...</span></div>
				</div>
			</div>
			<div class = 'iosSliderButtons'>
				<div class = 'button'></div>
				<div class = 'button'></div>
				<div class = 'button'></div>
				<div class = 'button'></div>
			</div>
		</div>
	</body>
</html>
