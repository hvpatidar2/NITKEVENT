<!doctype html>	
<html>
<?php
    require "header.php";
?>
<head>
<!--    <link rel="stylesheet" href="basic.css">-->
	<link rel="stylesheet" href="css/slideshow.css">
	<style>
		.slideshow { float: left; margin: 50px; }
	</style>
	<script src="js/mootools-1.3.2-core.js"></script>
	<script src="js/mootools-1.3.2.1-more.js"></script>
	<script src="js/slideshow.js"></script>

	<script>
		window.addEvent('domready', function(){
			var data = { '1.jpg': { caption: '1' }, '2.jpg': { caption: '2' }, '3.jpg': { caption: '3' }, '4.jpg': { caption: '4' }};

			new Slideshow('overlap', data, { captions: { delay: 1000 }, delay: 3000, height: 300, hu: 'images/', width: 400 });
//			new Slideshow('noOverlap', data, { height: 300, hu: 'images/', overlap: false, resize: 'fit', width: 400 });
//			new Slideshow.Flash('flash', data, { color: ['tomato', 'palegreen', 'orangered', 'aquamarine'], height: 300, hu: 'images/', width: 400 });
//			new Slideshow.Fold('fold', data, { height: 300, hu: 'images/', width: 400 });
//			new Slideshow.KenBurns('kenburns', data, { duration: 1500, height: 300, hu: 'images/', width: 400 });
//			new Slideshow.Push('push', data, { height: 300, hu: 'images/', transition: 'back:in:out', width: 400 });
		});
	</script>
</head>
<body >
    <table align = "center">
        <tr><td>
	<div id="overlap" class="slideshow">
		<img src="images/1.jpg" alt="1" >
	</div>
            </td>
        </tr>
    </table>
	<!--<div id="noOverlap" class="slideshow">-->
		<!--<img src="images/1.jpg" alt="1">-->
	<!--</div>-->

	<!--<div id="flash" class="slideshow">-->
		<!--<img src="images/1.jpg" alt="1">-->
	<!--</div>-->

	<!--<div id="fold" class="slideshow">-->
		<!--<img src="images/1.jpg" alt="1">-->
	<!--</div>-->

	<!--<div id="kenburns" class="slideshow">-->
		<!--<img src="images/1.jpg" alt="1">-->
	<!--</div>-->
	<!---->
	<!--<div id="push" class="slideshow">-->
		<!--<img src="images/1.jpg" alt="1">-->
	<!--</div>	-->
</body>
</html>
