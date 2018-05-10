<?php
include "func.php";

$s = $_GET["s"];
$seriesName = ReadText("files/texts/seriesname.txt"); //read Series Names


$arr = ReadText("files/texts/series.txt");
$arr2 = TextExplode($arr[0]);

?>

<div class="slideshow-container">
	<?php
	if (!empty($s) && file_exists("files/texts/".$s.".txt")){
		$arr_1 = ReadText("files/texts/".$s.".txt");		
		foreach ($arr_1 as $line) {
			$arr_2 = TextExplode($line);
			$description = ReadText("files/texts/".$s."_text.txt");
		?>
			<div class="mySlides fade">
				<div class="img_slide>" style="position:relative;">
					<img src="<?=$arr_2[0];?>">
					<a class="prev" onclick="plusSlides(-1)"><img src="img/arr_l1.png" style="box-shadow: none" onmouseover="this.src='img/arr_l.png';" 
onmouseout="this.src='img/arr_l1.png';" /></a>
					<a class="next" onclick="plusSlides(1)"><img src="img/arr_r1.png" style="box-shadow: none" onmouseover="this.src='img/arr_r.png';" 
onmouseout="this.src='img/arr_r1.png';" /></a>
				</div>
			  <div class="text">
				<p class="title"><?=$description[0];?></p> <!-- Заголовок фото-->
				<p class="text"><?=$description[1];?></p>
			  </div>
			</div>
		<?php
		} //close foreach
		?>
		
	<?php
	}/*$s not empty*/
	else {
	?>
		<div class="main_img">
			<img src="<?=$arr2[0];?>" alt="<?=$arr2[1];?>" title="<?=$arr2[1];?>"/>
		</div>
		<div class="mySlides fade">		  
		  <div class="text">
			<p class="text"><?=$arr[1];?></p>
		  </div>
		</div>
		<div class="s_menu">
			<ul>
			<?php
				foreach ($seriesName as $name){
					$arr3 = TextExplode($name);
					if(strlen($arr3[0])> 1){		
			?>
				<li><a href="?s=<?=DelSpace($arr3[0]);?>"><?=$arr3[0];?></a></li>			
			<?php
					}
				}
			?>
			</ul>
		</div>
	<?php
	}
	?>
</div>