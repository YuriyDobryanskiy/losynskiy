<?php
include "func.php";

$arr = ReadText("files/texts/main.txt");
$arr2 = TextExplode($arr[0]);

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Alexander Losinsky Concept Photography</title>
	<?php
		include "inc/meta.php";
	?>
</head>
<body>
	<div class="wrapper">					
		<?php
			include "inc/header.php";
		?>
		<div class="main_img">
			<img src="<?=$arr2[0];?>" alt="<?=$arr2[1];?>" title="<?=$arr2[1];?>"/>
		</div>
		<div class="main_text">
			<table>
				<tr>
					<td rowspan="2">
						<p class="title"><?=$arr[1];?></p>
						<p class="text"><?=$arr[2];?></p>
					</td>
					<?php
						include "inc/contact.php";
					?>								
				</tr>
				<tr>					
					<td class="thank_you"><p>THANK<br/>YOU</p></td>
				</tr>
			</table>
		</div>
		<?php
			include "inc/footer.php";
		?>		
	</div>
</body>
</html>