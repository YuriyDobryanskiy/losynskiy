<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Alexander Losinsky - Gallery</title>
	<?php
		include "inc/meta.php";
	?>
</head>
<body onload="Load()">
	<div class="wrapper">					
		<?php
			include "inc/header.php";
		?>
		<!--------------------------------------------------->
		<?php
			include "slider_gallery.php";
		?>
		<table class="gallery_contact">
			<tr>
				<?php
					include "inc/contact.php";
				?>
			</tr>
		</table>
		<!--------------------------------------------------->
		<?php
			include "inc/footer.php";
		?>		
	</div>		
	<script type="text/javascript" src="js/slider.js"></script>	
</body>
</html>