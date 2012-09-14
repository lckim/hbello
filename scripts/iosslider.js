<!-- jQuery library -->
<script type = 'text/javascript' src = "scripts/jquery.iosslider.min.js"></script>

<!-- iosSlider plugin -->
<script type = 'text/javascript' src = "scripts/jquery.iosslider.js"></script>

<script>
$(document).ready(function() {

	/* basic - default settings */
	$('.iosSlider').iosSlider();
	
	/* some custom settings */
	$('.iosSlider').iosSlider({
		snapToChildren: true,
		scrollbar: true,
		scrollbarHide: false,
		desktopClickDrag: true,
		scrollbarLocation: 'bottom',
		scrollbarHeight: '6px',
		scrollbarBackground: 'url(images/some-img.png) repeat 0 0',
		scrollbarBorder: '1px solid #000',
		scrollbarMargin: '0 30px 16px 30px',
		scrollbarOpacity: '0.75',
		onSlideChange: changeSlideIdentifier
	});

});
</script>
